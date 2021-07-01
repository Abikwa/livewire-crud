

@foreach ($values as $value)
    <div>  {{ $value->codecompte}} </div>
    @if(count($value->comptes) > 0)
        <x-plan-comptables.children :values="$value->comptes" />
    @endif
@endforeach