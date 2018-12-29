@extends("layouts.front")

@section("content")

<!--Start of slider section-->
<section id="slider">
    <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">


            @if($sliders)
                @foreach ($sliders as $key => $slider)
                @if($key == 0)
                @php($active = "active")
                @else
                @php($active = "")
                @endif
                <div class="item {{ $active }}">
                    <div class="slider_overlay">
                        <img src="{{ url('public/uploads/sliders/'.$slider->image) }}" style="height: 390px;width: 100%;" alt="{{ $slider->title }}">
                        <div class="carousel-caption">
                            <div class="slider_text">
                                <h3>{{ $slider->title }}</h3>
                                <p>{{ $slider->content }}</p>
                                @if($slider->url != "")
                                    <a href="{{ $slider->url }}" class="custom_btn">Read More</a>
                                @endif
                                <a href="{{ url('/articles/submit/'.$slider->id) }}" class="custom_btn">Submit article</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            @endif



        </div>
        <!--End of Carousel Inner-->
    </div>
</section>
<!--end of slider section-->


<!--Start of portfolio-->
<section id="portfolio" class="text-center">
    <div class="col-md-12">
        <div class="portfolio_title">
            <h2>our latest work</h2>
        </div>
    </div>
    <!--End of col-md-2-->
    <div class="colum">
        <div class="container">
            <div class="row">
                <form action="/">
                    <ul id="portfolio_menu" class="menu portfolio_custom_menu">
                        <li>
                            <button data-filter="*" class="my_btn btn_active">Show All</button>
                        </li>

                        @if($categories)
                        @foreach ($categories as $category)
                            <li>
                                <button data-filter=".{{ str_replace(' ', '-', $category->title) }}" class="my_btn">{{ $category->title }}</button>
                            </li>
                        @endforeach
                        @endif
                    </ul>
                    <!--End of portfolio_menu-->
                </form>
                <!--End of Form-->
            </div>
            <!--End of row-->
        </div>
        <!--End of container-->
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="notes">

                        @if($journals)
                            @foreach ($journals as $journal)
                            <div class="note {{ str_replace(' ', '-', $journal->category->title) }}" style="width: 20%;">
                                <img src="{{ url('public/uploads/journals/'.$journal->image) }}" alt="" style="height: 230px;margin-bottom: 23px;">
                                <p>{{ $journal->title }}</p>
                            </div>
                            @endforeach
                        @endif



                        <!--<div class="note red">-->
                            <!--&lt;!&ndash;<div class="img_overlay">&ndash;&gt;-->
                                <!--&lt;!&ndash;<p>Hong Kong Physiotherapy Journal (HKPJ)</p>&ndash;&gt;-->
                            <!--&lt;!&ndash;</div>&ndash;&gt;-->
                            <!--<img src="assets/img/journals/showCoverImage%20(3).jpeg" alt="">-->
                            <!--<p>Hong Kong Physiotherapy Journal (HKPJ)</p>-->
                        <!--</div>-->
                    </div>
                    <!--End of notes-->
                </div>
                <!--End of col-lg-12-->
            </div>
            <!--End of row-->
        </div>
        <!--End of container-->
    </div>
    <!--End of colum-->
</section>
<!--end of portfolio-->




<!--Start of volunteer-->
<section id="volunteer">
    <div class="container">
        <div class="row vol_area">
            <div class="col-md-8">
                <div class="volunteer_content">
                    <h3>If you want to publish letter</h3>
                    <p>Fill the following form to complete your subscription request.</p>
                </div>
            </div>
            <!--End of col-md-8-->
            <div class="col-md-3 col-md-offset-1">
                <div class="join_us">
                    <a href="" class="vol_cust_btn"> Register now!</a>
                </div>
            </div>
            <!--End of col-md-3-->
        </div>
        <!--End of row and vol_area-->
    </div>
    <!--End of container-->
</section>
<!--end of volunteer-->


