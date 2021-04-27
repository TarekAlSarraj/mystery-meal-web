@extends ('client/layout')

@section ('client_home_content')



<!-- Begin Page Content -->

<div class="container-fluid">

@include('client.companies.header' , ['activeclass' => 'employees'])

<br><br>

<h1 class="text-gray-800"> موظّفين شركة {{$company->c_name}}</h1>




<!-- MOF ADDRESS ============ Content Row -->
<br><br>





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
                      <th>تعديل</th>
                      <th>الغاء</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($employees as $employee)
                    <tr>
                      <td><a> <i class="fas fa-user-circle" style="font-size:2rem"></i> </a></td>
                      <td><a href="/client/companies/{{$company->id}}/employees/{{$employee->id}}"> {{$employee->user->firstname}} </a></td>
                      <td>{{$employee->user->email}}</td>
                      <td>{{$employee->address->e_phone}} | {{$employee->address->e_other_phone}}</td>
                      <td>{{$employee->company->c_name}}</td>
                      <td><a href="/client/companies/{{$company->id}}/employees/{{$employee->id}}/edit"><i class="fas fa-edit text-danger"></i></a></td>
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

<a href="/client/companies/{{$company->id}}/employees/create" class=" d-sm-inline-block btn btn-sm btn-danger shadow-sm " style="margin:10px;">إنشاء موظّف &nbsp;&nbsp;<i class="fas fa-plus fa-sm text-white-50"></i> </a>






<br><br>




@endsection