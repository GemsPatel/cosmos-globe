@include('front.'.$headerInfo->slug.'.elements.header')

<div class="container">
    <div class="row mt-5 mb-5">
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-6 mt-2 mb-2">
                    <img src="{{url('storage/app/'.$blogArr->image)}}" alt="business visa cosmos globe" class="w-100" style="border-radius: 50%;">
                </div>
                <div class="col-md-6 mt-2 mb-2">
                    <div class="coaching-details__benefit-content">
                        <h3 class="coaching-details__benefit-title">{{$blogArr->title}}</h3>
                        <p class="coaching-details__benefit-text">{{$blogArr->short_description}}</p>
                        <ul class="coaching-details__benefit-points list-unstyled ml-0">
                            @foreach ( json_decode( $blogArr->bullet_points ) as $point )
                                <li>
                                    <div class="icon icon-svg">
                                        <span aria-hidden="true" class="icon-check"></span>
                                    </div>
                                    <div class="text">
                                        <p class="coaching-details__benefit-title default">{{$point}}</div>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                </div>
            </div>
            
            <div>
                {!! $blogArr->description !!}
            </div>

            <div class="elementor-widget-container mb-3">
                <h2 class="elementor-heading-title elementor-size-default">Online Visa Process</h2>
            </div>
            <div class="elementor-widget-container mt-3">
                <ul class="visa-details__visa-process-list list-unstyled ml-0">
                    <li>
                        <div class="icon-box">
                            <div class="icon icon-svg">
                                <span aria-hidden="true" class="   icon-application-1"></span>
                            </div>
                        </div>
                        <div class="title">
                            <p>Select
                                <br> Visa Type
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="icon-box">
                            <div class="icon icon-svg">
                                <span aria-hidden="true" class="   icon-application"></span>
                            </div>
                        </div>
                        <div class="title">
                            <p>Fill
                                <br> Online Form
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="icon-box">
                            <div class="icon icon-svg">
                                <span aria-hidden="true" class="   icon-submit"></span>
                            </div>
                        </div>
                        <div class="title">
                            <p>Submit
                                <br> Application
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="icon-box">
                            <div class="icon icon-svg">
                                <span aria-hidden="true" class="   icon-digitalization"></span>
                            </div>
                        </div>
                        <div class="title">
                            <p>Visa
                                <br> Processing
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="icon-box">
                            <div class="icon icon-svg">
                                <span aria-hidden="true" class="   icon-stamp"></span>
                            </div>
                        </div>
                        <div class="title">
                            <p>Visa
                                <br> Approved
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="elementor-widget-container mt-2">
                <div class="visa-details__btn-box">
                    <a class="visa-details__btn thm-btn" href="contact.html">Book Appointment</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            
            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-ce95331" data-id="ce95331" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-0e62ff1 coaching-details__sidebar elementor-widget elementor-widget-treck-sidebar"
                    data-id="0e62ff1" data-element_type="widget" data-widget_type="treck-sidebar.default">
                    <div class="elementor-widget-container">
                        <div class="coaching-details__services-list">
                            <ul class="coaching-details__services list-unstyled ml-0">
                                @foreach ( getLeftSideMenus('visa') as $cr )
                                    <li class="{{ $active == $cr->slug ? 'active' : ''}}">
                                        <a href="{{url('category/'.$cr->slug)}}" title="{{$cr->title}}">
                                            {{$cr->title}}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-dc863d1 coaching-details__sidebar elementor-widget elementor-widget-treck-sidebar"
                    data-id="dc863d1" data-element_type="widget" data-widget_type="treck-sidebar.default">
                    <div class="elementor-widget-container">
                        <div class="banner-one">
                            <div class="banner-one__shape-1">
                                <img decoding="async"
                                    src="{{ url('public/uploads/2023/04/banner-one-shape-1.png')}}" alt="alt"
                                    title="banner-one-shape-1">
                            </div>
                            <div class="banner-one__bg"
                                style="background-image: url({{url('public/uploads/2023/04/banner-one-bg.jpg')}});">
                            </div>
                            <div class="banner-one__img">
                                <img decoding="async" src="{{ url('public/uploads/2023/04/banner-one-img.png')}}"
                                    alt="alt" title="banner-one-img">
                            </div>
                            <h3 class="banner-one__title">100%
                                <br> Guarantee
                                <br> Approval
                            </h3>
                            <div class="banner-one__btn-box">
                                <a class="banner-one__btn" href="contact.html">Apply Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-34ffb1a coaching-details__sidebar elementor-widget elementor-widget-treck-sidebar"
                    data-id="34ffb1a" data-element_type="widget" data-widget_type="treck-sidebar.default">
                    <div class="elementor-widget-container">
                        <div class="countries-details__documents">
                            <div class="icon icon-svg">
                                <span aria-hidden="true" class="  icon-pdf-file"></span>
                            </div>
                            <div class="content">
                                <h3>
                                    <a href="#">
                                        IELTS Application Form </a>
                                </h3>
                                <p>3.9KB</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>

@include('front.'.$headerInfo->slug.'.elements.footer')
