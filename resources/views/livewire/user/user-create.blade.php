<div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <form wire:submit="save">

        <div class="mb-3">
            <input type="text" name="name" class="form-control @error('form.name') is-invalid @enderror"
                   wire:model="form.name" placeholder="Name">
            @error('form.name')
            <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <input type="email" class="form-control @error('form.email') is-invalid @enderror" wire:model="form.email"
                   placeholder="Email">
            @error('form.email')
            <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <input type="password" class="form-control @error('form.password') is-invalid @enderror"
                   wire:model="form.password" placeholder="Password">
            @error('form.password')
            <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="d-flex align-items-center gap-3">
            <button type="submit" class="btn btn-primary my-2">Add User</button>
            <div wire:loading wire:target="save" class="spinner-border" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>

    </form>

</div>

