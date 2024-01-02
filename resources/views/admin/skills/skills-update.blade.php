<x-edit-modal title="Edit Skill">
    <div class="col-md-6 mb-0">
        <label class="form-label">Skill</label>
        <input wire:model='name' type="text"
            class="form-control @error('name') is-invalid @enderror()"
            placeholder="Skill Name" />

        @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="col-md-6 mb-0">
        <label class="form-label">Progress</label>
        <input wire:model='progress' type="number"
            class="form-control @error('progress') is-invalid @enderror()" min="1" max="100"
            placeholder="10" />

        @error('progress')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</x-edit-modal>
