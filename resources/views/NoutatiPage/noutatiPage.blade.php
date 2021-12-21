@extends('layouts.layout')

@section('content')

<div>
@include('layouts.header')
</div>

<div class="container">

    <div class="card-deck">
        @include('NoutatiPage.noutateItem')
      </div>

</div>

<div class="footerContacte p-5">
    @include('layouts.footer')
</div>

@endsection