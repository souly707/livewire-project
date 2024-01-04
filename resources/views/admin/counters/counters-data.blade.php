<div>
    {{-- Search --}}
    <div class="mb-3">
        <input wire:model.live='search' type="text" class="form-control w-50" placeholder="Search">
    </div>
    {{-- EndSearch --}}
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr class="text-left">
                    <th width="50%">Name</th>
                    <th width="20%">Counter</th>
                    <th width="20%">Icon</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @forelse ($data as $record)
                <tr>
                    <td>
                        <strong>{{ $record->name }}</strong>
                    </td>
                    <td>{{ $record->count }}</td>
                    <td><i class="{{ $record->icon }} fa-2x text-secondary mt-1"></i></td>

                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a wire:click.prevent="$dispatch('counterUpdate',{id: {{ $record->id }}})"
                                    class="dropdown-item" href="#">
                                    <i class="bx bx-edit-alt me-1"></i>
                                    Edit
                                </a>
                                <a wire:click.prevent="$dispatch('counterDelete', {id: {{ $record->id }}})" class="dropdown-item" href="#">
                                    <i class="bx bx-trash me-1"></i>
                                    Delete
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="3" class="text-danger">No Data Found</td>
                </tr>
                @endforelse
            </tbody>
        </table>
        <div class="border-top">
            <div class="mt-3">
                {{ $data->links() }}
            </div>
        </div>
    </div>
</div>
