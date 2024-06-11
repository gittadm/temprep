<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index(Request $request)
    {
        //        if ($request->has('text')) {
//           dd('yes');
//        }

        $text = trim($request->text);
        $year = $request->year;

        $cars = Car::query();

        if (!empty($year)) {
            $cars->where('year', $year);
        }

        if (!empty($text)) {
            $cars->where(function ($query) use ($text) { // !!!!
                $query->where('id', $text)
                    ->orWhere('model', 'like', '%' . $text . '%')
                    ->orWhere('mark', 'like', '%' . $text . '%')
                    ->orWhere('vin', 'like', '%' . $text . '%');
            });
        }

        $cars = $cars->orderBy('id', 'desc')->paginate(5);

        return view('cars.index', compact('cars', 'year', 'text'));
    }

    public function create()
    {
        return view('cars.create');
    }

    public function store(Request $request)
    {
//        Car::create(
//            [
//                'model' => $request->model,
//                'mark' => $request->mark,
//                'description' => $request->description,
//                'year' => $request->year,
//            ]
//        );

        Car::create($request->all());

        return redirect()->route('cars.index');
    }

    public function delete(int $id)
    {
        $car = Car::find($id);

        if ($car) {
            Car::where('id', $id)->delete();

            return redirect()->route('cars.index')
                ->with(['success' => 'Авто № ' . $id . ' успешно удалено']);
        }

        return redirect()->route('cars.index')
            ->with(['error' => 'Авто № ' . $id . ' не найдено']);
    }
}
