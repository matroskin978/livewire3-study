<div class="col-md-8 offset-md-2">

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

        <div class="mb-3">
            <div wire:ignore>
                <select class="form-select select2 @error('form.country_id') is-invalid @enderror"
                        wire:model="country_id">
                    <option selected>Select country</option>
                    @foreach($countries as $country)
                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                    @endforeach
                </select>
            </div>
            @error('form.country_id')
            <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <input type="file" class="form-control @error('form.avatar') is-invalid @enderror"
                   wire:model="form.avatar">

            @error('form.avatar')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror

            <div wire:loading wire:target="form.avatar">
                <span class="text-success">Uploading...</span>
            </div>

            @if (!$errors->has('form.avatar') && $form->avatar)
                <img src="{{ $form->avatar->temporaryUrl() }}" width="100">
            @endif

        </div>

        <div class="d-flex align-items-center gap-3">
            <button type="submit" class="btn btn-primary my-2">Add User</button>
            <div wire:loading wire:target="save" class="spinner-border" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>

    </form>

</div>

@script
<script>
    $(document).ready(function () {
        let select2 = $('.select2');

        select2.select2();
        select2.on('change', function (e) {
            $wire.form.country_id = $(this).val();
            // $wire.set('form.country_id', $(this).val(), false)
        });
        $wire.on('user-created', () => {
            select2.val('Select country').trigger('change');
        });
    });
</script>
@endscript
