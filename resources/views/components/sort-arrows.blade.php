<div>
    {{ $fieldName }}
    @if($orderByFieldList[$orderByField] != $fieldName)
        ⇅
    @elseif($orderByDirection == 'asc')
        ↑
    @else
        ↓
    @endif
</div>
