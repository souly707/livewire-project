<x-create-modal title="Add New Skill">

    <div class="col-md-6 mb-0">
        <label class="form-label">Skill</label>
        <input wire:model='name' type="text"
            class="form-control @error('name') is-invalid @enderror()" placeholder="Skill Name" />

        @include('admin.partials.error',['property'=>'name'])
    </div>
    <div class="col-md-6 mb-0">
        <label class="form-label">Progress</label>
        <input wire:model='progress' type="number"
            class="form-control @error('progress') is-invalid @enderror()" min="1" max="100"
            placeholder="10" />

            @include('admin.partials.error',['property'=>'progress'])
    </div>

</x-create-modal>

