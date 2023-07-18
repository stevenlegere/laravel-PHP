<?php

namespace App\Http\Controllers;

use App\Models\Squat;
use Illuminate\Http\Request;

class SquatsController extends Controller
{
    //
    public function index()
    {
        $squats = Squat::all();
        dd($squats);
        return view('squats.index', compact('squats'));
    }

    public function store(Request $request)
    {
        Squat::create([
            'date' => now()->toDateString(),
            'kilometers' => 0,
        ]);

        return redirect()->route('squats.index');
    }

    public function update(Request $request, Squat $squat)
    {
        if ($request->has('increment')) {
            $squat->increment('kilometers', 1);
        } elseif ($request->has('decrement')) {
            $squat->decrement('kilometers', 1);
        }

        return redirect()->route('squats.index');
    }

}
