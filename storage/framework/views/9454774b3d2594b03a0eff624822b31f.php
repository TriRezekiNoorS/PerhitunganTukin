<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo e(asset('AdminLTE/dist/img/PENGAYOMAN.PNG')); ?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo e(auth()->user()->name); ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo e(asset('AdminLTE/dist/img/PENGAYOMAN.PNG')); ?>" class="img-circle" alt="User Image">

                <p>
                <?php echo e(auth()->user()->name); ?>

                </p>
              </li>
              <!-- Menu Body -->
              
                <!-- /.row -->
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  
                </div>
                <div class="pull-right">
                  <a href="<?php echo e(url ('logout')); ?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">NAVIGATION</li>
        <li class="treeview">
          <a href="<?php echo e(url('home')); ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            </span>
          </a>
        </li>
    
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <?php if(auth()->user()->level=='pegawai'): ?>
            <li><a href="<?php echo e(url('satker1')); ?>"><i class="fa fa-circle-o"></i> Satuan Kerja</a></li>
            <li><a href="<?php echo e(url('pegawai1')); ?>"><i class="fa fa-circle-o"></i> Pegawai</a></li>
          <?php endif; ?>
            <?php if(auth()->user()->level=='admin'): ?>
            <li><a href="<?php echo e(url('satker')); ?>"><i class="fa fa-circle-o"></i> Satuan Kerja</a></li>
            <li><a href="<?php echo e(url('pegawai')); ?>"><i class="fa fa-circle-o"></i> Pegawai</a></li>
            <li><a href="<?php echo e(url('jabatan')); ?>"><i class="fa fa-circle-o"></i> Jabatan</a></li>
            <li><a href="<?php echo e(url('golongan')); ?>"><i class="fa fa-circle-o"></i> Golongan</a></li>
            <li><a href="<?php echo e(url('grade')); ?>"><i class="fa fa-circle-o"></i> Grade</a></li>
            <li><a href="<?php echo e(url('kelas')); ?>"><i class="fa fa-circle-o"></i> kelas</a></li>
            <?php endif; ?>
          </ul>
        </li>
        <?php if(auth()->user()->level=='admin'): ?>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-file"></i> <span>Pengajuan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <li><a href="<?php echo e(url('jenis-potongan')); ?>"><i class="fa fa-circle-o"></i> Jenis Potongan</a></li>
            <li><a href="<?php echo e(url('pengajuan_potongan')); ?>"><i class="fa fa-circle-o"></i> Pengajuan Potongan</a></li>
            <li><a href="<?php echo e(url('pengajuanpajak')); ?>"><i class="fa fa-circle-o"></i> Pengajuan Pajak</a></li>
          </ul>
        </li>
        <?php endif; ?>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Perhitungan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <?php if(auth()->user()->level=='pegawai'): ?>
          <li><a href="<?php echo e(url('hitung1')); ?>"><i class="fa fa-circle-o"></i> Hitung</a></li>
          <li><a href="<?php echo e(url('potongan1')); ?>"><i class="fa fa-circle-o"></i> Potongan</a></li>
            <li><a href="<?php echo e(url('pajak1')); ?>"><i class="fa fa-circle-o"></i>Pajak</a></li>
          <?php endif; ?>
          <?php if(auth()->user()->level=='admin'): ?>
            <li><a href="<?php echo e(url('hitung')); ?>"><i class="fa fa-circle-o"></i> Hitung</a></li>
            <li><a href="<?php echo e(url('potongan')); ?>"><i class="fa fa-circle-o"></i> Potongan</a></li>
            <li><a href="<?php echo e(url('pajak')); ?>"><i class="fa fa-circle-o"></i>Pajak</a></li>
            <?php endif; ?>
          </ul>
        </li>
        <?php if(auth()->user()->level=='admin'): ?>
        <li class="treeview">
          <a href="<?php echo e(url('laporan')); ?>">
            <i class="fa fa-folder"></i> <span>Laporan</span>
            </span>
          </a>
        </li>
        <?php endif; ?>
        <?php if(auth()->user()->level=='pegawai'): ?>
        <li class="treeview">
          <a href="<?php echo e(url('status')); ?>">
            <i class="fa fa-folder"></i> <span>Validasi Laporan</span>
            </span>
          </a>
        </li>
        <?php endif; ?>
        

          </ul>
      </ul>
    </section><?php /**PATH C:\laragon\www\PerhitunganTukin\resources\views/Beranda/sidebar.blade.php ENDPATH**/ ?>