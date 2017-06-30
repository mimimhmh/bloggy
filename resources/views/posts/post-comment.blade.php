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
                        <a href="javascript:void(0)" class="comment-reply"> Reply <i class="fa fa-angle-right"
                                                                                     aria-hidden="true"></i> </a>
                    </div>
                </div>
            @endforeach
                    {{--<div class="blog-comment clearfix">--}}
                    {{--<a class="comment-avtar"><img src="{{URL::asset('images/avtar-comment.jpg')}}" alt="image"></a>--}}
                    {{--<div class="comment-text">--}}
                    {{--<h3>Edward Doe</h3>--}}
                    {{--<h5>Avril 13, 2017 at 21:11 am</h5>--}}
                    {{--<p>using Leo Ipimpor is that it has a more-or-less normal distribution of letters, as opposed to--}}
                    {{--using 'Content here, content here', making it look like readable English.</p>--}}
                    {{--<a href="javascript:void(0)" class="comment-reply"> Reply <i class="fa fa-angle-right"--}}
                    {{--aria-hidden="true"></i> </a>--}}
                    {{--</div>--}}
                    {{--</div>--}}
        </div>
    </div>
@else
    <hr id="blog-comments">
@endif

<!-- Blog Contact Form Begins -->
<div class="contact-form pad-top-big pad-bottom-big">
    <h3>Leave A Comment</h3>
    <form method="post" action="/posts/{{ $post->id }}/comment">
        {{ csrf_field() }}
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
            <div class="form-group">
                <textarea name="body" placeholder="Comment" required>
                    {{ old('body') }}
                </textarea>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
            <div class="form-group contactus-btn">
                {{--<a href="javascript:void(0)" class="cntct-btn"> Post Comment </a>--}}
                <button type="submit" class="cntct-btn"> Post Comment</button>
            </div>
        </div>
    </form>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">

    </div>
</div>
<!-- Blog Contact Form Ends -->

@include('layouts.errors')