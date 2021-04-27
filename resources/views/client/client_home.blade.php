@extends ('client/layout')

@section ('client_home_content')

<!-- Begin Page Content -->
<div class="container-fluid">

<br>
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-danger">الصفحة الرئيسيّة</h1>
</div>
<br>


<br><br><br>


<div class="row">

  <div class="col-lg-12 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">قائمة الشّركات</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered " width="100%" cellspacing="0">
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



<br><br>
<br><br>

<div class="row">

  <div class="col-lg-12 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">قائمة الموظفين</h6>
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
                      <th>تعديل</th>
                      <th>الغاء</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                    @foreach ($employees as $employee)
                    <tr>
                      <td><a> <i class="fas fa-user-circle" style="font-size:2rem"></i> </a></td>
                      <td><a href="/client/companies/{{$employee->company->id}}/employees/{{$employee->id}}"> {{$employee->user->firstname}} </a></td>
                      <td>{{$employee->user->email}}</td>
                      <td>{{$employee->user->firstname}}</td>
                      <td>{{$employee->company->c_name}}</td>
                      <td><a href="/client/employees/{{$employee->id}}/edit"><i class="fas fa-edit text-danger"></i></a></td>
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



@endsection