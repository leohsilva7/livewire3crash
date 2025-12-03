<?php

namespace App\Livewire;

use App\Models\Entry;
use Livewire\Attributes\Validate;
use Livewire\Component;

class BirdForm extends Component
{
//    #[Validate('required|int')]
    public int $bird_count;
//    #[Validate('required|string')]
    public string $notes;

    public function submit()
    {
        $this->validate([
            'bird_count' => 'required|integer',
            'notes' => 'required|string',
        ],
        [
            'bird_count.required' => 'O campo de contagem de pássaros é obrigatório!',
        ]
        );
        Entry::create($this->pull());
    }
    public function delete($id){
        Entry::findOrFail($id)->delete();
    }

    public function render()
    {
        return view('livewire.bird-form', [
            'entries' => Entry::all(),
        ]);
    }
}
