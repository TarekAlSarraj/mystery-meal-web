<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>AFS Web App</title>

  <!-- Custom fonts for this template-->
  <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@600&family=Open+Sans:wght@400;700&display=swap" rel="stylesheet"> 
  <!-- Custom styles for this template-->
  <link href="/css/sb-admin-2.css" rel="stylesheet">
  <link href="/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-white sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
          
        <div class="sidebar-brand-icon ">
          <i class="text-danger fas fa-wallet"></i>
        </div>
    </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="/employee">
          <i class="fas fa-home"></i>
          <span>الصفحة الرئيسيّة</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">



      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
      <a class="nav-link" href="/employee">
          <span><i class="fas fa-info-circle"></i> &nbsp; المعلومات</span>
      </a>
        </a>
      </li>


      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

       <!-- Nav Item - Utilities Collapse Menu -->
       <li class="nav-item">
      <a class="nav-link" href="/employee/address">
          <span><i class="fas fa-map-marker-alt"></i> &nbsp; العنوان</span>
      </a>
        </a>
      </li>

           <!-- Divider -->
           <hr class="sidebar-divider d-none d-md-block">

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
      <a class="nav-link" href="/employee/spouse">
        <span><i class="fas fa-male"></i><i class="fas fa-female"></i> &nbsp; معلومات عن الزوج(ة)</span>
      </a>
      </a>
      </li>

                 <!-- Divider -->
                 <hr class="sidebar-divider d-none d-md-block">

        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
        <a class="nav-link" href="/employee/child">
          <span><i class="fas fa-building"></i> &nbsp; معلومات عن الأولاد</span>
        </a>
        </a>
        </li>

                         <!-- Divider -->
         <hr class="sidebar-divider d-none d-md-block">

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
      <a class="nav-link" href="/employee/files">
        <span><i class="fas fa-folder-open"></i> &nbsp; الملفّات</span>
      </a>
      </a>
      </li>

      <hr class="sidebar-divider d-none d-md-block">

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
<a class="nav-link" href="/employee/oldwork">
  <span><i class="fas fa-building"></i> &nbsp; معلومات عن العمل السابق</span>
</a>
</a>
</li>


      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

        

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

          


            <div class="topbar-divider d-none d-sm-block"></div>
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user-circle img-profile rounded-circle usercircleIcon"></i>
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"> 
                 @auth
                 {{Auth::user()->firstname}} {{Auth::user()->lastname}}
                 @endauth
                </span>
                
              </a>
              
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
              <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  اسم المستخدم:
                  @auth
                 {{Auth::user()->username}} 
                 @endauth
                </a>


                <div class="dropdown-divider"></div>


                <a class="dropdown-item" href="/employee/profile">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  الملف الشخصي
                </a>
                
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  تسجيل خروج
                </a>
              </div>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link">
            <img src="/img/afslogo.png" alt="" class="afslogoImg">  
            </a>
            </li>
          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- ======================= yield area ================================-->

        @yield ('employee_home_content')

        <!-- ======================= yield area ================================-->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; AFS 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>


             <!-- Delete Modal-->
             <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel"></h5>
            </div>
            <br><br>
            <p style="padding:5px;margin-top:10px;">لا يمكنك التراجع بعد هذه العملية </p>
            <div class="modal-footer">
              <button class="btn btn-gray" type="button" data-dismiss="modal">لا</button>
              <a class="btn btn-danger" href="" id="modalAnchor">
              الغاء
              </a>
            </div>
          </div>
        </div>
      </div>


      

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">هل تريد تسجيل الخروح؟</h5>
              <!-- <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" style="float:left;">×</span>
              </button> -->
            </div>
            <div class="modal-footer">
              <button class="btn btn-gray" type="button" data-dismiss="modal">لا</button>
              <a class="btn btn-danger" href="{{ route('logout') }}"
              onclick="event.preventDefault();document.getElementById('logout-form').submit();">
              تسجيل الخروج
              </a>
            </div>
          </div>
        </div>
      </div>

      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      @csrf
      </form>


      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>

  <!-- my js -->
  <script src="/js/myjs.js"></script>


  <!-- Bootstrap core JavaScript-->
  <script src="/vendor/jquery/jquery.min.js"></script>
  <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="/js/demo/chart-area-demo.js"></script>
  <script src="/js/demo/chart-pie-demo.js"></script>

  <!-- Page level plugins -->
  <script src="/vendor/datatables/jquery.dataTables.js"></script>
  <script src="/vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Page level custom scripts -->
  <script src="/js/demo/datatables-demo.js"></script>
</body>

</html>
