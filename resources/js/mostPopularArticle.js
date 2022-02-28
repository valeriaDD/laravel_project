const popularArticleTemplate = document.querySelector('[popular-articles-template]');
const articleHolderList =  document.getElementById('articles-holder');

axios.get(`http://localhost:880/api/articles/most-popular`)
    .then(function (response) {
        response.data.forEach((article) =>{
            let articleTemplate = popularArticleTemplate.content.cloneNode(true).children[0];
            articleTemplate.querySelector('#title').innerHTML =` <a href="/blog/${article.id}" className="card-title small"><strong>${article.title}</strong></a>`
            articleTemplate.querySelector('#excerpt').textContent = article.excerpt;
            articleTemplate.querySelector('#body').innerHTML += ` <div class="col-5" style="background-image:url('${article.image}');background-position: center; " image></div>`
            articleHolderList.append(articleTemplate);
        })
    })
    .catch(function (error) {
        console.log(error);
    })
