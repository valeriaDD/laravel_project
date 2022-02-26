@extends('layouts.layout')

@section('content')
<div class="mainProgramare">

    @include('layouts.header')

    <div class="contentServicii p-2 pb-5 pt-5">
        <div class="container">
            <div class="d-flex justify-content-center ">

                @include('AppointmentsPage.navProgramare', ['allServices' => $allServices])
                @include('AppointmentsPage.cardProgramare', ['service' => $service], ['kinetotherapeut' => $kinetotherapeut])

        </div>
    </div>

</div>

@include('layouts.footer')
    <script src="{{ asset('js/appointment.js') }} "></script>
@endsection
