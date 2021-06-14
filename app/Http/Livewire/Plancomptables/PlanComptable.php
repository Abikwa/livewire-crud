<?php

namespace App\Http\Livewire\Plancomptables;

use Livewire\Component;

class PlanComptable extends Component
{
    public $plancomptable_id, $parent_id, $codecompte, $libelle;
    protected $rules;

    public function render()
    {
        return view('livewire.plancomptables.plan-comptable')->layout('templates.default');
    }

    public function hydrate()
    {
        $this->rules = [
            'codecompte' => ['required', 'integer', Rule::unique('plancomptables')->ignore($this->plancomptable_id)],
            'libelle' => ['required', 'string', 'max:250']
        ];
    }

    public function form()
    {
        $this->reset();
    }

    public function store()
    {
        $this->validate();
        $plancomptable  = $this->plancomptable_id > 0 ? Plancomptable::findorFail($this->plancomptable_id) : new Plancomptable;
        if($this->parent_id > 0)
        {
            $plancomptable->parent_id = $this->parent_id;
        }
        $plancomptable->codecompte = $this->codecompte;
        $plancomptable->libelle = $this->libelle;
        $plancomptable->save();
        $this->reset();

    }

    public function edit(Plancomptable $plancomptable)
    {
        $this->plancomptable_id = $plancomptable->id;
        $this->parent_id = $plancomptable->parent_id;
        $this->codecompte = $plancomptable->codecompte;
        $this->libelle = $plancomptable->libelle;
    }

    public function delete(Plancomptable $plancomptable)
    {
        $plancomptable->delete();
    }
}
