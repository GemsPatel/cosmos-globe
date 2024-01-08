@include('front.' . $headerInfo->slug . '.elements.header')

<link rel="stylesheet" href="{{ url('public/css/web/aboutus.css') }}">

<section class="page-header">
    <div class="page-header-bg"></div>
    <div class="container">
        <div class="page-header__inner">
            <h2>{{ $title }}</h2>

            <x-breadcrumb :title="$title" :breadcrumb="$breadcrumb" />
            {{-- <ul class="thm-breadcrumb list-unstyled ml-0">
                <!-- Breadcrumb NavXT 7.2.0 -->
                <li class="home"><span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage"
                            title="Go to COSMOS Globe" href="#" class="home"><span
                                property="name">Treck</span></a>
                        <meta property="position" content="1">
                    </span></li>
                <li class="post post-page current-item"><span property="itemListElement" typeof="ListItem"><span
                            property="name" class="post post-page current-item">Business Visa</span>
                        <meta property="url" content="">
                        <meta property="position" content="2">
                    </span></li>
            </ul> --}}
        </div>
    </div>
</section>

<div data-elementor-type="wp-page" data-elementor-id="21" class="elementor elementor-21">
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-5660a656 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
        data-id="5660a656" data-element_type="section">
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1077564a"
                data-id="1077564a" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-192e78f5 elementor-widget elementor-widget-treck-faq"
                        data-id="192e78f5" data-element_type="widget" data-widget_type="treck-faq.default">
                        <div class="elementor-widget-container">
                            <!--FAQ One Start -->
                            <section class="faq-one">
                                <div class="faq-one__shape-1 float-bob-y">
                                    <img decoding="async" src="public/uploads/2023/04/faq-one-shape-1.png"
                                        alt="alt" title="faq-one-shape-1">
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="faq-one__left">
                                                <div class="faq-one__bg"
                                                    style="background-image: url(public/uploads/2023/04/faq-one-bg.jpg);">
                                                </div>
                                                <div class="faq-one__inner">
                                                    <div class="faq-one__icon icon-svg-large">
                                                        <span aria-hidden="true" class="  icon-deal"></span>
                                                    </div>
                                                    <h3 class="faq-one__title">Welcome to CosmosGlobe &amp;
                                                        Your Gateway to Global Employment</h3>
                                                    {{-- <div class="faq-one__btn-box">
                                                    <a class="faq-one__btn thm-btn"
                                                        href="index.html">Discover More</a>
                                                </div> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="faq-one__right">
                                                <div class="section-title text-left" style="margin-bottom: 0 !important;">
                                                    <h4 style="line-height: 30px ! important;">At CosmosGlobe, we specialize in facilitating seamless
                                                        transitions for individuals seeking employment opportunities
                                                        abroad. With our expertise and tailored solutions, we pave the
                                                        way for your successful venture into international job markets.
                                                    </h4>
                                                    <div class="section-title__border-box"></div>
                                                    <h2 class="section-title__title">What We Offer ?</h2>
                                                </div>
                                                <div class="accordion" id="accordionPanelsStayOpenExample">
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#panelsStayOpen-collapseOne"
                                                                aria-expanded="true"
                                                                aria-controls="panelsStayOpen-collapseOne">
                                                                <strong>Visa Consultation</strong>
                                                            </button>
                                                        </h2>
                                                        <div id="panelsStayOpen-collapseOne"
                                                            class="accordion-collapse collapse show">
                                                            <div class="accordion-body">
                                                                Our experienced team navigates the complexities of visa processes, ensuring a hassle-free experience for our clients.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#panelsStayOpen-collapseTwo"
                                                                aria-expanded="false"
                                                                aria-controls="panelsStayOpen-collapseTwo">
                                                                <strong>Employment Opportunities</strong>
                                                            </button>
                                                        </h2>
                                                        <div id="panelsStayOpen-collapseTwo"
                                                            class="accordion-collapse collapse">
                                                            <div class="accordion-body">
                                                                We connect skilled professionals with esteemed companies worldwide, offering a spectrum of career opportunities.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#panelsStayOpen-collapseThree"
                                                                aria-expanded="false"
                                                                aria-controls="panelsStayOpen-collapseThree">
                                                                <strong>Customized Solutions</strong>
                                                            </button>
                                                        </h2>
                                                        <div id="panelsStayOpen-collapseThree"
                                                            class="accordion-collapse collapse">
                                                            <div class="accordion-body">
                                                                Every client is unique, and so are their aspirations. We craft personalized strategies to suit individual career goals and preferences.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#panelsStayOpen-collapseFour"
                                                                aria-expanded="false"
                                                                aria-controls="panelsStayOpen-collapseFour">
                                                                <strong>Legal Expertise</strong>
                                                            </button>
                                                        </h2>
                                                        <div id="panelsStayOpen-collapseFour"
                                                            class="accordion-collapse collapse">
                                                            <div class="accordion-body">
                                                                Navigating legal frameworks is crucial. Our legal experts provide guidance and support throughout the process, ensuring compliance at every step.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <!--FAQ One End-->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  
    <div class="row mt-3 mb-3 px-5 py-5">
        
        <div class="col-xl-6">
            <h2 class="section-title__title">Why Choose Us?</h2>
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        <strong>Expert Guidance</strong>
                    </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Our team comprises seasoned professionals well-versed in global employment regulations, ensuring accurate and reliable advice.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    <strong>Tailored Approach</strong>
                    </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">We understand the significance of personalized service. Our solutions are custom-tailored to meet each client's specific needs.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        <strong>Proven Track Record</strong>
                    </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">With a history of successful placements and satisfied clients, we have earned trust through our commitment to excellence.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                        <strong>Continuous Support</strong>
                        </button>
                    </h2>
                    <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Beyond securing a visa or job placement, we remain a dedicated resource for ongoing support and guidance.</div>
                    </div>
                    </div>
                </div>
            

        </div>
        <div class="col-xl-6">
            <h2 class="section-title__title">Get Started Today!</h2>
            
            <h4 class="mb-3 mt-3 px-3 py-3" style="line-height: 35px;text-align: justify;">
                Embark on your international career journey with CosmosGlobe. Contact us today to explore the world of employment opportunities and take the first step towards a fulfilling global career!
            </h4>
            <h3 class="font-weight-bold text-center">
                Feel free to adjust the tone or specifics according to your company's preferences and target audience!
            </h3>
            <div class="text-center">

                <a href="{{route('contactUs')}}" class="thm-btn contact-five__btn mt-5">Contact Us</a>
            </div>
        </div>
    </div>
    
    
    <div class="row mt-2 mb-3 px-5 py-5">
        <div class="col-xl-7" style="background-image: linear-gradient(to right, #7aa9c7 , #ffff);">
            <h4 class="px-3 py-3 mt-2 mb-3" style="line-height: 35px; text-align:justify">At [COSMOS Globe], we specialize in providing comprehensive solutions for individuals seeking citizenship and navigating the intricate landscape of immigration services. Our mission is to facilitate your journey towards obtaining citizenship or achieving your immigration goals with expertise and dedication.</h4>
            <h2 class="section-title__title text-center">Our Services</h2>

            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      <strong>Citizenship Application Assistance</strong>
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        We assist individuals in the process of acquiring citizenship in their country of choice, guiding them through the application process and requirements.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      <strong>Permanent Residency Applications</strong>
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Our team aids in securing permanent residency status, offering guidance and support through various residency programs available.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                     <strong>Naturalization Support</strong>
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        For those eligible for naturalization, we offer tailored assistance in fulfilling requirements, preparing for tests, and navigating the naturalization process.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                       <strong>Family-Based Immigration</strong>
                      </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        We specialize in reuniting families by providing expert guidance on family-based immigration petitions, ensuring a smooth process for reunification.
                      </div>
                    </div>
                  </div>
              </div>
        </div>
        <div class="col-xl-5">
            <div class="faq-one__right" style="padding: 20px 20px 20px 20px !important;background-color: #7aa9c7;">
                
                <div class="faq-one__inner" style="background:black">
                    {{-- <div class="faq-one__icon icon-svg-large">
                        <span aria-hidden="true" class="icon-deal"></span>
                    </div> --}}
                    <h3 class="faq-one__title"><span style="color:#7aa9c7;"> Welcome to CosmosGlobe </span> 
                        Your Gateway to Citizenship & Immigration Services</h3>
                    {{-- <div class="faq-one__btn-box">
                    <a class="faq-one__btn thm-btn"
                        href="index.html">Discover More</a>
                </div> --}}
                </div>
            </div>
        </div>
        <div class="col-xl-12 px-5 pb-5 mb-3" style="background-image: linear-gradient(to right, #7aa9c7 , #ffff);">
            <h2 class="section-title__title text-center">Why Choose Us?</h2>
            <div class="row">
                <div class="col-xl-6">
                    <div class="card card-body shadow border-0 mb-2">
                        <h4>Expert Guidance</h4>
                        <p>Our team comprises experienced immigration professionals and lawyers well-versed in citizenship and immigration laws, ensuring accurate and reliable guidance.</p>
                    </div>
                    <div class="card card-body shadow border-0 mb-2">
                        <h4>Personalized Approach</h4>
                        <p>We understand the significance of personalized service. Our solutions are customized to meet individual needs and aspirations.</p>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card card-body shadow border-0 mb-2">
                        <h4>Comprehensive Support</h4>
                        <p>From initial consultations to final processes, we provide comprehensive support, ensuring a seamless experience for our clients.</p>
                    </div>
                    <div class="card card-body shadow border-0 mb-2">
                        <h4>Ethical Practices</h4>
                        <p>We operate with integrity and transparency, upholding ethical standards in all our interactions and processes.</p>
                    </div>
                </div>


            </div>
           <h2 class="section-title__title text-center">Embark on Your Citizenship & Immigration Journey Today!</h2>
            <div class="card card-body shadow border-0">
                <h5>Empower your dreams with CosmosGlobe. Contact us now to explore our citizenship and immigration services, and take the first step towards realizing your aspirations.</h5>
            </div>
            <h4 class="mt-3 mb-3 text-center">Feel free to adjust the content to better align with your company's branding, services offered, and the audience you aim to reach!</h4>
        </div>
    </div>
    


    <x-testimonial :testimonials="$testimonials" />

    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-32edb3d1 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
        data-id="32edb3d1" data-element_type="section">
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-43357c4f"
                data-id="43357c4f" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-64e39037 elementor-widget elementor-widget-treck-team"
                        data-id="64e39037" data-element_type="widget" data-widget_type="treck-team.default">
                        <div class="elementor-widget-container">

                            <!--Team One Start-->
                            <section class="team-one">
                                <div class="container">

                                    <div class="section-title text-center">
                                        <div class="section-title__tagline-box">
                                            <span class="section-title__tagline">Professional people</span>
                                            <div class="section-title__border-box"></div>
                                        </div>
                                        <h2 class="section-title__title">Meet Treck Expert Visa<br> Consultatns
                                        </h2>
                                    </div>

                                    <div class="row">
                                        <!--Team One Single Start-->
                                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                                            <div class="team-one__single">
                                                <div class="team-one__img-box">
                                                    <div class="team-one__img">
                                                        <img decoding="async"
                                                            src="public/uploads/2023/04/team-1-1.jpg" alt="alt"
                                                            title="team-1-1">
                                                    </div>
                                                    <div class="team-one__share-btn">
                                                        <a href="../team-details/index.html"><i
                                                                class="fa fa-share-alt"></i></a>
                                                    </div>
                                                    <ul class="list-unstyled team-one__social">
                                                        <li><a href="https://www.facebook.com/"><i
                                                                    class="fab fa-facebook"></i></a></li>
                                                        <li><a href="https://www.twitter.com/"><i
                                                                    class="fab fa-twitter"></i></a></li>
                                                        <li><a href="https://www.pinterest.com/"><i
                                                                    class="fab fa-pinterest-p"></i></a></li>
                                                        <li><a href="https://www.instagram.com/"><i
                                                                    class="fab fa-instagram"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="team-one__content">
                                                    <p class="team-one__sub-title">Consultants</p>
                                                    <h3 class="team-one__title">
                                                        <a class="" href="../team-details/index.html">Mike
                                                            Hardson</a>
                                                    </h3>
                                                    <div class="team-one__arrow-box">
                                                        <a href="../team-details/index.html"
                                                            class="team-one__arrow"><i
                                                                class="fa fa-angle-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Team One Single End-->
                                        <!--Team One Single Start-->
                                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                                            <div class="team-one__single">
                                                <div class="team-one__img-box">
                                                    <div class="team-one__img">
                                                        <img decoding="async"
                                                            src="public/uploads/2023/04/team-1-2.jpg" alt="alt"
                                                            title="team-1-2">
                                                    </div>
                                                    <div class="team-one__share-btn">
                                                        <a href="../team-details/index.html"><i
                                                                class="fa fa-share-alt"></i></a>
                                                    </div>
                                                    <ul class="list-unstyled team-one__social">
                                                        <li><a href="https://www.facebook.com/"><i
                                                                    class="fab fa-facebook"></i></a></li>
                                                        <li><a href="https://www.twitter.com/"><i
                                                                    class="fab fa-twitter"></i></a></li>
                                                        <li><a href="https://www.pinterest.com/"><i
                                                                    class="fab fa-pinterest-p"></i></a></li>
                                                        <li><a href="https://www.instagram.com/"><i
                                                                    class="fab fa-instagram"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="team-one__content">
                                                    <p class="team-one__sub-title team-one__sub-title">
                                                        Consultants</p>
                                                    <h3 class="team-one__title">
                                                        <a class=" " href="../team-details/index.html">Jessica
                                                            Brown</a>
                                                    </h3>
                                                    <div class="team-one__arrow-box">
                                                        <a href="../team-details/index.html"
                                                            class="team-one__arrow"><i
                                                                class="fa fa-angle-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Team One Single End-->
                                        <!--Team One Single Start-->
                                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                                            <div class="team-one__single">
                                                <div class="team-one__img-box">
                                                    <div class="team-one__img">
                                                        <img decoding="async"
                                                            src="public/uploads/2023/04/team-1-3.jpg" alt="alt"
                                                            title="team-1-3">
                                                    </div>
                                                    <div class="team-one__share-btn">
                                                        <a href="../team-details/index.html"><i
                                                                class="fa fa-share-alt"></i></a>
                                                    </div>
                                                    <ul class="list-unstyled team-one__social">
                                                        <li><a href="https://www.facebook.com/"><i
                                                                    class="fab fa-facebook"></i></a></li>
                                                        <li><a href="https://www.twitter.com/"><i
                                                                    class="fab fa-twitter"></i></a></li>
                                                        <li><a href="https://www.pinterest.com/"><i
                                                                    class="fab fa-pinterest-p"></i></a></li>
                                                        <li><a href="https://www.instagram.com/"><i
                                                                    class="fab fa-instagram"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="team-one__content">
                                                    <p
                                                        class="team-one__sub-title team-one__sub-title team-one__sub-title">
                                                        Consultants</p>
                                                    <h3 class="team-one__title">
                                                        <a class="  " href="../team-details/index.html">Kevin
                                                            Martin</a>
                                                    </h3>
                                                    <div class="team-one__arrow-box">
                                                        <a href="../team-details/index.html"
                                                            class="team-one__arrow"><i
                                                                class="fa fa-angle-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Team One Single End-->
                                        <!--Team One Single Start-->
                                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                                            <div class="team-one__single">
                                                <div class="team-one__img-box">
                                                    <div class="team-one__img">
                                                        <img decoding="async"
                                                            src="public/uploads/2023/04/team-1-4.jpg" alt="alt"
                                                            title="team-1-4">
                                                    </div>
                                                    <div class="team-one__share-btn">
                                                        <a href="../team-details/index.html"><i
                                                                class="fa fa-share-alt"></i></a>
                                                    </div>
                                                    <ul class="list-unstyled team-one__social">
                                                        <li><a href="https://www.facebook.com/"><i
                                                                    class="fab fa-facebook"></i></a></li>
                                                        <li><a href="https://www.twitter.com/"><i
                                                                    class="fab fa-twitter"></i></a></li>
                                                        <li><a href="https://www.pinterest.com/"><i
                                                                    class="fab fa-pinterest-p"></i></a></li>
                                                        <li><a href="https://www.instagram.com/"><i
                                                                    class="fab fa-instagram"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="team-one__content">
                                                    <p
                                                        class="team-one__sub-title team-one__sub-title team-one__sub-title team-one__sub-title">
                                                        Consultants</p>
                                                    <h3 class="team-one__title">
                                                        <a class="   " href="../team-details/index.html">Christine
                                                            Eve</a>
                                                    </h3>
                                                    <div class="team-one__arrow-box">
                                                        <a href="../team-details/index.html"
                                                            class="team-one__arrow"><i
                                                                class="fa fa-angle-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Team One Single End-->

                                    </div>
                                </div>
                            </section>
                            <!--Team One End-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-4ad36f45 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
        data-id="4ad36f45" data-element_type="section">
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-70c6a9c9"
                data-id="70c6a9c9" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-278a1d06 elementor-widget elementor-widget-treck-sponsors"
                        data-id="278a1d06" data-element_type="widget" data-widget_type="treck-sponsors.default">
                        <div class="elementor-widget-container">
                            <!--Brand Two Start-->
                            <section class="brand-two">
                                <div class="container">
                                    <h4 class="brand-two__title">Our partners &amp; suppoters</h4>

                                    <div class="customer-logos slider">
                                        <div class="slide"><img src="public/uploads/2023/04/brand-2-1-112x42.png"
                                                style="opacity: 0.3" alt="globale brand"></div>
                                        <div class="slide"><img src="public/uploads/2023/04/brand-2-2-112x42.png"
                                                style="opacity: 0.3" alt="globale brand"></div>
                                        <div class="slide"><img src="public/uploads/2023/04/brand-2-3-112x42.png"
                                                style="opacity: 0.3" alt="globale brand"></div>
                                        <div class="slide"><img src="public/uploads/2023/04/brand-2-4-112x42.png"
                                                style="opacity: 0.3" alt="globale brand"></div>
                                        <div class="slide"><img src="public/uploads/2023/04/brand-2-5-112x42.png"
                                                style="opacity: 0.3" alt="globale brand"></div>
                                        <div class="slide"><img src="public/uploads/2023/04/brand-2-6-112x42.png"
                                                style="opacity: 0.3" alt="globale brand"></div>

                                    </div>

                                </div>
                            </section>
                            <!--Brand Two End-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-926b64 elementor-section-full_width about__page elementor-section-height-default elementor-section-height-default"
        data-id="926b64" data-element_type="section">
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6f5b5618"
                data-id="6f5b5618" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-7bd3c142 elementor-widget elementor-widget-treck-counter"
                        data-id="7bd3c142" data-element_type="widget" data-widget_type="treck-counter.default">
                        <div class="elementor-widget-container">
                            <!--Counter One Start-->
                            <section class="counter-one">
                                <div class="counter-one__bg"
                                    style="background-image: url(public/uploads/2023/04/counter-one-bg.png);">
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <!--Counter One Single Start-->
                                        <div class="col-xl-3 col-lg-6 col-md-6">
                                            <div class="counter-one__single">
                                                <div class="counter-one__icon icon-svg-large">
                                                    <span aria-hidden="true" class="  icon-passport-4"></span>
                                                </div>
                                                <div class="counter-one__content">
                                                    <div class="counter-one__count-box count-box">
                                                        <h3 class="count-text" data-stop="30" data-speed="1500">
                                                            00</h3>
                                                        <span class="counter-two__plus">+</span>
                                                    </div>
                                                    <p class="">Visa Categories</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Counter One Single End-->
                                        <!--Counter One Single Start-->
                                        <div class="col-xl-3 col-lg-6 col-md-6">
                                            <div class="counter-one__single">
                                                <div class="counter-one__icon icon-svg-large">
                                                    <span aria-hidden="true" class="   icon-life-insurance"></span>
                                                </div>
                                                <div class="counter-one__content">
                                                    <div class="counter-one__count-box count-box">
                                                        <h3 class="count-text" data-stop="68" data-speed="1500">
                                                            00</h3>
                                                        <span class="counter-two__plus">k</span>
                                                    </div>
                                                    <p class=" ">Visa Process</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Counter One Single End-->
                                        <!--Counter One Single Start-->
                                        <div class="col-xl-3 col-lg-6 col-md-6">
                                            <div class="counter-one__single">
                                                <div class="counter-one__icon icon-svg-large">
                                                    <span aria-hidden="true" class="   icon-success"></span>
                                                </div>
                                                <div class="counter-one__content">
                                                    <div class="counter-one__count-box count-box">
                                                        <h3 class="count-text" data-stop="99" data-speed="1500">
                                                            00</h3>
                                                        <span class="counter-two__plus">+</span>
                                                    </div>
                                                    <p class="  ">Success Rate</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Counter One Single End-->
                                        <!--Counter One Single Start-->
                                        <div class="col-xl-3 col-lg-6 col-md-6">
                                            <div class="counter-one__single">
                                                <div class="counter-one__icon icon-svg-large">
                                                    <span aria-hidden="true" class="   icon-group"></span>
                                                </div>
                                                <div class="counter-one__content">
                                                    <div class="counter-one__count-box count-box">
                                                        <h3 class="count-text" data-stop="23" data-speed="1500">
                                                            00</h3>
                                                        <span class="counter-two__plus">+</span>
                                                    </div>
                                                    <p class="   ">Pro Consultants</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Counter One Single End-->
                                    </div>
                                </div>
                            </section>
                            <!--Counter One End-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
<script src="{{ url('public/js/web/aboutus.js') }}"></script>
<script>
    $('.customer-logos').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
</script>
@include('front.' . $headerInfo->slug . '.elements.footer')
