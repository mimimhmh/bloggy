@extends ('layouts.fullmaster')

@section ('content')

    <!-- Post -->
    <article class="post">
        <header>
            <div class="title">
                <h2>{{ $post->title }}</h2>
                <p>{{ $post->abstract }}</p>
            </div>
            <div class="meta">
                <time class="published"
                      datetime="{{ $post->created_at->toDateString() }}">
                    {{ $post->created_at->toFormattedDateString() }}
                </time>
                <a href="#" class="author"><span class="name">{{ $post->user->name }}</span>
                    <img src="{{URL::asset($post->user->picture_url)}}" alt="{{ $post->user->name }}" /></a>
            </div>
        </header>
        <div class="image featured"><img src="{{URL::asset($post->large_img_url)}}" alt="" /></div>

        {{ $post->body }}

        <footer>

            <div class="social actions">
                <ul class="icons">
                    <li><a href="#" target="_blank"><i class="fa fa-facebook"></i> </a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-instagram"></i> </a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-pinterest"></i> </a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i> </a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-tporblr"></i> </a></li>


                </ul>
            </div>

            <ul class="stats">
                <li><a href="#">General</a></li>
                <li><a href="#" class="icon fa-heart">28</a></li>
                <li><a href="#" class="icon fa-comment">128</a></li>
            </ul>
        </footer>
    </article>

    <!-- Pagination -->
    <ul class="actions pagination">
        <li><a href="" class="disabled button big previous">Previous Post</a></li>
        <li><a href="#" class="button big next">Next Post</a></li>
    </ul>
    <div class="post-related post-block">
        <h4 class="heading"><span>You Might Also Like</span></h4>
        <div class="related">
            <ul class="row">
                <li class="item col-lg-4 col-md-4 col-sm-4">
                    <div class="thporb">
                        <a href="#"><img src="{{URL::asset('images/relate-post01.jpg')}}" alt="post relate"></a>
                    </div>
                    <h5 class="item-title">
                        <a href="#">Seitan High Life reprehenderit consectetur cupidatat kogi</a>
                    </h5>
                    <time class="published" datetime="2017-10-06">October 7, 2017</time>
                </li>
                <li class="item col-lg-4 col-md-4 col-sm-4">
                    <div class="thporb">
                        <a href="#"><img src="{{URL::asset('images/relate-post02.jpg')}}" alt="post relate"></a>
                    </div>
                    <h5 class="item-title">
                        <a href="#">Seitan High Life reprehenderit consectetur cupidatat kogi</a>
                    </h5>
                    <time class="published" datetime="2017-10-06">October 7, 2017</time>
                </li>
                <li class="item col-lg-4 col-md-4 col-sm-4">
                    <div class="thporb">
                        <a href="#"><img src="{{URL::asset('images/relate-post03.jpg')}}" alt="post relate"></a>
                    </div>
                    <h5 class="item-title">
                        <a href="#">Seitan High Life reprehenderit consectetur cupidatat kogi</a>
                    </h5>
                    <time class="published" datetime="2017-10-06">October 7, 2017</time>
                </li>
            </ul>
        </div>
    </div>

    <!-- Blog Comments Begins -->
    <div class="blog-comments">
        <div class="blog-comment-main">
            <h3>4 Comments</h3>
            <div class="blog-comment">
                <a class="comment-avtar"><img src="{{URL::asset('images/avtar-comment.jpg')}}" alt="image"></a>
                <div class="comment-text">
                    <h3>CATHERINE DOE</h3>
                    <h5>Avril 13, 2017 at 21:11 am</h5>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking</p>
                    <a href="javascript:void(0)" class="comment-reply"> Reply <i class="fa fa-angle-right" aria-hidden="true"></i> </a>
                </div>
                <div class="blog-comment clearfix">
                    <a class="comment-avtar"><img src="{{URL::asset('images/avtar-comment.jpg')}}" alt="image"></a>
                    <div class="comment-text">
                        <h3>Edward Doe</h3>
                        <h5>Avril 13, 2017 at 21:11 am</h5>
                        <p>using Leo Ipimpor is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                        <a href="javascript:void(0)" class="comment-reply"> Reply <i class="fa fa-angle-right" aria-hidden="true"></i> </a>
                    </div>
                </div>
            </div>
            <div class="blog-comment">
                <a class="comment-avtar"><img src="{{URL::asset('images/avtar-comment.jpg')}}" alt="image"></a>
                <div class="comment-text">
                    <h3>CATHERINE DOE</h3>
                    <h5>Avril 13, 2017 at 21:11 am</h5>
                    <p>packages and web page editors now use Leo Ipimpor as their default model text, and a search for 'lorem impor' will uncover many web site</p>
                    <a href="javascript:void(0)" class="comment-reply"> Reply <i class="fa fa-angle-right" aria-hidden="true"></i> </a>
                </div>
                <div class="blog-comment clearfix">
                    <a class="comment-avtar"><img src="{{URL::asset('images/avtar-comment.jpg')}}" alt="image"></a>
                    <div class="comment-text">
                        <h3>Edward Doe</h3>
                        <h5>Avril 13, 2017 at 21:11 am</h5>
                        <p>packages and web page editors now use Leo Ipimpor as their default model text, and a search for 'lorem impor' will uncover many web site</p>
                        <a href="javascript:void(0)" class="comment-reply"> Reply <i class="fa fa-angle-right" aria-hidden="true"></i> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Pagination Ends -->
    <!-- Blog Contact Form Begins -->
    <div class="contact-form pad-top-big pad-bottom-big">
        <h3>Leave A Reply</h3>
        <form>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 no-pad-left">
                <div class="form-group">
                    <input type="text" placeholder="Name" />
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 no-pad-right">
                <div class="form-group">
                    <input type="email" placeholder="Email" />
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
                <div class="form-group">
                    <textarea placeholder="Comment"></textarea>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
                <div class="form-group contactus-btn">
                    <a href="javascript:void(0)" class="cntct-btn"> Post Comment </a>
                </div>
            </div>
        </form>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">

        </div>
    </div>
    <!-- Blog Contact Form Ends -->

@endsection