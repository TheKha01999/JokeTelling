<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JokeController extends Controller
{

    public function index(Request $request)
    {
        $jokeElement =  DB::table('joke')->where('status', '=', null)->get()->first();
        if ($jokeElement === null) {
            return view('notification');
        }

        return view("joke", ['jokeElement' => $jokeElement]);
    }
    public function update(Request $request, $id)
    {
        DB::table('joke')->where('id', '=', $id)->update([
            'status' => $request->like,
        ]);

        return redirect()->route('index');
    }
}
