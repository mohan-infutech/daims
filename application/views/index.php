<?php $this->load->view("sections/header"); ?>

<?php $this->load->view("sections/logobar"); ?>

    <?php $this->load->view("sections/navbar"); ?>


    <?php $this->load->view("sections/slider"); ?>
    

    
    <!-- Service Box Start-->
    <section class="service-box pt-0 pb-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="pq-fancy-box pq-style-5">
                        <div class="pq-fancy-box-hoverbg">
                            <img src="<?= ASSETS . 'images/services/1.jpg'; ?>" alt="">
                        </div>
                        <div class="pq-fancy-media">
                            <div class="pq-fancy-box-icon">
                                <i class=" flaticon-medical-doctor"></i>
                            </div>
                            <div class="pq-fancy-box-info">
                                <h5 class="pq-fancy-box-title">Our Mission</h5>
                            </div>
                        </div>
                        <p class="pq-fancybox-description">Affordable, quality medical education fostering skilled professionals with values. Promoting social awareness and national integration.</p>
                        <div class="pq-btn-container">
                            <a class="pq-button pq-button-link" href="endocrinology-services.html">
                                <div class="pq-button-block">
                                    <span class="pq-button-text">Read More</span>
                                    <i class="ion ion-plus-round"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 mt-4 mt-md-0">
                    <div class="pq-fancy-box pq-style-5">
                        <div class="pq-fancy-box-hoverbg">
                            <img src="<?= ASSETS . 'images/services/3.jpg'; ?>" alt="">
                        </div>
                        <div class="pq-fancy-media">
                            <div class="pq-fancy-box-icon">
                                <i class=" flaticon-first-aid-box"></i>
                            </div>
                            <div class="pq-fancy-box-info">
                                <h5 class="pq-fancy-box-title">Our Vision</h5>
                            </div>
                        </div>
                        <p class="pq-fancybox-description">We aspire to be a global center of excellence, producing skilled professionals with essential values to meet both Indian and global needs.</p>
                        <div class="pq-btn-container">
                            <a class="pq-button pq-button-link" href="orthopaedics-services.html">
                                <div class="pq-button-block">
                                    <span class="pq-button-text">Read More</span>
                                    <i class="ion ion-plus-round"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 mt-4 mt-xl-0">
                    <div class="pq-fancy-box pq-style-5">
                        <div class="pq-fancy-box-hoverbg">
                            <img src="<?= ASSETS . 'images/services/3.jpg'; ?>" alt="">
                        </div>
                        <div class="pq-fancy-media">
                            <div class="pq-fancy-box-icon">
                                <i class=" flaticon-doctor-1"></i>
                            </div>
                            <div class="pq-fancy-box-info">
                                <h5 class="pq-fancy-box-title">Our Approach</h5>
                            </div>
                        </div>
                        <p class="pq-fancybox-description">Global excellence, skilled professionals with values, blending technical expertise, human insight, leadership, and creativity for diverse needs.</p>
                        <div class="pq-btn-container">
                            <a class="pq-button pq-button-link" href="nurology-service.html">
                                <div class="pq-button-block">
                                    <span class="pq-button-text">Read More</span>
                                    <i class="ion ion-plus-round"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Service Box End-->

    <!--Medicine Start-->
    <section class="medicine">
        <div class="container">
            <div class="row align-items-center pq-reveser flex-md-column-reverse flex-lg-row">
                <div class="col-lg-7 col-md-12 pe-xl-5 mt-4 mt-lg-0">
                    <div class="pq-section pq-style-1 text-left">
                        <span class="pq-section-sub-title">About Us</span>
                        <h5 class="pq-section-title">Empowering excellence in healthcare</h5>
                    </div>
                    <div class="pq-icon-box pq-style-5 mt-5">
                        <div class="pq-icon-box-content">
                            <p class="pq-icon-box-description">We aim to produce skilled professionals in Medical Science, adapting to societal needs. Our commitment involves providing affordable, quality education, particularly for Tribal & Economically backward students. Embracing co-education, we empower students and promote values like humanity and integrity. We foster social awareness, community orientation, and national integration. Our core principles include transparency and self-reliance, shaping not only careers but also well-rounded individuals.</p>
                        </div>
                    </div>
                    <a href="about-us.html" class="pq-button">
                        <div class="pq-button-block">
                            <span class="pq-button-text">Read More</span>
                            <i class="ion ion-plus-round"></i>
                        </div>
                    </a>
                </div>
                <div class="col-lg-5 col-md-12">
                <div class="card shadow border-0 mb-5">
                    <div class="card-body p-5">
                        <h2 class="h4 mb-4">News & Notifications</h2>
                        <div class="marquee-container">
                            <ul id="notification-list" class="list-group">
                                <?php foreach ($notifications as $notification): ?>
                                    <li class="list-group-item rounded-0">
                                        <div class="notification-details">
                                            <!--<label class="cursor-pointer font-italic d-block custom-control-label"><?= $notification['title']; ?></label>-->
                                            <div class="d-flex flex-row align-items-center justify-content-between">
                                                <p class="my-0 notification-text"><?= $notification['date']; ?></p>
                                                <p class="my-0 notification-text"><?= $notification['description']; ?></p>
                                                <a href="<?= base_url('notifications/download/' . $notification['id']); ?>" class="btn-primary ml-auto">
                                                    <i class="ion ion-android-download"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>






            </div>
        </div>
    </section>
    <!--Medicine End  -->

    <!--Service Start-->
    <section class="pq-bg-primary-dark pq-bg-img-1 pq-pb-100">
   <div class="container">
      <div class="col-lg-12">
         <div class="pq-section pq-style-1 text-center">
            <span class="pq-section-sub-title">Our Courses</span>
            <h5 class="pq-section-title pq-text-white">Courses We are Specialised In</h5>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-12">
            <div class="owl-carousel owl-theme">
               <div class="item ">
                  <div class="pq-fancy-box pq-style-5">
                     <div class="pq-fancy-box-hoverbg">
                        <img src="<?= ASSETS . 'images/services/1.jpg'; ?>" alt="">
                     </div>
                     <div class="pq-fancy-media">
                        <div class="pq-fancy-box-info">
                           <h5 class="pq-fancy-box-title">Auxiliary Nurse and Midwives (ANM)</h5>
                        </div>
                     </div>
                     <p class="pq-fancybox-description"><strong><em>Eligibility :</em></strong>+2 (Any Wing), Female candidates Only</p>
                     <p class="pq-fancybox-description"><strong><em>Course Duration :</em></strong>2 Years</p>
                     <div class="pq-btn-container">
                        <a class="pq-button pq-button-link" href="angioplasty-services.html">
                           <div class="pq-button-block">
                              <span class="pq-button-text">Read More</span>
                              <i class="ion ion-plus-round"></i>
                           </div>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="pq-fancy-box pq-style-5">
                     <div class="pq-fancy-box-hoverbg">
                        <img src="<?= ASSETS . 'images/services/1.jpg'; ?>" alt="">
                     </div>
                     <div class="pq-fancy-media">
                        <div class="pq-fancy-box-info">
                           <h5 class="pq-fancy-box-title">General Nurse and Midwives (GNM)</h5>
                        </div>
                     </div>
                     <p class="pq-fancybox-description"><strong><em>Eligibility :</em></strong>+2 (Any Wing), Female candidates Only</p>
                     <p class="pq-fancybox-description"><strong><em>Course Duration :</em></strong>2 Years</p>
                     <div class="pq-btn-container">
                        <a class="pq-button pq-button-link" href="angioplasty-services.html">
                           <div class="pq-button-block">
                              <span class="pq-button-text">Read More</span>
                              <i class="ion ion-plus-round"></i>
                           </div>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="pq-fancy-box pq-style-5">
                     <div class="pq-fancy-box-hoverbg">
                        <img src="<?= ASSETS . 'images/services/1.jpg'; ?>" alt="">
                     </div>
                     <div class="pq-fancy-media">
                        <div class="pq-fancy-box-info">
                           <h5 class="pq-fancy-box-title">B.Sc Nursing</h5>
                        </div>
                     </div>
                     <p class="pq-fancybox-description"><strong><em>Eligibility :</em></strong>+2 (PCMB), must cleared CET / NEET with Pass percentage, Both Male & Female candidates</p>
                     <p class="pq-fancybox-description"><strong><em>Course Duration :</em></strong>2 Years</p>
                     <div class="pq-btn-container">
                        <a class="pq-button pq-button-link" href="angioplasty-services.html">
                           <div class="pq-button-block">
                              <span class="pq-button-text">Read More</span>
                              <i class="ion ion-plus-round"></i>
                           </div>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="pq-fancy-box pq-style-5">
                     <div class="pq-fancy-box-hoverbg">
                        <img src="<?= ASSETS . 'images/services/1.jpg'; ?>" alt="">
                     </div>
                     <div class="pq-fancy-media">
                        <div class="pq-fancy-box-info">
                           <h5 class="pq-fancy-box-title">M.Sc Nursing</h5>
                        </div>
                     </div>
                    <p class="pq-fancybox-description"><strong><em>Eligibility :</em></strong>UG Complete with 1 Year experience in college of Nursing/ Hospital, Both Male & Female candidates</p>
                     <p class="pq-fancybox-description"><strong><em>Course Duration :</em></strong>2 Years</p>
                     <div class="pq-btn-container">
                        <a class="pq-button pq-button-link" href="angioplasty-services.html">
                           <div class="pq-button-block">
                              <span class="pq-button-text">Read More</span>
                              <i class="ion ion-plus-round"></i>
                           </div>
                        </a>
                     </div>
                  </div>
               </div>

               <div class="item">
                  <div class="pq-fancy-box pq-style-5">
                     <div class="pq-fancy-box-hoverbg">
                        <img src="<?= ASSETS . 'images/services/1.jpg'; ?>" alt="">
                     </div>
                     <div class="pq-fancy-media">
                        <div class="pq-fancy-box-info">
                           <h5 class="pq-fancy-box-title">Diploma in Medical Laboratory Technology (DMLT)</h5>
                        </div>
                     </div>
                     <p class="pq-fancybox-description"><strong><em>Eligibility :</em></strong>+2 (Any Wing), Both Male & Female candidates Only</p>
                     <p class="pq-fancybox-description"><strong><em>Course Duration :</em></strong>3 Years</p>
                     <div class="pq-btn-container">
                        <a class="pq-button pq-button-link" href="angioplasty-services.html">
                           <div class="pq-button-block">
                              <span class="pq-button-text">Read More</span>
                              <i class="ion ion-plus-round"></i>
                           </div>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
    <!--Service End-->
    




    <!--Testimonial Start -->
    <?php $this->load->view("sections/testimonials"); ?>
    <!--Testimonial End -->

    <!--Consult Start-->
    <section class="consult pq-bg-grey pt-0 pb-0">
        <div class="container">
            <div class="row ">
                <div class="col-xl-6 col-lg-6 col-md-12 pq-consult m-auto">
                    <div class="pq-section pq-style-1 text-left mb-5">
                        <span class="pq-section-sub-title">Contact Us</span>
                        <h5 class="pq-section-title">For any queries contact us</h5>
                    </div>
                    <div class="pq-applyform-white-bg">
                        <form class="pq-applyform" novalidate action="#" method="post">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" name="your-name" id="first-name" class="name-field" placeholder="Your Name" required>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="gender" id="gender" class="gender-field" placeholder="Gender" required>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="phone-number" id="phone-number" class="phone-number-field" placeholder="Phone Number" required>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="your-email" id="e-mail" class="e-mail-field" placeholder="Your Email" required>
                                </div>
                                <div class="col-lg-12">
                                    <textarea name="your-message" id="message" cols="40" rows="10" placeholder="Your Message" required></textarea>
                                </div>
                                <div class="col-lg-12">
                                    <a class="pq-button form-btn" >
                                        <div class="pq-button-block">
                                            <span class="pq-button-text me-0">Send Message</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Consult End-->

    


<?php $this->load->view("sections/footer"); ?>


    