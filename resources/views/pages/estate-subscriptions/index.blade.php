<x-base-layout>

    <!--begin::Card-->
    <div class="card">
        <!--begin::Card body-->
        <div class="card-body pt-6">
            @include('pages.estate-subscriptions._table')
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Card-->

    @section("toolbar_actions")

        @if(auth()->user()->hasPermissionTo('estate-subscription create'))
        <div data-bs-toggle="tooltip" data-bs-placement="left" data-bs-trigger="hover" title=" اشتراک جدید">
            <a href="{{ route('estate-subscriptions.create') }}" class="btn btn-sm btn-primary fw-bolder" >
                اشتراک جدید
            </a>
        </div>
        @endif

    @stop

</x-base-layout>
