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
                            <h1 class="display-4">{{ $article->title }}</h1>
                            <p class=" p lead">
                                {{ $article->excerpt }}
                            </p>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-center mb-5">
                    <div class="col-6">
                    <img class="img-fluid" src="{{ Storage::url($article->image) }}" alt="First slide" width="600rem">
                    </div>
                </div>


                <div class="container col-lg-12 col-md-12 col-sm-12 text-start">
                    <p>
                        {{ $article->description }}
                    </p>

                    <p class="text-end">Autor: {{ $article->user->name }} | Email: {{ $article->user->email }}
                    </p>
                    <p class="text-end">Categorie: {{ $article->category->name }}</p>
                    <p class="text-end">Publicat: {{\Carbon\Carbon::parse($article->published_at)->format('d/m/Y H:i')}}</p>

                </div>

            </section>
        </div>

        <div class="container mt-5">
            <div class="d-flex justify-content-center row">
                <div class="col-md-8">

                    <div class="h3">Comentarii:</div>


                    <div class="d-flex flex-column comment-section">
                        @if (count($article->comments) != 0)
                            @foreach ($article->comments as $comment)
                                @include('NoutatiPage.blogComments')
                            @endforeach
                        @else
                            No comments Found
                        @endif
                    </div>


                        {{-- @include('NoutatiPage.blogComments') --}}


                    <div class="p-2 mb-3">
                        @include('NoutatiPage.writeComment',compact('article'))
                    </div>

                </div>
            </div>
        </div>


    </div>

    @include('layouts.footer')

@endsection
