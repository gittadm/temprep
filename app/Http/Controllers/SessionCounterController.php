<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionCounterController extends Controller
{
    public function index()
    {
        if (session()->exists('counter')) {
            session(['counter' => 1 + (int) session('counter')]);
        } else {
            session(['counter' => 1]); // задать значение в сессию
        }

        $counter = session('counter', 1); // получить значение из сессии

        return view('session.counter', compact('counter'));
    }

    public function task1()
    {
        return view('session.task1');
    }

    private function solveTask1(string $data, int $number, string $type): string
    {
        $numbers = explode(" ", $data);
        $result = [];
        foreach ($numbers as $value) {
            $result[] = $value;
            if ($type == 1 && $value < 0) {
                $result[] = $number;
            } else if ($type == 2 && $value > 0) {
                $result[] = $number;
            }
        }

        return implode(" ", $result);
    }

    public function storeTask1(Request $request)
    {
        // dd($request->all());

        $solution = $this->solveTask1($request->data, $request->number, $request->type);

        return redirect()->route('session.task1')
            ->with(
                [
                    'solution' => $solution,
                    'data' => $request->data,
                    'type' => $request->type,
                    'number' => $request->number,
                ]
            );
    }
}
