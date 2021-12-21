<div class="col-10 ms-2 d-flex">
    <div class="card col-12" style="background-color: #DBE2DA;">
       
        {{-- Service Name --}}
        <div class="row align-self-center">
            <div class="cardTitle2" style="margin-top:30px;">
                <h3 class="h4 text-center p-3"> Masaj Terapeutic - Coapse si Abdomen</h3>
            </div>
        </div>
        {{-- END Service Name --}}

        {{-- Appointment making form --}}
        <form>

            <div class="row justify-content-md-center p-3">

                <div class="col-3 d-flex">
                    <input class="form-control " type="text" placeholder="Nume">
                </div>

                <div class="col-3 d-flex">
                    <input class="form-control " type="text" placeholder="Prenume">
                </div>
            </div>

            <div class="row justify-content-md-center p-3">

                <div class="col-3 d-flex">
                    <input class="form-control " type="email" placeholder="Email">
                </div>

                <div class="col-3 d-flex">
                    <input class="form-control " type="text" placeholder="Nr telefon">
                </div>
            </div>


            <div class="row justify-content-md-center p-3">
                <div class="col-6 d-flex ">
                    <select class="form-select" title="Choose one of the following...">
                        <option value="4">Oricare</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>

            <div class="row justify-content-md-center p-3">
                <div class="col-3 d-flex ">
                    <input type="date" class="datepicker_input form-control">
                </div>

                <div class="col-3 d-flex ">
                    <input type="time" class='form-control timepicker' min="09:00" max="19:00"
                        required>
                </div>


                <div class="row justify-content-around p-5">
                    <div class="col-2 ">
                        <div class="price">
                            300 MDL
                        </div>
                    </div>

                    <div class="col-2 ">
                        <button type="submit" class="btn"> Rezerva </button>
                    </div>



                </div>
            </div>
        </form>
        {{-- END Appointment making form --}}
        
    </div>
</div>
