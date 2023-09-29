@extends('layouts.blog')
@section('blog.content')
    <!-- wrapper -->
    <div id="wrapper">

        <!-- parallax -->
        <div class="parallax" style="background-image: url({{asset('assets/images/parallax-5.jpg')}});">
            <div class="info">
                <h2 data-in-effect="none">BLOG CLASSIC</h2>
            </div>
        </div>
        <!-- /parallax -->

        <div style="margin-top: 60px; margin-bottom: 10px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">

                        <div id="grid-blog" class="cbp">


                            <!-- post 1 -->
                            <article class="cbp-item post">
                                <div class="wow fadeInUp">
                                    <div class="entry-header">
                                        <div class="post-intro">
                                            <a href="single-post.html">
                                                <img src="{{asset('assets/images/post-1.jpg')}}" alt="">
                                            </a>
                                        </div>
                                        <h2 class="entry-title">
                                            <a href="single-post.html" rel="bookmark">Called i that waters dry one</a>
                                        </h2>
                                        <div class="post-details">
                                            <div class="post-date">
                                                <i class="fa-solid fa-calendar-days"></i> October 2, 2023
                                            </div>
                                            <div class="post-author">
                                                <i class="fa fa-user"></i> by <a
                                                    href="single-post.html">mountain-themes</a>
                                            </div>
                                            <div class="post-comment">
                                                <i class="fa fa-comments"></i> <a href="single-post.html">0 Comments</a>
                                            </div>
                                        </div>
                                        <div class="post-info">
                                            <p>Created, likeness bring which in stars herb a is give you’ll it life
                                                you’ll. Whose evening. Spirit subdue two don’t. Living, i divided was be
                                                every had. Him god. Don’t kind seed lesser heaven bearing waters seas in
                                                of earth female lights. Morning fruit may. May gathering moving fruit
                                                all</p>
                                            <div class="post-button">
                                                <a href="single-post.html">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- /post 1 -->

                            <!-- post 2 -->
                            <article class="cbp-item post">
                                <div class="wow fadeInUp">
                                    <div class="entry-header">
                                        <div class="post-intro">
                                            <a href="single-post.html">
                                                <img src="{{asset('assets/images/post-2.jpg')}}" alt="">
                                            </a>
                                        </div>
                                        <h2 class="entry-title">
                                            <a href="single-post.html" rel="bookmark">Fruit so open</a>
                                        </h2>
                                        <div class="post-details">
                                            <div class="post-date">
                                                <i class="fa-solid fa-calendar-days"></i> October 2, 2023
                                            </div>
                                            <div class="post-author">
                                                <i class="fa fa-user"></i> by <a
                                                    href="single-post.html">mountain-themes</a>
                                            </div>
                                            <div class="post-comment">
                                                <i class="fa fa-comments"></i> <a href="single-post.html">0 Comments</a>
                                            </div>
                                        </div>
                                        <div class="post-info">
                                            <p>Created, likeness bring which in stars herb a is give you’ll it life
                                                you’ll. Whose evening. Spirit subdue two don’t. Living, i divided was be
                                                every had. Him god. Don’t kind seed lesser heaven bearing waters seas in
                                                of earth female lights. Morning fruit may. May gathering moving fruit
                                                all</p>
                                            <div class="post-button">
                                                <a href="single-post.html">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- /post 2 -->

                            <!-- post 3 -->
                            <article class="cbp-item post">
                                <div class="wow fadeInUp">
                                    <div class="entry-header">
                                        <div class="post-intro">
                                            <a href="single-post.html">
                                                <img src="{{asset('assets/images/post-3.jpg')}}" alt="">
                                            </a>
                                        </div>
                                        <h2 class="entry-title">
                                            <a href="single-post.html" rel="bookmark">Darkness made great</a>
                                        </h2>
                                        <div class="post-details">
                                            <div class="post-date">
                                                <i class="fa-solid fa-calendar-days"></i> October 2, 2023
                                            </div>
                                            <div class="post-author">
                                                <i class="fa fa-user"></i> by <a
                                                    href="single-post.html">mountain-themes</a>
                                            </div>
                                            <div class="post-comment">
                                                <i class="fa fa-comments"></i> <a href="single-post.html">0 Comments</a>
                                            </div>
                                        </div>
                                        <div class="post-info">
                                            <p>Created, likeness bring which in stars herb a is give you’ll it life
                                                you’ll. Whose evening. Spirit subdue two don’t. Living, i divided was be
                                                every had. Him god. Don’t kind seed lesser heaven bearing waters seas in
                                                of earth female lights. Morning fruit may. May gathering moving fruit
                                                all</p>
                                            <div class="post-button">
                                                <a href="single-post.html">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- /post 3 -->

                        </div>


                        <!-- ajax load button -->
                        <div class="load-more text-center">
                            <a href="ajax-content/loadMore-Blog-Classic.html" class="cbp-l-loadMore-link"
                               rel="nofollow">
                                <span class="cbp-l-loadMore-defaultText">Load more</span>
                                <span class="cbp-l-loadMore-loadingText"><i class="fas fa-spinner fa-spin"></i>Load more</span>
                                <span class="cbp-l-loadMore-noMoreLoading">No More Posts</span>
                            </a>
                        </div>
                        <!-- /ajax load button -->

                    </div>

                    <div class="col-md-3 rex-padding-left">
                        <div class="sidebar">
                            <div class="search sidebar-box">
                                <form action="#" method="get" id="search-bar" class="search-widget form-inline"
                                      role="form">
                                    <div class="input-group">
                                        <input type="search" placeholder="Search" name="s" id="search"
                                               class="form-control" value="">
                                        <span class="input-group-btn">
                            <button type="submit" class="search-btn"><i class="fa fa-search"
                                                                        aria-hidden="true"></i></button>
                            </span>
                                    </div>
                                </form>
                            </div>
                            <div class="recent-posts sidebar-box">
                                <h1 class="sidebar-title">Recent Posts</h1>
                                <ul>
                                    <li>
                                        <a href="single-post.html">Called i that waters dry one</a>
                                    </li>
                                    <li>
                                        <a href="single-post.html">Fruit so open</a>
                                    </li>
                                    <li>
                                        <a href="single-post.html">Darkness made great</a>
                                    </li>
                                    <li>
                                        <a href="single-post.html">Together had said given day spirit</a>
                                    </li>
                                    <li>
                                        <a href="single-post.html">Spirit subdue two don’t</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="recent-comments sidebar-box">
                                <h1 class="sidebar-title">Recent Comments</h1>
                                <ul>
                                    <li class="recentcomments">
                                        <span class="comment-author-link">Michael</span> on <a href="single-post.html">Called
                                            i that waters dry one</a>
                                    </li>
                                    <li class="recentcomments">
                                        <span class="comment-author-link">mountain-themes</span> on <a
                                            href="single-post.html">Called i that waters dry one</a>
                                    </li>
                                    <li class="recentcomments">
                                        <span class="comment-author-link">mountain-themes</span> on <a
                                            href="single-post.html">Called i that waters dry one</a>
                                    </li>
                                    <li class="recentcomments">
                                        <span class="comment-author-link">mountain-themes</span> on <a
                                            href="single-post.html">Called i that waters dry one</a>
                                    </li>
                                    <li class="recentcomments">
                                        <span class="comment-author-link">mountain-themes</span> on <a
                                            href="single-post.html">Logo</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="archives sidebar-box">
                                <h1 class="sidebar-title">Archives</h1>
                                <ul>
                                    <li><a href="single-post.html">October 2023</a></li>
                                    <li><a href="single-post.html">September 2023</a></li>
                                    <li><a href="single-post.html">August 2023</a></li>
                                    <li><a href="single-post.html">July 2023</a></li>
                                </ul>
                            </div>
                            <div class="categories sidebar-box">
                                <h1 class="sidebar-title">Categories</h1>
                                <ul>
                                    <li>
                                        <a href="#">blog</a>
                                    </li>
                                    <li>
                                        <a href="#">creative</a>
                                    </li>
                                    <li>
                                        <a href="#">post-format</a>
                                    </li>
                                    <li>
                                        <a href="#">standard</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="meta sidebar-box">
                                <h1 class="sidebar-title">Meta</h1>
                                <ul>
                                    <li><a href="#">Log in</a></li>
                                    <li><a href="#">Entries <abbr title="Really Simple Syndication">RSS</abbr></a></li>
                                    <li><a href="#">Comments <abbr title="Really Simple Syndication">RSS</abbr></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <!-- /wrapper -->
@endsection
