let carouselPlace = document.querySelector('[carousel]');
let carouselIndicators = document.querySelector('[carouselIndicators]');
console.log("Carousel Place: " + carouselPlace);

function activeCarouselTemplateHTML(product) {
    return `
<div class="carousel-item active" style="background-image:url('../Logs/${product.image}');
                                         background-repeat: no-repeat;
                                         background-position: 50% 0;
                                         background-size: cover;">
    <div class="d-flex justify-content-around" style="background-color: #DBE2D9; opacity: 0.8">
        <div class="p-2 ms-5" style="opacity: 1; ">
            <div class="col-10">
                <div class="single-box mt-4">
                    <div class="row">
                        <div class="col-5">
                            <div class="time-logo"><img class="rounded" src="../Logs/time-svgrepo-com 1.png">
                                ${product.duration}
                            </div>
                        </div>
                        <div class="col">
                            <h2>${product.name}</h2>
                        </div>
                    </div>
                    <div class="row d-flex">
                        <div class="col-6">
                            <div class="img-area"><img class="rounded" style="max-width: 150px"
                                    src="../Logs/${product.image}" alt="Img"></div>
                        </div>
                        <div class="col-6 mb-3">
                                <p>${product.description}</p>
                            <div class = "d-flex justify-content-end">
                            <a href="/services/${product.id}" class="btn btn-dark btn-sm shadow-lg "> Afla mai mult </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
`
}

function otherCarouselTemplateHTML(product) {
    return `
<div class="carousel-item " style="background-image:url('../Logs/${product.image}');
                                         background-repeat: no-repeat;
                                         background-position: 50% 0;
                                         background-size: cover;">
    <div class="d-flex justify-content-around" style="background-color: #DBE2D9; opacity: 0.8">
        <div class="p-2 ms-5" style="opacity: 1; ">
            <div class="col-10">
                <div class="single-box mt-4">
                    <div class="row">
                        <div class="col-5">
                            <div class="time-logo"><img class="rounded" src="../Logs/time-svgrepo-com 1.png">
                                ${product.duration}
                            </div>
                        </div>
                        <div class="col">
                            <h2>${product.name}</h2>
                        </div>
                    </div>
                    <div class="row d-flex">
                        <div class="col-6">
                            <div class="img-area"><img class="rounded" style="max-width: 150px"
                                    src="../Logs/${product.image}" alt="Img"></div>
                        </div>
                        <div class="col-6 mb-3">
                                <p>${product.description}</p>
                            <div class = "d-flex justify-content-end">
                            <a href="/services/${product.id}" class="btn btn-dark btn-sm shadow-lg "> Afla mai mult </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
`
}

axios.get(`http://localhost:880/api/services/most-popular`)
    .then(function (response) {
        let iterator = 0
        response.data.forEach((product) => {
            if (iterator === 0) {
                carouselPlace.innerHTML += activeCarouselTemplateHTML(product)
            } else {
                carouselPlace.innerHTML += otherCarouselTemplateHTML(product)
            }

            carouselIndicators.innerHTML += ` <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="${iterator}"
                            class="active" aria-current="true" aria-label="Slide ${iterator}"></button>`
            iterator++;
        })

    }).catch(function (error) {
    console.log(error);
})
