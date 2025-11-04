<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Cat;

class CatList extends Component
{
    public $search = '';

    public function render()
    {
        $cats = Cat::with('breed')
            ->when($this->search, function($query) {
                $query->where('name', 'like', '%' . $this->search . '%')
                      ->orWhere('tags', 'like', '%' . $this->search . '%')
                      ->orWhereHas('breed', function($q) {
                          $q->where('name', 'like', '%' . $this->search . '%');
                      });
            })
            ->orderBy('name')
            ->get();

        return view('livewire.cat-list', [
            'cats' => $cats
        ]);
    }
}
