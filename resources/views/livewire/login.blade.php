<div>
    <div class="hero min-h-screen bg-base-200">
        <div class="hero-content text-center">
            <div class="max-w-md">
                <form wire:submit.prevent="login">
                    <h1 class="text-5xl font-bold">Anmelden</h1>
                    <p class="py-6">Bitte melden Sie sich an, um fortzufahren.</p>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text
                            @error('email') label-text-danger @enderror">Email</span>
                        </label>
                        <input type="email" class="input input-bordered" wire:model="email">
                        @error('email') <label class="label"><span class="label-text label-text-danger">{{ $message }}</span></label> @enderror
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text
                            @error('password') label-text-danger @enderror">Password</span>
                        </label>
                        <input type="password" class="input input-bordered" wire:model="password">
                        @error('password') <label class="label"><span class="label-text label-text-danger">{{ $message }}</span></label> @enderror
                    </div>
                    <div class="form-control mt-6">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                    <a class="mt-2 block" href="/register" wire:navigate>Create your account</a>
                </form>
            </div>
        </div>
    </div>
</div>
