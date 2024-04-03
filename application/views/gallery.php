<?php $this->load->view("sections/header"); ?>
<?php $this->load->view("sections/navbar"); ?>
<!--=================================
    Banner Start-->
<div class="pq-breadcrumb" style="background-image:url();">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <nav aria-label="breadcrumb">
                    <div class="pq-breadcrumb-title">
                        <h2>Gallery</h2>
                    </div>
                    <div class="pq-breadcrumb-container mt-2">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url() ?>"><i class="fas fa-home mr-2"></i>Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Academics</a></li>
                            <li class="breadcrumb-item active">Gallery</li>
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
<section class="pq-pb-210">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12"><!-- 
                <div class="pq-filters">
                    <div class="filters pq-filter-button-group">
                        <ul>
                            <li class="pq-filter-btn active" data-filter="All">All</li>
                            <li class="pq-filter-btn" data-filter="Clinic">Clinic</li>
                            <li class="pq-filter-btn" data-filter="Family">Family</li>
                            <li class="pq-filter-btn" data-filter="Laboratory">Laboratory</li>
                            <li class="pq-filter-btn" data-filter="Pediatrics">Pediatrics</li>
                            <li class="pq-filter-btn" data-filter="Therapy">Therapy</li>
                        </ul>
                    </div>
                </div> -->
                <div class="pq-grid " data-next_items="4" data-initial_items="8">
                    <?php if (!empty($pictures) && is_array($pictures)): ?>
                    <?php foreach ($pictures as $key => $obj): ?>
                    <div class="pq-grid-item pq-filter-items pq-col-3  ipq-lg-6  30 ">
                        <div class="pq-portfoliobox pq-style-1">
                            <div class="pq-portfolio-img">
                                <img src="<?= base_url('/admin/assets/uploads/' . $obj->file); ?>" class="img-fluid" alt="">
                                <a href="#previewModal1">
                                    <div class="pq-portfolio-icon"><i class="fas fa-search"></i></div>
                                </a>
                            </div>
                            <div class="pq-portfolio-info">
                                <span><?=  $obj->type_name; ?></span>
                                <h5><a href="#"><?=  $obj->name; ?></a></h5>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    <?php else: ?>
                    <p>No pictures available.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 ">
                <?= $pages ?>
            </div>
        </div>
    </div>
</section>
<!-- Preview Modal -->
<div class="modal fade" id="previewModal" tabindex="-1" aria-labelledby="previewModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
                <img class="img-fluid" id="modal-img" src="" alt="Preview Image">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("sections/footer"); ?>