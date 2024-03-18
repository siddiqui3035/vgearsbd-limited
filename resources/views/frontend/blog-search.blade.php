<x-front-app-layout>
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <h3>Search Blog</h3>
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>blog</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--blog area start-->
    <div class="blog_page_section mt-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12">
                    <div class="blog_wrapper">
                        <div class="row">
                            @forelse ($blogs as $blog)
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <article class="single_blog">
                                    <figure>
                                        <div class="blog_thumb">
                                            <a href="{{ route('blog.details', $blog->id) }}"><img src="{{ asset($blog->image) }}" style="height: 250px!important"
                                                    alt=""></a>
                                        </div>
                                        <figcaption class="blog_content">
                                            <h4 class="post_title"><a href="{{ route('blog.details', $blog->id) }}">{{ $blog->title }}</a></h4>
                                            <h4 class="post_title"><a href="{{ route('blog.details', $blog->id) }}">{{ substr($blog->long_description, 0, 60) }}</a></h4>
                                            <div class="articles_date">
                                                <p>{{ isset($blog->created_at) ? $blog->created_at->diffForHumans() : '00/00/0000' }} | <a href="{{ route('blog.details', $blog->id) }}">{{ $blog->category }}</a> </p>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            @empty
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <article class="single_blog">
                                    <figure>
                                        <div class="blog_thumb">
                                            <a href="blog-details.html"><img src="assets/img/blog/blog2.jpg"
                                                    alt=""></a>
                                        </div>
                                        <figcaption class="blog_content">
                                            <h4 class="post_title"><a href="blog-details.html"> dolor sit amet, elit.
                                                    Illo iste sed animi quaerat nobis odit nulla.</a></h4>
                                            <div class="articles_date">
                                                <p>23/06/2021 | <a href="#">eCommerce</a> </p>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <article class="single_blog">
                                    <figure>
                                        <div class="blog_thumb">
                                            <a href="blog-details.html"><img src="assets/img/blog/blog3.jpg"
                                                    alt=""></a>
                                        </div>
                                        <figcaption class="blog_content">
                                            <h4 class="post_title"><a href="blog-details.html">maxime laborum voluptas
                                                    minus, est, unde eaque esse tenetur.</a></h4>
                                            <div class="articles_date">
                                                <p>23/06/2021 | <a href="#">eCommerce</a> </p>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <article class="single_blog">
                                    <figure>
                                        <div class="blog_thumb">
                                            <a href="blog-details.html"><img src="assets/img/blog/blog2.jpg"
                                                    alt=""></a>
                                        </div>
                                        <figcaption class="blog_content">
                                            <h4 class="post_title"><a href="blog-details.html">Lorem ipsum dolor sit
                                                    amet, elit. Impedit, aliquam animi, saepe ex.</a></h4>
                                            <div class="articles_date">
                                                <p>23/06/2021 | <a href="#">eCommerce</a> </p>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <article class="single_blog">
                                    <figure>
                                        <div class="blog_thumb">
                                            <a href="blog-details.html"><img src="assets/img/blog/blog1.jpg"
                                                    alt=""></a>
                                        </div>
                                        <figcaption class="blog_content">
                                            <h4 class="post_title"><a href="blog-details.html">dolor sit amet, elit.
                                                    Illo iste sed animi quaerat nobis odit nulla.</a></h4>
                                            <div class="articles_date">
                                                <p>23/06/2021 | <a href="#">eCommerce</a> </p>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <article class="single_blog">
                                    <figure>
                                        <div class="blog_thumb">
                                            <a href="blog-details.html"><img src="assets/img/blog/blog3.jpg"
                                                    alt=""></a>
                                        </div>
                                        <figcaption class="blog_content">
                                            <h4 class="post_title"><a href="blog-details.html">maxime laborum voluptas
                                                    minus, est, unde eaque esse tenetur.</a></h4>
                                            <div class="articles_date">
                                                <p>23/06/2021 | <a href="#">eCommerce</a> </p>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <article class="single_blog">
                                    <figure>
                                        <div class="blog_thumb">
                                            <a href="blog-details.html"><img src="assets/img/blog/blog2.jpg"
                                                    alt=""></a>
                                        </div>
                                        <figcaption class="blog_content">
                                            <h4 class="post_title"><a href="blog-details.html">Lorem ipsum dolor sit
                                                    amet, elit. Impedit, aliquam animi, saepe ex.</a></h4>
                                            <div class="articles_date">
                                                <p>23/06/2021 | <a href="#">eCommerce</a> </p>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <article class="single_blog">
                                    <figure>
                                        <div class="blog_thumb">
                                            <a href="blog-details.html"><img src="assets/img/blog/blog1.jpg"
                                                    alt=""></a>
                                        </div>
                                        <figcaption class="blog_content">
                                            <h4 class="post_title"><a href="blog-details.html">dolor sit amet, elit.
                                                    Illo iste sed animi quaerat nobis odit nulla.</a></h4>
                                            <div class="articles_date">
                                                <p>23/06/2021 | <a href="#">eCommerce</a> </p>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <article class="single_blog">
                                    <figure>
                                        <div class="blog_thumb">
                                            <a href="blog-details.html"><img src="assets/img/blog/blog3.jpg"
                                                    alt=""></a>
                                        </div>
                                        <figcaption class="blog_content">
                                            <h4 class="post_title"><a href="blog-details.html">maxime laborum voluptas
                                                    minus, est, unde eaque esse tenetur.</a></h4>
                                            <div class="articles_date">
                                                <p>23/06/2021 | <a href="#">eCommerce</a> </p>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            @endforelse
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12">
                    <div class="blog_sidebar_widget">
                        <div class="widget_list widget_search">
                            <div class="widget_title">
                                <h3>Search</h3>
                            </div>
                            <form action="{{ route('blogs.search') }}" method="post">
                                @csrf
                                <input placeholder="Search..." name="search" type="text">
                                <button type="submit">search</button>
                            </form>
                        </div>
                        <div class="widget_list widget_post">
                            <div class="widget_title">
                                <h3>Recent Blogs</h3>
                            </div>
                            @forelse ($blogs as $blog)
                            <div class="post_wrapper">
                                <div class="post_thumb">
                                    <a href="{{ route('blog.details', $blog->id) }}"><img src="{{ asset($blog->image) }}" style="height: 50px!important"
                                        alt=""></a></a>
                                </div>
                                <div class="post_info">
                                    <h4><a href="blog-details.html">Blog image post</a></h4>
                                    <span>{{ isset($blog->created_at) ? $blog->created_at->diffForHumans() : '00/00/0000' }}</span>
                                </div>
                            </div>
                            @empty
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
                        {{-- <div class="widget_list widget_tag">
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
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--blog area end-->

    <!--blog pagination area start-->
    {{-- <div class="blog_pagination">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="pagination">
                        <ul>
                            <li class="current">1</li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li class="next"><a href="#">next</a></li>
                            <li><a href="#">>></a></li>
                            {{ $blogs->links() }}
                        </ul>
                        {{ $blogs->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!--blog pagination area end-->
</x-front-app-layout>
