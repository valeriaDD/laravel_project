@extends('layouts.layout')

@section('content')

    <div>
        @include('layouts.header')
    </div>

    <div class="container">

        <div class="row d-flex justify-content-center">
            <div class="col">
                <form method="GET"  action="/blog">
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
                    <option value="DESC" {{ $filter['sort'] === 'DESC' ? 'selected' : ''}}selected>Latest</option>
                    <option value="ASC" @if( $filter['sort'] === 'ASC' ) selected @endif>Older</option>
                </select>
            </div>
            <div class="col">
                <button class="btn btn-secondary m-2">Apply changes</button>
            </div>
            </form>
        </div>

        <div class="card-deck">

            @foreach ($articles as $article)
                @include('NoutatiPage.noutateItem', ['article' => $article])
            @endforeach
        </div>

        <div class="row">
            {{ $articles->links() }}
        </div>

    </div>

    <div class="footerContacte p-5">
        @include('layouts.footer')
    </div>

@endsection
