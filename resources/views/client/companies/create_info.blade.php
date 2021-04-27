@extends ('client/layout')

@section ('client_home_content')

<!-- Begin Page Content -->
<div class="container-fluid">



<!-- Content Row -->
<div class="row">

  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-danger shadow h-100">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-gray-800 text-uppercase mb-1">
            <a href="#" class="myCardLink cardlink-active">معلومات الشركة</a> <i class="text-danger fas fa-info-circle"></i> </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>






</div>





<!-- Content Row -->
<br>
<h1 class="h3 mb-0 text-danger">إدخال معلومات الشركة</h1>
<br><br>

  <form method="POST" action="/client/companies">
  @csrf

<div class="row">

  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">اسم الشركة</h6>
            </div>
            <div class="card-body">
             
                      <input type="text" class="form-control form-control-user @error('c_name') border-danger @enderror" id="c_name" name="c_name" 
                      value="{{ old('c_name') }}" placeholder="اسم الشركة ...">
                      @error('c_name') 
                      <br>
                      <p class="text-danger"><i class="fas fa-exclamation-triangle"></i> الرجاء إدخال اسم الشّركة </p>
                      @enderror
                     

            </div>
          </div>

  </div>

  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">البريد الالكتروني</h6>
            </div>
            <div class="card-body">

                      <input type="email" class="form-control form-control-user @error('c_email') border-danger @enderror" id="c_email" name="c_email"  
                      value="{{ old('c_email') }}"  placeholder="البريد الالكتروني ... ">

                      @error('c_email') 
                      <br>
                      <p class="text-danger"><i class="fas fa-exclamation-triangle"></i> الرجاء إدخال البريد الالكتروني </p>
                      @enderror

            </div>
          </div>

  </div>

  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">نوع الشركة</h6>
            </div>
            <div class="card-body">

                      <select class="form-control form-control-user" name="c_type" id="c_type">


                      <?php 
                            $types = App\Company_type::all();
                            foreach($types as $type){
                             echo "<option value='$type->type'>$type->type</option>";
                            }                    
                        ?>
                       
                      </select>

            </div>
          </div>

  </div>

 



  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">الشهرة التجارية</h6>
            </div>
            <div class="card-body">
              
           
            <input type="text" class="form-control form-control-user " id="com_fame" name="com_fame"  
                      value="{{ old('com_fame') }}" placeholder="الشهرة التجارية ...">


            </div>
          </div>

  </div>

</div>

<div class="row">

  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">الرقم المالي</h6>
            </div>
            <div class="card-body">
              
            <input type="text" class="form-control form-control-user " id="f_number" name="f_number"  
                      value="{{ old('f_number') }}" placeholder="الرقم المالي ...">

            </div>
          </div>

  </div>

  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">تاريخ التسجيل في وزارة المالية</h6>
            </div>
            <div class="card-body">
            
            <input type="date" class="form-control form-control-user " id="mof_date" name="mof_date"  
                      value="{{ old('mof_date') }}" placeholder="تاريخ التسجيل في وزارة المالية ...">
  
            </div>
          </div>

  </div>

  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">رقم التسجيل في الضمان الاجتماعي</h6>
            </div>
            <div class="card-body">
            <input type="text" class="form-control form-control-user " id="ssn_number" name="ssn_number"  
                      value="{{ old('ssn_number') }}" placeholder="رقم التسجيل في الضمان الاجتماعي ...">
            </div>
          </div>

  </div>

  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">مكان السّجل التجاري</h6>
            </div>
            <div class="card-body">
            <input type="text" class="form-control form-control-user " id="com_reg_place" name="com_reg_place"  
                      value="{{ old('com_reg_place') }}" placeholder="مكان السّجل التجاري ...">
            </div>
          </div>

  </div>

</div>

<div class="row">

  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">رقم السّجلّ التجاري</h6>
            </div>
            <div class="card-body">
            <input type="text" class="form-control form-control-user " id="com_reg_number" name="com_reg_number"  
                      value="{{ old('com_reg_number') }}" placeholder="رقم السّجلّ التجاري ...">
            </div>
          </div>

  </div>

  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">تاريخ السّجلّ التجاري</h6>
            </div>
            <div class="card-body">
            <input type="date" class="form-control form-control-user " id="com_reg_date" name="com_reg_date"  
                      value="{{ old('com_reg_date') }}" placeholder="تاريخ السّجلّ التجاري ...">
            </div>
          </div>

  </div>

  

</div>

<div>
  <br><br>
  <hr>
  <br><br><br><br>
</div>


<div class="row">

