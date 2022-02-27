@extends('layouts.layout')

@section('content')
    <div class="container">
        @include('layouts.header')
        <div class="row d-flex ">
            <div class="col-7 ">
                <div class="h4 text-center ">Creeaza un articol!</div>
                <div class="p text-center pt-3"> Fii activ pe platforma noastra, spune-ne cum a fost sedinta ta</div>
                <div class="p text-center text-secondary pb-3"> Totul ramane anonim</div>

                <form id="create-article-form">
                    <div class="row justify-content-center">
                        <div class="col-md-8 mb-3">
                            <input type="text" name="title" id="title" value="{{old('title')}}" class="form-control"
                                   placeholder="Titlul articolului" required>
                        </div>

                        <div class="col-md-8 mb-3">

                            <select type="text" name="category" id="category" value="{{old('category')}}"
                                    class="form-select"
                                    placeholder="Titlul articolului" required>
                                <option disabled selected> Alege Categoria</option>
                                @foreach($categories as $category)
                                    <option
                                        value="{{$category->id}}" {{ (collect(old('category'))->contains($category->id)) ? 'selected':'' }} > {{$category->name}} </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-8">
                            <div class="form-group">
                                <input class="form-control mb-0" type="text" value="Descrierea"
                                       aria-label="Disabled input example" disabled readonly>
                                <textarea type="text" name="description" class="form-control" id="description"
                                          rows="7" required>{{ old('description') }}</textarea>
                            </div>
                        </div>

                        <div class="col-md-8 mt-3">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-8">
                                        <input type="file" accept="image/*" name="image" class="form-control"
                                               id="choose-img" required>
                                    </div>
                                    <div class="col-md-3">
                                        <img class="img-fluid" id="img-preview" hidden >
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="d-flex flex-row-reverse p-3">
                            <div class="col-sm-2 ">
                                @csrf
                                <button type="submit" class="btn btn-dark">Posteaza</button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>

            <div class="col-5 align-self-center">
                <img src="{{url('/Logs/art.png')}}" class="img-fluid" alt="Img">
            </div>
        </div>



    </div>
    <div class="footerContacte">
        @include('layouts.footer')
    </div>

    <script src="{{asset('js/createArticle.js')}}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection
