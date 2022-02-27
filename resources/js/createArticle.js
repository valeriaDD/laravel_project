console.log("Here I am")


const createArticleForm = document.getElementById('create-article-form');
const titleInput = document.getElementById('title');
const descriptionInput =document.getElementById('description');
const categoryInput = document.getElementById('category');
const imageInput = document.getElementById('choose-img');
const imagePreview = document.getElementById('img-preview');


imageInput.onchange = (event) => {
    const file = imageInput.files[0];

    if (typeof file === 'undefined') {
        imagePreview.src = " "
        imagePreview.hidden = true;
    } else {
        imagePreview.src = URL.createObjectURL(file)
        imagePreview.hidden = false;
    }
}


createArticleForm.onsubmit = (event) =>{
    event.preventDefault();

    const formData = new FormData();
    formData.append('title', titleInput.value)
    formData.append('description', descriptionInput.value)
    formData.append('category', categoryInput.value)
    formData.append('image', imageInput.files[0])

    axios.post('http://localhost:880/api/article/store', formData)
        .then(function (response) {

            successMessage()
        })
        .catch(function (error) {
            console.log(error);
        });
}

function successMessage(){
    Swal.fire(
        'Good job!',
        'Articolul a fost postat cu success!',
        'success'
    )
    createArticleForm.reset();
    imagePreview.hidden = true;
}


