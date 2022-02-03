        @foreach($values as $value)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td @if($value->collectif) data-toggle="modal" data-target="#exampleModal" wire:click="parent({{ $value->id }})" type="button" @endif>{{ $value->codecompte }}</td>
            <td>{{ $value->libelle }}</td>
            <td>
            <button data-toggle="modal" data-target="#exampleModal" wire:click="edit({{ $value->id }})" class="btn btn-primary btn-sm">Edit</button>
            <button wire:click="delete({{ $value->id }})" class="btn btn-danger btn-sm">Delete</button>
            </td>
        </tr>
        @if(count($value->comptes) > 0)
            <x-plan-comptables.data-ordonner-sous :values="$value->comptes" />
        @endif
        @endforeach