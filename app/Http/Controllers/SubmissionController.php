<?php

namespace App\Http\Controllers;

use App\Models\Submission;
use Illuminate\Http\Request;

class SubmissionController extends Controller
{
    public function index() {
        $submissions = Submission::orderBy('status', 'ASC')->orderBy('id', 'DESC')->get();

        $submissions_group = $submissions->groupBy('status');

        return view('admin.dashboard', [
            'submissions' => $submissions_group,
        ]);
    }

    public function update(int $id)
    {
        Submission::where('id', $id)
            ->update(['status' => 'launched']);

        return redirect('dashboard');
    }
}
