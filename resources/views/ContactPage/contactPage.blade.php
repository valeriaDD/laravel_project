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
                @if (session('status'))
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="alert alert-success" role="alert" >
                        {{ session('status') }}
                    </div>
                @endif
                <form action="{{ route('contacts.send') }}" method="POST" name="contact-form">
                    <div class="row justify-content-center">

                        <div class="col-sm-4">
                            <div class="input-group mb-3">
                                @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                                <input type="email" required="required" value="{{ old('email') }}" name="email" class="form-control" id="email" placeholder="Email">
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="input-group mb-3">
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <input type="text" required="required" value="{{ old('name') }}" name="name" class="form-control" id="name" placeholder="Nume">
                            </div>
                        </div>

                        <div class="col-md-8 mb-3">
                            @error('gender')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            <select  class="form-control" name="gender">
                                <option value="">Selecteaza genul</option>
                                <option @if(old('gender') === 'Feminin') selected @endif value="Feminin" >Feminin</option>
                                <option @if(old('gender') === 'Masculin') selected @endif value="Masculin" >Masculin</option>
                                <option @if(old('gender') === 'Altele') selected @endif value="Altele" >Altele</option>
                            </select>
                        </div>

                        <div class="col-md-8">
                            <div class="form-group">
                                <input class="form-control mb-0" type="text" value="Mesaj"
                                    aria-label="Disabled input example" disabled readonly>
                                    @error('messageText')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <textarea type="text" name="messageText" class="form-control" id="messageText" rows="4">{{ old('messageText') }}</textarea>
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

    <script>
        $(document).ready(function() {
            setTimeout(function() {
                $(".alert").alert('close');
            }, 3000);
        });
    </script>

@endsection


