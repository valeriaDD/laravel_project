<div class="col-2">
    <div id="list-example" class="list-group ">
        <div class="h5 ms-5 ps-4 p-2">Servicii</div>

        @foreach ($allServices as $service)
            <a class="list-group-item list-group-item-action" href="/services/{{ $service->id }}"> {{ $service->name }}</a>  
        @endforeach
        
    </div>

</div>


