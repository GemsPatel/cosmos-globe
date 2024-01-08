<section
class="elementor-section elementor-top-section elementor-element elementor-element-34b99f31 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
data-id="34b99f31" data-element_type="section">
<div class="elementor-container elementor-column-gap-no">
    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7e33297b"
        data-id="7e33297b" data-element_type="column">
        <div class="elementor-widget-wrap elementor-element-populated">
            <div class="elementor-element elementor-element-e1dca2b elementor-widget elementor-widget-treck-testimonials"
                data-id="e1dca2b" data-element_type="widget" data-widget_type="treck-testimonials.default">
                <div class="elementor-widget-container">
                    <!--Testimonial Two Start-->
                    <section class="testimonial-two about-page-testimonial">
                        <div class="about-page-testimonial__bg-1"
                            style="background-image: url(public/uploads/2023/04/about-page-testimonial-bg-1.jpg);">
                        </div>
                        <div class="about-page-testimonial__bg-2"
                            style="background-image: url(public/uploads/2023/04/about-page-testimonial-bg-2.png);">
                        </div>
                        <div class="container">
                            <div class="section-title text-center">
                                <div class="section-title__tagline-box">
                                    <span class="section-title__tagline">Our feedbacks</span>
                                    <div class="section-title__border-box"></div>
                                </div>
                                <h2 class="section-title__title">What They’re<br> Talking About Treck
                                </h2>
                            </div>

<div id="testimonial-carousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        @foreach ($testimonials as $key => $testimonial)
       
            <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                <div class="testimonial-two__single">
                    <!-- Your testimonial content here -->
                    <div class="testimonial-two__inner">
                        <div class="testimonial-two__img">
                           
                            <img decoding="async" src="{{ asset('storage/app/' . $testimonial['image']) }}" alt="{{ $testimonial['name'] }}" title="{{ $testimonial['name'] }}">
                            <div class="testimonial-two__shape-1">
                                <img decoding="async" src="{{ url('public/uploads/2023/04/testimonial-two-shape-1.png') }}" alt="{{ $testimonial['name'] }}" title="{{ $testimonial['name'] }}">
                            </div>
                        </div>
                        <div class="testimonial-two__client-details-and-quote">
                            <div class="testimonial-two__client-details">
                                <div class="testimonial-two__client-rate">
                                    @for ($i = 0; $i < $testimonial['star_rating']; $i++)
                                        <span class="fa fa-star"></span>
                                    @endfor
                                </div>
                                <h4 class="testimonial-two__client-name">{{ $testimonial['title'] }}</h4>
                                <p class="testimonial-two__client-sub-title">{{ $testimonial['slug'] }}</p>
                            </div>
                            <div class="testimonial-two__quote icon-svg">
                                <span aria-hidden="true" class="icon-chat"></span>
                            </div>
                        </div>
                        <p class="testimonial-two__text">{{ $testimonial['short_description'] }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>


</section>
<!--Testimonial Two End-->
</div>
</div>
</div>
</div>
</div>
</section>