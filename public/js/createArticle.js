/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!***************************************!*\
  !*** ./resources/js/createArticle.js ***!
  \***************************************/
console.log("Here I am");
var createArticleForm = document.getElementById('create-article-form');
var titleInput = document.getElementById('title');
var descriptionInput = document.getElementById('description');
var categoryInput = document.getElementById('category');
var imageInput = document.getElementById('choose-img');
var imagePreview = document.getElementById('img-preview');

imageInput.onchange = function (event) {
  var file = imageInput.files[0];

  if (typeof file === 'undefined') {
    imagePreview.src = " ";
    imagePreview.hidden = true;
  } else {
    imagePreview.src = URL.createObjectURL(file);
    imagePreview.hidden = false;
  }
};

createArticleForm.onsubmit = function (event) {
  event.preventDefault();
  var formData = new FormData();
  formData.append('title', titleInput.value);
  formData.append('description', descriptionInput.value);
  formData.append('category', categoryInput.value);
  formData.append('image', imageInput.files[0]);
  axios.post('http://localhost:880/api/article/store', formData).then(function (response) {
    successMessage();
  })["catch"](function (error) {
    console.log(error);
  });
};

function successMessage() {
  Swal.fire('Good job!', 'Articolul a fost postat cu success!', 'success');
  createArticleForm.reset();
  imagePreview.hidden = true;
}
/******/ })()
;