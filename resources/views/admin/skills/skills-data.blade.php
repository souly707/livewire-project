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
                    <th width="30%">Skill</th>
                    <th width="60%">Progress</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @forelse ($data as $skill)
                <tr>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                        <strong>{{ $skill->name }}</strong>
                    </td>
                    <td>{{ $skill->progress }}</td>

                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a wire:click.prevent="$dispatch('skillUpdate',{id: {{ $skill->id }}})"
                                    class="dropdown-item" href="#">
                                    <i class="bx bx-edit-alt me-1"></i>
                                    Edit
                                </a>
                                <a class="dropdown-item" href="3">
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
            {{-- <tfoot>
                <tr>
                    <td colspan="3">
                        <div>
                            {{ $data->links() }}
                        </div>
                    </td>
                </tr>
            </tfoot> --}}
        </table>
        <div class="border-top">
            <div class="mt-3">
                {{ $data->links() }}
            </div>
        </div>
    </div>
</div>