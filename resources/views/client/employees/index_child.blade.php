@extends ('client/layout')

@section ('client_home_content')

<br><br>
<!-- Begin Page Content -->

<div class="container-fluid">

@include('client.employees.header' , ['activeclass' => 'child'])


<br><br>

<h1 class="text-gray-800"> أولاد الموظّف {{$employee->user->firstname}} {{$employee->user->lastname}}</h1>




<!-- MOF ADDRESS ============ Content Row -->
<br><br>





<!-- Content Row -->

<div class="row">

  <div class="col-lg-12 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">الأولاد</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead  class="mytableheader">
                    <tr>
                      <th>صورة الولد</th>
                      <th>إسم الولد</th>
                      <th>شهرة الولد</th>
                      <th>إسم الأب</th>
                      <th>تعديل</th>
                      <th>الغاء</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($children as $child)
                    <tr>
                      <td><a> <i class="fas fa-user-circle" style="font-size:2rem"></i> </a></td>
                      <td><a href="/client/companies/{{$company->id}}/employees/{{$employee->id}}/child/{{$child->id}}"> {{$child->firstname}} </a></td>
                      <td>{{$child->lastname}}</td>
                      <td>{{$child->father}}</td>
                      <td><a href="/client/companies/{{$company->id}}/employees/{{$employee->id}}/child/{{$child->id}}/edit"><i class="fas fa-edit text-danger"></i></a></td>
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

<a href="/client/companies/{{$company->id}}/employees/{{$employee->id}}/child/create" class=" d-sm-inline-block btn btn-sm btn-danger shadow-sm " style="margin:10px;">إضافة  ولد آخر &nbsp;&nbsp;<i class="fas fa-plus fa-sm text-white-50"></i> </a>






<br><br>




@endsection