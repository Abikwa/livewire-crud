
    <div class="row">
            @foreach($this->form ?? [] as $key => $form)
                <div class="col-md-3 mb-2 row">

                    <div class="col-md-4 text-right text-gray-900 font-weight-bold">compte</div>
                    <div class="col-md-8">
                        <select name="" id="" wire:model.lazy="compte_id.{{ $key}}" class="form-control @error('compte_id') is-invalid @enderror">
                            <option value=""></option>
                            @foreach ($this->comptes as $compte)
                                <option value="{{$compte->id}}">{{ $compte->codecompte}}</option>
                                @if(count($compte->comptes) > 0)
                                    <x-equilibre-comptables.form-sous-equilibre-comptable :values="$compte->comptes" />
                                @endif
                            @endforeach
                        </select>
                        @error('compte_id')
                            <span class="text-danger">{{ $message}}</span>
                        @enderror
                    </div>
                </div>

                <div class="col-md-3 mb-2 row">
                    <div class="col-md-4 text-right text-gray-900 font-weight-bold">Libelle</div>
                    <div class="col-md-8">
                        <select name="" id="" wire:model.lazy="compte_id.{{ $key}}" class="form-control @error('compte_id') is-invalid @enderror">
                            <option value=""></option>
                            @foreach ($this->libelles as $compte)
                                <option value="{{$compte->id}}">{{ $compte->libelle}}</option>
                            @endforeach
                        </select>
                        @error('compte_id')
                            <span class="text-danger">{{ $message}}</span>
                        @enderror
                    </div>
                </div>

                <div class=" col-md-3 mb-2 row">
                    <div class="col-md-4 text-right text-gray-900 font-weight-bold">début</div>
                    <div class="col-md-8 row">
                        <div class="col-md-11">
                            <input type="number" name="" id="" wire:model="debut.{{ $key}}" class="form-control  @error('debut') is-invalid @enderror" placeholder="" aria-describedby="helpId">
                        </div>
                        @error('debut')
                            <span class="text-danger">{{ $message}}</span>
                        @enderror
                    </div>
                </div>

                <div class=" col-md-3 mb-2 row">
                    <div class="col-md-4 text-right text-gray-900 font-weight-bold">credit</div>
                    <div class="col-md-8 row">
                        <div class="col-md-11">
                            <input type="number" name="" id="" wire:model="credit.{{ $key}}" class="form-control mr-2  @error('credit') is-invalid @enderror" placeholder="" aria-describedby="helpId">
                        </div>
                        
                        @error('credit')
                            <span class="text-danger">{{ $message}}</span>
                        @enderror
                    </div>
                </div>
                 
        @endforeach
    </div>

    @if(!$this->equilibrecomptable_id)
    <div class="text-center">
        <span type="button"   wire:click="form">
            <i class="fa fa-plus mt-2 text-primary"></i>
        </span>
    </div>
    @endif

    <div class="text-center col-md-12 mt-2">
        <button type="button" class="btn btn-secondary btn-sm btn-lg" wire:click="store">Sauvegarder</button>
    </div>