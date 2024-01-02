<div>
    <form class="mb-3" wire:submit.prevent='submit'>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input wire:model='email' type="text" class="form-control @error('email') is-invalid @enderror()"
                placeholder="Enter your email" autofocus />
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

        </div>
        <div class="mb-3 form-password-toggle">
            <div class="d-flex justify-content-between">
                <label class="form-label" for="password">Password</label>
            </div>
            <div class="input-group input-group-merge">
                <input wire:model='password' type="password"
                    class="form-control @error('password') is-invalid @enderror()"
                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                    aria-describedby="password" />
                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

            </div>
        </div>
        <div class="mb-3">
            <div class="form-check">
                <input wire:model='remember' class="form-check-input" type="checkbox" />
                <label class="form-check-label" for="remember-me">
                    Remember Me
                </label>
            </div>
        </div>
        <div class="mb-3">
            <button class="btn btn-primary d-grid w-100" type="submit">
                <span wire:loading.remove>Sign in</span>
                <div wire:loading wire:target='submit' class="text-center">
                    <span class="spinner-border spinner-border-sm text-white" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </span>
                </div>
            </button>

        </div>
    </form>
</div>
