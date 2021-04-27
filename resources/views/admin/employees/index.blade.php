@extends ('admin/layout')

@section ('admin_home_content')

<br><br>
<!-- Begin Page Content -->

<div class="container-fluid">




<!-- Content Row -->

<div class="row">

  <div class="col-lg-12 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">الموظفين</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead  class="mytableheader">
                    <tr>
                      <th>صورة الموظف</th>
                      <th>إسم الموظف</th>
                      <th>البريد الالكتروني للموظف</th>
                      <th>هاتف الموظّف</th>
                      <th>مكان عمل الموظف</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><a> <i class="fas fa-user-circle" style="font-size:2rem"></i> </a></td>
                      <td><a href="/admin/employee/show"> فلان </a></td>
                      <td>بيانات</td>
                      <td>بيانات</td>
                      <td>بيانات</td>
                    </tr>

                    <tr>
                      <td><a> <i class="fas fa-user-circle" style="font-size:2rem"></i> </a></td>
                      <td><a href="/admin/employee/show"> فلان </a></td>
                      <td>بيانات</td>
                      <td>بيانات</td>
                      <td>بيانات</td>
                    </tr>

                    <tr>
                      <td><a> <i class="fas fa-user-circle" style="font-size:2rem"></i> </a></td>
                      <td><a href="/admin/employee/show"> فلان </a></td>
                      <td>بيانات</td>
                      <td>بيانات</td>
                      <td>بيانات</td>
                    </tr>
                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>

  </div>


</div>

<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm ">إنشاء تقرير &nbsp;&nbsp;<i class="fas fa-download fa-sm text-white-50"></i> </a>




<br><br>




@endsection