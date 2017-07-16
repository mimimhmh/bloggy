@if(count($post->comments) > 0)
    <div class="blog-comments" id="blog-comments">
        <div class="blog-comment-main">
            <h3>
                {{ count($post->comments) }}
                {{(count($post->comments) == 1)? 'Comment' : 'Comments' }}
            </h3>
            @foreach($post->comments as $comment)
                <div class="blog-comment" id="blog-comment{{ $comment->id }}">
                    <div class="wrap-reply" id="wrap{{ $comment->id }}">
                        <a class="comment-avtar">
                            <img src="{{URL::asset($post->user->avatar)}}" alt="image">
                        </a>
                        <div class="comment-text">
                            <h3>{{ $comment->user->name }}</h3>
                            <h5>{{ $comment->created_at->diffForHumans() }}</h5>
                            <p>
                                {{ $comment->body }}
                            </p>
                            <a href="javascript:{}"
                               onclick="triggerComment('reply{{ $comment->id }}', '', false);"
                               class="comment-reply"> Reply
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                            </a>

                        </div>

                        @if(count($comment->replies) >0 )
                            @foreach($comment->replies as $reply)

                                <div class="blog-comment clearfix">
                                    <a class="comment-avtar"><img src="{{URL::asset($reply->user->avatar)}}"
                                                                  alt="image"></a>
                                    <div class="comment-text">
                                        <h3>{{ $reply->user->name }}</h3>
                                        <h5>{{ $reply->created_at->diffForHumans() }}</h5>
                                        <p>
                                            {{ $reply->body }}
                                        </p>
                                        <a href="javascript:{}"
                                           onclick="triggerComment('reply{{ $comment->id }}',
                                                   '{{ $reply->user->name }}', true);"
                                           class="comment-reply reply"> Reply
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>

                            @endforeach
                        @endif

                    </div>
                    <div class="blog-comment clearfix reply-div"
                         style="display: none;"
                         id="reply{{ $comment->id }}">
                        <form method="post" action="/reply/{{ $comment->id }}">
                            {{ csrf_field() }}
                            <textarea name="body"
                                      placeholder=""
                                      class="pts-txt"
                                      id="txt{{ $comment->id }}"
                                      cols="80" rows="2"
                                      required>
                                {{ old('body') }}
                            </textarea>
                            <button type="button" class="reply-btn">Reply</button>
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
                        <button class="reply-btn" disabled> Reply</button>

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

    /**
     *
     */
    let requestSent = false; //stop duplciate submissions
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".reply-btn").click(function () {
        let url = $(this).parent().get(0).getAttribute('action');
        let reply_div = $(this).parents("div")[0];
        let div_id = reply_div.getAttribute('id');
        let reply_area = $(this).siblings('textarea')[0];

        if (!requestSent) {

            requestSent = true;//stop duplciate submissions

            $.ajax({
                type: "POST",
                url: url,
                data: {body: reply_area.value},
                success: function (data) {
                    $('#' + div_id).toggle();
                    appendReply(data);
                    requestSent = false;
                },
                error: function (data) {
                    console.log('Error:', data.responseText);
                }
            });
        }

    });

    function appendReply(data) {

        let template = `
        <div class="blog-comment clearfix">
            <a class="comment-avtar"><img src="{{URL::asset('images/avtar-comment.jpg')}}" alt="image"></a>
                <div class="comment-text">
                <h3>${ data.user_name }</h3>
                <h5>${ data.created_at }</h5>
                <p>
                    ${ data.body }
                </p>
            <a href="javascript:{}"
               onclick="triggerComment('reply${ data.comment_id }', '${ data.user_name }', true);"
               class="comment-reply reply"> Reply
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </a>
                </div>
        </div>
        `;

        let wrap_div = $("#wrap" + data.comment_id);
        wrap_div.append(template);

    }

    let show_flag = false;

    function triggerComment(replyId, replyName, reply_flag) {

        let reply_guest = $('#' + replyId + '-guest');
        let reply = $('#' + replyId);

        @if(! auth()->check())

            reply_guest.show();

                @else
        let textArea = reply.find("textarea");

        show_flag = reply[0].getAttribute('style') === '';

        reply.show();

        if (reply_flag) {
            textArea.val('@' + replyName + ': ');
        }

        if (!reply_flag) {
            textArea.val('');
        }

        textArea.focus();

        @endif

    }

</script>