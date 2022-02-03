<?php

namespace App\View\Components\EquilibreComptables;

use Illuminate\View\Component;

class FormEquilibreComptable extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.equilibre-comptables.form-equilibre-comptable');
    }
}
