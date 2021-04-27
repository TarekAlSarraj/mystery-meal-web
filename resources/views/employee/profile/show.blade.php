@extends ('employee/layout')

@section ('employee_home_content')

<!-- Begin Page Content -->
<div class="container-fluid">




<!-- Content Row -->
<br>
<h1 class="h3 mb-0 text-gray-800">الملف الشخصي 
<span><a href="/employee/profile/edit"><i class="fas fa-edit text-gray-800"></i></a></span>
</h1>

<br><br>


<div class="row">

<div class="col-lg-6 mb-4">

<div class="row">
    <i class="fas fa-user-circle" style = "font-size:200px; text-align:center;margin:auto"></i>
</div>

<div class="row">
<h3 style="margin-right: 60px;text-align:center;margin:auto"> {{$employee->username}}</h3>
</div>
    

</div>
    

<div class="col-lg-6 mb-4">

<div class="row">

  <div class="col-lg-6 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">الاسم</h6>
            </div>
            <div class="card-body">
             
                     {{$employee->firstname}}
                    
                     

            </div>
          </div>

  </div>

  </div>


  <div class="row">


  <div class="col-lg-6 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">الشهرة</h6>
            </div>
            <div class="card-body">

                
            {{$employee->lastname}}

            </div>
          </div>

  </div>

</div>

<div class="row">

  <div class="col-lg-6 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">اسم المستخدم </h6>
            </div>
            <div class="card-body">

                
            {{$employee->username}}

            </div>
          </div>

  </div>

</div>

<div class="row">

  <div class="col-lg-6 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">البريد الالكتروني</h6>
            </div>
            <div class="card-body">

            {{$employee->email}}

                      
            </div>
          </div>

  </div>

</div>

<div class="row">

  <div class="col-lg-6 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">كلمة المرور</h6>
            </div>
            <div class="card-body">

            {{$employee->email}}

                      
            </div>
          </div>

  </div>

</div>





 
</div>






</div>





















@endsection