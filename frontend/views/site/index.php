<?php
use common\helpers\AppHelper;
use yii\helpers\Url;
?>
    <div id="preloader">
        <div id="loader"></div>
    </div>
    <div class="s-pagewrap">
        <section id="intro" class="s-intro">
            <div class="s-intro__slider swiper-container">
                <div class="swiper-wrapper">
                    <div class="s-intro__slide swiper-slide bg-opacity-10" style="background-image: url('../web/images/slides/slide-01.jpg');"></div>
                    <div class="s-intro__slide swiper-slide bg-opacity-40" style="background-image: url('../web/images/slides/slide-02.jpg');"></div>
                    <div class="s-intro__slide swiper-slide bg-opacity-40" style="background-image: url('../web/images/slides/slide-03.jpg');"></div>
                </div>
            </div>

            <div class="row s-intro__content">
                <div class="column lg-12">
                    <div class="counter">
                        <div class="counter__time">
                            <span class="ss-days">365</span>
                            <span>days</span>
                        </div>
                        <div class="counter__time">
                            <span class="ss-hours">01</span>
                            <span>hours</span>
                        </div>
                        <div class="counter__time minutes">
                            <span class="ss-minutes">01</span>
                            <span>mins</span>
                        </div>
                        <div class="counter__time">
                            <span class="ss-seconds">55</span>
                            <span>secs</span>
                        </div>
                    </div>  <!-- end counter -->

                    <div class="s-intro__content-bottom">
                        <h1 class="s-intro__content-title">Cure Beauty App is launching soon.</h1>
                        <p>
                            Cure Beauty App is a modern and stylish APP <br>
                        APP created for launching your future awesome <br>
                        products and services. 
                        </p>
                    </div>

                </div>

                <div class="s-intro__scroll">
                    <p class="scroll-text">Scroll For More</p>
                    <a href="#info" class="smoothscroll">
                        <div class="mouse"></div>
                    </a>
                    <div class="end-top"></div>
                </div> <!-- end s-intro__scroll -->

            </div> <!-- intro__content -->

        </section> <!-- end s-intro -->


        <!-- # info
        ================================================== -->
        <section id="info" class="s-info">

            <div class="s-info__bg"></div>

            <div class="row">
                <div class="column lg-12">

                    <nav class="tab-nav">
                        <ul class="tab-nav__list"> 
                            <li class="active" data-id="tab-about">
                                <a href="#tab-about">
                                    About
                                </a>
                            </li>
                            <li>
                                <a href="#tab-services">
                                    Services
                                </a>
                            </li>
                            <li>
                                <a href="#tab-contact">
                                    Subscribe
                                </a>
                            </li>
                        </ul>
                    </nav> <!-- end tab-nav -->
        
                    <div class="tab-content">
        
                        <!-- 01 - tab about -->
                        <div id="tab-about" class='tab-content__item'>
        
                            <div class="row tab-content__item-header">
                                <div class="column">
                                    <h2>Get To Know Us.</h2>
                                </div>
                            </div>
        
                            <div class="row">
                                <div class="column">
                                    <p class="lead">
                                    Quidem molestiae natus ipsa ut nihil molestiae numquam tenetur. Ipsum quia 
                                    sit vitae ipsam et temporibus est. Consequatur recusandae aut aut. Aut esse 
                                    sed sint. Sit ipsa velit possimus est. Atque doloribus dicta sit beatae 
                                    necessitatibus. Aut voluptate asperiores nostrum eveniet magnam et consequatur 
                                    ab accusamus magni.
                                    </p>
        
                                    <p>
                                    Tempora debitis perspiciatis eum. Repudiandae et aperiam quos exercitationem 
                                    enim voluptatem quam sequi temporibus. Ratione quis nihil voluptatem placeat 
                                    nemo. Quibusdam delectus magni quas et architecto et repellat a nam.
                                    Quasi et voluptates libero sed vel quos in nisi. Error et quis. Impedit autem 
                                    porro facilis. Aut voluptate asperiores nostrum eveniet magnam et consequatur 
                                    ab accusamus.
                                    </p>
        
                                    <div class="row">
                                        <div class="column lg-6 tab-12">
                                            <h4>More About Us.</h4>
                                            <p>
                                            Sed consequatur quia delectus praesentium. Ut unde velit maiores aut sint 
                                            quia molestiae accusamus. Nihil et quidem qui natus ut et. Autem error 
                                            architecto. Pariatur ex repellendus. Occaecati voluptatibus dolorem magni 
                                            molestiae dolore voluptas occaecati asperiores nemo. Est fugiat fuga nesciunt 
                                            ducimus quaerat et placeat natus.
                                            </p>
                                        </div>
                                        <div class="column lg-6 tab-12">
                                            <h4>Need Web Hosting?</h4>
                                            <p>
                                            Need a great reliable web hosting?
                                            We highly recommend <a href="https://www.dreamhost.com/r.cgi?287326">DreamHost</a>.
                                            Powerful web and Wordpress hosting. Guaranteed. Starting at $2.95 per month.
                                            </p>
                                            <a href="https://www.dreamhost.com/r.cgi?287326" class="btn btn--primary u-fullwidth">Get Started Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div> <!-- end 01 - tab about -->
        
                        <!-- 02 - tab services -->
                        <div id="tab-services" class='tab-content__item'>
        
                            <div class="row tab-content__item-header">
                                <div class="column">
                                    <h2>What We Do.</h2>
                                </div>
                            </div>
        
                            <div class="row">
                                <div class="column">
                                    <p class="lead">
                                    Sit ut cum molestiae. Dolore ducimus qui quasi. Fugiat consequatur sit vel illum vel et 
                                    a delectus. Vel sequi vitae voluptatem perspiciatis eligendi. Voluptatibus optio natus 
                                    asperiores est commodi amet quia architecto. Dolores necessitatibus et. Voluptatibus 
                                    optio natus asperiores est commodi amet quia architecto. Dolores necessitatibus et.
                                    </p>
                                </div>
                            </div>
        
                            <div class="row services-list block-lg-one-half block-md-one-half block-tab-whole">
        
                                <div class="column services-list__item">
                                    <div class="services-list__item-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M12,6c-3.309,0-6,2.691-6,6s2.691,6,6,6s6-2.691,6-6S15.309,6,12,6z M12,16c-2.206,0-4-1.794-4-4s1.794-4,4-4s4,1.794,4,4 S14.206,16,12,16z"></path><path d="M12,2C6.579,2,2,6.579,2,12s4.579,10,10,10s10-4.579,10-10S17.421,2,12,2z M12,20c-4.337,0-8-3.663-8-8s3.663-8,8-8 s8,3.663,8,8S16.337,20,12,20z"></path><path d="M12,10c-1.081,0-2,0.919-2,2s0.919,2,2,2s2-0.919,2-2S13.081,10,12,10z"></path></svg>
                                    </div>
                                    <div class="services-list__item-content">
                                        <h4 class="item-title">Brand Identity</h4>
                                        <p>
                                        Sit ut cum molestiae. Dolore ducimus qui quasi. Fugiat consequatur sit vel illum vel et 
                                        a delectus. Vel sequi vitae voluptatem perspiciatis eligendi. Voluptatibus optio natus 
                                        asperiores est commodi amet quia architecto. Dolores necessitatibus et.
                                        </p>
                                    </div>
                                </div>
                    
                                <div class="column services-list__item">
                                    <div class="services-list__item-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M18.277,8C18.624,8.596,19.262,9,20,9c1.104,0,2-0.896,2-2s-0.896-2-2-2c-0.738,0-1.376,0.404-1.723,1H16V4 c0-0.553-0.447-1-1-1H9C8.448,3,8,3.447,8,4v2H5.723C5.376,5.404,4.738,5,4,5C2.896,5,2,5.896,2,7s0.896,2,2,2 c0.738,0,1.376-0.404,1.723-1H8v0.369C5.133,9.84,4.318,12.534,4.091,14H3c-0.552,0-1,0.447-1,1v4c0,0.553,0.448,1,1,1h4 c0.552,0,1-0.447,1-1v-4c0-0.553-0.448-1-1-1H6.123c0.197-0.959,0.718-2.406,2.085-3.418C8.391,10.829,8.669,11,9,11h6 c0.331,0,0.61-0.171,0.792-0.419c1.373,1.013,1.895,2.458,2.089,3.419H17c-0.553,0-1,0.447-1,1v4c0,0.553,0.447,1,1,1h4 c0.553,0,1-0.447,1-1v-4c0-0.553-0.447-1-1-1h-1.092C19.681,12.534,18.866,9.839,16,8.368V8H18.277z M6,18H4v-2h2V18z M20,18h-2v-2 h2V18z M14,9h-4V8V6V5h4V9z"></path></svg>
                                    </div>
                                    <div class="services-list__item-content">
                                        <h4 class="item-title">Illustration</h4>
                                        <p>
                                        Sit ut cum molestiae. Dolore ducimus qui quasi. Fugiat consequatur sit vel illum vel et 
                                        a delectus. Vel sequi vitae voluptatem perspiciatis eligendi. Voluptatibus optio natus 
                                        asperiores est commodi amet quia architecto. Dolores necessitatibus et.
                                        </p>
                                    </div>
                                </div>
                    
                                <div class="column services-list__item">
                                    <div class="services-list__item-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M19,3H5C3.897,3,3,3.897,3,5v14c0,1.103,0.897,2,2,2h14c1.103,0,2-0.897,2-2V5C21,3.897,20.103,3,19,3z M19,5l0.001,4H15h-2 H5V5H19z M5,11h8v8H5V11z M15,19v-8h4.001l0.001,8H15z"></path></svg>
                                    </div>
                                    <div class="services-list__item-content">
                                        <h4 class="item-title">Web Design</h4>
                                        <p>
                                        Sit ut cum molestiae. Dolore ducimus qui quasi. Fugiat consequatur sit vel illum vel et 
                                        a delectus. Vel sequi vitae voluptatem perspiciatis eligendi. Voluptatibus optio natus 
                                        asperiores est commodi amet quia architecto. Dolores necessitatibus et.
                                        </p>
                                    </div>
                                </div>
                    
                                <div class="column services-list__item">
                                    <div class="services-list__item-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M20,3H4C2.897,3,2,3.897,2,5v11c0,1.103,0.897,2,2,2h4l-1.8,2.4l1.6,1.2l2.7-3.6h3l2.7,3.6l1.6-1.2L16,18h4 c1.103,0,2-0.897,2-2V5C22,3.897,21.103,3,20,3z M4,16V5h16l0.001,11H4z"></path><path d="M6 12H10V14H6z"></path></svg>
                                    </div>
                                    <div class="services-list__item-content">
                                        <h4 class="item-title">Product Strategy</h4>
                                        <p>
                                        Sit ut cum molestiae. Dolore ducimus qui quasi. Fugiat consequatur sit vel illum vel et 
                                        a delectus. Vel sequi vitae voluptatem perspiciatis eligendi. Voluptatibus optio natus 
                                        asperiores est commodi amet quia architecto. Dolores necessitatibus et.
                                        </p>
                                    </div>
                                </div>
                    
                                <div class="column services-list__item">
                                    <div class="services-list__item-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M20,3H7C5.897,3,5,3.897,5,5v2H4C2.897,7,2,7.897,2,9v10c0,1.103,0.897,2,2,2h6c1.103,0,2-0.897,2-2h8c1.103,0,2-0.897,2-2 V5C22,3.897,21.103,3,20,3z M9.997,19H4V9h2h4L9.997,19z M19.997,17H12V9c0-1.103-0.897-2-2-2H7V5h13L19.997,17z"></path></svg>
                                    </div>
                                    <div class="services-list__item-content">
                                        <h4 class="item-title">UI/UX Design</h4>
                                        <p>
                                        Sit ut cum molestiae. Dolore ducimus qui quasi. Fugiat consequatur sit vel illum vel et 
                                        a delectus. Vel sequi vitae voluptatem perspiciatis eligendi. Voluptatibus optio natus 
                                        asperiores est commodi amet quia architecto. Dolores necessitatibus et.
                                        </p>
                                    </div>
                                </div>
                    
                                <div class="column services-list__item">
                                    <div class="services-list__item-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M5,22h14c1.103,0,2-0.897,2-2V9c0-0.553-0.447-1-1-1h-3V7c0-2.757-2.243-5-5-5S7,4.243,7,7v1H4C3.447,8,3,8.447,3,9v11 C3,21.103,3.897,22,5,22z M9,7c0-1.654,1.346-3,3-3s3,1.346,3,3v1H9V7z M5,10h2v2h2v-2h6v2h2v-2h2l0.002,10H5V10z"></path></svg>
                                    </div>
                                    <div class="services-list__item-content">
                                        <h4 class="item-title">E-Commerce</h4>
                                        <p>
                                        Sit ut cum molestiae. Dolore ducimus qui quasi. Fugiat consequatur sit vel illum vel et 
                                        a delectus. Vel sequi vitae voluptatem perspiciatis eligendi. Voluptatibus optio natus 
                                        asperiores est commodi amet quia architecto. Dolores necessitatibus et.
                                        </p>
                                    </div>
                                </div>
                    
                            </div> <!-- end services-list -->
                            
                        </div> <!-- end 02 - tab services -->
        
                        <!-- 03 - tab contact -->
                        <div id="tab-contact" class="tab-content__item">
        
                            <div class="row tab-content__item-header">
                                <div class="column">
                                    <h2>Subscribe To Our Newsletter.</h2>
                                </div>
                            </div>
        
                            <div class="row">
                                <div class="column">
                                    
                                    <p class="lead">
                                    Voluptates laborum eum quas. Pariatur impedit sit veniam est 
                                    et quasi voluptas voluptatem. Cumque hic enim perferendis 
                                    amet odit in molestias debitis. Facere nulla qui pariatur 
                                    quasi mollitia et. Et dolorem dolorum quo in sit architecto.
                                    </p>

                                    <p>
                                    Sit ut cum molestiae. Dolore ducimus qui quasi. Fugiat consequatur sit vel illum vel et 
                                    a delectus. Vel sequi vitae voluptatem perspiciatis eligendi. Voluptatibus optio natus 
                                    asperiores est commodi amet quia architecto. Dolores necessitatibus et.
                                    </p>

                                    <form id="mc-form" class="mc-form">
                                        <input type="email" name="EMAIL" id="mce-EMAIL" class="u-fullwidth text-center" placeholder="Email Address" title="The domain portion of the email address is invalid (the portion after the @)." pattern="^([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22))*\x40([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d))*(\.\w{2,})+$" required>
                                        <input type="submit" name="subscribe" value="Subscribe" class="btn--small btn--primary u-fullwidth">
                                        <!-- <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_cdb7b577e41181934ed6a6a44_9a91cfe7b3" tabindex="-1" value=""></div> -->
                                        <div class="mc-status"></div>
                                    </form>
        
                                </div>
                            </div>
                            
                        </div> <!-- end 03 - tab contact -->
        
                    </div> <!-- end tab content -->

                </div> <!-- end column -->
            </div> <!-- end row -->

        </section> <!-- end s-info -->

    </div> <!-- end pagewrap -->