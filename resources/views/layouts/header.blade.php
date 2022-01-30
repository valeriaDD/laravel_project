    <!-- Header -->
    <div class="container">
        <header class="d-flex justify-content-md-between py-2 mb-4 ">
          <img src="../Logs/Logo.png" class="text-start" alt="Logo">
  
          <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 mt-3">
            <li><a href='{{ url('/') }}'class="nav-link px-2 link-dark">Acasa</a></li>
            <li><a href="{{ route('noutati') }}" class="nav-link px-2 link-dark">Noutati</a></li>
            <li><a href="{{  url('/services/1') }}" class="nav-link px-2 link-dark">Servicii</a></li>
            <li><a href="{{ route('contacts') }}" class="nav-link px-2 link-dark">Contacte</a></li>
          </ul>
  
          <div class="col-md-3 mt-3 text-end">
            <button type="button" class="btn btn-outline-light btn-sm me-2"><img
                src="../Logs/2560px-Flag_of_Romania 1.png" alt="lng" class="img-fluid"></button>
            <a href="{{ url('/appointments/1') }}"  type="button" id = "myButton" class="btn btn-light">Programeaza-te</a>
          </div>
        </header>
      </div>
      <!-- END Header -->