<?php

namespace App\Http\Livewire;

use App\Models\Submission;
use Livewire\Component;

class FormSubmission extends Component
{
    public String $singer = '';
    public String $song = '';
    public String $query;

    protected $rules = [
        'singer' => 'required|string|min:3|max:200',
        'song' => 'required|string|min:3|max:200',
    ];

    protected $messages = [
        'singer.required' => 'Vous devez renseigner qui va chanter.',
        'song.required' => 'Vous devez renseigner une chanson.',
        'singer.min' => 'Il faut au moins 3 caractères.',
        'song.min' => 'Il faut au moins 3 caractères.',
        'singer.max' => 'Il faut moins de 200 caractères.',
        'song.max' => 'Il faut moins de 200 caractères.',
    ];

    public function send()
    {
        $validatedData = $this->validate();

        Submission::create($validatedData);
        $this->query = '';
        session()->flash('success', 'Chanson envoyée.');

        return redirect()->to('/');
    }

    public function render()
    {
        return view('livewire.form-submission');
    }
}