<div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">ممثّل الشركة القانوني</h6>
            </div>
            <div class="card-body">
            <input type="text" class="form-control form-control-user " id="name1" name="name1"  
                      value="{{ old('name1') }}" placeholder=" ممثّل الشركة القانوني ...">
            </div>
          </div>

  </div>

  <div class="col-lg-2 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">الصفة</h6>
            </div>
            <div class="card-body">
            <input type="text" class="form-control form-control-user " id="position1" name="position1"  
                      value="{{ old('position1') }}" placeholder=" الصفة ...">
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
            <input type="text" class="form-control form-control-user " id="phone1" name="phone1"  
                      value="{{ old('phone1') }}" placeholder=" هاتف ...">
            </div>
          </div>

  </div>

  <div class="col-lg-2 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">الرقم المالي</h6>
            </div>
            <div class="card-body">
            <input type="text" class="form-control form-control-user " id="mof_number1" name="mof_number1"  
                      value="{{ old('mof_number1') }}" placeholder=" الرقم المالي ...">
            </div>
          </div>

  </div>


  <div class="col-lg-2 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">فاكس</h6>
            </div>
            <div class="card-body">
            <input type="text" class="form-control form-control-user " id="fax1" name="fax1"  
                      value="{{ old('fax1') }}" placeholder="  فاكس ...">
            </div>
          </div>

  </div>


</div>

<div>
  <br><br>
  <hr>
  <br><br><br><br>
</div>



<div class="row">



  <div class="col-lg-3 mb-4">
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">الشخص المكلّف بتبلغ البريد</h6>
            </div>
            <div class="card-body">
            <input type="text" class="form-control form-control-user " id="name2" name="name2"  
                      value="{{ old('name2') }}" placeholder=" الشخص المكلّف بتبلغ البريد...">
            </div>
          </div>

  </div>

  <div class="col-lg-2 mb-4">
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">الصفة</h6>
            </div>
            <div class="card-body">
            <input type="text" class="form-control form-control-user " id="position2" name="position2"  
                      value="{{ old('position2') }}" placeholder=" الصفة ...">
            </div>
          </div>

  </div>

  <div class="col-lg-2 mb-4">
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">هاتف</h6>
            </div>
            <div class="card-body">
            <input type="text" class="form-control form-control-user " id="phone2" name="phone2"  
                      value="{{ old('phone2') }}" placeholder=" هاتف ...">
            </div>
          </div>

  </div>

  <div class="col-lg-2 mb-4">
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">الرقم المالي</h6>
            </div>
            <div class="card-body">
            <input type="text" class="form-control form-control-user " id="mof_number2" name="mof_number2"  
                      value="{{ old('mof_number2') }}" placeholder=" الرقم المالي ...">
            </div>
          </div>

  </div>

  <div class="col-lg-2 mb-4">
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">فاكس</h6>
            </div>
            <div class="card-body">
            <input type="text" class="form-control form-control-user " id="fax2" name="fax2"  
                      value="{{ old('fax2') }}" placeholder="  فاكس ...">
            </div>
          </div>

  </div>


</div>

<div>
  <br><br>
  <hr>
  <br><br><br><br>
</div>



<div class="row">



  <div class="col-lg-3 mb-4">
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">الشخص الذي يساهم بتحضير التصاريح</h6>
            </div>
            <div class="card-body">
            <input type="text" class="form-control form-control-user " id="name3" name="name3"  
                      value="{{ old('name3') }}" placeholder="الشخص الذي يساهم بتحضير التصاريح...">
            </div>
          </div>

  </div>

  <div class="col-lg-2 mb-4">
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">الصفة</h6>
            </div>
            <div class="card-body">
            <input type="text" class="form-control form-control-user " id="position3" name="position3"  
                      value="{{ old('position3') }}" placeholder=" الصفة ...">
            </div>
          </div>

  </div>

  <div class="col-lg-2 mb-4">
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">هاتف</h6>
            </div>
            <div class="card-body">
            <input type="text" class="form-control form-control-user " id="phone3" name="phone3"  
                      value="{{ old('phone3') }}" placeholder=" هاتف ...">
            </div>
          </div>

  </div>

  <div class="col-lg-2 mb-4">
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">الرقم المالي</h6>
            </div>
            <div class="card-body">
            <input type="text" class="form-control form-control-user " id="mof_number3" name="mof_number3"  
                      value="{{ old('mof_number3') }}" placeholder=" الرقم المالي ...">
            </div>
          </div>

  </div>

  <div class="col-lg-2 mb-4">
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">فاكس</h6>
            </div>
            <div class="card-body">
            <input type="text" class="form-control form-control-user " id="fax3" name="fax3"  
                      value="{{ old('fax3') }}" placeholder="  فاكس ...">
            </div>
          </div>

  </div>


</div>

<div>
  <br><br>
  <hr>
  <br><br><br><br>
</div>


<div class="row">



  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">اسم المستخدم لدى وزارة المالية</h6>
            </div>
            <div class="card-body">
            <input type="text" class="form-control form-control-user " id="mof_uname" name="mof_uname"  
                      value="{{ old('mof_uname') }}" placeholder="اسم المستخدم لدى وزارة المالية ...">
            </div>
          </div>

  </div>

  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">كلمة المرور</h6>
            </div>
            <div class="card-body">
            <input type="text" class="form-control form-control-user " id="mof_pass" name="mof_pass"  
                      value="{{ old('mof_pass') }}" placeholder=" كلمة المرور...">
            </div>
          </div>

  </div>


</div>

<div class="row">
  <div class="mysubmitbtn">
  <button href="" class="btn btn-danger btn-user btn-block" type="submit">إنشاء</button>
  </div>
</div>

</form>






@endsection