<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarStoreRequest;
use App\Http\Requests\CarUpdateRequest;
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
            $cars->where(
                function ($query) use ($text) { // !!!!
                    $query->where('id', $text)
                        ->orWhere('model', 'like', '%' . $text . '%')
                        ->orWhere('mark', 'like', '%' . $text . '%')
                        ->orWhere('vin', 'like', '%' . $text . '%');
                }
            );
        }

        $cars = $cars->orderBy('id', 'desc')->paginate(5);

        return view('cars.index', compact('cars', 'year', 'text'));
    }

    public function create()
    {
        return view('cars.create');
    }

    public function store(CarStoreRequest $request)
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

    public function edit(int $id)
    {
        $car = Car::find($id);

        if ($car) {
            return view('cars.edit', compact('car'));
        }

        return redirect()->route('cars.index')
            ->with(['error' => 'Авто № ' . $id . ' не найдено']);
    }

    public function update(int $id, CarUpdateRequest $request)
    {
// 1 способ сохранить изменения авто
//        $car = Car::find($id);
//
//        if (!$car) {
//            return redirect()->route('cars.index')
//                ->with(['error' => 'Авто № ' . $id . ' не найдено']);
//        }
//
//        $car->mark = $request->mark;
//        $car->model = $request->model;
//        $car->year = $request->year;
//        $car->description = $request->description;
//
//        $car->save();
// 2 способ сохранить изменения авто

//        Car::where('id', $id)->update(
//            [
//                'mark' => $request->mark,
//                'model' => $request->model,
//            ]
//        );

        // $request->validated() !!!

        Car::where('id', $id)->update($request->except('_token'));

        return redirect()->route('cars.index')
            ->with(['success' => 'Авто № ' . $id . ' успешно изменено']);
    }
}
