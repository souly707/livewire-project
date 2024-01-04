<x-edit-modal title="Edit Skill">
    <div class="col-md-4 mb-0">
        <label class="form-label">Name</label>
        <input wire:model='name' type="text"
            class="form-control @error('name') is-invalid @enderror()" placeholder="Counter Name" />
        @include('admin.partials.error',['property'=>'name'])
    </div>
    <div class="col-md-4 mb-0">
        <label class="form-label">Count</label>
        <input wire:model='count' type="number"
            class="form-control @error('count') is-invalid @enderror()" min="1" placeholder="10" />
        @include('admin.partials.error',['property'=>'name'])

    </div>
    <div class="col-md-4 mb-0">
        <label class="form-label">Icon</label>
        <input wire:model='icon' type="text"
            class="form-control @error('icon') is-invalid @enderror()" placeholder="10" />
        @include('admin.partials.error',['property'=>'icon'])
    </div>
</x-edit-modal>
