


<div>
    @foreach ($this->plancomptableTrees as $data)
        <div>  {{ $data->codecompte}} </div>
        @if(count($data->comptes) > 0)
            <x-plan-comptables.children :values="$data->comptes" />
        @endif
        <hr>
    @endforeach
</div>