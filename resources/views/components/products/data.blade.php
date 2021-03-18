
 <table class="table table-bordered mt-5">
    <thead>
        <tr>
            <th>No.</th>
            <th>Name</th>
            <th>price</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($this->products as $value)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->price }}</td>
            <td>
            <button data-toggle="modal" data-target="#exampleModal" wire:click="edit({{ $value->id }})" class="btn btn-primary btn-sm">Edit</button>
            <button wire:click="delete({{ $value->id }})" class="btn btn-danger btn-sm">Delete</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>