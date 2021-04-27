@extends ('employee/layout')

@section ('employee_home_content')

<br><br>
<!-- Begin Page Content -->

<div class="container-fluid">
@include('employee.header' , ['activeclass' => 'spouse'])


<br><br>

<h1 class="text-gray-800"> معلومات الزوج(ة) </h1>




<!-- MOF ADDRESS ============ Content Row -->
<br><br>





<!-- Content Row -->

<div class="row">

  <div class="col-lg-12 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">الأزواج</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead  class="mytableheader">
                    <tr>
                      <th>إسم الزوج</th>
                      <th>شهرة الزوج قبل الزواج</th>
                      <th>إسم الأب</th>
                    
                      <th>تعديل</th>
                      <th>الغاء</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($spouses as $spouse)
                    <tr>
                      <td><a> <i class="fas fa-user-circle" style="font-size:2rem"></i> </a></td>
                      <td><a href="/employee/spouse/{{$spouse->id}}"> {{$spouse->firstname}} </a></td>
                      <td>{{$spouse->lastname}}</td>
                      <td>{{$spouse->father}}</td>
                      <td><a href="/employee/spouse/{{$spouse->id}}/edit"><i class="fas fa-edit text-danger"></i></a></td>
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

<a href="/employee/spouse/create" class=" d-sm-inline-block btn btn-sm btn-danger shadow-sm " style="margin:10px;">إضافة زوج آخر &nbsp;&nbsp;<i class="fas fa-plus fa-sm text-white-50"></i> </a>






<br><br>




@endsection