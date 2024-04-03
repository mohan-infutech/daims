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
                     <h2>Administration</h2> </div>
                  <div class="pq-breadcrumb-container mt-2">
                     <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>"><i class="fas fa-home mr-2"></i>Home</a></li>
                        <li class="breadcrumb-item active">Administration</li>
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
   

   <section class="our-team pq-pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pq-section pq-style-1 text-center">
                        <span class="pq-section-sub-title">Administration</span>
                        <h5 class="pq-section-title">Meet Our Administration</h5>
                    </div>
                    <div class="pq-filters">
                        <div class="filters pq-filter-button-group">
                            <ul>
                                <li class="pq-filter-btn mx-2 active" data-filter="All">View All</li>
                                <?php foreach ($type as $key => $value): ?>
                                    <li class="pq-filter-btn mx-2" data-filter="<?= strtolower(str_replace(' ', '-', $value)); ?>"><?= $value ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <?php foreach ($admins as $admin): ?>
                    <div class="col-xl-4 col-md-6 col-sm-12 grid-item" data-filter="<?= strtolower(str_replace(' ', '-', $admin->type)); ?>">
                        <div class="pq-team pq-team-style-1 pb-lg-5">
                            <div class="pq-team-box pq-style-1">
                                <div class="pq-team-img">
                                    <img src="<?= base_url('/admin/assets/uploads/' . $admin->image); ?>" class="img-fluid" alt="team-image">
                                </div>
                                <div class="pq-team-info">
                                    <h5 class="pq-member-name">
                                        <a href="#"><?= $admin->name ?></a>
                                    </h5>
                                    <span class="pq-team-designation"><?= $admin->designation ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>




    <?php $this->load->view("sections/footer"); ?>
  