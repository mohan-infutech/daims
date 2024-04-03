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
                     <h2>Departments</h2> </div>
                  <div class="pq-breadcrumb-container mt-2">
                     <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>"><i class="fas fa-home mr-2"></i>Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Facilities</a></li>
                        <li class="breadcrumb-item active">Departments</li>
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
   

   <section class="1-colume-grid pq-pb-210">
      <div class="container">
         <div class="pq-blog pq-blog-col-1">
            <div class="row">
               <div class="col-lg-6">
                  <div class="pq-blog-post">
                     <div class="pq-post-media"> <img src="<?= ASSETS . 'images/blog/funda-surgical.jpeg' ?>" class="img-fluid" alt="blogimage">
                        <div class="pq-post-date">
                           <a href="#"> <span>Fundamental Nursing &  Medical Surgical Nursing</span></a>
                        </div>
                     </div>
                     <div class="pq-blog-contain">
                        <div class="pq-blog-info">
                           <p>The Nursing Department trains ANM students in clinical skills and professionalism through workshops and academics.</p>
                        </div>
                        <div class="pq-btn-container">
                           <a href="#" class="pq-button pq-button-flat">
                              <div class="pq-button-block"> <span class="pq-button-text">Read More</span> <i class="ion ion-plus-round"></i> </div>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="pq-blog-post">
                     <div class="pq-post-media"> <img src="<?= ASSETS . 'images/blog/mtc.jpeg' ?>" class="img-fluid" alt="blogimage">
                        <div class="pq-post-date">
                           <a href="#"> <span>Department of Maternal & Child health nursing</span></a>
                        </div>
                     </div>
                     <div class="pq-blog-contain">
                        <div class="pq-blog-info">
                           <p>Maternal & Child Health Nursing: Specializes in mother and child care with a focus on prevention and family-centered approaches.</p>
                        </div>
                        <div class="pq-btn-container">
                           <a href="#" class="pq-button pq-button-flat">
                              <div class="pq-button-block"> <span class="pq-button-text">Read More</span> <i class="ion ion-plus-round"></i> </div>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="pq-blog-post">
                     <div class="pq-post-media"> <img src="<?= ASSETS . 'images/blog/chc.jpeg' ?>" class="img-fluid" alt="blogimage">
                        <div class="pq-post-date">
                           <a href="#"> <span>Department of Community Health Nursing</span></a>
                        </div>
                     </div>
                     <div class="pq-blog-contain">
                        <div class="pq-blog-info">
                           <p>The Community Health Nursing Department teaches ANM students to assess and address health issues in communities through referrals and health education.</p>
                        </div>
                        <div class="pq-btn-container">
                           <a href="#" class="pq-button pq-button-flat">
                              <div class="pq-button-block"> <span class="pq-button-text">Read More</span> <i class="ion ion-plus-round"></i> </div>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="pq-blog-post">
                     <div class="pq-post-media"> <img src="<?= ASSETS . 'images/blog/mtc.jpeg' ?>" class="img-fluid" alt="blogimage">
                        <div class="pq-post-date">
                           <a href="#"> <span>Department of Mental Health Nursing</span></a>
                        </div>
                     </div>
                     <div class="pq-blog-contain">
                        <div class="pq-blog-info">
                           <p>The Mental Health Nursing Department trains ANM students with essential skills to promote mental well-being across diverse healthcare settings, ensuring comprehensive care delivery.</p>
                        </div>
                        <div class="pq-btn-container">
                           <a href="#" class="pq-button pq-button-flat">
                              <div class="pq-button-block"> <span class="pq-button-text">Read More</span> <i class="ion ion-plus-round"></i> </div>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- <div class="col-lg-12">
                  <div class="pq-pagination">
                     <nav aria-label="Page navigation">
                        <ul class="page-numbers">
                           <li><a href="#" aria-current="page" class="page-numbers current">1</a></li>
                           <li><a class="page-numbers" href="#">2</a></li>
                           <li><a class="next page-numbers" href="#">Next page</a></li>
                        </ul>
                     </nav>
                  </div>
               </div> -->
            </div>
         </div>
      </div>
   </section>

    <?php $this->load->view("sections/footer"); ?>
  