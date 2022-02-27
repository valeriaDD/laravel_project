@extends('layouts.layout')

@section('content')
    <div class="FirstPart">
    @include('layouts.header')
    <!-- Intro -->
        <div class="container">
            <div class="row">

                <div class="col-5 align-self-center">
                    <div class="Main">
                        <h1 class="titlu">Ceva inspirational despre masaj</h1>
                        <p class="descriere">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lacinia
                            lobortis
                            ullamcorper. Nam
                            congue varius elit, non volutpat lectus euismod nec. Aliquam molestie tincidunt est. Donec
                            dignissim a
                            lacus ac bibendum.
                        </p>

                        <a href="{{ url('/appointments/1') }}" type="button" id="myButton2" class="btn btn-light mt-3">Consultatie
                            Gratuita!</a>
                    </div>
                </div>

                <div class="col-6 mb-2">
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
        <!-- Our Team Part -->
        <div class="OurTeam">
            <h2 class="h2 ms-5 ps-5 pb-4"><strong>Echipa Noastra</strong></h2>
            <div class="d-flex justify-content-end">
                @foreach($employees as $employee)
                    @include('HomePage.team', compact("employee"))
                @endforeach
            </div>
        </div>
    </div>
    <!-- END Our Team Part -->
    <div class="d-flex mb-5 p-5">
{{--        Article Writing--}}
        @include('HomePage.WriteArticle')
        <div class="col-3 justify-content-center">
            <img src="../Logs/art.png" class="img-fluid" alt="Img">
        </div>

    </div>

    </div>

    <div class="footerContacte">
        @include("layouts.footer")
    </div>

    <script src="{{ asset('js/homePage.js') }} "></script>
@endsection
