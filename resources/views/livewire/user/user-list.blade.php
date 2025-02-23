<div>

    <ul id="users-list">
        @forelse($users as $user)
            <li wire:key="{{ $user->id }}">{{ $user->name }} ({{ $user->email  }}) | {{ $user->country->name }}
                | <a href="#"
                     wire:click.prevent="delete({{ $user->id }})"
                     wire:confirm="Are you sure?">Delete</a>
            </li>
        @empty
            <p>User list is empty...</p>
        @endforelse
    </ul>

    {{ $users->links('vendor.livewire.my-bootstrap', data:['scrollTo' => '#users-list']) }}

</div>
