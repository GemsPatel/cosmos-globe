<section
    class="elementor-section elementor-top-section elementor-element elementor-element-2d62e4f elementor-section-full_width elementor-section-height-default elementor-section-height-default"
    data-id="2d62e4f" data-element_type="section">
    <div class="elementor-container elementor-column-gap-no">
        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f458638"
            data-id="f458638" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-56829a5 elementor-widget elementor-widget-treck-country"
                    data-id="56829a5" data-element_type="widget" data-widget_type="treck-country.default">
                    <div class="elementor-widget-container">
                        <!--Countries One Start-->
                        <section class="countries-one">
                            <div class="countries-one__bg"
                                style="background-image: url('public/uploads/2023/04/countries-one-bg.png');">
                            </div>
                            <div class="container">
                                <div class="section-title text-center">
                                    <div class="section-title__tagline-box">
                                        <span class="section-title__tagline">Our countries list</span>
                                        <div class="section-title__border-box"></div>
                                    </div>
                                    <h2 class="section-title__title">Select the Country of
                                        <br> Your Choice
                                    </h2>
                                </div>
                                <div class="row">
                                    @foreach ( getFrontEndMenu( $headerInfo->id ) as $k=>$ar )
                                        @if( $ar->slug == "country")
                                            <?php 
                                            $count = 0;
                                            ?>
                                            @foreach ( $ar->child as $cr )
                                                <?php
                                                $detail = getCategoryBulletPoint( $cr['id'], $cr['slug'] );
                                                ?>
                                                @if( $detail && $count<6 )
                                                    <?php $count++; ?>
                                                    <!--Countries One Single Start-->
                                                    <div class="col-xl-2 col-lg-4 col-md-6">
                                                        <div class="countries-one__single">
                                                            <div class="countries-one__img-box">
                                                                <div class="countries-one__img">
                                                                    <img decoding="async" src="{{url('storage/app/'.$detail['image'])}}" alt="alt" title="countries-1-1">
                                                                </div>
                                                            </div>
                                                            <h3 class="countries-one__title">
                                                                <a class="" href="{{url('category/'.$cr['slug'])}}">{{$cr['title']}}</a>
                                                            </h3>
                                                            <p class="countries-one__text">{{$detail['point']}}</p>
                                                            <div class="countries-one__arrow-box">
                                                                <a href="{{url('category/'.$cr['slug'])}}" class="countries-one__arrow">
                                                                    <span aria-hidden="true" class="  icon-right-arrow"></span> </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--Countries One Single End-->
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </section>
                        <!--Countries One End-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
