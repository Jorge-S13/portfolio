@extends('layouts.main')
@section('main.single')
    <!-- wrapper -->
    <div id="wrapper">

        <div class="container">
            <div class="row">


                <div class="col-md-7">

                    <div class="gallery-projects">
                        <div class="overlay-box">
                            <a href="{{@asset('assets/images/portfolio-item-3.jpg')}}" title="Portfolio Single" class="showcase" data-rel="lightcase:gallery">
                                <div class="overlay-wrap">
                                    <div class="overlay">
                                        <i class="fa fa-search"></i>
                                    </div>
                                </div>
                                <img src="{{@asset('assets/images/portfolio-item-3.jpg')}}" alt="">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-5 single-project">
                    <h3 style="font-size: 24px;margin-bottom: 15px; ">Ceramic</h3>
                    <p>Created, likeness bring which in stars herb a is give you’ll it life you’ll. Whose evening. Spirit subdue two don’t. Living, i divided was be every had. Him god. Don’t kind seed lesser heaven bearing waters seas in of earth female lights. Morning fruit may. </p>
                    <p>Together had said given day spirit. Land years upon, created winged all. Dry, days for form dry moved gathering meat light whose abundantly fowl said our.</p>
                    <div class="project-details">
                        <h4>Project details</h4>
                        <h5>Author</h5>
                        <p>John Smith</p>
                        <h5>Client</h5>
                        <p>Elon Musk</p>
                        <h5>Project date</h5>
                        <p>31 December 2023</p>
                        <h5>Project location</h5>
                        <p>California, USA</p>
                        <h5>Share</h5>
                        <ul class="share-icons">
                            <!-- TWITTER -->
                            <li>
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            </li>
                            <!-- FACEBOOK -->
                            <li>
                                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                            </li>
                            <!-- PINTEREST -->
                            <li>
                                <a href="#"><i class="fa-brands fa-pinterest"></i></a>
                            </li>
                            <!-- LINKEDIN -->
                            <li>
                                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                            </li>
                            <!-- REDDIT -->
                            <li>
                                <a href="#"><i class="fa-brands fa-reddit"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>

            <div id="comments" style="display: block;">
                <div class="form-comment">

                    <h3 id="reply-title" class="comment-reply-title">Leave a Reply</h3>
                    <form id="commentform" class="comment-form" novalidate>
                        <div class="form-group">
                            <span class="required"></span><textarea id="comment" name="comment" rows="3" required="required" placeholder="Comment"></textarea>
                        </div>
                        <span class="required"></span>
                        <input id="author" name="author" type="text" value="" required="required" placeholder="Name" />
                        <span class="required"></span>
                        <input id="email" name="email" type="text" value="" required="required" placeholder="Email" />
                        <p class="form-submit">
                            <input name="submit" type="submit" id="submit" class="submit" value="Submit Comment" />
                        </p>
                    </form>
                </div>
            </div>

            <!-- NAVIGATION -->
            <div class="portfolio-single-nav">
                <div class="single-navigation">
                    <div class="next-button"><a href="portfolio-single-3.html" class="single-link-nav">Next project<i class="fa fa-angle-right"></i></a></div>
                    <div class="prev-button"><a href="portfolio-single-1.html" class="single-link-nav"><i class="fa fa-angle-left"></i>Prev project</a></div>
                </div>
            </div>
            <!-- END NAVIGATION -->
        </div>

    </div>
    <!-- /wrapper -->
@endsection
