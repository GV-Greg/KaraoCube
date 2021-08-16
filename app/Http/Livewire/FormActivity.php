<?php

namespace App\Http\Livewire;

use App\Models\Activity;
use Livewire\Component;

class FormActivity extends Component
{
    public $next_event = '';
    public $image = null;

    protected $rules = [
        'next_event' => 'required|date',
        'image' => 'max:255'
    ];

    public function update()
    {
        $validatedData = $this->validate();

        $activity = Activity::where('id', 1)->get()->first();
        $activity->next_event = $validatedData['next_event'];
        $activity->image = $validatedData['image'];
        $activity->save();

        session()->flash('success', 'Prochain évent enregistré.');

        return redirect()->to('/dashboard');
    }

    public function render()
    {
        return view('livewire.form-activity');
    }
}