<!--start of event-->
<section id="event">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="event_header text-center">
                    <h2>Featured articles</h2>
                </div>
            </div>
        </div>
        <!--End of row-->
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6 zero_mp">
                        <div class="event_item">
                            <div class="event_img">
                                <img src="assets/img/articles/cover.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 zero_mp">
                        <div class="event_item">
                            <div class="event_text text-center">
                                <a href=""><h4>ELECTRICAL RESISTIVITY MEASUREMENTS: A REVIEW</h4></a>
                                <h6>15 May 2018</h6>
                                <p>World-wide interest on the use of ceramic materials for aerospace and other advanced engineering applications, has led to the need for inspection techniques capable of detecting unusually electrical.</p>
                                <a href="" class="event_btn">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of row-->
                <div class="row">
                    <div class="col-md-6 zero_mp">
                        <div class="event_item">
                            <div class="event_text text-center">
                                <a href=""><h4>SOCIAL CONFLICT AND SOCIAL INNOVATION</h4></a>
                                <h6>04 Jan 2018 </h6>
                                <p>While the spot light in recent years is focusing on the merits of social enterprises and their contributions to social innovation, this paper tries to look from a different angle on social innovation</p>
                                <a href="" class="event_btn">read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 zero_mp">
                        <div class="event_item">
                            <div class="event_img">
                                <img src="assets/img/articles/cover%20(1).jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of row-->
            </div>
            <!--End of col-md-8-->
            <div class="col-md-4">
                <div class="event_news">
                    <div class="event_single_item fix">
                        <div class="event_news_img floatleft">
                            <img src="assets/img/articles/cover%20(2).jpg" alt="">
                        </div>
                        <div class="event_news_text">
                            <a href="#"><h4>Analytical Techniques for Decision Making on Information Security for Big Data Breaches</h4></a>
                            <p>In the big data processes, management and analytics are primary areas.</p>
                        </div>
                    </div>
                </div>
                <div class="event_news">
                    <div class="event_single_item fix">
                        <div class="event_news_img floatleft">
                            <img src="assets/img/articles/technology.05.issue-01.cover.jpg" alt="">
                        </div>
                        <div class="event_news_text">
                            <a href="#"><h4>Recent advances in nonbiofouling</h4></a>
                            <p>In the last decade microfabrication processes including rapid prototyping techniques ...</p>
                        </div>
                    </div>
                </div>
                <div class="event_news">
                    <div class="event_single_item fix">
                        <div class="event_news_img floatleft">
                            <img src="assets/img/articles/cover%20(3).jpg" alt="">
                        </div>
                        <div class="event_news_text">
                            <a href="#"><h4>More Than Six Elements Per Wavelength</h4></a>
                            <p>Choosing the right number and type of elements in modern commercial finite element tools is a challenging task. </p>
                        </div>
                    </div>
                </div>
                <div class="event_news">
                    <div class="event_single_item fix">
                        <div class="event_news_img floatleft">
                            <img src="assets/img/articles/cover%20(4).jpg" alt="">
                        </div>
                        <div class="event_news_text">
                            <a href="#"><h4>Generation and coherent detection of QPSK</h4></a>
                            <p>We demonstrate an optical quadrature phase-shift keying (QPSK) signal transmitter and an optical receiver ...</p>
                        </div>
                    </div>
                </div>
                <!--<div class="event_news">-->
                    <!--<div class="event_single_item fix">-->
                        <!--<div class="event_news_img floatleft">-->
                            <!--<img src="assets/img/articles/cover%20(5).jpg" alt="">-->
                        <!--</div>-->
                        <!--<div class="event_news_text">-->
                            <!--<a href="#"><h4>Open Access DIGITAL TRANSFORMATION OF BUSINESS MODELS</h4></a>-->
                            <!--<p>The purpose of this paper is to clarify the definition of digital transformation (DT).</p>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->
            </div>
            <!--End of col-md-4-->
        </div>
        <!--End of row-->
    </div>
    <!--End of container-->
</section>
<!--end of event-->



<!--Start of Purches-->
<section id="purches">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="purches_title">You can see all journals.......</h2>
            </div>
            <div class="col-md-2 col-md-offset-4">
                <a href="" class="purches_btn">Journals</a>
            </div>
        </div>
        <!--End of row-->
    </div>
    <!--End of container-->
