<?php

namespace App\Http\Livewire\EquilibreComptables;

use Livewire\Component;
use App\Models\Plancomptable;
use Illuminate\Support\Facades\DB;
use App\Models\Equilibrecomptable as EquilibrecomptableModel;

class EquilibreComptable extends Component
{
    public $comptes, $libelles, $compte_id, $equilibrecomptable_id = [], $equilibrecomptables, $debut = [], $credit = [], $form = [''];
    
    public function render()
    {
        $this->comptes = Plancomptable::whereNull('parent_id')->get() ;
        $this->libelles = Plancomptable::all() ;
        $this->equilibrecomptables = EquilibrecomptableModel::join('plancomptables', 'plancomptables.id', 'plancomptable_id')
                                    ->select(DB::raw('equilibrecomptables.*, codecompte, libelle'))->orderBy('equilibrecomptables.id')->get();
        return view('livewire.equilibre-comptables.equilibre-comptable')->layout('templates.default');
    }

    public function form()
    {
        $this->equilibrecomptable_id = '';
        $this->form [] = [''];
    }
    
   public function somme($column, $step)
   {
       $somme = EquilibrecomptableModel::whereStep($step)->select(DB::raw('sum('.$column.') as somme'))->first();
       return $somme->somme;
   }

    public function store()
    {
        $step = EquilibrecomptableModel::count();
        foreach ($this->compte_id as $key => $compte) {
            if(isset($this->debut[$key]) && $this->debut[$key] > 0  || isset($this->credit[$key]) && $this->credit[$key] > 0)
            {
                $equilibrecomptable = $this->equilibrecomptable_id > 0 ?  EquilibrecomptableModel::find($this->equilibrecomptable_id): new EquilibrecomptableModel;
                if(!$this->equilibrecomptable_id)
                {
                    $equilibrecomptable->step = $step;
                }
                $equilibrecomptable->plancomptable_id = $compte;
                $equilibrecomptable->debut = isset($this->debut[$key]) ? $this->debut[$key] : 0;
                $equilibrecomptable->credit = isset($this->credit[$key]) ? $this->credit[$key] : 0;
                $equilibrecomptable->save();
            }
        }
        $this->reset();
    }

    public function edit(EquilibrecomptableModel $equilibrecomptable)
    {
        $this->form = [''];
        $this->equilibrecomptable_id = $equilibrecomptable->id;
        $this->compte_id[0] = $equilibrecomptable->plancomptable_id;
        $this->debut[0] = $equilibrecomptable->debut;
        $this->credit[0] = $equilibrecomptable->credit;
    }

    public function delete(EquilibrecomptableModel $equilibrecomptable )
    {
        $equilibrecomptable->delete();
    }
}
