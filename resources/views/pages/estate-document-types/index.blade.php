<x-base-layout>

    <!--begin::Card-->
    <div class="card">
        <!--begin::Card body-->
        <div class="card-body pt-6">
            @include('pages.estate-document-types._table')
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Card-->

    @section("toolbar_actions")

        @if(auth()->user()->hasPermissionTo('estate-document-type create'))
        <div data-bs-toggle="tooltip" data-bs-placement="left" data-bs-trigger="hover" title=" سند ملک جدید">
            <a href="{{ route('estate-document-types.create') }}" class="btn btn-sm btn-primary fw-bolder" >
                سند ملک جدید
            </a>
        </div>
        @endif

    @stop

</x-base-layout>
