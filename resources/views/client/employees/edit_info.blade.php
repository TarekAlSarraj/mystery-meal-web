@extends ('client/layout')

@section ('client_home_content')

<!-- Begin Page Content -->
<div class="container-fluid">



@include('client.employees.header' , ['activeclass' => 'info'])




<br>
<h1 class="h3 mb-0 text-danger">معلومات الموظّف  <span class="text-gray-800">{{$employee->user->firstname}} {{$employee->user->lastname}}</span></h1>
<br><br>




        <form method="POST" action="/client/companies/{{$company->id}}/employees/{{$employee->id}}">
          @csrf
          @method('PUT')


<div class="row">

  <div class="col-lg-2 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">اسم الموظّف</h6>
            </div>
            <div class="card-body">
              <input type="text" class="form-control form-control-user" id="e_firstname" name="e_firstname" 
                      value="{{$employee->user->firstname}}">
            </div>
          </div>

  </div>

  <div class="col-lg-2 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">الشهرة</h6>
            </div>
            <div class="card-body">
            <input type="text" class="form-control form-control-user" id="e_lastname" name="e_lastname" 
                      value="{{$employee->user->lastname}}">
            </div>
          </div>

  </div>

  <div class="col-lg-2 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">اسم الأب</h6>
            </div>
            <div class="card-body">
            <input type="text" class="form-control form-control-user" id="e_father" name="e_father" 
                      value="{{$employee->e_father}}">
            </div>
          </div>

  </div>

  <div class="col-lg-2 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">اسم الأم</h6>
            </div>
            <div class="card-body">
            <input type="text" class="form-control form-control-user" id="e_mother" name="e_mother" 
                      value="{{$employee->e_mother}}">
            </div>
          </div>

  </div>





  <div class="col-lg-2 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">الجنس</h6>
            </div>
            <div class="card-body">
            <select class="form-control form-control-user" id="e_sex" name="e_sex" >
            



            <option value="ذكر"  {{ $employee->e_sex == 'ذكر' ? 'selected' : '' }}>
              ذكر

            </option>

            <option value="أنثى"  {{ $employee->e_sex == 'أنثى' ? 'selected' : '' }}>
              أنثى

            </option>

          </select>
            </div>
          </div>

  </div>

  <div class="col-lg-2 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">الجنسيّة</h6>
            </div>
            <div class="card-body">
            <input type="text" class="form-control form-control-user" id="e_nationality" name="e_nationality" 
                      value="{{$employee->e_nationality}}">
            </div>
          </div>

  </div>



</div>

<div class="row">
  
<div class="col-lg-2 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">المذهب</h6>
            </div>
            <div class="card-body">
            <select class="form-control form-control-user" id="e_religion" name="e_religion" >
            



            <option value="سنّي"  {{ $employee->e_religion == 'سنّي' ? 'selected' : '' }}>
            سنّي

            </option>

            <option value="شيعي"  {{ $employee->e_religion == 'شيعي' ? 'selected' : '' }}>
            شيعي

            </option>

            <option value="درزي"  {{ $employee->e_religion == 'درزي' ? 'selected' : '' }}>
            درزي

            </option>

            <option value="ماروني"  {{ $employee->e_religion == 'ماروني' ? 'selected' : '' }}>
            ماروني

            </option>

            <option value="أرثودوكس"  {{ $employee->e_religion == 'أرثودوكس' ? 'selected' : '' }}>
            أرثودوكس

            </option>

            <option value="كاثوليك"  {{ $employee->e_religion == 'كاثوليك' ? 'selected' : '' }}>
            كاثوليك

            </option>

            <option value="غير ذلك"  {{ $employee->e_religion == 'غير ذلك' ? 'selected' : '' }}>
            غير ذلك

            </option>

          </select>
            </div>
          </div>

  </div>


  <div class="col-lg-2 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">تاريخ الولادة</h6>
            </div>
            <div class="card-body">
            <input type="date" class="form-control form-control-user" id="e_birthdate" name="e_birthdate" 
                      value="{{$employee->e_birthdate}}">
            </div>
          </div>

  </div>

  <div class="col-lg-2 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">مكان الولادة</h6>
            </div>
            <div class="card-body">
            <input type="text" class="form-control form-control-user" id="e_birthplace" name="e_birthplace" 
                      value="{{$employee->e_birthplace}}">
            </div>
          </div>

  </div>


  <div class="col-lg-2 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">رقم السّجلّ</h6>
            </div>
            <div class="card-body">
            <input type="text" class="form-control form-control-user" id="record_number" name="record_number" 
                      value="{{$employee->record_number}}">
            </div>
          </div>

  </div>

  <div class="col-lg-2 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">مكان السّجلّ</h6>
            </div>
            <div class="card-body">
            <input type="text" class="form-control form-control-user" id="record_place" name="record_place" 
                      value="{{$employee->record_place}}">
            </div>
          </div>

  </div>

  <div class="col-lg-2 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">رقم بطاقة الهويّة</h6>
            </div>
            <div class="card-body">
            <input type="text" class="form-control form-control-user" id="id_car_number" name="id_car_number" 
                      value="{{$employee->id_car_number}}">
            </div>
          </div>

  </div>


