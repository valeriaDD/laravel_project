<div class="col-10 ms-2 d-flex align-self-stretch">

    <div class="card  col-12 d-flex align-self-stretch ">

        <div class="row align-self-center mt-3">
            <div class="cardTitle">
                <div class="col align-center">
                    <h3 class="h4 text-center"> {{ $service->name }} </h3>
                </div>
            </div>
        </div>


        <div class="row d-flex p-3 justify-content-around">
            <div class="col-6 ">
                <div class="time-logo h5 fw-bold">
                    <img class="rounded"
                         src="../Logs/time-svgrepo-com 1.png"> {{\Carbon\Carbon::parse($service->duration)->format('H:i')}}
                </div>
                <div class="h5 mt-3 fw-bold">Descriere:</div>
                <p class="infoServicii">
                    {{ $service->description }}
                </p>

            </div>

            <div class="col-4 mb-2 align-self-center">
                <img src="{{url('./Logs/'.$service->image)}}" style="max-height: 280px" class="img-fluid shadow-lg rounded" alt="Img">
            </div>

        </div>


        <div class="pret-programare">

            <div class="row justify-content-evenly p-1 mt-5">
                <div class="col-2  ">
                    <div class="price">
                        {{  $service->price  }} MDL
                    </div>
                </div>

                <div class="col-4 ">
                    <a href="/appointments/{{ $service->id }}" type="submit" id='myButton2'
                       class="btn btn-outline-secondary"> Programeaza-te </a>
                </div>

            </div>
        </div>


    </div>
</div>
