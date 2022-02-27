@extends('layouts.layout')

@section('content')


    <div class="container-blog">
        <div>
            @include('layouts.header')
        </div>


        <div class="row d-flex justify-content-around">
            <div class="col-8 shadow-lg my-2">
                <div class="row d-flex justify-content-center">
                    <div class="col">
                        <div class="d-flex justify-content-start">
                            <a href="/blog/article/create" class="btn btn-success m-2"><img
                                    src="{{url('/Logs/pen-icon.jpg')}}" style="height: 20px; width: 20px;">Creaza un
                                articol</a>
                        </div>
                        <form method="GET" action="/blog">
                            <div class="row">
                                <div class="col">
                                    <select class="form-select m-2" name="categories">
                                        @foreach ( $category as $categories )
                                            <option value="{{ $categories->id }}"
                                                    @if( $filter['categories'] == $categories->id) selected
                                                @endif>{{  $categories->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col">
                                    <select class="form-select m-2" name="sort">
                                        <option value="DESC" {{ $filter['sort'] === 'DESC' ? 'selected' : ''}}selected>
                                            Latest
                                        </option>
                                        <option value="ASC" @if( $filter['sort'] === 'ASC' ) selected @endif>Older
                                        </option>
                                    </select>
                                </div>

                                <div class="col-2">
                                    <button class="btn btn-secondary m-2">Apply</button>
                                </div>
                            </div>
                        </form>

                    </div>

                    <div class="row row-fluid row-cols-1 row-cols-sm-2 row-cols-md-3 ">
                        @foreach ($articles as $article)
                            @include('NoutatiPage.noutateItem', ['article' => $article])
                        @endforeach
                    </div>

                    <div class="row">
                        {{ $articles->links() }}
                    </div>

                </div>
            </div>
            <div class="col-4">
                <div>
                    <div class="d-flex align-items-center p-3 my-2 rounded shadow-lg " style="height: 5rem">
                        <div class="row">
                            <div class="col-3">
                                <img src="{{url('/Logs/Logo2.png')}}">
                            </div>
                            <div class="col text-success">
                                <h1 class="h6 mb-0">Cele mai populare articole</h1>
                                <small>Lotus</small>
                            </div>
                        </div>
                    </div>

                    <div class="my-3 p-3 rounded  shadow-lg" id="articles-holder">

                        <template popular-articles-template>
                            <div class="card border-success mb-3" style="max-width: 20rem;">
                                <div class="row" id = "body">

{{--                                    <div class="col-5" style="background-image:url({{url('/Logs/doc1.png')}} );--}}
{{--                                        background-position: center; " image>--}}
{{--                                    </div>--}}

                                    <div class="col-7 ms-0">
                                        <div class="card-body">
                                            <div id="title">
                                                <a href="#" class="card-title small"><strong>Primary card title</strong></a>
                                            </div>
                                            <p id="excerpt" class="card-text small">Some quick example text to build on
                                                the card title and make up the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </template>

                    </div>
                </div>
            </div>

        </div>

    </div>


    </div>

    <div class="footerContacte p-5">
        @include('layouts.footer')
    </div>

    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="{{asset('js/mostPopularArticle.js')}}"></script>

@endsection
