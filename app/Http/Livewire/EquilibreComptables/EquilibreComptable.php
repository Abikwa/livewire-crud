<?php

namespace App\Http\Livewire\EquilibreComptables;

use Livewire\Component;
use App\Models\Plancomptable;

class EquilibreComptable extends Component
{
    public $comptes, $equilibrecomptable_id, $equilibrecomptable, $compte_credit_id, $compte_debut_id, $debut, $credit;
    
    public function render()
    {
        $this->comptes = Plancomptable::whereNull('parent_id')->get() ;
        return view('livewire.equilibre-comptables.equilibre-comptable')->layout('templates.default');
    }

    public function form_debit()
    {
        return 0;
    }
    
    public function form_credit()
    {
        return 0;
    }

    public function store()
    {
        
    }
}
