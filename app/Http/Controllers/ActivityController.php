<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index()
    {
        $activity = Activity::where('id', 1)->get()->first();

        return view('home', [
            'activity' => $activity
        ]);
    }

    public function toggle()
    {
        $activity = Activity::where('id', 1)->get()->first();

        $activity->status = !$activity->status;
        $activity->save();

        return redirect('dashboard');
    }

    public function edit()
    {
        return view('admin.event');
    }


}
