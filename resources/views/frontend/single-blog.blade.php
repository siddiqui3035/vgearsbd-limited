<x-front-app-layout>
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <h3>Blog</h3>
                        <ul>
                            <li><a href="index.html">home</a></li>
                            <li>blog details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->
    <!--blog body area start-->
    <div class="blog_details">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12">
                    <!--blog grid area start-->
                    <div class="blog_wrapper blog_wrapper_details">
                        <article class="single_blog">
                            <figure>
                                <div class="post_header">
                                    <h3 class="post_title">{{ $blog->title }}</h3>
                                    <div class="blog_meta">
                                        <p>Posted by : <a href="#">admin</a> / On : <a
                                                href="#">{{ $blog->created_at->format('Y m D') }}</a> / In : <a
                                                href="#">{{ $blog->category }}</a></p>
                                    </div>
                                </div>
                                <div class="blog_thumb">
                                    <a href="#"><img src="{{ asset($blog->image) }}" alt=""></a>
                                </div>
                                <figcaption class="blog_content">
                                    <div class="post_content">
                                        {{-- <p>{{$blog->short_description}}</p> --}}
                                        <blockquote>
                                            <p>{{ $blog->short_description }}</p>
                                        </blockquote>
                                        <p>{{ $blog->long_description }}</p>
                                    </div>
                                    {{-- <div class="entry_content">
                                        <div class="post_meta">
                                            <span>Tags: </span>
                                            <span><a href="#">, fashion</a></span>
                                            <span><a href="#">, t-shirt</a></span>
                                            <span><a href="#">, white</a></span>
                                        </div>

                                        <div class="social_sharing">
                                            <p>share this post:</p>
                                            <ul>
                                                <li><a href="#" title="facebook"><i
                                                            class="fa fa-facebook"></i></a></li>
                                                <li><a href="#" title="twitter"><i class="fa fa-twitter"></i></a>
                                                </li>
                                                <li><a href="#" title="pinterest"><i
                                                            class="fa fa-pinterest"></i></a></li>
                                                <li><a href="#" title="google+"><i
                                                            class="fa fa-google-plus"></i></a></li>
                                                <li><a href="#" title="linkedin"><i
                                                            class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div> --}}
                                </figcaption>
                            </figure>
                        </article>
                        {{-- <div class="related_posts">
                            <h3>Related posts</h3>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <article class="single_related">
                                        <figure>
                                            <div class="related_thumb">
                                                <a href="blog-details.html"><img src="assets/img/blog/blog1.jpg"
                                                        alt=""></a>
                                            </div>
                                            <figcaption class="related_content">
                                                <h4><a href="#">Post with Gallery</a></h4>
                                                <div class="blog_meta">
                                                    <span class="author">By : <a href="#">admin</a> / </span>
                                                    <span class="meta_date"> April 11, 2019 </span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <article class="single_related">
                                        <figure>
                                            <div class="related_thumb">
                                                <a href="blog-details.html"><img src="assets/img/blog/blog2.jpg"
                                                        alt=""></a>
                                            </div>
                                            <figcaption class="related_content">
                                                <h4><a href="#">Post with Audio</a></h4>
                                                <div class="blog_meta">
                                                    <span class="author">By : <a href="#">admin</a> / </span>
                                                    <span class="meta_date"> April 11, 2019 </span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <article class="single_related">
                                        <figure>
                                            <div class="related_thumb">
                                                <a href="blog-details.html"><img src="assets/img/blog/blog3.jpg"
                                                        alt=""></a>
                                            </div>
                                            <figcaption class="related_content">
                                                <h4><a href="#">Maecenas ultricies</a></h4>
                                                <div class="blog_meta">
                                                    <span class="author">By : <a href="#">admin</a> / </span>
                                                    <span class="meta_date"> April 11, 2019 </span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="comments_box">
                            <h3>3 Comments </h3>
                            <div class="comment_list">
                                <div class="comment_thumb">
                                    <img src="assets/img/blog/comment3.png.jpg" alt="">
                                </div>
                                <div class="comment_content">
                                    <div class="comment_meta">
                                        <h5><a href="#">Admin</a></h5>
                                        <span>October 16, 2018 at 1:38 am</span>
                                    </div>
                                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure</p>
                                    <div class="comment_reply">
                                        <a href="#">Reply</a>
                                    </div>
                                </div>

                            </div>
                            <div class="comment_list list_two">
                                <div class="comment_thumb">
                                    <img src="assets/img/blog/comment3.png.jpg" alt="">
                                </div>
                                <div class="comment_content">
                                    <div class="comment_meta">
                                        <h5><a href="#">Demo</a></h5>
                                        <span>October 16, 2018 at 1:38 am</span>
                                    </div>
                                    <p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur</p>
                                    <div class="comment_reply">
                                        <a href="#">Reply</a>
                                    </div>
                                </div>
                            </div>
                            <div class="comment_list">
                                <div class="comment_thumb">
                                    <img src="assets/img/blog/comment3.png.jpg" alt="">
                                </div>
                                <div class="comment_content">
                                    <div class="comment_meta">
                                        <h5><a href="#">Admin</a></h5>
                                        <span>October 16, 2018 at 1:38 am</span>
                                    </div>
                                    <p>Quisque orci nibh, porta vitae sagittis sit amet, vehicula vel mauris. Aenean at
                                    </p>
                                    <div class="comment_reply">
                                        <a href="#">Reply</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="comments_form">
                            <h3>Leave a Reply </h3>
                            <p>Your email address will not be published. Required fields are marked *</p>
                            <form action="#">
                                <div class="row">
                                    <div class="col-12">
                                        <label for="review_comment">Comment </label>
                                        <textarea name="comment" id="review_comment"></textarea>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <label for="author">Name</label>
                                        <input id="author" type="text">

                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <label for="email">Email </label>
                                        <input id="email" type="text">
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <label for="website">Website </label>
                                        <input id="website" type="text">
                                    </div>
                                </div>
                                <button class="button" type="submit">Post Comment</button>
                            </form>
                        </div> --}}
                    </div>
                    <!--blog grid area start-->
                </div>
                <div class="col-lg-3 col-md-12">
                    <div class="blog_sidebar_widget">
                        {{-- <div class="widget_list widget_search">
                            <div class="widget_title">
                                <h3>Search</h3>
                            </div>
                            <form action="#">
                                <input placeholder="Search..." type="text">
                                <button type="submit">search</button>
                            </form>
                        </div> --}}
                        {{-- <div class="widget_list comments">
                            <div class="widget_title">
                                <h3>Recent Comments</h3>
                            </div>
                            <div class="post_wrapper">
                                <div class="post_thumb">
                                    <a href="blog-details.html"><img src="assets/img/blog/comment2.png.jpg"
                                            alt=""></a>
                                </div>
                                <div class="post_info">
                                    <span> <a href="#">demo</a> says:</span>
                                    <a href="blog-details.html">Quisque semper nunc</a>
                                </div>
                            </div>
                            <div class="post_wrapper">
                                <div class="post_thumb">
                                    <a href="blog-details.html"><img src="assets/img/blog/comment2.png.jpg"
                                            alt=""></a>
                                </div>
                                <div class="post_info">
                                    <span><a href="#">admin</a> says:</span>
                                    <a href="blog-details.html">Quisque orci porta...</a>
                                </div>
                            </div>
                            <div class="post_wrapper">
                                <div class="post_thumb">
                                    <a href="blog-details.html"><img src="assets/img/blog/comment2.png.jpg"
                                            alt=""></a>
                                </div>
                                <div class="post_info">
                                    <span><a href="#">demo</a> says:</span>
                                    <a href="blog-details.html">Quisque semper nunc</a>
                                </div>
                            </div>
                        </div> --}}
                        <div class="widget_list widget_post">
                            <div class="widget_title">
                                <h3>Recent Posts</h3>
                            </div>
                            @forelse ($recentBlogs as $recentBlog)
                                <div class="post_wrapper">
                                    <div class="post_thumb">
                                        <a href="{{ route('blog.details', $recentBlog->id) }}"><img
                                                src="{{ asset($recentBlog->image) }}" alt=""></a>
                                    </div>
                                    <div class="post_info">
                                        <h4><a
                                                href="{{ route('blog.details', $recentBlog->id) }}">{{ $recentBlog->title }}</a>
                                        </h4>
                                        <span>{{ $recentBlog->created_at->diffForHumans() }}</span>
                                    </div>
                                </div>
                            @empty
                                <div class="post_wrapper">
                                    <div class="post_thumb">
                                        <a href="blog-details.html"><img src="assets/img/blog/blogs1.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="post_info">
                                        <h4><a href="blog-details.html">Blog image post</a></h4>
                                        <span>March 16, 2018 </span>
                                    </div>
                                </div>
                                <div class="post_wrapper">
                                    <div class="post_thumb">
                                        <a href="blog-details.html"><img src="assets/img/blog/blogs2.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="post_info">
                                        <h4><a href="blog-details.html">Post with Gallery</a></h4>
                                        <span>March 16, 2018 </span>
                                    </div>
                                </div>
                                <div class="post_wrapper">
                                    <div class="post_thumb">
                                        <a href="blog-details.html"><img src="assets/img/blog/blogs3.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="post_info">
                                        <h4><a href="blog-details.html">Post with Audio</a></h4>
                                        <span>March 16, 2018 </span>
                                    </div>
                                </div>
                            @endforelse
                        </div>
                        <div class="widget_list widget_categories">
                            <div class="widget_title">
                                <h3>Categories</h3>
                            </div>
                            @forelse ($blogs as $blog)
                            <ul>
                                <li><a href="#">{{ $blog->category }}</a></li>
                            </ul>
                            @empty
                            <ul>
                                <li><a href="#">Audio</a></li>
                                <li><a href="#">Company</a></li>
                                <li><a href="#">Gallery</a></li>
                                <li><a href="#">Image</a></li>
                                <li><a href="#">Other</a></li>
                                <li><a href="#">Travel</a></li>
                            </ul>
                            @endforelse
                        </div>
                        <div class="widget_list widget_tag">
                            <div class="widget_title">
                                <h3>Tag products</h3>
                            </div>
                            <div class="tag_widget">
                                <ul>
                                    <li><a href="#">asian</a></li>
                                    <li><a href="#">brown</a></li>
                                    <li><a href="#">euro</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--blog section area end-->
</x-front-app-layout>
