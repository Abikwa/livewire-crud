<?php

namespace App\View\Components\PlanComptables;

use Illuminate\View\Component;

class DataOrdonnerSous extends Component
{
    public $values;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($values = [])
    {
        $this->values = $values;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.plan-comptables.data-ordonner-sous');
    }
}
