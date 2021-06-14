
<!-- Modal -->
<div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Plan comptabel</h5>
                <button type="button" class="close"   data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
           <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Code compte</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="code du compte" wire:model="codecompte">
                        @error('codecompte') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput2">Libelle</label>
                        <input type="text" class="form-control" id="exampleFormControlInput2" wire:model="libelle" placeholder="Libelle">
                        @error('libelle') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>

                    <div class="form-group">
                        <input type="radio" name="" id="collectif" value="1" wire:model="collectif">
                        <label for="collectif">Collectif</label>
                        <input type="radio" name="" id="collectif1" value="0" wire:model="collectif">
                        <label for="collectif1">Non collectif</label>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn"  data-dismiss="modal">Fermer</button>
                <button type="button" wire:click.prevent="store" class="btn btn-primary close-modal">Valider</button>
            </div>
        </div>
    </div>
</div>