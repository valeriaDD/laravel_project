@extends('layouts.layout')

@section('content')

    <div class="mainNouatate">
        <div>
            @include('layouts.header')
        </div>
        <div class="noutate">
            <section class="post-content-section">
                <div class="container mt-5">
                    <div class="jumbotron jumbotron-fluid">
                        <div class="container">
                            <h1 class="display-4">Article Title goes here</h1>
                            <p class=" p lead">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="container mb-5">
                    <img class="card-img-top2  p-2"
                        src="https://breaksandbites.files.wordpress.com/2016/11/coming-soon-image.png" alt="First slide"
                        sizes="3">
                </div>


                <div class="container col-lg-12 col-md-12 col-sm-12 text-start">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>

                    <p class="text-end">Autor: AutorName | Email: autor.email@gmail.com </p>
                    <p class="text-end">Categorie: CategoryName</p>
                    <p class="text-end">Publicat: 23.12.2021 17:52</p>

                </div>

            </section>
        </div>

        <div class="container mt-5">
            <div class="d-flex justify-content-center row">
                <div class="col-md-8">

                    <div class="h3">Comentarii:</div>

                    <div class="d-flex flex-column comment-section">
                        @include('NoutatiPage.blogComments')
                    </div>

                    <div class="p-2 mb-3">
                        @include('NoutatiPage.writeComment')
                    </div>

                </div>
            </div>
        </div>


    </div>

    @include('layouts.footer')

@endsection
