@if($model->editable)
    @if(auth()->user()->hasPermissionTo('estate-document-type update'))
        <a href="{{ route('estate-document-types.edit', ['id'=>$model->id]) }}"
           class="btn btn-sm btn-light-success btn-active-success me-3">
            ویرایش
        </a>
    @endif

    @if(auth()->user()->hasPermissionTo('estate-document-type delete'))
        <a href="{{ route('estate-document-types.delete', $model->id) }}" class="btn btn-sm btn-light-danger btn-active-danger">
            حذف
        </a>
    @endif
@else
    سیستمی
@endif
