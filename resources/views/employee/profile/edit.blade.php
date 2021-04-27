@extends ('employee/layout')

@section ('employee_home_content')

<!-- Begin Page Content -->
<div class="container-fluid">




<!-- Content Row -->
<br>
<h1 class="h3 mb-0 text-gray-800">تعديل الملف الشخصي  
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
             
            <form method="POST" action="/employee/profile">
            @csrf
            @method('PUT')


            <input type="text" class="form-control form-control-user " id="firstname" name="firstname" 
                      value="{{$employee->firstname }}" >
                    
                     

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

                
            <input type="text" class="form-control form-control-user " id="lastname" name="lastname" 
                      value="{{$employee->lastname }}" >

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

                
            <input type="text" class="form-control form-control-user " id="username" name="username" 
                      value="{{$employee->username }}" >

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

            <input type="text" class="form-control form-control-user " id="email" name="email" 
                      value="{{$employee->email }}" >

                      
            </div>
          </div>

  </div>

</div>


    <a href="" class="btn btn-danger btn-user" id="changePassword"> تغيير كلمة المرور <i class="fas fa-edit"></i> </a>


<br><br>



<button href="" class="btn btn-danger btn-user" type="submit">تحفيظ</button>




 
</div>






</div>



</form>

















@endsection