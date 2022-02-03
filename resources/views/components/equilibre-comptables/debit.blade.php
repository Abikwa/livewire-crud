    <div class="col-md-12 mb-2 row">

        <div class="col-md-4 text-right text-gray-900 font-weight-bold">compte débit</div>
        <div class="col-md-8">
            <select name="" id="" wire:model.lazy="compte_debut_id" class="form-control @error('compte_debut_id') is-invalid @enderror">
                <option value=""></option>
                @foreach ($this->comptes as $compte)
                    <option value="{{$compte->id}}">{{ $compte->codecompte}}</option>
                    @if(count($compte->comptes) > 0)
                        <x-equilibre-comptables.form-sous-equilibre-comptable :values="$compte->comptes" />
                    @endif
                @endforeach
            </select>
            @error('compte_debut_id')
                <span class="text-danger">{{ $message}}</span>
            @enderror
        </div>
    </div>

    <div class=" col-md-12 mb-2 row">
        <div class="col-md-4 text-right text-gray-900 font-weight-bold">début</div>
        <div class="col-md-8 row">
            <div class="col-md-11">
                <input type="number" name="" id="" wire:model="debut" class="form-control mr-2  @error('debut') is-invalid @enderror" placeholder="" aria-describedby="helpId">
            </div>
            
            <span type="button"   wire:click="form_debit">
                <i class="fa fa-plus mt-2 text-primary"></i>
            </span>
            @error('debut')
                <span class="text-danger">{{ $message}}</span>
            @enderror
        </div>
    </div>

    {{-- <div class="col-md-12 mb-2 row">
        <div class="col-md-4 text-right text-gray-900 font-weight-bold">credit</div>
        <div class="col-md-8">
            <input type="number" name="" id="" wire:model="credit" class="form-control  @error('credit') is-invalid @enderror" placeholder="" aria-describedby="helpId">
        
            @error('credit')
                <span class="text-danger">{{ $message}}</span>
            @enderror
        </div>
    </div> --}} 