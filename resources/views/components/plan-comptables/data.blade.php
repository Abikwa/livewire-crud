
 <table class="table table-bordered mt-5">
    <thead>
        <tr>
            <th>No.</th>
            <th>Code compte</th>
            <th>Libelle</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($this->plancomptables as $value)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $value->codecompte }}</td>
            <td>{{ $value->libelle }}</td>
            <td>
            <button data-toggle="modal" data-target="#exampleModal" wire:click="edit({{ $value->id }})" class="btn btn-primary btn-sm">Edit</button>
            <button wire:click="delete({{ $value->id }})" class="btn btn-danger btn-sm">Delete</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>