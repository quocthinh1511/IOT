<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Esp;
class EspController extends Controller
{




    public function update(Request $request){

        // $esp = Esp::create($request->all());
        // $esp_count = $esp -> count;
        return view('esp');

    }
}
