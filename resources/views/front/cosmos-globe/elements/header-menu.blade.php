<!-- the loop -->
<div data-elementor-type="wp-post" data-elementor-id="954" class="elementor elementor-954">
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-954e1ff elementor-section-full_width elementor-section-height-default elementor-section-height-default"
        data-id="954e1ff" data-element_type="section">
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-31628aa"
                data-id="31628aa" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-837c7cd elementor-widget elementor-widget-treck-header"
                        data-id="837c7cd" data-element_type="widget" data-widget_type="treck-header.default">
                        <div class="elementor-widget-container">

                            <header class="main-header">
                                <nav class="main-menu">
                                    <div class="main-menu__wrapper">
                                        <div class="main-menu__wrapper-inner">
                                            <div class="main-menu__logo logo-retina">
                                                <a href="{{route('home')}}">
                                                    <img decoding="async" width="136" height="39"
                                                        src="{{url('public/uploads/2023/04/logo-dark.png')}}" alt="Treck">
                                                </a>
                                            </div>
                                            <div class="main-menu__search-box d-none">
                                                <a href="#"
                                                    class="main-menu__search search-toggler icon-magnifying-glass"><span>Search...</span></a>
                                            </div>
                                            <div class="main-menu__wrapper-inner-content">
                                                <div class="main-menu__top">
                                                    <div class="main-menu__top-inner">
                                                        <div class="main-menu__top-left">
                                                            <ul class="list-unstyled main-menu__contact-list ml-0">
                                                                <li>
                                                                    <div class="icon icon-svg">
                                                                        <i aria-hidden="true"
                                                                            class="  fas fa-map-marker"></i>
                                                                    </div>
                                                                    <div class="text">
                                                                        <p>{{getConfigurationfield('LOCATION')}}</p>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="icon icon-svg">
                                                                        <i aria-hidden="true"
                                                                            class="  fas fa-envelope"></i>
                                                                    </div>
                                                                    <div class="text">
                                                                        <p><a href="mailto:{{getConfigurationfield('INFO_EMAIL_ADDRESS')}}">{{getConfigurationfield('INFO_EMAIL_ADDRESS')}}</a></p>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="icon icon-svg">
                                                                        <i aria-hidden="true"
                                                                            class="  fas fa-clock"></i>
                                                                    </div>
                                                                    <div class="text">
                                                                        <p>{{getConfigurationfield('OPEN_OFFICE')}}</p>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="main-menu__top-right">
                                                            <ul class="list-unstyled main-menu__top-menu ml-0">
                                                                <li>
                                                                    <a class="" href="login.html">Login</a>
                                                                </li>
                                                                <li>
                                                                    <a class=" " href="{{route('faqs')}}">Faq’s</a>
                                                                </li>
                                                                <li>
                                                                    <a class="  " href="{{route('contactUs')}}">Contact</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="main-menu__bottom">
                                                    <div class="main-menu__bottom-inner">
                                                        <div class="main-menu__main-menu-box">
                                                            <a href="#" class="mobile-nav__toggler"><i
                                                                    class="fa fa-bars"></i></a>
                                                            <div class="menu-menu-1-container">
                                                                <ul id="menu-menu-1" class="main-menu__list">
                                                                    <li id="menu-item-967"
                                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-967">
                                                                        <a href="{{route('home')}}">Home</a>
                                                                    </li>
                                                                    <?php
                                                                        $menuArr = getFrontEndMenu( $headerInfo->id );
                                                                    ?>
                                                                    @foreach ( $menuArr as $k=>$ar )
                                                                        <li id="menu-item-984" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-984">
                                                                            <a href="#">{{$ar->title}}</a>
                                                                            @if( COUNT( $ar->child ) > 0 )
                                                                                <ul class="sub-menu">
                                                                                    @foreach ( $ar->child as $cr )
                                                                                        <li id="menu-item-1324" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1324">
                                                                                            <a href="{{url('category/'.$cr['slug'])}}" title="{{$cr['title']}}">
                                                                                                {{$cr['title']}}
                                                                                            </a>
                                                                                        </li>
                                                                                    @endforeach
                                                                                </ul>
                                                                            @endif
                                                                        </li>
                                                                    @endforeach

                                                                    <li id="menu-item-960"
                                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-960">
                                                                        <a href="{{route('aboutUs')}}">About Us</a>
                                                                    </li>
                                                                    <li id="menu-item-971"
                                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-971">
                                                                        <a href="{{route('gallery')}}">Gallery</a>
                                                                    </li>
                                                                    <li id="menu-item-967"
                                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-967">
                                                                        <a href="{{route('contactUs')}}">Contact</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <?php
    $testimonialArr = getFrontEndMenu( 1 );//1 : Testimonial
                                                        ?>
                                                        <div class="main-menu__right">
                                                            <div class="main-menu__call">
                                                                <div class="main-menu__call-icon">
                                                                    <img decoding="async"
                                                                        src="{{url('public/uploads/2023/04/main-menu-three-comment-icon.png')}}"
                                                                        alt="alt"
                                                                        title="main-menu-three-comment-icon">
                                                                </div>
                                                                <div class="main-menu__call-content">
                                                                    <p class="main-menu__call-sub-title">Have
                                                                        Question?</p>
                                                                    <h5 class="main-menu__call-number">
                                                                        <a href="tel:9288009850"><span>Free</span>
                                                                            +92 (8800) - 9850</a>
                                                                    </h5>
                                                                </div>
                                                            </div>

                                                            <div class="main-menu__btn-box">
                                                                <a class="thm-btn main-menu__btn"
                                                                    href="contact.html">Book
                                                                    Appointment</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </nav>
                            </header>

                            <div class="stricky-header stricked-menu main-menu">
                                <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
                            </div><!-- /.stricky-header -->

                            <div class="mobile-nav__wrapper">
                                <div class="mobile-nav__overlay mobile-nav__toggler"></div>
                                <!-- /.mobile-nav__overlay -->
                                <div class="mobile-nav__content">
                                    <span class="mobile-nav__close mobile-nav__toggler"><i
                                            class="fa fa-times"></i></span>

                                    <div class="logo-box">
                                        <a href="index.html" aria-label="logo image">
                                            <img decoding="async" width="136" height="39"
                                                src="{{url('public/uploads/2023/04/logo-light.png')}}" alt="COSMOS Globe" />
                                        </a>
                                    </div>
                                    <!-- /.logo-box -->
                                    <div class="mobile-nav__container"></div>
                                    <!-- /.mobile-nav__container -->
                                    <ul class="mobile-nav__contact list-unstyled ml-0">
                                        <li>
                                            <i class="fa fa-envelope"></i>
                                            <a href="mailto:needhelp@treck.com">needhelp@COSMOSGlobe.com</a>
                                        </li>
                                        <li>
                                            <i class="fa fa-phone-alt"></i>
                                            <a href="tel:http://666-888-0000">
                                                666 888 0000 </a>
                                        </li>
                                    </ul><!-- /.mobile-nav__contact -->
                                    <div class="mobile-nav__top">
                                        <div class="mobile-nav__social">
                                            <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
                                            <a href="https://www.twitter.com/" class="fab fa-twitter"></a>
                                            <a href="https://www.pinterest.com/" class="fab fa-pinterest"></a>
                                            <a href="https://www.instagram.com/" class="fab fa-instagram"></a>
                                        </div><!-- /.mobile-nav__social -->
                                    </div><!-- /.mobile-nav__top -->

                                </div>
                                <!-- /.mobile-nav__content -->
                            </div>


                            <div class="search-popup">
                                <div class="search-popup__overlay search-toggler"></div>
                                <!-- /.search-popup__overlay -->
                                <div class="search-popup__content">
                                    <form role="search" method="get"
                                        action="https://html.cosmos-globe.com/faqs.html">
                                        <label for="search" class="sr-only">search
                                            here</label><!-- /.sr-only -->
                                        <input type="search" name="s" id="search" value=""
                                            placeholder="Search Here..." />
                                        <button type="submit" aria-label="search submit" class="thm-btn">
                                            <i class="icon-magnifying-glass"></i>
                                        </button>
                                    </form>
                                </div>
                                <!-- /.search-popup__content -->
                            </div>

                            <span data-target="html" class="scroll-to-target scroll-to-top"><i class="fa icon-right-arrow"></i></span>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- end of the loop -->
