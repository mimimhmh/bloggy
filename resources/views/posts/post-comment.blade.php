@if(count($post->comments) > 0)
    <div class="blog-comments" id="blog-comments">
        <div class="blog-comment-main">
            <h3>
                {{ count($post->comments) }}
                {{(count($post->comments) == 1)? 'Comment' : 'Comments' }}
            </h3>
            @foreach($post->comments as $comment)
                <div class="blog-comment">
                    <a class="comment-avtar"><img src="{{URL::asset($post->user->picture_url)}}" alt="image"></a>
                    <div class="comment-text">
                        <h3>{{ $comment->user->name }}</h3>
                        <h5>{{ $comment->created_at->diffForHumans() }}</h5>
                        <p>
                            {{ $comment->body }}
                        </p>
                        <a href="javascript:{}"
                           onclick="triggerComment('reply{{ $comment->id }}', false);"
                           class="comment-reply"> Reply
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </a>

                    </div>

                    @if(count($comment->replies) >0 )
                        @foreach($comment->replies as $reply)
                        <div class="blog-comment clearfix">
                            <a class="comment-avtar"><img src="{{URL::asset('images/avtar-comment.jpg')}}" alt="image"></a>
                            <div class="comment-text">
                                <h3>{{ $reply->user->name }}</h3>
                                <h5>{{ $comment->created_at->diffForHumans() }}</h5>
                                <p>
                                    {{ $reply->body }}
                                </p>
                                <a href="javascript:{}"
                                   onclick="triggerComment('reply{{ $comment->id }}', true);"
                                   class="comment-reply reply"> Reply
                                    <i class="fa fa-angle-right" aria-hidden="true"></i> </a>
                            </div>
                        </div>
                        @endforeach
                    @endif


                    <div class="blog-comment clearfix reply-div"
                         style="display: none;"
                         id="reply{{ $comment->id }}">
                        <form method="post" action="/reply/{{ $comment->id }}">
                            {{ csrf_field() }}
                            <textarea name="body"
                                      placeholder=""
                                      class="pts-txt"
                                      id="txt{{ $comment->id }}"
                                      cols="80" rows="2">
                                {{ old('body') }}
                            </textarea>
                            <button type="submit" class="reply-btn">Reply</button>
                        </form>
                    </div>

                    <div class="blog-comment clearfix reply-div"
                         style="display: none;"
                         id="reply{{ $comment->id }}-guest">

                        <div class="blog-comment clearfix reply-div-guest">
                            Please
                            <a href="/login"><strong>login</strong></a>
                            to reply a comment
                        </div>
                        <button class="reply-btn" disabled > Reply </button>

                    </div>
                    <br>
                    <br>
                </div>
            @endforeach

        </div>
    </div>
@else
    <hr id="blog-comments">
@endif

<!-- Blog Contact Form Begins -->
@include('posts.comment')
<!-- Blog Contact Form Ends -->

@include('layouts.errors')

<script>

    let show_flag = false;

    function triggerComment(replyId, reply_flag) {

        let reply_guest = $('#' + replyId + '-guest');
        let reply = $('#' + replyId);

        @if(! auth()->check())

            reply_guest.toggle();

        @else

        let textArea = reply.find("textarea");
        show_flag = reply[0].getAttribute('style') === '';
        if (show_flag && reply_flag) {

        } else {
            reply.toggle();
        }

        if (reply_flag) {
            textArea.text('@wang: ');
        }

        if (!reply_flag) {
            textArea.text('');
        }

        textArea.focus();

        @endif

    }


</script>