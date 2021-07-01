
 
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
     
    <div class="text-info">
        <h1>Plan comptable</h1>
    </div>
    <div class="text-right">
        <button type="button" class="btn btn-primary btn-sm" wire:click="ordonner">Ordonner les comptes</button>
        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" wire:click="form" data-target="#exampleModal">
            <i class="fa fa-plus"></i>
        </button>
    </div> 
    <x-plan-comptables.form />
    @if($this->ordonner)
        <x-plan-comptables.data-ordonner />
    @else
        <x-plan-comptables.data />
    @endif
    <x-plan-comptables.tree />
</main>