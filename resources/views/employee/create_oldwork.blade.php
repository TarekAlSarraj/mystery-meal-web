@extends ('employee/layout')

@section ('employee_home_content')

<!-- Begin Page Content -->
<div class="container-fluid">



@include('/employee.header' , ['activeclass' => 'oldwork'])




<br>
<h1 class="h3 mb-0 text-danger">اضافة عمل سابق</h1>
<br><br>






<form method="POST" action="/employee/oldwork">
          @csrf





 
          <div class="row">

<div class="col-lg-2 mb-4">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-danger">اسم الشركة</h6>
          </div>
          <div class="card-body">
          <input type="text" class="form-control form-control-user" id="company_name" name="company_name" >
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
          <input type="text" class="form-control form-control-user" id="company_owner" name="company_owner" >
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
                      value="">
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
                      value=" " >
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
                      value=" " >
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
                      value=" " >
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
                      value=" " >
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
                      value=" " >
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