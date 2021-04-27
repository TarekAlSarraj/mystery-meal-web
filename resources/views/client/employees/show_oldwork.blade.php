@extends ('client/layout')

@section ('client_home_content')

<!-- Begin Page Content -->
<div class="container-fluid">


@include('client.employees.header' , ['activeclass' => 'oldwork'])



<br>
<h1 class="h3 mb-0 text-danger"> العمل السابق للموظّف  <span class="text-gray-800">{{$employee->user->firstname}} {{$employee->user->lastname}}</span>
<span><a href="/client/companies/{{$company->id}}/employees/{{$employee->id}}/oldwork/{{$oldwork->id}}/edit"><i class="fas fa-edit text-gray-800"></i></a></span>
</h1>
<br><br>












 
          <div class="row">

<div class="col-lg-2 mb-4">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-danger">اسم الشركة</h6>
          </div>
          <div class="card-body">
          <p>{{$oldwork->company_name}}</p>
          </div>
        </div>

</div>

<div class="col-lg-2 mb-4">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-danger">مالك الشركة</h6>
          </div>
          <div class="card-body">
          <p>{{$oldwork->company_owner}}</p>
          </div>
        </div>

</div>

<div class="col-lg-4 mb-4">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-danger">عنوان الشركة </h6>
          </div>
          <div class="card-body">
          <p>{{$oldwork->company_address}}</p>
          </div>
        </div>

</div>

<div class="col-lg-2 mb-4">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-danger">رقم الشركة في الضمان الاجتماعي</h6>
          </div>
          <div class="card-body">
          <p>{{$oldwork->ssn_number}}</p>
          </div>
        </div>

</div>

<div class="col-lg-2 mb-4">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-danger">رقم الشركة في وزارة الماليّة</h6>
          </div>
          <div class="card-body">
          <p>{{$oldwork->mof_number}}</p>
          </div>
        </div>

</div>



</div>

<div class="row">

<div class="col-lg-2 mb-4">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-danger">الأجر الأخير </h6>
          </div>
          <div class="card-body">
          <p>{{$oldwork->last_salary}}</p>
          </div>
        </div>

</div>


<div class="col-lg-2 mb-4">
      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-danger">تاريخ بدء العمل</h6>
        </div>
        <div class="card-body">
        <p>{{$oldwork->date_started}}</p>
        </div>
      </div>

</div>

<div class="col-lg-2 mb-4">
      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-danger">تاريخ ترك العمل</h6>
        </div>
        <div class="card-body">
        <p>{{$oldwork->date_left}}</p>
        </div>
      </div>

</div>





</div>







<br><br>


@endsection