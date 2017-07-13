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

                    <div class="blog-comment clearfix">
                        <a class="comment-avtar"><img src="{{URL::asset('images/avtar-comment.jpg')}}" alt="image"></a>
                        <div class="comment-text">
                            <h3>Edward Doe</h3>
                            <h5>Avril 13, 2017 at 21:11 am</h5>
                            <p>using Leo Ipimpor is that it has a more-or-less normal distribution of letters, as
                                opposed to
                                using 'Content here, content here', making it look like readable English.</p>
                            <a href="javascript:{}"
                               onclick="triggerComment('reply{{ $comment->id }}', true);"
                               class="comment-reply reply"> Reply
                                <i class="fa fa-angle-right" aria-hidden="true"></i> </a>
                        </div>
                    </div>

                    <div class="blog-comment clearfix reply-div"
                         style="display: none;"
                         id="reply{{ $comment->id }}">
                        <form action="" href="">
                            <textarea name="reply"
                                      placeholder=""
                                      class="pts-txt"
                                      id="txt{{ $comment->id }}"
                                      cols="80" rows="2">

                            </textarea>
                            <button class="reply-btn">Reply</button>
                        </form>
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

        let reply = $('#' + replyId);
        let textArea = reply.find("textarea");
        show_flag = reply[0].getAttribute('style') === '';
        if (show_flag && reply_flag) {

        } else {
            reply.toggle();
        }

        if (reply_flag) {
            textArea.text('@wang: ');
        }

        if (! reply_flag) {
            textArea.text('');
        }

        textArea.focus();


    }


</script>