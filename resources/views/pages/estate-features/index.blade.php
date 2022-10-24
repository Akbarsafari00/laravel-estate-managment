<x-base-layout>

    <!--begin::Card-->
    <div class="card">
        <!--begin::Card body-->
        <div class="card-body pt-6">
            @include('pages.estate-features._table')
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Card-->

    @section("toolbar_actions")

        @if(auth()->user()->hasPermissionTo('estate-feature create'))
        <div data-bs-toggle="tooltip" data-bs-placement="left" data-bs-trigger="hover" title=" امکانات جدید">
            <a href="{{ route('estate-features.create') }}" class="btn btn-sm btn-primary fw-bolder" >
                امکانات جدید
            </a>
        </div>
        @endif

    @stop

</x-base-layout>
