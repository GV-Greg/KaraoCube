<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Submission;
use Illuminate\Http\Request;

class SubmissionController extends Controller
{
    public function index() {
        $submissions = Submission::where('status', 'new')->orderBy('id', 'ASC')->get();
        $activity = Activity::where('id', 1)->get()->first();

        return view('admin.dashboard', [
            'submissions' => $submissions,
            'activity' => $activity,
        ]);
    }

    public function update(int $id)
    {
        Submission::where('id', $id)
            ->update(['status' => 'launched']);

        return redirect('dashboard');
    }
}