</div>


<div class="row">
  
<div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">محل الإقامة حسب الهويّة (المحافظة)</h6>
            </div>
            <div class="card-body" >
            
            <select class=" form-control form-control-user " id="governorate1" name="e_id_governorate">
              <option value="">اختر المحافظة</option>
              <option value="{{$employee->e_id_governorate}}" selected>{{$employee->e_id_governorate}}</option>

            </select>


                     
            </div>
          </div>

  </div>


  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">محل الإقامة حسب الهويّة (القضاء)</h6>
            </div>
            <div class="card-body">
  

            <select class=" form-control form-control-user " id="district1" name="e_id_district">
              <option value="">اختر المحافظة</option>
              <option value="{{$employee->e_id_district}}" selected>{{$employee->e_id_district}}</option>

            </select>

            
            </div>
          </div>

  </div>



  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">محل الإقامة حسب الهويّة (المنطقة)</h6>
            </div>
            <div class="card-body">

            <select class=" form-control form-control-user " id="real_estate_area1" name="e_id_rea">
              <option value="">اختر المحافظة</option>
              <option value="{{$employee->e_id_rea}}" selected>{{$employee->e_id_rea}}</option>

            </select>
            </div>
          </div>

  </div>




       




  <div class="col-lg-2 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">الوضع العائلي</h6>
            </div>
            <div class="card-body">
            <select class="form-control form-control-user" id="marital_status" name="marital_status" 
            onchange="checkMaritalStatus(this.id)">
            
            <option value="متزوّج"  {{ $employee->marital_status == 'متزوّج' ? 'selected' : '' }}>
            متزوّج

            </option>

            <option value="أعذب"  {{ $employee->marital_status == 'أعذب' ? 'selected' : '' }}>
            أعذب

            </option>

           

            <option value="أرمل"  {{ $employee->marital_status == 'أرمل' ? 'selected' : '' }}>
            أرمل

            </option>

            <option value="مطلّق"  {{ $employee->marital_status == 'مطلّق' ? 'selected' : '' }}>
            مطلّق

            </option>

            </select>
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

