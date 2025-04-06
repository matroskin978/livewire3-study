<div class="col-12">

    <div class="d-flex justify-content-between mb-2" id="users-list">
        <div>
{{-- <select class="form-select" wire:change="changeLimit($event.target.value)"> --}}
            <select class="form-select" wire:model="limit" wire:change="changeLimit">
                @foreach($limitList as $k => $v)
                    <option @if($v == $limit) selected @endif wire:key="{{ $k }}" value="{{ $v }}">{{ $v }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <input type="text" class="form-control" id="search" placeholder="Search..." wire:model.live.debounce.300ms="search">
        </div>
    </div>

    <div class="table-responsive position-relative">

        <div wire:loading style="position: absolute; width: 100%; height: 100%; background: rgba(255, 255, 255, .7); text-align: center; padding-top: 20px;">
            <div class="spinner-border" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>


        <table class="table table-striped table-hover">

            <thead>
            <tr>
                <th wire:click="changeOrder('users.id')" style="cursor:pointer;">
                    <x-sort-arrows fieldName="ID" :orderByField="$orderByField" :orderByDirection="$orderByDirection" :orderByFieldList="$orderByFieldList"/>
                </th>
                <th wire:click="changeOrder('users.name')" style="cursor:pointer;">
                    <x-sort-arrows fieldName="Name" :orderByField="$orderByField" :orderByDirection="$orderByDirection" :orderByFieldList="$orderByFieldList"/>
                </th>
                <th wire:click="changeOrder('users.email')" style="cursor:pointer;">
                    <x-sort-arrows fieldName="Email" :orderByField="$orderByField" :orderByDirection="$orderByDirection" :orderByFieldList="$orderByFieldList"/>
                </th>
                <th wire:click="changeOrder('countries.name')" style="cursor:pointer;">
                    <x-sort-arrows fieldName="Country" :orderByField="$orderByField" :orderByDirection="$orderByDirection" :orderByFieldList="$orderByFieldList"/>
                </th>
                <th>Delete</th>
            </tr>
            </thead>

            <tbody>
            @foreach($users as $user)
                <tr wire:key="{{ $user->id }}">
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->country_name }}</td>
                    <td>
                        <button wire:click="delete({{ $user->id }})" wire:confirm="Are you sure?" class="btn btn-danger">Delete</button>
                    </td>
                </tr>
            @endforeach
            </tbody>

        </table>
    </div>

    {{ $users->links(data:['scrollTo' => '#users-list']) }}

</div>
