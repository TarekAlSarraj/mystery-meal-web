@extends ('client/layout')

@section ('client_home_content')

<!-- Begin Page Content -->
<div class="container-fluid">



@include('client.employees.header' , ['activeclass' => 'oldwork'])




<br>
<h1 class="h3 mb-0 text-danger">تعديل العمل السابق للموظّف  <span class="text-gray-800">{{$employee->user->firstname}} {{$employee->user->lastname}}</span></h1>
<br><br>






<form method="POST" action="/client/companies/{{$company->id}}/employees/{{$employee->id}}/oldwork/{{$oldwork->id}}">
          @csrf
          @method('PUT')




 
          <div class="row">

<div class="col-lg-2 mb-4">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-danger">اسم الشركة</h6>
          </div>
          <div class="card-body">
          <input type="text" class="form-control form-control-user" id="company_name" name="company_name"
          value="{{$oldwork->company_name}}" >
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
          <input type="text" class="form-control form-control-user" id="company_owner" name="company_owner" 
          value="{{$oldwork->company_owner}}">
          </div>
        </div>

</div>

<div class="col-lg-4 mb-4">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-danger">عنوان الشركة</h6>
          </div>
          <div class="card-body">
          <input type="text" class="form-control form-control-user" id="company_address" name="company_address" 
          value="{{$oldwork->company_address}}">
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
          <input type="text" class="form-control form-control-user" id="ssn_number" name="ssn_number" 
                      value=" {{$oldwork->ssn_number}}" >
          </div>
        </div>

</div>

<div class="col-lg-2 mb-4">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-danger">رقم الشركة في وزارة المالية</h6>
          </div>
          <div class="card-body">
          <input type="text" class="form-control form-control-user" id="mof_number" name="mof_number" 
                      value=" {{$oldwork->mof_number}}" >
          </div>
        </div>

</div>






</div>

<div class="row">


<div class="col-lg-2 mb-4">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-danger">الأجر الأخير</h6>
          </div>
          <div class="card-body">
          <input type="text" class="form-control form-control-user" id="last_salary" name="last_salary" 
                      value="{{$oldwork->last_salary}} " >
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
          <input type="date" class="form-control form-control-user" id="date_started" name="date_started" 
                      value="{{$oldwork->date_started}} " >
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
          <input type="date" class="form-control form-control-user" id="date_left" name="date_left" 
                      value="{{$oldwork->date_left}} " >
          </div>
        </div>

</div>






</div>




<div class="row">
  <div class="mysubmitbtn">
  <button href="" class="btn btn-danger btn-user btn-block" type="submit">تحفيظ</button>
  </div>
</div>

</form>

<br><br>

@endsection