<div class="row">

    <div class="col-md-6">

        <form wire:submit="addUser">

            <div class="mb-3">
                <input type="text" name="name" class="form-control" wire:model="name" placeholder="Name">
            </div>

            <div class="mb-3">
                <input type="email" class="form-control" wire:model="email" placeholder="Email">
            </div>

            <div class="mb-3">
                <input type="password" class="form-control" wire:model="password" placeholder="Password">
            </div>

            <div class="d-flex align-items-center gap-3">
                <button type="submit" class="btn btn-primary my-2">Add User</button>
                <div wire:loading wire:target="addUser" class="spinner-border" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>

        </form>


    </div>

    <div class="col-md-6">

        <div class="d-flex align-items-center gap-3">
            <button wire:click.throttle.3000ms="$refresh" class="btn btn-success mb-2">Refresh</button>
            <div wire:loading class="spinner-border" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>

        <ul>
            @forelse($users as $user)
                <li wire:key="{{ $user->id }}">{{ $user->name }} ({{ $user->email  }}) | <a href="#" wire:click.prevent="deleteUser({{ $user->id }})" wire:confirm="Are you sure?">Delete</a></li>
            @empty
                <p>User list is empty...</p>
            @endforelse
        </ul>

    </div>

</div>
