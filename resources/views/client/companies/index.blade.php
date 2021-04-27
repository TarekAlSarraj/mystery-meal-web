@extends ('client/layout')

@section ('client_home_content')

<br><br>
<!-- Begin Page Content -->

<div class="container-fluid">




<!-- Content Row -->

<div class="row">

  <div class="col-lg-12 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">الشّركات</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead  class="mytableheader">
                    <tr>
                      <th>صورة الشّركة</th>
                      <th>إسم الشّركة</th>
                      <th>البريد الالكتروني للشّركة</th>
                      <th>نوع الشّركة</th>
                      <th>تعديل</th>
                      <th>الغاء</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($companies as $company)
                    <tr>
                      <td><a> <i class="fas fa-user-circle" style="font-size:2rem"></i> </a></td>
                      <td><a href="/client/companies/{{$company->id}}"> {{$company->c_name}} </a></td>
                      <td>{{$company->c_email}}</td>
                      <td>{{$company->c_type}}</td>
                      <td><a href="/client/companies/{{$company->id}}/edit"><i class="fas fa-edit text-danger"></i></a></td>
                      <td><a><i class="fas fa-trash text-danger"></i></a></td>
                    </tr>
                    @endforeach
                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>

  </div>


</div>

<a href="/client/companies/create" class=" d-sm-inline-block btn btn-sm btn-danger shadow-sm " style="margin:10px;">إنشاء شركة &nbsp;&nbsp;<i class="fas fa-plus fa-sm text-white-50"></i> </a>





<br><br>




@endsection