@extends('layouts.layout')


@section('content')

    @include('layouts.header')

    <div class="container">


        <div class="row d-flex justify-content-around">
            <div class="col-8 align-self-center">
                <div class="h4 text-center ">Creeaza un articol!</div>
                <div class="p text-center p-3"> Fii activ pe platforma noastra, spune-ne cum a fost sedinta ta</div>
                <form action="" method="POST" name="contact-form">
                    <div class="row justify-content-center">

                        <div class="col-sm-4">
                            <div class="input-group mb-3">
                                @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <input type="email" required="required" value="{{ old('email') }}" name="email"
                                       class="form-control" id="email" placeholder="Email">
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="input-group mb-3">
                                @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <input type="text" required="required" value="{{ old('name') }}" name="name"
                                       class="form-control" id="name" placeholder="Nume">
                            </div>
                        </div>

                        <div class="col-md-8 mb-3">
                            @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <input type="text" name="title" id="title" value="{{old('title')}}" class="form-control"
                                   placeholder="Titlul articolului">
                        </div>

                        <div class="col-md-8">
                            <div class="form-group">
                                <input class="form-control mb-0" type="text" value="Descrierea"
                                       aria-label="Disabled input example" disabled readonly>
                                @error('description')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <textarea type="text" name="description" class="form-control" id="description"
                                          rows="7">{{ old('description') }}</textarea>
                            </div>
                        </div>

                        <div class="col-md-8 mt-3">
                            <div class="form-group">
                                @error('description')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="file" accept="image/*" name="image" class="form-control" id="description">
                                    </div>
                                    <div class="col-md-5">
                                       <p class="text-secondary" >Previzualizarea imaginii</p>
                                    </div>
                                </div>

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

            <div class="col-4 justify-content-start">
                <img src="{{url('/Logs/art.png')}}" class="text-start" alt="Img">
            </div>
        </div>

    </div>

    <div class="footerContacte">
        @include('layouts.footer')
    </div>

@endsection
