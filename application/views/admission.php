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
                     <h2>Admission</h2> </div>
                  <div class="pq-breadcrumb-container mt-2">
                     <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>"><i class="fas fa-home mr-2"></i>Home</a></li>
                        <li class="breadcrumb-item active">Admission</li>
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
                    <span class="pq-section-sub-title">ADMISSION</span>
                    <h5 class="pq-section-title">Seat Availability</h5>
                </div>
            </div>
        </div>
         <div class="row d-flex justify-content-center">
            <div class="col-lg-12">
              <div class="table100 ver2 m-b-110">
                <table data-vertable="ver2">
                <thead>
                <tr class="row100 head">
                <th class="column100 column1" data-column="column1">Courses</th>
                <th class="column100 column2" data-column="column2">Seat Availability</th>
                </tr>
                </thead>
                <tbody>
                <tr class="row100">
                <td class="column100 column1" data-column="column1">DMLT</td>
                <td class="column100 column2" data-column="column2">50</td>
                </tr>
                </tbody>
                </table>
                </div>
            </div>
         </div>
   </section>

    <?php $this->load->view("sections/footer"); ?>
  