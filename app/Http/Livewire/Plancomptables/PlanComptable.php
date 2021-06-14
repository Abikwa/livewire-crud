<?php

namespace App\Http\Livewire\Plancomptables;

use Livewire\Component;
use Illuminate\Validation\Rule;
use App\Models\Plancomptable as PlancomptableModel;

class PlanComptable extends Component
{
    public $plancomptable_id, $plancomptables, $plancomptableTrees, $collectif=true, $parent_id, $codecompte, $libelle;
    protected $rules;

    public function render()
    {
        $this->plancomptables = PlancomptableModel::all();
        $this->plancomptableTrees = PlancomptableModel::whereNull('parent_id')->get() ;
        return view('livewire.plancomptables.plan-comptable')->layout('templates.default');
    }

    public function hydrate()
    {
        $this->rules = [
            'codecompte' => ['required', 'integer', Rule::unique('plancomptables')->ignore($this->plancomptable_id)],
            'libelle' => ['required', 'string', 'max:250']
        ];
    }

    public function parent($parent_id)
    {
        $this->parent_id = $parent_id;
    }

    public function parent_data($parent_id)
    {
        return $this->plancomptables = PlancomptableModel::where('parent_id', $parent_id)->orderBy('codecompte')->get() ;
    }
    public function form()
    {
        $this->reset();
    }

    public function store()
    {
        $this->validate();
        $plancomptable  = $this->plancomptable_id > 0 ? PlancomptableModel::findorFail($this->plancomptable_id) : new PlancomptableModel;
        if($this->parent_id > 0)
        {
            $plancomptable->parent_id = $this->parent_id;
        }
        
        $valeur = '';
        if(!$this->collectif)
        {
            $zero = strlen($this->codecompte."");
            $zero = 8 - $zero;
            for ($i=0; $i < $zero; $i++) { 
                $valeur = $valeur."0";
            }
        }
        $plancomptable->code = $this->codecompte;
        $plancomptable->codecompte = $this->codecompte.$valeur;
        $plancomptable->libelle = $this->libelle;
        $plancomptable->collectif = $this->collectif;
        $plancomptable->save();
        $this->reset();

    }

    public function edit(PlancomptableModel $plancomptable)
    {
        $this->plancomptable_id = $plancomptable->id;
        $this->parent_id = $plancomptable->parent_id;
        $this->codecompte = $plancomptable->code;
        $this->collectif = $plancomptable->collectif;
        $this->libelle = $plancomptable->libelle;
    }

    public function delete(PlancomptableModel $plancomptable)
    {
        $plancomptable->delete();
    }
}
