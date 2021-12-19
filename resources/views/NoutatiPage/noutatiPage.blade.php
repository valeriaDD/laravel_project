@extends('layouts.layout')

@section('content')

<div>
@include('layouts.header')
</div>

<div class="container">

    <div class="card-deck">
        <div class="card border-success mt-5 mb-5">
          <img class="card-img-top" src="https://pujasanskaram.com/361/new-shop-opening.jpg" alt="card-img-top img-fluid">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <a href="./Noutate.html" class="nav-link px-2 link-success">Afla mai multe</a> </div>
          </div>
        </div>
        <div class="card border-success mb-5">
          <img class="card-img-top" src="https://breaksandbites.files.wordpress.com/2016/11/coming-soon-image.png" alt="Card image cap" >
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            <a href="./Noutate.html" class="nav-link px-2 link-success">Afla mai multe</a>                </div>
        </div>
        <div class="card border-success mb-5">
          <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSlKttHZ13KUWHhJLWqGFpyuVGE4xCDtZ8XrtVraF9fDPwgp0gzoFxjz761rP70n3fnEd0&usqp=CAU" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
            <a href="./Noutate.html" class="nav-link px-2 link-success">Afla mai multe</a>                 </div>
        </div>
      </div>

</div>

<div class="footerContacte p-5">
    @include('layouts.footer')
</div>

@endsection