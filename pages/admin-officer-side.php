<style>
        .main-sidebar{
            background-color: #fff;
        }
        .nav-sidebar>.nav-item .nav-icon.fa, .nav-sidebar>.nav-item .nav-icon.fab, .nav-sidebar>.nav-item .nav-icon.fad, .nav-sidebar>.nav-item .nav-icon.fal, .nav-sidebar>.nav-item .nav-icon.far, .nav-sidebar>.nav-item .nav-icon.fas, .nav-sidebar>.nav-item .nav-icon.ion, .nav-sidebar>.nav-item .nav-icon.svg-inline--fa {
            color: #ec7063;
            margin-top: 15px;
        }
        .nav-link p{
            color: #ec7063;
        }
        
        .sidebar-dark-primary .nav-sidebar>.nav-item>.nav-link.active, .sidebar-light-primary .nav-sidebar>.nav-item>.nav-link.active {
            background-color: #dee2e659;

        }
        .sidebar-mini .main-sidebar .nav-link, .sidebar-mini-md .main-sidebar .nav-link, .sidebar-mini-xs .main-sidebar .nav-link {
        width: calc(250px - 0.5rem * 2);
        transition: width ease-in-out .3s;
        min-height: 10vh;
        }
        
    </style>


<html>
    <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      

      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          
        
          
          <li class="nav-item">
            <a href="admin-notify.php" class="nav-link">
              <i class="nav-icon fas fa-check-square"></i>
              <p>
                รอยืนยัน
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="admin-list.php" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                รายการแจ้งซ่อม
              </p>
            </a>
          </li>

            <li class="nav-item">
              <a href="admin-record.php" class="nav-link">
                <i class="nav-icon fas fa-list-alt"></i>
                <p>
                  ประวัติการแจ้งซ่อม
                </p>
              </a>
            </li>
          
          

          <li class="nav-item icon1">
            <a href="admin-setting.php" class="nav-link">
              <i class="nav-icon fas fa-plus-square "></i>
              <p>
                เพิ่มเจ้าหน้าที่
              </p>
            </a>
          </li>

          <li class="nav-item icon1">
            <a href="admin-officer.php" class="nav-link active">
              <i class="nav-icon fas fa-table "></i>
              <p>
                รายชื่อเจ้าหน้าที่
              </p>
            </a>
          </li>
          

          <li class="nav-item ">
            <a href="logout.php" class="nav-link">
              <i class="nav-icon fas fa-share-square "></i>
              <p>
                ออกจากระบบ
              </p>
            </a>
          </li>
          
    <!-- /.sidebar -->
  </aside>
</html>