<div class="d-flex flex-column comment-section">

   
    <div class="d-felx mt-3">
        <div>
            <div class= "d-flex flex-column justify-content-start ml-2">
             <span class="d-block font-weight-bold ">{{ $comment->author_email}}</span> 
                <span class="date text-black-50">Postat: {{ $comment->updated_at }}</span>
            </div>
        </div>

        <div class="mt-2">
            <p class="comment-text">
                {{ $comment->message}}
            </p>
        </div>
    </div>

</div>