<div class="col-lg-2 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">طبيعة العمل</h6>
            </div>
            <div class="card-body">
            <select class="form-control form-control-user" id="job_desc" name="job_desc" >
            

            <option value="أجير عادي"  {{ $employee->job_desc == 'أجير عادي' ? 'selected' : '' }}>
            أجير عادي

            </option>

            <option value="عضوّ مجلس إدارة"  {{ $employee->job_desc == 'عضوّ مجلس إدارة' ? 'selected' : '' }}>
            عضوّ مجلس إدارة

            </option>

            <option value="أجور مقطوعة"  {{ $employee->job_desc == 'أجور مقطوعة' ? 'selected' : '' }}>
            أجور مقطوعة

            </option>

            </select>
            </div>
          </div>

  </div>

  <div class="col-lg-2 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">نوع العمل</h6>
            </div>
            <div class="card-body">
            <select class="form-control form-control-user" id="job_type" name="job_type" >
            

            <option value="موظّف"  {{ $employee->job_type == 'موظّف' ? 'selected' : '' }}>
            موظّف 

            </option>

            <option value="محاسب"  {{ $employee->job_type == 'محاسب' ? 'selected' : '' }}>
            محاسب 

            </option>

            <option value="عضوّ مجلس إدارة"  {{ $employee->job_type == 'عضوّ مجلس إدارة' ? 'selected' : '' }}>
            عضوّ مجلس إدارة

            </option>

            <option value="حمال"  {{ $employee->job_type == 'حمال' ? 'selected' : '' }}>
            حمال 

            </option>

         

            </select>
            </div>
          </div>

  </div>

  <div class="col-lg-2 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">الدوام</h6>
            </div>
            <div class="card-body">
            <select class="form-control form-control-user" id="work_time" name="work_time" >
            

            <option value="جزئي"  {{ $employee->work_time == 'جزئي' ? 'selected' : '' }}>
            جزئي 

            </option>

            <option value="كلّي"  {{ $employee->work_time == 'كلّي' ? 'selected' : '' }}>
            كلّي 

            </option>

            </select>
            </div>
          </div>

  </div>

  <div class="col-lg-2 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">نوع الأجر</h6>
            </div>
            <div class="card-body">
            <select class="form-control form-control-user" id="salary_type" name="salary_type" >
            

            <option value="شهري"  {{ $employee->salary_type == 'شهري' ? 'selected' : '' }}>
            شهري 

            </option>

            <option value="يومي"  {{ $employee->salary_type == 'يومي' ? 'selected' : '' }}>
            يومي 

            </option>


            <option value="لقاء عمولة"  {{ $employee->salary_type == 'لقاء عمولة' ? 'selected' : '' }}>
            لقاء عمولة 

            </option>

            <option value="على الإنتاج"  {{ $employee->salary_type == 'على الإنتاج' ? 'selected' : '' }}>
            على الإنتاج 

            </option>

            </select>
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
            <input type="date" class="form-control form-control-user" id="start_working_date" name="start_working_date" 
                      value="{{$employee->start_working_date}}">
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
            <input type="date" class="form-control form-control-user" id="left_working_date" name="left_working_date" 
                      value="{{$employee->left_working_date}}" onchange="checkIfLeftJob(this.id)">
            </div>
          </div>

  </div>


</div>


<div class="row" id="backToJob" @if ($employee->left_working_date == null ) style="display:none" @endif>

<div class="col-lg-2 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">تاريخ معاودة العمل</h6>
            </div>
            <div class="card-body">
            <input type="date" class="form-control form-control-user" id="back_working_date" name="back_working_date" 
                      value="{{$employee->back_working_date}}">
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




  <div class="col-lg-2 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">الرقم المالي</h6>
            </div>
            <div class="card-body">
            <input type="text" class="form-control form-control-user" id="e_mof_number" name="e_mof_number" 
                      value="{{$employee->e_mof_number}}">
            </div>
          </div>

  </div>

  <div class="col-lg-2 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">تاريخ التسجيل في وزارة الماليّة</h6>
            </div>
            <div class="card-body">
            <input type="date" class="form-control form-control-user" id="e_mof_date" name="e_mof_date" 
                      value="{{$employee->e_mof_date}}">
            </div>
          </div>

  </div>

  <div class="col-lg-2 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">مسجل في الضمان</h6>
            </div>
            <div class="card-body">
            <select class="form-control form-control-user" id="ssn_isregistered" name="ssn_isregistered" onchange="checkIfRegInSsn(this.id)">
            

            <option value="نعم"  {{ $employee->ssn_isregistered == 'نعم' ? 'selected' : '' }}>
            نعم 

            </option>

            <option value="كلّا"  {{ $employee->ssn_isregistered == 'كلّا' ? 'selected' : '' }}>
            كلّا 

            </option>

            </select>
            </div>
          </div>

  </div>

  
    <div class="col-lg-2 mb-4 ssndetails"   @if ($employee->ssn_isregistered == null ) style="display:none" @endif>
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-danger">رقم الضمان</h6>
              </div>
              <div class="card-body">
              <input type="text" class="form-control form-control-user" id="e_ssn_number" name="e_ssn_number" 
                        value="{{$employee->e_ssn_number}}">
              </div>
            </div>

    </div>


    <div class="col-lg-2 mb-4 ssndetails"  @if ($employee->ssn_isregistered == null ) style="display:none" @endif>
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-danger">تاريخ التسجيل في الضمان الاجتماعي</h6>
              </div>
              <div class="card-body">
              <input type="date" class="form-control form-control-user" id="e_ssn_date" name="e_ssn_date" 
                        value="{{$employee->e_ssn_date}}">
              </div>
            </div>

    </div>

   




