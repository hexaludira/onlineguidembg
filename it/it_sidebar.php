<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="dist/img/it.png" alt="" class="" style="width:45px;height:30px;">
      <span class="brand-text font-weight-light">IT</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

<!-- Sidebar Menu -->
<!-- level administrator -->
      <?php
          if ($data_level == "1") {
          ?>
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="?page=it_index" class="nav-link">
              <i class="nav-icon fas fa-chart-pie fa-spin"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-header">MASTER DATA</li>
          <li class="nav-item">
            <a href="?page=server_view" class="nav-link">
              <i class="nav-icon fas fa-server"></i>
              <p>Server</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="?page=system_view" class="nav-link">
              <i class="nav-icon fas fa-laptop-house"></i>
              <p>System</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="?page=item_view" class="nav-link">
              <i class="nav-icon fas fa-database"></i>
              <p>Data Center</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="?page=item_view" class="nav-link">
              <i class="nav-icon fas fa-ethernet"></i>
              <p>Router</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="?page=item_view" class="nav-link">
              <i class="nav-icon fas fa-tools"></i>
              <p>T-A-C</p>
            </a>
          </li>
          <li class="nav-header">DAILY</li>
          <li class="nav-item">
            <a href="?page=item_view" class="nav-link">
              <i class="nav-icon fas fa-door-closed"></i>
              <p>Server Room Inspect</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="?page=item_view" class="nav-link">
              <i class="nav-icon fas fa-chalkboard-teacher"></i>
              <p>System Inspect</p>
            </a>
          </li>
          <li class="nav-header">MONTHLY</li>
          <li class="nav-item">
            <a href="?page=item_view" class="nav-link">
              <i class="nav-icon fas fa-chart-line"></i>
              <p>Tx/Rx</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="?page=item_view" class="nav-link">
              <i class="nav-icon fas fa-coins"></i>
              <p>Storage Usage</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="?page=item_view" class="nav-link">
              <i class="nav-icon fas fa-hdd"></i>
              <p>Backup Record</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="?page=item_view" class="nav-link">
              <i class="nav-icon fas fa-file-alt"></i>
              <p>My Report</p>
            </a>
          </li>
          <li class="nav-header">INCIDENT</li>
          <li class="nav-item">
            <a href="?page=item_view" class="nav-link">
              <i class="nav-icon fas fa-info"></i>
              <p>Incident by Case</p>
            </a>
          </li>
          <li class="nav-header">PURCHASE & SUBSCRIBE</li>
          <li class="nav-item">
            <a href="?page=item_view" class="nav-link">
              <i class="nav-icon fas fa-donate"></i>
              <p>Purchase</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="?page=item_view" class="nav-link">
              <i class="nav-icon fas fa-thumbs-up"></i>
              <p>Subscribe</p>
            </a>
          </li>
          <li class="nav-header">INVENTORY & MUTATION</li>
          <li class="nav-item">
            <a href="?page=item_view" class="nav-link">
              <i class="nav-icon fas fa-warehouse"></i>
              <p>360°</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="?page=item_view" class="nav-link">
              <i class="nav-icon fas fa-shipping-fast"></i>
              <p>Issue</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="?page=item_view" class="nav-link">
              <i class="nav-icon fas fa-people-carry"></i>
              <p>Receipt</p>
            </a>
          </li>
          <li class="nav-header">ACTION</li>
          <li class="nav-item">
            <a href="?page=administrator-def" class="nav-link">
              <i class="nav-icon fas fa-close"></i>
              <p>Close</p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
    <?php
          } 
    ?>
<!-- /.level administrator --> 
<!-- /.sidebar-menu -->
</aside>