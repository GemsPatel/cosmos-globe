<section class="elementor-section elementor-top-section elementor-element elementor-element-5312041 elementor-section-full_width elementor-section-height-default elementor-section-height-default">
    <div class="elementor-container elementor-column-gap-no">
        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8b0b210"
            data-id="8b0b210" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-78294a2 elementor-widget elementor-widget-treck-service"
                    data-id="78294a2" data-element_type="widget" data-widget_type="treck-service.default">
                    <div class="elementor-widget-container">
                        <!--Services One Start-->
                        <section class="services-one">
                            <div class="container">
                                <div class="section-title text-center">
                                    <div class="section-title__tagline-box">
                                        <span class="section-title__tagline">Our Visa Categories</span>
                                        <div class="section-title__border-box"></div>
                                    </div>
                                    <h2 class="section-title__title">We Offers Citizenship &amp; <br> Immigration Services</h2>
                                </div>
                                <div class="row">
                                    @foreach ( getFrontEndMenu( $headerInfo->id ) as $k=>$ar )
                                        @if( $ar->slug == "visa")
                                            <?php 
                                            $count = 0;
                                            ?>
                                            @foreach ( $ar->child as $cr )
                                                <?php
                                                $detail = getCategoryBulletPoint( $cr['id'], $cr['slug'] );
                                                ?>
                                                @if( $detail && $count<4 )
                                                    <?php $count++; ?>
                                                    <!--Services One Single Start-->
                                                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                                                        <div class="services-one__single">
                                                            <div class="services-one__single-inner">
                                                                <div class="services-one__hover-content">
                                                                    <div class="services-one__hover-bg" style="background-image: url('{{url('storage/app/'.$detail['image'])}}');"> </div>
                                                                    <div class="services-one__hover-title-box">
                                                                        <h3 class="services-one__hover-title">
                                                                            <a class="" href="{{url('category/'.$cr['slug'])}}">{{$cr['title']}}</a>
                                                                        </h3>
                                                                        <div class="services-one__hover-shpae">
                                                                            <img decoding="async" src="{{url('storage/app/'.$cr['image'])}}" alt="alt" title="{{$cr['title']}}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="services-one__arrow">
                                                                        <a href="{{url('category/'.$cr['slug'])}}">
                                                                            <span aria-hidden="true" class="icon-up-right"></span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="services-one__icon icon-svg-large">
                                                                    <span aria-hidden="true" class="icon-tourist"></span>
                                                                </div>
                                                                <h3 class="services-one__title">
                                                                    <a class=" " href="{{url('category/'.$cr['slug'])}}">{{$cr['title']}}</a>
                                                                </h3>
                                                                <p class="services-one__text">{{$detail['point']}}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--Services One Single End-->
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </section>
                        <!--Services One End-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>