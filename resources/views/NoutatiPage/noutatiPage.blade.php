@extends('layouts.layout')

@section('content')

    <div>
        @include('layouts.header')
    </div>

    <div class="container">
        <div class="card-deck">

            @foreach ($articles as $article)
                    @include('NoutatiPage.noutateItem', ['article' => $article])
            @endforeach
        </div>

    </div>

    <div class="footerContacte p-5">
        @include('layouts.footer')
    </div>

@endsection
