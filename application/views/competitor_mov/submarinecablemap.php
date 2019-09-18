<!DOCTYPE html>
<html lang="en">

<?php $this->load->view("account/_partials/head.php")?>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <?php $this->load->view("account/_partials/sidebar.php")?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <?php $this->load->view("account/_partials/topbar.php")?>
        <!-- Begin Page Content -->
        <div class="container-fluid" id="submarine">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><b>Submarine Cable</b> Map</h1>
          </div>

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-12">
              <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseNetPro" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseNetPro">
                  <h6 class="m-0 font-weight-bold text-primary"><b>Cable</b> Map</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse" id="collapseNetPro">
                <?php $this->load->view('competitor_mov/map_reference.php') ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container-fluid" id="submarine">
          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-12">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary"><b>News</b> Update</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Filter:</div>
                      <a class="dropdown-item" href="#">Monthly</a>
                      <a class="dropdown-item" href="#">Yearly</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <p>A submarine communications cable is a cable laid on the sea bed between land-based stations to carry telecommunication signals across stretches of ocean and sea. The first submarine communications cables laid beginning in the 1850s carried telegraphy traffic, establishing the first instant telecommunications links between continents, such as the first transatlantic telegraph cable which became operational on 16 August 1858. Subsequent generations of cables carried telephone traffic, then data communications traffic. Modern cables use optical fiber technology to carry digital data, which includes telephone, Internet and private data traffic.</p>
                  <p>Modern cables are typically about 1 inch (25 mm) in diameter and weigh around 2.5 tons per mile (1.4 tonnes per km) for the deep-sea sections which comprise the majority of the run, although larger and heavier cables are used for shallow-water sections near shore.[1][2] Submarine cables first connected all the world's continents (except Antarctica) when Java was connected to Darwin, Northern Territory, Australia in 1871 in anticipation of the completion of the Australian Overland Telegraph Line in 1872 connecting to Adelaide, South Australia and thence to the rest of Australia.[3]</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <!-- End of Main Content -->
      <?php $this->load->view("account/_partials/footer.php")?>
    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <?php $this->load->view("account/_partials/logout_modal.php")?>
  <?php $this->load->view("account/_partials/js.php")?>
</body>

</html>
