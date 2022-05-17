<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;

class TrainController extends Controller
{
    public function index()
    {
        $trains = Train::where([
            // ["giorno_di_partenza", '=', date('Y-m-d')],
            ["cancellato", "=", false]
        ])->orderBy("giorno_di_partenza", "desc")->paginate(10);

        $data = ["trains" => $trains];

        return view('train', $data);
    }

    public function show($id)
    {
        $train = Train::findOrFail($id);

        return view('show', ["train" => $train]);
    }
}
