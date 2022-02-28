/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!**********************************!*\
  !*** ./resources/js/carousel.js ***!
  \**********************************/
var carouselPlace = document.querySelector('[carousel]');
var carouselIndicators = document.querySelector('[carouselIndicators]');
console.log("Carousel Place: " + carouselPlace);

function activeCarouselTemplateHTML(product) {
  return "\n<div class=\"carousel-item active\" style=\"background-image:url('../Logs/".concat(product.image, "');\n                                         background-repeat: no-repeat;\n                                         background-position: 50% 0;\n                                         background-size: cover;\">\n    <div class=\"d-flex justify-content-around\" style=\"background-color: #DBE2D9; opacity: 0.8\">\n        <div class=\"p-2 ms-5\" style=\"opacity: 1; \">\n            <div class=\"col-10\">\n                <div class=\"single-box mt-4\">\n                    <div class=\"row\">\n                        <div class=\"col-5\">\n                            <div class=\"time-logo\"><img class=\"rounded\" src=\"../Logs/time-svgrepo-com 1.png\">\n                                ").concat(product.duration, "\n                            </div>\n                        </div>\n                        <div class=\"col\">\n                            <h2>").concat(product.name, "</h2>\n                        </div>\n                    </div>\n                    <div class=\"row d-flex\">\n                        <div class=\"col-6\">\n                            <div class=\"img-area\"><img class=\"rounded\" style=\"max-width: 150px\"\n                                    src=\"../Logs/").concat(product.image, "\" alt=\"Img\"></div>\n                        </div>\n                        <div class=\"col-6 mb-3\">\n                                <p>").concat(product.description, "</p>\n                            <div class = \"d-flex justify-content-end\">\n                            <a href=\"/services/").concat(product.id, "\" class=\"btn btn-dark btn-sm shadow-lg \"> Afla mai mult </a>\n                            </div>\n                        </div>\n                    </div>\n\n                </div>\n            </div>\n        </div>\n    </div>\n</div>\n");
}

function otherCarouselTemplateHTML(product) {
  return "\n<div class=\"carousel-item \" style=\"background-image:url('../Logs/".concat(product.image, "');\n                                         background-repeat: no-repeat;\n                                         background-position: 50% 0;\n                                         background-size: cover;\">\n    <div class=\"d-flex justify-content-around\" style=\"background-color: #DBE2D9; opacity: 0.8\">\n        <div class=\"p-2 ms-5\" style=\"opacity: 1; \">\n            <div class=\"col-10\">\n                <div class=\"single-box mt-4\">\n                    <div class=\"row\">\n                        <div class=\"col-5\">\n                            <div class=\"time-logo\"><img class=\"rounded\" src=\"../Logs/time-svgrepo-com 1.png\">\n                                ").concat(product.duration, "\n                            </div>\n                        </div>\n                        <div class=\"col\">\n                            <h2>").concat(product.name, "</h2>\n                        </div>\n                    </div>\n                    <div class=\"row d-flex\">\n                        <div class=\"col-6\">\n                            <div class=\"img-area\"><img class=\"rounded\" style=\"max-width: 150px\"\n                                    src=\"../Logs/").concat(product.image, "\" alt=\"Img\"></div>\n                        </div>\n                        <div class=\"col-6 mb-3\">\n                                <p>").concat(product.description, "</p>\n                            <div class = \"d-flex justify-content-end\">\n                            <a href=\"/services/").concat(product.id, "\" class=\"btn btn-dark btn-sm shadow-lg \"> Afla mai mult </a>\n                            </div>\n                        </div>\n                    </div>\n\n                </div>\n            </div>\n        </div>\n    </div>\n</div>\n");
}

axios.get("http://localhost:880/api/services/most-popular").then(function (response) {
  var iterator = 0;
  response.data.forEach(function (product) {
    if (iterator === 0) {
      carouselPlace.innerHTML += activeCarouselTemplateHTML(product);
    } else {
      carouselPlace.innerHTML += otherCarouselTemplateHTML(product);
    }

    carouselIndicators.innerHTML += " <button type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide-to=\"".concat(iterator, "\"\n                            class=\"active\" aria-current=\"true\" aria-label=\"Slide ").concat(iterator, "\"></button>");
    iterator++;
  });
})["catch"](function (error) {
  console.log(error);
});
/******/ })()
;