@extends ('employee/layout')

@section ('employee_home_content')

<!-- Begin Page Content -->
<div class="container-fluid">



@include('/employee.header' , ['activeclass' => 'address'])




<br>
<h1 class="h3 mb-0 text-danger"> تعديل العنوان</h1>
<br><br>






<form method="POST" action="/employee/address">
          @csrf
          @method('PUT')





 
          <div class="row">

<div class="col-lg-2 mb-4">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-danger">المحافظة</h6>
          </div>
          <div class="card-body">
          <input type="text" class="form-control form-control-user" id="e_governorate" name="e_governorate" 
                      value="{{$employee_address->e_governorate}}" >
          </div>
        </div>

</div>

<div class="col-lg-2 mb-4">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-danger">القضاء</h6>
          </div>
          <div class="card-body">
          <input type="text" class="form-control form-control-user" id="e_district" name="e_district" 
                      value="{{$employee_address->e_district}}" >
          </div>
        </div>

</div>

<div class="col-lg-2 mb-4">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-danger">المنطقة</h6>
          </div>
          <div class="card-body">
          <input type="text" class="form-control form-control-user" id="e_rea" name="e_rea" 
                      value="{{$employee_address->e_rea}}" >
          </div>
        </div>

</div>

<div class="col-lg-2 mb-4">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-danger">البلدة</h6>
          </div>
          <div class="card-body">
          <input type="text" class="form-control form-control-user" id="e_town" name="e_town" 
                      value="{{$employee_address->e_town}}" >
          </div>
        </div>

</div>

<div class="col-lg-2 mb-4">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-danger">الشارع</h6>
          </div>
          <div class="card-body">
          <input type="text" class="form-control form-control-user" id="e_street" name="e_street" 
                      value="{{$employee_address->e_street}}" >
          </div>
        </div>

</div>

<div class="col-lg-2 mb-4">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-danger">الحيّ</h6>
          </div>
          <div class="card-body">
          <input type="text" class="form-control form-control-user" id="e_neighborhood" name="e_neighborhood" 
                      value="{{$employee_address->e_neighborhood}}" >
          </div>
        </div>

</div>





</div>

<div class="row">

<div class="col-lg-2 mb-4">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-danger">المبنى</h6>
          </div>
          <div class="card-body">
          <input type="text" class="form-control form-control-user" id="e_building" name="e_building" 
                      value="{{$employee_address->e_building}}" >
          </div>
        </div>

</div>


<div class="col-lg-2 mb-4">
      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-danger">الطابق</h6>
        </div>
        <div class="card-body">
        <input type="text" class="form-control form-control-user" id="e_floor" name="e_floor" 
                      value="{{$employee_address->e_floor}}" >
        </div>
      </div>

</div>

<div class="col-lg-2 mb-4">
      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-danger">رقم العقار</h6>
        </div>
        <div class="card-body">
        <input type="text" class="form-control form-control-user" id="e_rea_number" name="e_rea_number" 
                      value="{{$employee_address->e_rea_number}}" >
        </div>
      </div>

</div>

<div class="col-lg-2 mb-4">
      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-danger">رقم القسم</h6>
        </div>
        <div class="card-body">
        <input type="text" class="form-control form-control-user" id="e_division_number" name="e_division_number" 
                      value="{{$employee_address->e_division_number}}" >
        </div>
      </div>

</div>

<div class="col-lg-2 mb-4">
      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-danger">هاتف</h6>
        </div>
        <div class="card-body">
        <input type="text" class="form-control form-control-user" id="e_phone" name="e_phone" 
                      value="{{$employee_address->e_phone}}" >
        </div>
      </div>

</div>

<div class="col-lg-2 mb-4">
      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-danger"> هاتف آخر</h6>
        </div>
        <div class="card-body">
        <input type="text" class="form-control form-control-user" id="e_other_phone" name="e_other_phone" 
                      value="{{$employee_address->e_other_phone}}" >
        </div>
      </div>

</div>







</div>


<div class="row">


<div class="col-lg-2 mb-4">
      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-danger">فاكس</h6>
        </div>
        <div class="card-body">
        <input type="text" class="form-control form-control-user" id="e_fax" name="e_fax" 
                      value="{{$employee_address->e_fax}}" >
        </div>
      </div>

</div>

<div class="col-lg-2 mb-4">
      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-danger">صندوق بريد</h6>
        </div>
        <div class="card-body">
        <input type="text" class="form-control form-control-user" id="e_mailbox" name="e_mailbox" 
                      value="{{$employee_address->e_mailbox}}" >
        </div>
      </div>

</div>


<div class="col-lg-2 mb-4">
      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-danger">البريد الالكتروني</h6>
        </div>
        <div class="card-body">
        <input type="email" class="form-control form-control-user" id="e_email" name="e_email" 
                      value="{{$employee_address->employee->user->email}}" >
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