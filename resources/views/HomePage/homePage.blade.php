@extends('layouts.layout')

@section('content')
    <div class="FirstPart">
        @include('layouts.header')
        <!-- Intro -->
        <div class="container">
            <div class="row d-flex">

                <div class="col align-self-center">
                    <div class="Main">
                        <h1 class="titlu">Ceva inspirational despre masaj</h1>
                        <p class="descriere">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lacinia
                            lobortis
                            ullamcorper. Nam
                            congue varius elit, non volutpat lectus euismod nec. Aliquam molestie tincidunt est. Donec
                            dignissim a
                            lacus ac bibendum.
                        </p>
                        <a href="{{ url('/appointments/1') }}"   type="button" id="myButton2" class="btn btn-light mt-3">Consultatie Gratuita!</a>
                    </div>
                </div>

                <div class="col mb-2">
                    <img src="../Logs/Ellipse 1.png" class="text-start" alt="Img">
                </div>

            </div>
        </div>
        <!-- END Intro -->
        <div>
            @include('HomePage.carouselOferte')
        </div>
    </div>

    <div>
        @include('HomePage.homeInfo')
    </div>

    <div>
        @include('HomePage.team')
    </div>

    <div>
        @include("layouts.footer")
    </div>
@endsection
