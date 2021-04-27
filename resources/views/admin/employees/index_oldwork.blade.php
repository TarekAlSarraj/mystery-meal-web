@extends ('admin/layout')

@section ('admin_home_content')

<br><br>
<!-- Begin Page Content -->

<div class="container-fluid">


@include('admin.employees.header' , ['activeclass' => 'oldwork'])


<br><br>

<h1 class="text-gray-800"> العمل السابق للموظّف {{$employee->user->firstname}} {{$employee->user->lastname}}</h1>




<!-- MOF ADDRESS ============ Content Row -->
<br><br>


client


<!-- Content Row -->

<div class="row">

  <div class="col-lg-12 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">العمل السابق</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead  class="mytableheader">
                    <tr>
                      <th>إسم الشركة</th>
                      <th>مالك الشركة</th>
                      <th>عنوان الشركة</th>
                    
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($oldworks as $oldwork)
                    <tr>
                      <td><a href="/admin/employees/{{$employee->id}}/oldwork/{{$oldwork->id}}"> {{$oldwork->company_name}} </a></td>
                      <td>{{$oldwork->company_owner}}</td>
                      <td>{{$oldwork->company_address}}</td>
                 
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




@endsection