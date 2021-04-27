@extends ('admin/layout')

@section ('admin_home_content')

<!-- Begin Page Content -->
<div class="container-fluid">




<!-- Content Row -->
<br>
<h1 class="h3 mb-0 text-gray-800">الملف الشخصي 
</h1>

<br><br>


<div class="row">

<div class="col-lg-6 mb-4">

<div class="row">
    <i class="fas fa-user-circle" style = "font-size:200px; text-align:center;margin:auto"></i>
</div>

<div class="row">
<h3 style="margin-right: 60px;text-align:center;margin:auto"> {{$user->username}}</h3>
</div>



<div class="row">
<h5 style="margin-right: 60px;text-align:center;margin:auto"> 
@if($user->is_deactivated==0)
<span class="badge badge-pill badge-secondary" style="font-size:15px; background-color:green">فعّال</span> 

<br><br>

<a href="" data-toggle="modal" data-target="#deactivateModal"> <i class="fas fa-user-times text-danger"></i> </a>
@endif
@if($user->is_deactivated==1)
 <span class="badge badge-pill badge-secondary" style="font-size:15px; background-color:red">موقف</span> 
 
 <br><br>

<a href="" data-toggle="modal" data-target="#deactivateModal" class="text-success"> إعادة تفعيل <i class="fas fa-user-check text-success"></i> </a>
@endif

<br><br>
<a href="" data-toggle="modal" data-target="#logoutModal" class="text-danger"> حذف بشكل دائم <i class="fas fa-trash-alt" style="color:red"></i> </a>

</h5>
</div>
    

</div>

  <!-- Deactivate Modal-->
  <div class="modal fade" id="deactivateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">هل تريد توقيف حساب {{$user->username}} ؟</h5>
          
        </div>
        <div class="modal-footer">
          <button class="btn btn-gray" type="button" data-dismiss="modal">لا</button>
          <a class="btn btn-danger" href="/admin/clients/{{$user->profile_id}}/profile/deactivate">
          نعم 
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- Deactivate Modal-->
    

<div class="col-lg-6 mb-4">

<div class="row">

  <div class="col-lg-6 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">الاسم</h6>
            </div>
            <div class="card-body">
             
                     {{$user->firstname}}
                    
                     

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

                
            {{$user->lastname}}

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

                
            {{$user->username}}

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

            {{$user->email}}

                      
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

            {{$user->email}}

                      
            </div>
          </div>

  </div>

</div>





 
</div>






</div>





















@endsection