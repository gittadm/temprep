<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminUsersController extends Controller
{
    public function resetFilter()
    {
        session()->forget(['users_filter_search'/*, 'status'*/]);

        return redirect()->route('admin.users.index');
    }

    public function index(Request $request)
    {
        if (!$request->has('search') && !$request->has('status') && !$request->has('sort')) {
            if (session()->has('users_filter_search')) {
                // формируем get-запрос с параметрами
                return redirect()->route(
                    'admin.users.index',
                    [
                        'search' => session('users_filter_search'),
                        // 'sort' => ...
                    ]
                );
            }
        }

        // Artisan::call('delete:books');

        $statuses = User::getStatuses();

        $users = User::query();

        if (!empty($request->search)) {
            $search = '%' . Str::lower(trim($request->search)) . '%';
            $users->where(
                function ($query) use ($search) {
                    $query->where('id', 'like', $search)
                        ->orWhere('email', 'like', $search)
                        ->orWhere('name', 'like', $search);
                }
            );

            session(['users_filter_search' => $request->search]);
        }

        if (!empty($request->status)) {
            $users->where('status', $request->status);
        }

        if (!empty($request->sort)) {
            if ($request->sort === 'name') {
                $users->orderBy('name');
            } else {
                if ($request->sort === 'id') {
                    $users->orderBy('id', 'desc');
                }
            }
        } else {
            $users->orderBy('name');
        }

        $users = $users->paginate();

        $status = $request->status;
        $search = $request->search;

        return view(
            'admin.users.index',
            compact('statuses', 'users', 'status', 'search')
        );
    }
}
