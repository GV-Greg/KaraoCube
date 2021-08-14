<?php

namespace App\Http\Controllers;

use App\Models\Submission;
use Illuminate\Http\Request;

class SubmissionController extends Controller
{
    public function index() {
        $submissions = Submission::where('status', 'new')->orderBy('id', 'DESC')->get();

        return view('admin.dashboard', [
            'submissions' => $submissions,
        ]);
    }

    public function update(int $id)
    {
        Submission::where('id', $id)
            ->update(['status' => 'launched']);

        return redirect('dashboard');
    }
}
