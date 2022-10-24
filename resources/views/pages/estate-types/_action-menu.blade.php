@if($model->editable)
    @if(auth()->user()->hasPermissionTo('estate-type update'))
        <a href="{{ route('estate-types.edit', ['id'=>$model->id]) }}"
           class="btn btn-sm btn-light-success btn-active-success me-3">
            ویرایش
        </a>
    @endif

    @if(auth()->user()->hasPermissionTo('estate-type delete'))
        <a href="{{ route('estate-types.delete', $model->id) }}" class="btn btn-sm btn-light-danger btn-active-danger">
            حذف
        </a>
    @endif
@else
    سیستمی
@endif
