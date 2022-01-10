@extends('layouts.layout')


@section('content')

    @include('layouts.header')

    <div class="container">


        <div class="row d-flex justify-content-around">


            <div class="col-4 justify-content-start">
                <img src="../Logs/art.png" class="text-start" alt="Img">
            </div>

            <div class="col-8 align-self-center">
                <div class="h4 text-center ">Contactati-ne!</div>
                <div class="p text-center p-3"> Daca aveti ceva neclaritati, nu ezitati sa ne contactati! </div>
                <form action="{{ route('contacts.send') }}" method="POST" name="contact-form">
                    <div class="row justify-content-center">

                        <div class="col-sm-4">
                            <div class="input-group mb-3">
                                @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                                <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="input-group mb-3">
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <input type="text" name="name" class="form-control" id="name" placeholder="Nume">
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="form-group">
                                <input class="form-control mb-0" type="text" value="Mesaj"
                                    aria-label="Disabled input example" disabled readonly>
                                    @error('message')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <textarea name="message" class="form-control" id="message" rows="4"></textarea>
                            </div>
                        </div>

                        <div class="d-flex flex-row-reverse p-3">
                            <div class="col-sm-2 ">
                                @csrf
                                <button type="submit" class="btn btn-dark">Send</button>
                            </div>
                        </div>


                    </div>

                </form>
            </div>
        </div>

    </div>

    <div class="footerContacte">
        @include('layouts.footer')
    </div>

@endsection
