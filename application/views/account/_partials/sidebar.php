    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-main sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('index.php/dashboard'); ?>">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-chart-area"></i>
        </div>
        <div class="sidebar-brand-text mx-3">triumpho</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('index.php/dashboard'); ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Overview</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('index.php/doc_mgt'); ?>">
          <i class="fas fa-fw fa-folder-open"></i>
          <span>Doc. Management</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Achievement
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-dollar-sign"></i>
          <span>Financial</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Components:</h6>
            <a class="collapse-item" href="<?php echo base_url('index.php/dashboard#financial'); ?>">CFU EBIT Margin</a>
            <a class="collapse-item" href="<?php echo base_url('index.php/dashboard#financial'); ?>">Digital Business Revenue</a>
            <a class="collapse-item" href="<?php echo base_url('index.php/dashboard#financial'); ?>">Business Line ROIC</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-user"></i>
          <span>Customer</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Components:</h6>
            <a class="collapse-item" href="<?php echo base_url('index.php/dashboard#customer'); ?>">Customer Acquisition</a>
            <a class="collapse-item" href="<?php echo base_url('index.php/dashboard#customer'); ?>">Customer Monetization</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Internal Business Process Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseIBP" aria-expanded="true" aria-controls="collapseIBP">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Int. Biz. Process</span>
        </a>
        <div id="collapseIBP" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Components:</h6>
            <a class="collapse-item" href="<?php echo base_url('index.php/dashboard#ibp'); ?>">Collection Ratio</a>
            <a class="collapse-item" href="<?php echo base_url('index.php/dashboard#ibp'); ?>">SOA Compliance</a>
            <a class="collapse-item" href="<?php echo base_url('index.php/dashboard#ibp'); ?>">SI Execution</a>
            <a class="collapse-item" href="<?php echo base_url('index.php/dashboard#ibp'); ?>">Synergy Cross CFU</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Market Behavior Research
      </div>

      <!-- Nav Item - CI -->
      <li class="nav-item">
        <a class="nav-link" href="">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Compt. Intelligence</span></a>
      </li>
      
      <!-- Nav Item - CM -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCM" aria-expanded="true" aria-controls="collapseCM">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Compt. Movement</span>
        </a>
        <div id="collapseCM" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Components:</h6>
            <a class="collapse-item" href="<?php echo base_url('index.php/submarinecablemap'); ?>">Submarine Cable</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->