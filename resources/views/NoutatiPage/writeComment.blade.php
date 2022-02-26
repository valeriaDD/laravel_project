@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('comment.store',$article->id)}}" method="POST">
    @csrf
    <label class="h3 mt-3 mb-4">Posteaza un comentariu:</label>
    <div class="d-flex flex-row align-items-start mb-2">
        <input value="{{old('author_email')}}" type="email" name="author_email" class="form-control"
               placeholder="Email">
    </div>

    <div class="d-flex flex-row align-items-start">
        <textarea rows="3" name="messageText" class="form-control ml-1 shadow-none textarea"
                  placeholder="Comentariu">
            {{old('messageText')}}
        </textarea>
    </div>

    <div class="d-flex flex-row align-items-between mt-2">
        <div class="col">
            <button class="btn btn-light " type="submit">Posteaza</button>
        </div>
    </div>

</form>
