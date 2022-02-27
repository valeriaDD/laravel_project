/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!********************************************!*\
  !*** ./resources/js/mostPopularArticle.js ***!
  \********************************************/
console.log("miaw");
var popularArticleTemplate = document.querySelector('[popular-articles-template]');
var articleHolderList = document.getElementById('articles-holder');
axios.get("http://localhost:880/api/articles/most-popular").then(function (response) {
  response.data.forEach(function (article) {
    var articleTemplate = popularArticleTemplate.content.cloneNode(true).children[0];
    articleTemplate.querySelector('#title').innerHTML = " <a href=\"/blog/".concat(article.id, "\" className=\"card-title small\"><strong>").concat(article.title, "</strong></a>");
    articleTemplate.querySelector('#excerpt').textContent = article.excerpt;
    articleTemplate.querySelector('#body').innerHTML += " <div class=\"col-5\" style=\"background-image:url('".concat(article.image, "');background-position: center; \" image></div>");
    articleHolderList.append(articleTemplate);
  });
})["catch"](function (error) {
  console.log(error);
});
/******/ })()
;