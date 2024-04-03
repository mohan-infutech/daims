<?php $this->load->view("sections/header"); ?>
<?php $this->load->view("sections/navbar"); ?>

<!--=================================
   Banner Start-->
<div class="pq-breadcrumb" style="background-image:url('<?= base_url('images/breadcrumb.jpg'); ?>');">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <nav aria-label="breadcrumb">
                    <div class="pq-breadcrumb-title">
                        <h2>News & Events</h2>
                    </div>
                    <div class="pq-breadcrumb-container mt-2">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url('home'); ?>"><i class="fas fa-home mr-2"></i>Home</a></li>
                            <li class="breadcrumb-item active">News & Events</li>
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


<section class="project pq-pb-210">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="pq-section pq-style-1 text-center">
                    <span class="pq-section-sub-title">NEWS & NOTIFICATIONS</span>
                    <h5 class="pq-section-title">Latest Notifications</h5>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title m-0">News & Notifications</h5>
                    </div>
                    <div class="card-body">
                        <?php foreach ($notifications as $notification): ?>
                            <div class="row d-flex align-items-center my-3">
                                <div class="col-md-3">
                                    <!-- First Column for Date of Notification -->
                                    <p class="card-text"><?= $notification['date']; ?></p>
                                </div>
                                <div class="col-md-7">
                                    <!-- Second Column for Notification Description -->
                                    <p class="card-text"><?= $notification['description']; ?></p>
                                </div>
                                <div class="col-md-2">
                                    <!-- Last Column for Download Notification Button -->
                                    <a href="<?= base_url('notifications/download/' . $notification['id']); ?>" class="btn pq-button-custom">Download</a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php $this->load->view("sections/footer"); ?>