</section>
<!--End of purches-->


<!--Start of blog-->
<section id="blog">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="latest_blog text-center">
                    <h2>Most viewed</h2>
                </div>
            </div>
        </div>
        <!--End of row-->
        <div class="row">
            <div class="col-md-3">
                <div class="blog_news">
                    <div class="single_blog_item">
                        <div class="blog_img">
                            <img src="assets/img/articles/6928.cover.jpg" alt="">
                        </div>
                        <div class="blog_content">
                            <a href=""><h3>The Rainbow and the Worm</h3></a>
                            <div class="expert">
                                <div class="left-side text-left">
                                    <p class="left_side">
                                        <span class="clock"><i class="fa fa-clock-o"></i></span>
                                        <span class="time">Aug 19, 2016</span>
                                        <a href=""><span class="admin"><i class="fa fa-user"></i> Admin</span></a>
                                    </p>
                                </div>
                            </div>

                            <p class="blog_news_content">
                                This highly unusual book began as a serious inquiry into Schrödinger's question, “What is life?”, and as a celebration of life itself.
                            </p>
                            <a href="" class="blog_link">read more</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--End of col-md-4-->
            <div class="col-md-3">
                <div class="blog_news">
                    <div class="single_blog_item">
                        <div class="blog_img">
                            <img src="assets/img/articles/showCoverImage.jpeg" alt="">
                        </div>
                        <div class="blog_content">
                            <a href=""><h3>China's Change</h3></a>
                            <div class="expert">
                                <div class="left-side text-left">
                                    <p class="left_side">
                                        <span class="clock"><i class="fa fa-clock-o"></i></span>
                                        <span class="time">Aug 19, 2016</span>
                                        <a href=""><span class="admin"><i class="fa fa-user"></i> Admin</span></a>
                                    </p>
                                </div>
                            </div>

                            <p class="blog_news_content">
                                China's Change injects timely, original ideas into the world's most important, if confused, debate over how to manage the twin challenges ...
                            </p>
                            <a href="" class="blog_link">read more</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--End of col-md-4-->
            <div class="col-md-3">
                <div class="blog_news">
                    <div class="single_blog_item">
                        <div class="blog_img">
                            <img src="assets/img/articles/showCoverImage%20(1).jpeg" alt="">
                        </div>
                        <div class="blog_content">
                            <a href=""><h3>Services Marketing</h3></a>
                            <div class="expert">
                                <div class="left-side text-left">
                                    <p class="left_side">
                                        <span class="clock"><i class="fa fa-clock-o"></i></span>
                                        <span class="time">Aug 19, 2016</span>
                                        <a href=""><span class="admin"><i class="fa fa-user"></i> Admin</span></a>
                                    </p>
                                </div>
                            </div>

                            <p class="blog_news_content">
                                Services Marketing: People, Technology, Strategy is the eighth edition of the globally leading textbook for Services Marketing by Jochen Wirtz ...
                            </p>
                            <a href="" class="blog_link">read more</a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-3">
                <div class="blog_news">
                    <div class="single_blog_item">
                        <div class="blog_img">
                            <img src="assets/img/articles/showCoverImage%20(1).jpeg" alt="">
                        </div>
                        <div class="blog_content">
                            <a href=""><h3>Services Marketing</h3></a>
                            <div class="expert">
                                <div class="left-side text-left">
                                    <p class="left_side">
                                        <span class="clock"><i class="fa fa-clock-o"></i></span>
                                        <span class="time">Aug 19, 2016</span>
                                        <a href=""><span class="admin"><i class="fa fa-user"></i> Admin</span></a>
                                    </p>
                                </div>
                            </div>

                            <p class="blog_news_content">
                                Services Marketing: People, Technology, Strategy is the eighth edition of the globally leading textbook for Services Marketing by Jochen Wirtz ...
                            </p>
                            <a href="" class="blog_link">read more</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--End of col-md-4-->
        </div>
        <!--End of row-->
    </div>
    <!--End of container-->
</section>
<!-- end of blog-->


@stop
