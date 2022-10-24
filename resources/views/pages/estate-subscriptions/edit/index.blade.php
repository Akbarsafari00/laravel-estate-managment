<x-base-layout>

    <!--begin::Basic info-->
    <div class="card">
        <!--begin::Card header-->
        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
             data-bs-target="#kt_account_profile_details" aria-expanded="true"
             aria-controls="kt_account_profile_details">
            <!--begin::Card title-->
            <div class="card-title m-0">
                <h3 class="fw-bolder m-0">{{ __('ویرایش نقش') }}</h3>
            </div>
            <!--end::Card title-->
        </div>
        <!--begin::Card header-->

        <!--begin::Content-->
        <div id="kt_account_profile_details" class="collapse show">

            <form class="form" method="POST" action="{{ route('roles.update',['id'=>$role->id]) }}"
                  enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body border-top p-9">
                    <x-forms.error-alert/>

                    @if(!$role->editable)
                        <div class="alert alert-info">
                            <ul>
                                <li>این یک داده سیستمی میباشد و قابلیت ویرایش ندارد</li>
                            </ul>
                        </div>
                    @endif
                    <!-- Name -->
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label fw-bold fs-6"> <span
                                class="required">{{ __('نام') }}</span></label>
                        <div class="col-lg-8 fv-row">
                            <input type="text" name="name"
                                   class="form-control form-control-lg form-control-solid @error('name') is-invalid @enderror"
                                   placeholder="نام"
                                   {{$role->editable?'':'disabled'}}
                                   value="{{$role->name}}"/>
                            <div class="form-text">
                                {{ __('دقت کنید نام نقش باید انگلیسی و لاتین باشد') }}
                            </div>
                        </div>
                    </div>

                    <!-- Name -->
                    <div class="row mb-12">
                        <label class="col-lg-4 col-form-label fw-bold fs-6"> <span
                                class="required">{{ __('نام نمایشی') }}</span></label>
                        <div class="col-lg-8 fv-row">
                            <input type="text" name="title"
                                   class="form-control form-control-lg form-control-solid @error('title') is-invalid @enderror"
                                   {{$role->editable?'':'disabled'}}
                                   placeholder="نام" value="{{$role->title}}"/>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-lg-4">دسترسی ها</div>
                        <div class="col-lg-8">
                            @foreach($permission_categories as $pc)
                                <div class="mb-12">
                                    <h4 class="mb-6">{{$pc->title}}</h4>
                                    <div class="row">
                                        @foreach($pc->permissions as $per)
                                            <div class="col-lg-12 mb-3">
                                                <label class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input" {{($role->hasPermissionTo($per->name))?'checked':''}}  name="permissions[]" value="{{$per->name}}" type="checkbox"/>
                                                    <span class="form-check-label">{{$per->title}}</span>
                                                </label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>
                <div class="card-footer d-flex justify-content-end py-6 px-9">
                    <button type="submit" class="btn btn-primary me-2"  {{$role->editable?'':'disabled'}}>
                        {{__('ویرایش')}}
                    </button>
                    <a href="{{back()}}" class="btn btn-light-primary">{{ __('برگشت') }}</a>
                </div>
            </form>

            <!--end::Form-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Basic info-->


</x-base-layout>
