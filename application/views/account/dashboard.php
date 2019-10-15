<!DOCTYPE html>
<html lang="en">

<?php $this->load->view("account/_partials/head.php")?>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php $this->load->view("account/_partials/sidebar.php") ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <?php $this->load->view("account/_partials/topbar.php")?>

        <!-- Begin Page Content -->
        <div class="container-fluid" id="overview">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><b>Overview</b> VP NIS Contract Management Achievement</h1>
            <div>
              <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
            </div>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Achievement -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Overall Ach.</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">102%</div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 97.14%" aria-valuenow="105" aria-valuemin="0" aria-valuemax="105"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-bullseye fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Ach. Network</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">62%</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-signal fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Ach. Tower</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">28%</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-bars fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Ach. Infra</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">40%</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-ship fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">CFU Revenue <span style="font-weight: normal;">(Quarterly)</span></h6>
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
                  <div class="chart-area" style="height: 250px;">
                    <canvas id="CFURevenue"></canvas>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pie Chart -->
            <div class="col-xl-4 col-lg-5">
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Resume</h6>
                </div>
                <div class="card-body" style="height: 290px;">
                  <span style="font-size: 15px;"><p>SB Admin 2 makes extensive use of Bootstrap 4 utility classes in order to reduce CSS bloat and poor page performance. Custom CSS classes are used to create custom components and custom utility classes.</p>
                  <p>Before working with this theme, you should become familiar with the Bootstrap framework, especially the utility classes.</p></span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="container-fluid" id="financial">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Financial</h1>
          </div>

          <div class="row">

            <div class="col-xl-8 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">CFU EBIT Margin <span style="font-weight: normal;">(Quarterly)</span></h6>
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
                  <div class="chart-bar" style="height: 450px;">
                    <canvas id="myBarChart"></canvas>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-4 col-lg-5">
              <!-- Collapsable Card Example -->
              <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseDBR" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseDBR">
                  <h6 class="m-0 font-weight-bold text-primary">Digital Business Revenue</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseDBR">
                  <div class="card-body" style="height: 206px;">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h6 class="h6 mb-0 text-gray-500"><strong>Q1</strong><h6>
                        <h6 class="h6 mb-0 text-gray-500">Rp XXX.XXX.XXX.XXX,-</h6>
                    </div>
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h6 class="h6 mb-0 text-gray-500"><strong>Q2</strong><h6>
                        <h6 class="h6 mb-0 text-gray-500">Rp XXX.XXX.XXX.XXX,-</h6>
                    </div>
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h5 class="h5 mb-0 text-gray-800"><strong>Q3</strong><h5>
                        <h5 class="h5 mb-0 text-gray-800">Rp XXX.XXX.XXX.XXX,-</h5>
                    </div>
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h6 class="h6 mb-0 text-gray-500"><strong>Q4</strong><h6>
                        <h6 class="h6 mb-0 text-gray-500">Rp XXX.XXX.XXX.XXX,-</h6>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseROIC" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseROIC">
                  <h6 class="m-0 font-weight-bold text-primary">Business Line ROIC</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseROIC">
                  <div class="card-body" style="height: 206px;">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h6 class="h6 mb-0 text-gray-500"><strong>Q1</strong><h6>
                        <h6 class="h6 mb-0 text-gray-500">XX %</h6>
                    </div>
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h6 class="h6 mb-0 text-gray-500"><strong>Q2</strong><h6>
                        <h6 class="h6 mb-0 text-gray-500">XX %</h6>
                    </div>
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h5 class="h5 mb-0 text-gray-800"><strong>Q3</strong><h5>
                        <h5 class="h5 mb-0 text-gray-800">XX %</h5>
                    </div>
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h6 class="h6 mb-0 text-gray-500"><strong>Q4</strong><h6>
                        <h6 class="h6 mb-0 text-gray-500">XX %</h6>
                    </div>
                  </div>
                </div>
              </div>

            </div>

          </div>
        </div>
          
        <div class="container-fluid" id="customer">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Customer</h1>
          </div>

          <div class="row">

            <div class="col-xl-4 col-lg-4">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Network Market Share</h6>
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
                  <div class="chart-bar" style="height: 100px;">
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-4 col-lg-4">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Tower Market Share</h6>
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
                  <div class="chart-bar" style="height: 100px;">
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-4 col-lg-4">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Infra Market Share</h6>
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
                  <div class="chart-bar" style="height: 100px;">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="container-fluid" id="customer">

          <!-- Page Heading -->
          <div class="row">

            <div class="col-xl-4 col-lg-4">
              <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseNetPro" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseNetPro">
                  <h6 class="m-0 font-weight-bold text-primary">Network Production</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse" id="collapseNetPro">
                  <div class="card-body" style="height: 150px;">
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-4 col-lg-4">
              <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseTowPro" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseTowPro">
                  <h6 class="m-0 font-weight-bold text-primary">Tower Production</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse" id="collapseTowPro">
                  <div class="card-body" style="height: 150px;">
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-4 col-lg-4">
              <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseInfPro" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseInfPro">
                  <h6 class="m-0 font-weight-bold text-primary">Infrastructure Production</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse" id="collapseInfPro">
                  <div class="card-body" style="height: 150px;">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="container-fluid" id="ibp">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Internal Business Process</h1>
          </div>

          <div class="row">

            <div class="col-xl-6 col-lg-6">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Collection Ratio</h6>
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
                  <div class="chart-bar" style="height: 100px;">
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-6 col-lg-6">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">SOA Compliance</h6>
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
                  <div class="chart-bar" style="height: 100px;">
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">

            <div class="col-xl-6 col-lg-6">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">SI Execution</h6>
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
                  <div class="chart-bar" style="height: 100px;">
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-6 col-lg-6">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Synergy Accross CFU</h6>
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
                  <div class="chart-bar" style="height: 100px;">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- /.container-fluid -->

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
