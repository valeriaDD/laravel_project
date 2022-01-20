@extends('layouts.layout')

@section('content')

    <div class="mainServicii">
        @include('layouts.header')

        <div class="contentServicii p-2 pb-5 pt-5">
            <div class="container">
                <div class="d-flex justify-content-center ">
                    
                    @include('ServiciiPage.navServicii', ['allServices' => $allServices])
                    @include('ServiciiPage.cardServicii', ['service' => $service])
                    
                </div>
            </div>
        </div>

    </div>

    @include('layouts.footer')



@endsection
