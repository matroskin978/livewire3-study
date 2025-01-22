<div>
    <h1>{{ $title }}</h1>
    <h2>{{ $second_title }}</h2>

    <input type="text" placeholder="Nothing..." wire:model.live="name">
    <input type="text" placeholder="Nothing..." wire:model.live="age">
    <input type="text" placeholder="Nothing..." wire:model.live="dog">
    <input type="text" placeholder="Nothing..." wire:model.live="cat">

    <p>Name: {{ $name }}</p>
    <p>LastName: {{ $lastname }}</p>
    <p>FullName: {{ $fullname }}</p>
    <p>Age: {{ $age }}</p>
    <p>Dog: {{ $dog }}</p>
    <p>Cat: {{ $cat }}</p>

    <div class="input-group mb-3">
        <input type="text" class="form-control" wire:model="user">
        <button class="btn btn-primary" wire:click="add">Add User</button>
    </div>
    <ul>
        @foreach($users as $user)
            <li>{{ $user }}</li>
        @endforeach
    </ul>
</div>
