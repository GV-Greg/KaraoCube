<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Submission extends Component
{
    public Object $submission;

    public function mount($submission)
    {
        $this->submission = $submission;
    }

    public function render()
    {
        return view('livewire.submission', [
            'submission' => $this->submission
        ]);
    }
}
