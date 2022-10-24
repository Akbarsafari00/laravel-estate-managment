<form class="form" method="POST" action="{{ $action }}"
      enctype="multipart/form-data">
    @csrf

    <div class="card-body border-top p-9">
        <x-forms.error-alert/>

        <div class="row mb-6">
            <label class="col-lg-4 col-form-label fw-bold fs-6">{{ __('پروفایل') }}</label>
            <div class="col-lg-8">
                <x-inputs.image-uploader :src="null" name="avatar"/>
            </div>
        </div>

        <!-- Email and Username -->
        <div class="row mb-6">
            <label class="col-lg-4 col-form-label required fw-bold fs-6">{{ __('نام کاربری / ایمیل') }}</label>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-6 fv-row">
                        <input type="text" name="username"
                               class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 @error('username') is-invalid @enderror"
                               placeholder="نام کاربری"/>
                    </div>
                    <div class="col-lg-6 fv-row">
                        <input type="email" name="email"
                               class="form-control form-control-lg form-control-solid @error('email') is-invalid @enderror"
                               placeholder="ایمیل" />
                    </div>
                </div>
            </div>
        </div>

        <!-- Password -->
        <div class="row mb-6">
            <label class="col-lg-4 col-form-label required fw-bold fs-6">{{ __('کلمه عبور') }}</label>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-6 fv-row">
                        <input type="password" name="password"
                               class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 @error('password') is-invalid @enderror"
                               placeholder="کلمه عبور"/>
                    </div>
                    <div class="col-lg-6 fv-row">
                        <input type="password" name="password_confirm"
                               class="form-control form-control-lg form-control-solid @error('password_confirm') is-invalid @enderror"
                               placeholder="تایید کلمه عبور" />
                    </div>
                </div>
            </div>
        </div>

        <!-- Name -->
        <div class="row mb-6">
            <label class="col-lg-4 col-form-label required fw-bold fs-6">{{ __('نام نمایشی') }}</label>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-6 fv-row">
                        <input type="text" name="first_name"
                               class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 @error('first_name') is-invalid @enderror"
                               placeholder="نام"/>
                    </div>
                    <div class="col-lg-6 fv-row">
                        <input type="text" name="last_name"
                               class="form-control form-control-lg form-control-solid @error('last_name') is-invalid @enderror"
                               placeholder="نام خانوادگی" />
                    </div>
                </div>
            </div>
        </div>

        <!-- Company -->
        <div class="row mb-6">
            <label class="col-lg-4 col-form-label fw-bold fs-6">{{ __('شرکت') }}</label>
            <div class="col-lg-8 fv-row">
                <input type="text" name="company" class="form-control form-control-lg form-control-solid @error('company') is-invalid @enderror"
                       placeholder="نام شرکت" value="{{ old('company')}}"/>
            </div>
        </div>

        <!-- Phone -->
        <div class="row mb-6">
            <label class="col-lg-4 col-form-label fw-bold fs-6">
                <span class="required">{{ __('شماره تماس') }}</span>

                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                   title="{{ __('Phone number must be active') }}"></i>
            </label>
            <div class="col-lg-8 fv-row">
                <input type="tel" name="phone" class="form-control form-control-lg form-control-solid @error('phone') is-invalid @enderror"
                       placeholder="شماره تلفن" value="{{ old('phone') }}"/>
            </div>
        </div>

        <!-- Website -->
        <div class="row mb-6">
            <label class="col-lg-4 col-form-label fw-bold fs-6">{{ __('وبسایت شرکت') }}</label>
            <div class="col-lg-8 fv-row">
                <input type="text" name="website" class="form-control form-control-lg form-control-solid @error('website') is-invalid @enderror"
                       placeholder="وبسایت" value="{{ old('website') }}"/>
            </div>
        </div>

        <!-- Country -->
        <div class="row mb-6">
            <label class="col-lg-4 col-form-label fw-bold fs-6">
                <span class="required">{{ __('کشور') }}</span>

                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                   title="{{ __('Country of origination') }}"></i>
            </label>
            <div class="col-lg-8 fv-row">
                <select name="country" aria-label="{{ __('Select a Country') }}" data-control="select2"
                        data-placeholder="{{ __('انتخاب کشور ...') }}"
                        class="form-select form-select-solid form-select-lg fw-bold @error('country') is-invalid @enderror">
                    <option value="">{{ __('انتخاب کشور ...') }}</option>
                    @foreach(\App\Core\Data::getCountriesList() as $key => $value)
                        <option data-kt-flag="{{ $value['flag'] }}"
                                value="{{ $key }}">{{ $value['name'] }}</option>
                    @endforeach
                </select>
            </div>

        </div>

        <!-- Language -->
        <div class="row mb-6">
            <label class="col-lg-4 col-form-label required fw-bold fs-6">{{ __('زبان') }}</label>
            <div class="col-lg-8 fv-row">
                <select name="language" aria-label="{{ __('Select a Language') }}" data-control="select2"
                        data-placeholder="{{ __('انتخاب زبان ...') }}"
                        class="form-select form-select-solid form-select-lg @error('language') is-invalid @enderror">
                    <option value="">{{ __('انتخاب زبان...') }}</option>
                    @foreach(\App\Core\Data::getLanguagesList() as $key => $value)
                        <option data-kt-flag="{{ $value['country']['flag'] }}"
                                value="{{ $key }}" >{{ $value['name'] }}</option>
                    @endforeach
                </select>
                <div class="form-text">
                    {{ __('لطفاً یک زبان ترجیحی، از جمله تاریخ، زمان، و قالب بندی شماره را انتخاب کنید .') }}
                </div>
            </div>
        </div>

        <!-- TimeZone -->
        <div class="row mb-6">
            <label class="col-lg-4 col-form-label required fw-bold fs-6">{{ __('منطقه زمانی') }}</label>
            <div class="col-lg-8 fv-row">
                <select name="timezone" aria-label="{{ __('Select a Timezone') }}" data-control="select2"
                        data-placeholder="{{ __('انتخاب منطقه زمانی ..') }}"
                        class="form-select form-select-solid form-select-lg @error('timezone') is-invalid @enderror">
                    <option value="">{{ __('انتخاب منطقه زمانی ..') }}</option>
                    @foreach(\App\Core\Data::getTimeZonesList() as $key => $value)
                        <option data-bs-offset="{{ $value['offset'] }}"
                                value="{{ $key }}">{{ $value['name'] }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <!-- Currency -->
        <div class="row mb-6">
            <label class="col-lg-4 col-form-label  fw-bold fs-6">{{ __('واحد ارزی') }}</label>
            <div class="col-lg-8 fv-row">
                <select name="currency" aria-label="{{ __('Select a Currency') }}" data-control="select2"
                        data-placeholder="{{ __('انتخاب واحد ارزی ...') }}"
                        class="form-select form-select-solid form-select-lg">
                    <option value="">{{ __('انتخاب واحد ارزی ...') }}</option>
                    @foreach(\App\Core\Data::getCurrencyList() as $key => $value)
                        <option data-kt-flag="{{ $value['country']['flag'] }}"
                                value="{{ $key }}" >
                            <b>{{ $key }}</b>&nbsp;-&nbsp;{{ $value['name'] }}</option>
                    @endforeach
                </select>
            </div>
        </div>

    </div>
    <div class="card-footer d-flex justify-content-end py-6 px-9">
        <button type="submit" class="btn btn-primary me-2">
            {{__('ذخیره')}}
        </button>
        <button type="reset" class="btn btn-light-primary">{{ __('بازنشانی') }}</button>
    </div>
</form>
