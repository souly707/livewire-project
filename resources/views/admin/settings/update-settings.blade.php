<div>
    @include('admin.partials.flash')

    <form wire:submit.prevent='submit' class="row">
        <div class="col-md-6">
            <label class="form-label">Name</label>
            <input wire:model='settings.name' type="text"
                class="form-control form-control @error('settings.name') is-invalid @enderror()" placeholder="Name"
                aria-describedby="defaultFormControlHelp" />

            @error('settings.name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="col-md-6">
            <label class="form-label">Email</label>
            <input wire:model='settings.email' type="text"
                class="form-control @error('settings.email') is-invalid @enderror()" placeholder="Email"
                aria-describedby="defaultFormControlHelp" />
            @error('settings.email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="col-md-6 mt-2">
            <label class="form-label">Phone</label>
            <input wire:model='settings.phone' type="text"
                class="form-control @error('settings.phone') is-invalid @enderror()" placeholder="Phone"
                aria-describedby="defaultFormControlHelp" />
            @error('settings.phone')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="col-md-6 mt-2">
            <label class="form-label">Address</label>
            <input wire:model='settings.address' type="text"
                class="form-control @error('settings.address') is-invalid @enderror()" placeholder="Address"
                aria-describedby="defaultFormControlHelp" />
            @error('settings.address')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="col-md-6 mt-2">
            <label class="form-label">Facebook</label>
            <input wire:model='settings.facebook' type="text"
                class="form-control @error('settings.facebook') is-invalid @enderror()" placeholder="Facebook"
                aria-describedby="defaultFormControlHelp" />
            @error('settings.facebook')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="col-md-6 mt-2">
            <label class="form-label">Twitter</label>
            <input wire:model='settings.twitter' type="text"
                class="form-control @error('settings.twitter') is-invalid @enderror()" placeholder="Twitter"
                aria-describedby="defaultFormControlHelp" />
            @error('settings.twitter')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="col-md-6 mt-2">
            <label class="form-label">Linkedin</label>
            <input wire:model='settings.linkedin' type="text"
                class="form-control @error('settings.linkedin') is-invalid @enderror()" placeholder="Linkedin"
                aria-describedby="defaultFormControlHelp" />
            @error('settings.linkedin')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="col-md-6 mt-2">
            <label class="form-label">Instagram</label>
            <input wire:model='settings.instagram' type="text"
                class="form-control @error('settings.instagram') is-invalid @enderror()" placeholder="Instagram"
                aria-describedby="defaultFormControlHelp" />
            @error('settings.instagram')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="col-md-12 mt-4">
            <button type="submit" class="btn btn-primary">
                Submit
            </button>
        </div>
    </form>
</div>