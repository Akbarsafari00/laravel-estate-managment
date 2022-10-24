@if($model->editable)
    @if(auth()->user()->hasPermissionTo('estate-subscription update'))
        <a href="{{ route('estate-subscriptions.edit', ['id'=>$model->id]) }}"
           class="btn btn-sm btn-light-success btn-active-success me-3">
            ویرایش
        </a>
    @endif

    @if(auth()->user()->hasPermissionTo('estate-subscription delete'))
        <a href="{{ route('estate-subscriptions.delete', $model->id) }}" class="btn btn-sm btn-light-danger btn-active-danger">
            حذف
        </a>
    @endif
@else
    سیستمی
@endif
