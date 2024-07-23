<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminUsersController extends Controller
{
    public function index(Request $request)
    {
        $statuses = User::getStatuses();

        $users = User::query();

        if (!empty($request->search)) {
            $search = '%' . Str::lower(trim($request->search)) . '%';
            $users->where(function ($query) use ($search) {
                $query->where('id', 'like', $search)
                    ->orWhere('email', 'like', $search)
                    ->orWhere('name', 'like', $search);
            });
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

        return view('admin.users.index',
                    compact('statuses', 'users', 'status', 'search'));
    }
}
