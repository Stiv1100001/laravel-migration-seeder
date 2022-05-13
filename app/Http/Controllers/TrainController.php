<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;
use Illuminate\Support\Facades\Log;

class TrainController extends Controller
{
    public function index()
    {
        $trains = Train::where([
            ["giorno_di_partenza", '=', date('Y-m-d')],
            ["cancellato", "=", 0]
        ])->get();

        $data = ["trains" => $trains];

        return view('train', $data);
    }
}
