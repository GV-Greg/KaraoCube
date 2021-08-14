<?php

namespace App\Http\Livewire;

use App\Models\Song;
use App\Models\Submission;
use Livewire\Component;

class Search extends Component
{
    public String $query = '';
    public $songs = [];
    public Int $selectedIndex = 0;
    public String $singer = '';
    public String $song = '';
    public int $song_id = 0;

    protected $rules = [
        'singer' => 'required|string|min:3|max:200',
        'song' => 'required|string|min:3|max:200',
        'song_id' => 'integer|min:1'
    ];

    protected $messages = [
        'singer.required' => 'Vous devez renseigner qui va chanter.',
        'song.required' => 'Vous devez renseigner une chanson.',
        'song_id.required' => 'Vous n\'avez pas renseigné de chanson.',
        'singer.min' => 'Il faut au moins 3 caractères.',
        'song.min' => 'Il faut au moins 3 caractères.',
        'singer.max' => 'Il faut moins de 200 caractères.',
        'song.max' => 'Il faut moins de 200 caractères.',
    ];

    public function updatedQuery()
    {
        $words = '%' . $this->query . '%';

        if(strlen($this->query) > 2) {
            $this->songs = Song::where('interpreter', 'like', $words)
                ->orWhere('title', 'like', $words)
                ->orderBy('interpreter', 'ASC')
                ->get();
        }
    }

    public function showForm(int $index)
    {
        if($this->songs->isNotEmpty()) {
            $this->song_id = $this->songs[$index]['id'];
            $this->song = $this->songs[$index]['interpreter'] . ' - ' . $this->songs[$index]['title'];
            $this->query = '';
        }

    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function send()
    {
        $validatedData = $this->validate();

        Submission::create($validatedData);

        session()->flash('success', 'Chanson envoyée.');

        return redirect()->to('/');

    }

    public function render()
    {
        return view('livewire.search');
    }
}
