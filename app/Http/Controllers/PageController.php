<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;


class PageController extends Controller
{
    public function home(){

        $trains = Train::all();

        $data = [
            'trains' => $trains
        ];

        return view ('home', $data);
    }
}
