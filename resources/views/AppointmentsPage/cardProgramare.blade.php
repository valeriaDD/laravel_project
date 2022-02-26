<div class="col-10 ms-2 d-flex">

    <div class="card col-12" style="background-color: #DBE2DA;">

        {{-- Service Name --}}

        <div class="row align-self-center">
            <a class="btn" href="/services/{{ $service->id }}">
                <div class="cardTitle2" style="margin-top:30px;">
                    <h3 class="h4 text-center p-3"> {{ $service->name }}</h3>
                </div>
            </a>
        </div>

        {{-- END Service Name --}}

        {{-- Appointment making form --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('appointment.store', $service->id) }}" method="POST" name="appointment-form">
            @csrf

            <div class="row justify-content-md-center p-3">

                <div class="col-3 d-flex">
                    <input value="{{ old('name') }}" name="name" class="form-control " type="text" placeholder="Nume">
                </div>

                <div class="col-3 d-flex">
                    <input value="{{ old('surname') }}" name="surname" class="form-control " type="text"
                           placeholder="Prenume">
                </div>
            </div>

            <div class="row justify-content-md-center p-3">

                <div class="col-3 d-flex">
                    <input value="{{ old('email') }}" name="email" class="form-control " type="email"
                           placeholder="Email">
                </div>

                <div class="col-3 d-flex">
                    <input value="{{ old('phone') }}" name="phone" class="form-control " type="text"
                           placeholder="Nr telefon">
                </div>
            </div>


            <div class="row justify-content-md-center p-3">
                <div class="col-6 d-flex ">
                    <select id="kinetotherapist_id" name="kinetotherapist_id" class="form-select"
                            title="Choose one of the following...">
                        <option value=" " disabled>Alege specialistul</option>
                        @foreach ($kinetotherapeut as $choosen)
                            <option
                                value="{{ $choosen->id }}" {{ (collect(old('kinetotherapist_id'))->contains($choosen->id)) ? 'selected':'' }}>{{ $choosen->name }} {{ $choosen->surname }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="row justify-content-md-center p-3">
                <div class="col-3 d-flex ">
                    <input id="dateID" type="text" value="{{ old('date') }}" class='form-control date' name="date">
                    <span class="input-group-append">
                        <span class="input-group-text bg-light d-block">
                            <img src="{{url('./Logs/calendar.png')}}">
                        </span>
                    </span>
                </div>

                <div class="col-3 d-flex ">
                    <select id="time" value="{{ old('start_time') }}" name="start_time"
                            class='form-select' required>
                        <option value="" disabled>Alege Ora</option>
                    </select>
                    <span class="input-group-append">
                        <span class="input-group-text bg-light d-block">
                            <img src="{{url('./Logs/time_app_icon.png')}}">
                        </span>
                    </span>

                </div>


                <div class="row justify-content-around p-5">
                    <div class="col-2 ">
                        <div class="price">
                            {{ $service->price }} MDL
                        </div>
                    </div>

                    <div class="col-2 ">
                        <button type="submit" class="btn btn-light"> Rezerva</button>
                    </div>

                </div>
            </div>
        </form>
        {{-- END Appointment making form --}}

    </div>
{{--    <script type="text/javascript" src="jquery.min.js"></script>--}}
{{--    <link href="jquery.timepicker.css">--}}
    <script
        src="https://code.jquery.com/jquery-1.10.2.js"
        integrity="sha256-it5nQKHTz+34HijZJQkpNBIHsjpV8b6QzMJs9tmOBSo="
        crossorigin="anonymous"></script>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"
        integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    ></script>

    </div>
