<div class="mb-3" wire:ignore>
    <select id="{{ $name }}" class="form-select @error('value') is-invalid @enderror"
            wire:model.live="value">
        <option value="" selected>Select {{ $name }}</option>
        @foreach($items as $item)
            <option value="{{ $item->id }}" wire:key="{{ $item->id }}">{{ $item->name }}</option>
        @endforeach
    </select>
    @error('value')
    <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
</div>

@script
<script>

    $(function () {
        $('#{{ $name }}').select2().on('change', function () {
            $wire.$set('value', $(this).val())
        });
    });

</script>
@endscript
