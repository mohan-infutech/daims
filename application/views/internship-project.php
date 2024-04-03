    <?php $this->load->view("sections/header"); ?>
    <?php $this->load->view("sections/navbar"); ?>

      <!--=================================
         Banner Start-->
   <div class="pq-breadcrumb" style="background-image:url('images/breadcrumb.jpg');">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-lg-12">
               <nav aria-label="breadcrumb">
                  <div class="pq-breadcrumb-title">
                     <h2>Internship & Project</h2> </div>
                  <div class="pq-breadcrumb-container mt-2">
                     <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?echo base_url() ?>"><i class="fas fa-home mr-2"></i>Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Academics</a></li>
                        <li class="breadcrumb-item active">Internship & Project</li>
                     </ol>
                  </div>
               </nav>
            </div>
            <div class="col-lg-4">
               <div class="pq-breadcrumb-img text-right wow fadeInRight"></div>
            </div>
         </div>
      </div>
   </div>
   

   <section class="explore">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pq-section pq-style-1 text-center">
                        <span class="pq-section-sub-title">Projects</span>
                        <h5 class="pq-section-title">Internship & Project Work </h5>
                    </div>
                </div>
            </div>

            <div class="row wow  fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                <div class="col-lg-3 col-md-4">
                    <div class="pq-service-box pq-style-5">
                        <div class="pq-service-block">
                            <div class="pq-service-img">
                                <img src="<?= ASSETS . 'images/service/2.jpg'; ?>" alt="servicebox">
                            </div>
                            <div class="pq-service-box-info">
                                <div class="pq-info-text">
                                    <a href="cardiology-services.html">
                                        <h5 class="pq-service-title">Project 1</h5>
                                    </a>
                                </div>
                                <a href="cardiology-services.html">
                                    <div class="pq-service-icon">
                                        <i class="ti-arrow-right"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                    <div class="pq-service-box pq-style-5">
                        <div class="pq-service-block">
                            <div class="pq-service-img">
                                <img src="<?= ASSETS . 'images/service/3.jpg'; ?>" alt="servicebox">
                            </div>
                            <div class="pq-service-box-info">
                                <div class="pq-info-text">
                                    <a href="eye-care-services.html">
                                        <h5 class="pq-service-title">Project 2</h5>
                                    </a>
                                </div>
                                <a href="eye-care-services.html">
                                    <div class="pq-service-icon">
                                        <i class="ti-arrow-right"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                    <div class="pq-service-box pq-style-5">
                        <div class="pq-service-block">
                            <div class="pq-service-img">
                                <img src="<?= ASSETS . 'images/service/4.jpg'; ?>" alt="servicebox">
                            </div>
                            <div class="pq-service-box-info">
                                <div class="pq-info-text">
                                    <a href="dental-services.html">
                                        <h5 class="pq-service-title">Project 3</h5>
                                    </a>
                                </div>
                                <a href="dental-services.html">
                                    <div class="pq-service-icon">
                                        <i class="ti-arrow-right"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                    <div class="pq-service-box pq-style-5">
                        <div class="pq-service-block">
                            <div class="pq-service-img">
                                <img src="<?= ASSETS . 'images/service/4.jpg'; ?>" alt="servicebox">
                            </div>
                            <div class="pq-service-box-info">
                                <div class="pq-info-text">
                                    <a href="dental-services.html">
                                        <h5 class="pq-service-title">Project 4</h5>
                                    </a>
                                </div>
                                <a href="dental-services.html">
                                    <div class="pq-service-icon">
                                        <i class="ti-arrow-right"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php $this->load->view("sections/footer"); ?>
  