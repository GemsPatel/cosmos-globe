</div>
        <div class="footer-wrapper">
            <!-- the loop -->
            <div data-elementor-type="wp-post" data-elementor-id="1024" class="elementor elementor-1024">
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-177f5f7 elementor-section-full_width site-footer elementor-section-height-default elementor-section-height-default"
                    data-id="177f5f7" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-no">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-fe9db20"
                            data-id="fe9db20" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <section
                                    class="elementor-section elementor-inner-section elementor-element elementor-element-f5fb834 site-footer__middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="f5fb834" data-element_type="section">
                                    <div class="container">
                                        <div class="row">
                                        <div class="col-md-3 ">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-b80b9d9 elementor-widget__width-initial elementor-widget elementor-widget-footer-about"
                                                    data-id="b80b9d9" data-element_type="widget"
                                                    data-widget_type="footer-about.default">
                                                    <div class="container">
                                                        <div class="footer-widget__column footer-widget__about">
                                                            <div class="footer-widget__logo logo-retina">
                                                                <a href="{{url('/')}}" class="logo-holder" title="{{pgTitle( $headerInfo->name )}}">
                                                                    <img class="" style="height: 55px; width: 120px" src="{{url( 'storage/app/'.$headerInfo->header_logo )}}" alt="{{pgTitle( $headerInfo->name )}}">
                                                                </a>
                                                            </div>
                                                            <p class="footer-widget__about-text">{{getConfigurationfield('FOOTER_MSG')}}</p>
                                                            <div class="site-footer__social">
                                                                <a href="https://www.facebook.com/">
                                                                    <i aria-hidden="true" class="  fab fa-facebook-f"></i>
                                                                </a>
                                                                <a href="https://www.twitter.com/">
                                                                    <i aria-hidden="true" class="  fab fa-twitter"></i> </a>
                                                                <a href="https://www.pinterest.com/">
                                                                    <i aria-hidden="true" class="  fab fa-pinterest-p"></i>
                                                                </a>
                                                                <a href="https://www.instagram.com/">
                                                                    <i aria-hidden="true" class="  fab fa-instagram"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-1">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-c05ebf2 elementor-widget__width-initial elementor-widget elementor-widget-footer-nav-menu"
                                                    data-id="c05ebf2" data-element_type="widget"
                                                    data-widget_type="footer-nav-menu.default">
                                                    <div class="container">
                                                        <div class="footer-widget__column footer-widget__link">
                                                            <div class="footer-widget__title-box">
                                                                <h3 class="footer-widget__title">Explore</h3>
                                                            </div>
                                                            <div class="menu-explore-container">
                                                                <ul id="menu-explore"
                                                                    class="footer-widget__link-list list-unstyled ml-0">
                                                                    <li id="menu-item-1048"
                                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1048">
                                                                        <a href="{{route('aboutUs')}}">About</a>
                                                                    </li>
                                                                    <li id="menu-item-1052"
                                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1052">
                                                                        <a href="{{route('contactUs')}}">Contact</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-a3db553 elementor-widget__width-initial elementor-widget elementor-widget-footer-nav-menu"
                                                    data-id="a3db553" data-element_type="widget"
                                                    data-widget_type="footer-nav-menu.default">
                                                    <div class="container">
                                                        <div class="footer-widget__column footer-widget__link">
                                                            <?php 
                                                            $footerMenu = getFrontEndFooterMenu( $headerInfo->id, 'visa' );
                                                            ?>
                                                            @foreach( $footerMenu as $menu )
                                                                <div class="footer-widget__title-box">
                                                                    <h3 class="footer-widget__title">{{$menu->title}}</h3>
                                                                </div>
                                                                @if( $menu->child )
                                                                    <div class="menu-visa-container">
                                                                        <ul id="menu-visa" class="footer-widget__link-list list-unstyled ml-0">
                                                                            @foreach( $menu->child as $child )
                                                                                <li id="menu-item-1054" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1054">
                                                                                    <a href="{{url('category/'.$child['slug'])}}" title="{{$child['title']}}">{{$child->title}}</a>
                                                                                </li>
                                                                            @endforeach
                                                                        </ul>
                                                                    </div>
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 ">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-a2562de elementor-widget__width-initial elementor-widget elementor-widget-treck-footer-gallery"
                                                    data-id="a2562de" data-element_type="widget"
                                                    data-widget_type="treck-footer-gallery.default">
                                                    <div class="container">
                                                        <div class="footer-widget__column footer-widget__gallery">
                                                            <div class="footer-widget__title-box">
                                                                <h3 class="footer-widget__title">Gallery</h3>
                                                            </div>
                                                            <ul
                                                                class="footer-widget__gallery-list list-unstyled clearfix ml-0">
                                                                <li>
                                                                    <div class="footer-widget__gallery-img">
                                                                        <img decoding="async"
                                                                            src="{{url('public/uploads/2023/04/footer-widget-gallery-img-1.jpg')}}"
                                                                            alt="alt"
                                                                            title="footer-widget-gallery-img-1">
                                                                        <a
                                                                            href="{{url('public/uploads/2023/04/footer-widget-gallery-img-1.jpg')}}">
                                                                            <span class="icon-plus"></span>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="footer-widget__gallery-img">
                                                                        <img decoding="async"
                                                                            src="{{url('public/uploads/2023/04/footer-widget-gallery-img-2.jpg')}}"
                                                                            alt="alt"
                                                                            title="footer-widget-gallery-img-2">
                                                                        <a
                                                                            href="{{url('public/uploads/2023/04/footer-widget-gallery-img-2.jpg')}}">
                                                                            <span class="icon-plus"></span>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="footer-widget__gallery-img">
                                                                        <img decoding="async"
                                                                            src="{{url('public/uploads/2023/04/footer-widget-gallery-img-3.jpg')}}"
                                                                            alt="alt"
                                                                            title="footer-widget-gallery-img-3">
                                                                        <a
                                                                            href="{{url('public/uploads/2023/04/footer-widget-gallery-img-3.jpg')}}">
                                                                            <span class="icon-plus"></span>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="footer-widget__gallery-img">
                                                                        <img decoding="async"
                                                                            src="{{url('public/uploads/2023/04/footer-widget-gallery-img-4.jpg')}}"
                                                                            alt="alt"
                                                                            title="footer-widget-gallery-img-4">
                                                                        <a
                                                                            href="{{url('public/uploads/2023/04/footer-widget-gallery-img-4.jpg')}}">
                                                                            <span class="icon-plus"></span>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="footer-widget__gallery-img">
                                                                        <img decoding="async"
                                                                            src="{{url('public/uploads/2023/04/footer-widget-gallery-img-5.jpg')}}"
                                                                            alt="alt"
                                                                            title="footer-widget-gallery-img-5">
                                                                        <a
                                                                            href="{{url('public/uploads/2023/04/footer-widget-gallery-img-5.jpg')}}">
                                                                            <span class="icon-plus"></span>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="footer-widget__gallery-img">
                                                                        <img decoding="async"
                                                                            src="{{url('public/uploads/2023/04/footer-widget-gallery-img-6.jpg')}}"
                                                                            alt="alt"
                                                                            title="footer-widget-gallery-img-6">
                                                                        <a
                                                                            href="{{url('public/uploads/2023/04/footer-widget-gallery-img-6.jpg')}}">
                                                                            <span class="icon-plus"></span>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-fff9046 elementor-widget__width-initial elementor-widget elementor-widget-footer-contact"
                                                    data-id="fff9046" data-element_type="widget"
                                                    data-widget_type="footer-contact.default">
                                                    <div class="container">
                                                        <div class="footer-widget__column footer-widget__Contact">

                                                            <div class="footer-widget__title-box">
                                                                <h3 class="footer-widget__title">Contact</h3>
                                                            </div>

                                                            <ul class="footer-widget__Contact-list list-unstyled ml-0">
                                                                <li>
                                                                    <div class="icon icon-svg">
                                                                        <span aria-hidden="true"
                                                                            class="fas fa-envelope"></span>
                                                                    </div>
                                                                    <div class="text">
                                                                        <p>
                                                                            <a href="mailto:{{getConfigurationfield('INFO_EMAIL_ADDRESS')}}">{{getConfigurationfield('INFO_EMAIL_ADDRESS')}}</a>
                                                                        </p>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="icon icon-svg">
                                                                        <span aria-hidden="true" class="fas fa-map-marker-alt"></span>
                                                                    </div>
                                                                    <div class="text">
                                                                        <p>{{getConfigurationfield('LOCATION')}}</p>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="icon icon-svg">
                                                                        <span aria-hidden="true" class="fas fa-clock"></span>
                                                                    </div>
                                                                    <div class="text">
                                                                        <p>{{getConfigurationfield('OPEN_OFFICE')}}</p>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </section>
                                <div class="elementor-element elementor-element-ab3ae9b elementor-widget elementor-widget-footer-copyright"
                                    data-id="ab3ae9b" data-element_type="widget" data-widget_type="footer-copyright.default">
                                    <div class="elementor-widget-container">
                                        <div class="site-footer__bottom">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <div class="site-footer__bottom-inner">
                                                            <p class="site-footer__bottom-text"> © All Copyright 2023 by <a
                                                                    href="#">Cosmos Globe</a> </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- end of the loop -->
        </div><!-- /.footer-wrapper -->
    
        <script src="{{url('public/js/jQuery.style.switcher.min.js')}}"></script>
        <script src="{{url('public/js/color-switcher.js')}}"></script>
        <script src="{{url('public/themes/vendors/bootstrap/js/bootstrap.minbb93.js')}}"></script>
        <script src="{{url('public/plugins/treck-addon/assets/vendors/bootstrap-select/js/bootstrap-select.min141d.js')}}"></script>
        <script src="{{url('public/plugins/treck-addon/assets/vendors/bxslider/jquery.bxslider.min141d.js')}}"></script>
        <script src="{{url('public/plugins/treck-addon/assets/vendors/countdown/countdown.min141d.js')}}" > </script>
        <script src="{{url('public/plugins/treck-addon/assets/vendors/jarallax/jarallax.min141d.js')}}" > </script>
        <script src="{{url('public/plugins/treck-addon/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min141d.js')}}"></script>
        <script src="{{url('public/plugins/treck-addon/assets/vendors/jquery-appear/jquery.appear.min141d.js')}}"></script>
        <script src="{{url('public/plugins/treck-addon/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min141d.js')}}"></script>
        <script src="{{url('public/plugins/treck-addon/assets/vendors/odometer/odometer.min141d.js')}}" > </script>
        <script src="{{url('public/plugins/treck-addon/assets/vendors/owl-carousel/owl.carousel.min141d.js')}}"></script>
        <script src="{{url('public/plugins/treck-addon/assets/vendors/jquery-circle-progress/jquery.circle-progress.min141d.js')}}"></script>
        <script src="{{url('public/plugins/treck-addon/assets/vendors/swiper/swiper.min141d.js')}}"></script>
        <script src="{{url('public/plugins/treck-addon/assets/vendors/wow/wow141d.js')}}"></script>
        <script src="{{url('public/plugins/treck-addon/assets/vendors/sharer/sharer.min141d.js')}}"></script>
        <script src="{{url('public/plugins/treck-addon/assets/js/treck-addon9fcf.js')}}"></script>
        <script src="{{url('public/js/underscore.mind584.js')}}"></script>
        <script src="{{url('public/js/wp-util.minaec2.js')}}"></script>
        <script src="{{url('public/themes/vendors/isotope/isotopee1fc.js')}}"></script>
        <script src="{{url('public/js/imagesloaded.minbb93.js')}}"></script>
        <script src="{{url('public/js/cg-custom.js')}}"></script>
        <script src="{{url('public/plugins/elementor/assets/lib/waypoints/waypoints.min05da.js')}}" > </script>
        <script src="{{url('public/js/jquery/ui/core.min3f14.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" ></script>   
        <script src="{{ url('public/js/web/owl.carousel.js')}}"></script>
        
        <script>
 
            $('.our-team-carsoule').owlCarousel({
               loop:true,
               margin:10,
               nav:true,
               dots:true,
               responsive:{
                   0:{
                       items:1
                   },
                   600:{
                       items:3
                   },
                   1000:{
                       items:4
                   }
               }
           })
           </script>
    </body>
</html>
