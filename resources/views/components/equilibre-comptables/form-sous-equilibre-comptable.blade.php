 @foreach ($values as $compte)
    <option value="{{$compte->id}}">{{ $compte->codecompte}}</option>
    @if(count($compte->comptes) > 0)
        <x-equilibre-comptables.form-sous-equilibre-comptable :values="$compte->comptes" />
    @endif
@endforeach