</div>


<div>
  <br><br>
  <hr>
  <br><br><br><br>
</div>





<div id="married">

<div class="row">









  <div class="col-lg-2 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">الزوج(ة) يعمل</h6>
            </div>
            <div class="card-body">
            <select class="form-control form-control-user" id="spouse_works" name="spouse_works" >
            

            <option value="نعم"  {{ $employee->spouse_works == 'نعم' ? 'selected' : '' }}>
            نعم 

            </option>

            <option value="كلّا"  {{ $employee->spouse_works == 'كلّا' ? 'selected' : '' }}>
            كلّا 

            </option>

            </select>
            </div>
          </div>

  </div>

  <div class="col-lg-2 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">أستفيد من تعويضات عائلية عن الزوج(ة)</h6>
            </div>
            <div class="card-body">
            <select class="form-control form-control-user" id="family_compensation" name="family_compensation" >
            

            <option value="نعم"  {{ $employee->family_compensation == 'نعم' ? 'selected' : '' }}>
            نعم 

            </option>

            <option value="كلّا"  {{ $employee->family_compensation == 'كلّا' ? 'selected' : '' }}>
            كلّا 

            </option>

            </select>
            </div>
          </div>

  </div>

  <div class="col-lg-2 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">عدد الأولاد الذين يستفيدون من التعويضات العائلية</h6>
            </div>
            <div class="card-body">
            <input type="number" class="form-control form-control-user" id="children_compensation_count" name="children_compensation_count" 
                      value="{{$employee->children_compensation_count}}" min=0>
            </div>
          </div>

  </div>

  <div class="col-lg-2 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">أستفيد من التنزيل العائلي</h6>
            </div>
            <div class="card-body">
            <select class="form-control form-control-user" id="income_tax_concession" name="income_tax_concession" >
            

            <option value="نعم"  {{ $employee->income_tax_concession == 'نعم' ? 'selected' : '' }}>
            نعم 

            </option>

            <option value="كلّا"  {{ $employee->income_tax_concession == 'كلّا' ? 'selected' : '' }}>
            كلّا 

            </option>

            </select>
            </div>
          </div>

  </div>

  <div class="col-lg-2 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">عدد الأولاد الذين يستفيدون من التنزيل العائلي</h6>
            </div>
            <div class="card-body">
            <input type="number" class="form-control form-control-user" id="itc_children_count" name="itc_children_count" 
                      value="{{$employee->itc_children_count}}" min=0>
            </div>
          </div>

  </div>

 

</div>


<div>
  <br><br>
  <hr>
  <br><br><br><br>
</div>


</div>




