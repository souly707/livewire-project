<!-- Modal -->
<div wire:ignore.self class="modal fade" id="createModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Add New Skill</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire:submit.prevent='submit'>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 mb-0">
                            <label class="form-label">Skill</label>
                            <input wire:model='name' type="text"
                                class="form-control @error('name') is-invalid @enderror()" placeholder="Skill Name" />

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
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>