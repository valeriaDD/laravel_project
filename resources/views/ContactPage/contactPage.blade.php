
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
                <form>
                    <div class="row justify-content-center">

                        <div class="col-sm-4">
                            <div class="input-group mb-3">

                                <input type="email" class="form-control" id="exampleFormControlInput1"
                                    placeholder="Email">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="input-group mb-3">

                                <input type="text" class="form-control" id="exampleFormControlInput1"
                                    placeholder="Nume">
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="form-group">
                                <input class="form-control mb-0" type="text" value="Mesaj"
                                    aria-label="Disabled input example" disabled readonly>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
                            </div>
                        </div>

                        <div class="d-flex flex-row-reverse p-3">
                            <div class="col-sm-2 ">
                                <button type="button" class="btn btn-dark" id="submit">Send</button>
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
