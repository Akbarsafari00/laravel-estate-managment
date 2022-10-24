<x-base-layout>

    {{ theme()->getView('pages/account/_navbar', array('class' => 'mb-5 mb-xl-10', 'info' => $info)) }}

    {{ theme()->getView('pages/account/profile/_profile-details', array('class' => 'mb-5 mb-xl-10', 'info' => $info)) }}

    {{ theme()->getView('pages/account/profile/_signin-method', array('class' => 'mb-5 mb-xl-10', 'info' => $info)) }}

</x-base-layout>
