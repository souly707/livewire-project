<!-- Modal -->
<x-show-modal title="Display Skill">
    <div class="col-md-6 mb-0">
        <label class="form-label">Skill</label>
        <input wire:model='name' type="text"
            class="form-control"
            placeholder="Skill Name" />
    </div>
    <div class="col-md-6 mb-0">
        <label class="form-label">Progress</label>
        <input wire:model='progress' type="number"
            class="form-control" min="1" max="100"
            placeholder="10" />
    </div>
</x-show-modal>
</div>
