<x-create-modal title="Add New Service">

    <div class="col-md-6 mb-0">
        <label class="form-label">Name</label>
        <input wire:model='name' type="text"
            class="form-control @error('name') is-invalid @enderror()" placeholder="Counter Name" />

        @include('admin.partials.error',['property'=>'name'])
    </div>
    <div class="col-md-6 mb-0">
        <label class="form-label">Icon</label>
        <input wire:model='icon' type="text"
            class="form-control @error('icon') is-invalid @enderror()" placeholder="icon" />

            @include('admin.partials.error',['property'=>'count'])
    </div>

    <div class="col-md-12 mt-2 mb-0">
        <label class="form-label">Description</label>
        <textarea wire:model='description' class="form-control @error('description') is-invalid @enderror()"
            placeholder="Description">
        </textarea>

        @include('admin.partials.error',['property'=>'description'])
    </div>

</x-create-modal>

