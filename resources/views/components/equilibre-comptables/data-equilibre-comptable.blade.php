
<table class="table table-bordered mt-5">
    <thead>
        <tr>
            <th>No.</th>
            <th>Code compte</th>
            <th>Libelle</th>
            <th>Debut</th>
            <th>Credit</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($this->equilibrecomptables as $value)
             <?php ($loop->iteration == 1) ? $step = $value->step : ''; ?>
            @if($step != $value->step)
            <tr style="color : @if($this->somme('debut', $step) != $this->somme('credit', $step)) red @else blue @endif">
                <td colspan="3">
                    Equilibrer la piece
                </td>
                <td>{{ $this->somme('debut', $step) }}</td>
                <td>{{ $this->somme('credit', $step) }}</td>
            </tr>
            <?php $step = $value->step; ?>
            @endif
            
        <tr>
            <td>{{ $value->step }}</td>
            <td>{{ $value->codecompte }}</td>
            <td>{{ $value->libelle }}</td>
            <td>{{ $value->debut > 0 ? $value->debut : '' }}</td>
            <td>{{ $value->credit > 0 ? $value->credit : '' }}</td>
            <td>
            <button data-toggle="modal" data-target="#exampleModal" wire:click="edit({{ $value->id }})" class="btn btn-primary btn-sm">Edit</button>
            <button wire:click="delete({{ $value->id }})" class="btn btn-danger btn-sm">Delete</button>
            </td>
        </tr>

        @if($loop->iteration == count($this->equilibrecomptables))
        <tr style="color : @if($this->somme('debut', $step) != $this->somme('credit', $step)) red @else blue @endif">
            <td colspan="3">
                Equilibrer la piece
            </td>
            <td>{{ $this->somme('debut', $value->step ) }}</td>
            <td>{{ $this->somme('credit', $value->step ) }}</td>
        </tr>
        @endif

        @endforeach
    </tbody>
</table>