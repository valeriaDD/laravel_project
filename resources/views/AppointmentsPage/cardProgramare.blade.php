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
                    <input value="{{ old('surname') }}" name="surname" class="form-control " type="text" placeholder="Prenume">
                </div>
            </div>

            <div class="row justify-content-md-center p-3">

                <div class="col-3 d-flex">
                    <input value="{{ old('email') }}" name="email" class="form-control " type="email" placeholder="Email">
                </div>

                <div class="col-3 d-flex">
                    <input value="{{ old('phone') }}" name="phone" class="form-control " type="text" placeholder="Nr telefon">
                </div>
            </div>


            <div class="row justify-content-md-center p-3">
                <div class="col-6 d-flex ">
                    <select id = "kinetotherapist_id" name="kinetotherapist_id" class="form-select" title="Choose one of the following...">
                        <option value="all">Oricare</option>
                        @foreach ($kinetotherapeut as $choosen)
                            <option value="{{ $choosen->id }}" {{ (collect(old('kinetotherapist_id'))->contains($choosen->id)) ? 'selected':'' }}>{{ $choosen->name }} {{ $choosen->surname }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="row justify-content-md-center p-3">
                <div class="col-3 d-flex ">
                    <input id = "dateID" type="text" value="{{ old('date') }}" name="date" >
                </div>

                <div class="col-3 d-flex ">
                    <input value="{{ old('start_time') }}" name="start_time" step="2" type="time" class='form-control timepicker' required>
                </div>


                <div class="row justify-content-around p-5">
                    <div class="col-2 ">
                        <div class="price">
                            {{ $service->price }} MDL
                        </div>
                    </div>

                    <div class="col-2 ">
                        <button type="submit" class="btn btn-light"> Rezerva </button>
                    </div>

                </div>
            </div>
        </form>
        {{-- END Appointment making form --}}

    </div>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
</div>
