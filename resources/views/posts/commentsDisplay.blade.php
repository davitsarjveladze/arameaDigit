
@foreach($comments as $comment)

    <div class="display-comment " @if($comment->parent_id != null) style="margin-left:40px;" @endif>
        <strong>{{ $comment->user->name }}</strong>
        <p>{{ $comment->body }}</p>
        <a href="" id="reply"></a>
        <form method="post" action="{{ route('comments.store') }}">
            @csrf
            <div class="form-group">
                <input type="text" style="display: none;" id="{{ $comment->id }}" name="body" class="form-control" />
                <input type="hidden"  name="post_id" value="{{ $post_id }}" />
                <input type="hidden" name="parent_id" value="{{ $comment->id }}" />
            </div>
            <div class="form-group row " style="margin: 0">
                <input type="button"   onclick="ShowHideElement({{$comment->id}})" id="{{$comment->id . 'b'}}" class="btn btn-sm btn-warning mr-1" value="Reply" >
                <input type="button" onclick="UndoReplay({{$comment->id}})" style="display: none"  id="{{$comment->id . 'r'}}" class="btn btn-sm btn-primary mr-1" value="Return" />
                <input type="submit"  style="display: none"  id="{{$comment->id . 's'}}" class="btn btn-sm btn-warning mr-1" value="Reply" />

            </div>
        </form>
        <hr>
        @include('posts.commentsDisplay', ['comments' => $comment->replies])
    </div>
@endforeach

<script>
    function ShowHideElement(id) {
        let CommentInput = document.getElementById(id)
        CommentInput.style = 'display: block';
        let ReplayButton = document.getElementById(id + 'b');
        ReplayButton.style = 'display: none';
        let SubmitButton = document.getElementById(id + 's');
        SubmitButton.style = 'display: block';
        let ReturnButton = document.getElementById(id + 'r');
        ReturnButton.style = 'display : block';
    }
    function UndoReplay(id) {
        let CommentInput = document.getElementById(id)
        CommentInput.style = 'display: none';
        let ReplayButton = document.getElementById(id + 'b');
        ReplayButton.style = 'display: block';
        let SubmitButton = document.getElementById(id + 's');
        SubmitButton.style = 'display: none';
        let ReturnButton = document.getElementById(id + 'r');
        ReturnButton.style = 'display : none';
    }
</script>