<div class="row">




  <div class="col-lg-2 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">أساس الراتب</h6>
            </div>
            <div class="card-body">
            <input type="text" class="form-control form-control-user" id="salary_basis" name="salary_basis" 
                      value="{{$employee->salary_basis}}" >
            </div>
          </div>

  </div>

  <div class="col-lg-2 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">بدل انتقال يومي</h6>
            </div>
            <div class="card-body">
            <input type="text" class="form-control form-control-user" id="daily_transportation" name="daily_transportation" 
                      value="{{$employee->daily_transportation}}" >
            </div>
          </div>

  </div>

  <div class="col-lg-2 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">عدد أيام العمل</h6>
            </div>
            <div class="card-body">
            <input type="text" class="form-control form-control-user" id="working_days" name="working_days" 
                      value="{{$employee->working_days}}" >
            </div>
          </div>

  </div>



  <div class="col-lg-2 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">بدل تمثيل</h6>
            </div>
            <div class="card-body">
            <input type="text" class="form-control form-control-user" id="representation_allowance" name="representation_allowance" 
                      value="{{$employee->representation_allowance}}" >
            </div>
          </div>

  </div>



<div class="col-lg-2 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">بدل سكن</h6>
            </div>
            <div class="card-body">
            <input type="text" class="form-control form-control-user" id="housing_allowance" name="housing_allowance" 
                      value="{{$employee->housing_allowance}}" >
            </div>
          </div>

  </div>


  <div class="col-lg-2 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">قسيمة طعام</h6>
            </div>
            <div class="card-body">
            <input type="text" class="form-control form-control-user" id="food_voucher" name="food_voucher" 
                      value="{{$employee->food_voucher}}" >
            </div>
          </div>

  </div>

</div>

<div class="row">



  <div class="col-lg-2 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">بدل طعام نقدي</h6>
            </div>
            <div class="card-body">
            <input type="text" class="form-control form-control-user" id="cash_food_allowance" name="cash_food_allowance" 
                      value="{{$employee->cash_food_allowance}}" >
            </div>
          </div>

  </div>

  <div class="col-lg-2 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">منافع أخرى</h6>
            </div>
            <div class="card-body">
            <input type="text" class="form-control form-control-user" id="other_benefits" name="other_benefits" 
                      value="{{$employee->other_benefits}}" >
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

<div class="col-lg-2 mb-4">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-danger">أعمل في مؤسسات أخرى</h6>
          </div>
          <div class="card-body">
          <select class="form-control form-control-user" id="other_company" name="other_company" onchange="checkIfOtherCompany(this.id)">
            

          <option value="كلّا"  {{ $employee->other_company == 'كلّا' ? 'selected' : '' }}>
            كلّا 

            </option>

          <option value="نعم"  {{ $employee->other_company == 'نعم' ? 'selected' : '' }}>
            نعم 

            </option>

           

            </select>
          </div>
        </div>

</div>

<div class="col-lg-2 mb-4 othercompdetails" @if ($employee->other_company == 'كلّا' ) style="display:none" @endif>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-danger">اسم الشركة</h6>
          </div>
          <div class="card-body">
         <input type="text" class="form-control form-control-user" id="other_company_name" name="other_company_name" 
                      value="{{$employee->other_company_name}}" >
          </div>
        </div>

</div>

<div class="col-lg-3 mb-4 othercompdetails" @if ($employee->other_company == 'كلّا' ) style="display:none" @endif>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-danger">رقم التسجيل في وزارة المالية</h6>
          </div>
          <div class="card-body">
          <input type="text" class="form-control form-control-user" id="other_company_mofnumber" name="other_company_mofnumber" 
                      value="{{$employee->other_company_mofnumber}}" >
          </div>
        </div>

</div>

<div class="col-lg-3 mb-4 othercompdetails" @if ($employee->other_company == 'كلّا' ) style="display:none" @endif>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-danger">رقم التسجيل في الضمان الاجتماعي</h6>
          </div>
          <div class="card-body">
          <input type="text" class="form-control form-control-user" id="other_company_ssnnumber" name="other_company_ssnnumber" 
                      value="{{$employee->other_company_ssnnumber}}" >
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
  <div class="mysubmitbtn">
  <button href="" class="btn btn-danger btn-user btn-block" type="submit">تحفيظ</button>
  </div>
</div>


</form>







<br><br>




@endsection