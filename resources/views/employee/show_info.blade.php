@extends ('employee/layout')

@section ('employee_home_content')

<!-- Begin Page Content -->
<div class="container-fluid">



@include('employee.header' , ['activeclass' => 'info'])

<!-- Content Row -->

<div id="comp_info"> 



<br>
<h1 class="h3 mb-0 text-danger">المعلومات 
<span><a href="/employee/edit"><i class="fas fa-edit text-gray-800"></i></a></span>

</h1>
<br><br>
<div class="row">

  <div class="col-lg-2 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">اسم الموظّف</h6>
            </div>
            <div class="card-body">
              <p>{{$employee->user->firstname}}</p>
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
              <p>{{$employee->user->lastname}}</p>
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
            <p>{{$employee->e_father}}</p>
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
            <p>{{$employee->e_mother}}</p>
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
              <p>{{$employee->e_sex}}</p>
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
            <p>{{$employee->e_nationality}} </p>
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
              <p>{{$employee->e_religion}}</p>
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
            <p>{{$employee->e_birthdate}}</p>
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
            <p>{{$employee->e_birthplace}}</p>
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
            <p>{{$employee->record_number}}</p>
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
            <p>{{$employee->record_place}}</p>
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
            <p>{{$employee->id_car_number}}</p>
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
            <div class="card-body">
              <p>{{$employee->e_id_governorate}}</p>
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
              <p>{{$employee->e_id_district}}</p>
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
              <p>{{$employee->e_id_rea}}</p>
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
            <p>{{ $employee->marital_status}}</p>
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
            <p>{{$employee->job_desc}}</p>
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
            <p> {{ $employee->job_type }}</p>
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
            <p>{{ $employee->work_time }}</p>
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
            <p> {{ $employee->salary_type}}</p>
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
              <p>{{$employee->start_working_date}}</p>
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
              <p>{{$employee->left_working_date}}</p>
            </div>
          </div>

  </div>


</div>

@if ($employee->left_working_date != null ) 
<div class="row">

<div class="col-lg-2 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">تاريخ معاودة العمل</h6>
            </div>
            <div class="card-body">
              <p>{{$employee->back_working_date}}</p>
            </div>
          </div>

  </div>



</div>
@endif

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
              <p>{{$employee->e_mof_number}}</p>
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
              <p>{{$employee->e_mof_date}}</p>
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
            <p>{{ $employee->ssn_isregistered}}</p>
            </div>
          </div>

  </div>

  @if ($employee->ssn_isregistered == 'نعم' ) 

  <div class="col-lg-2 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">رقم الضمان</h6>
            </div>
            <div class="card-body">
            <p>{{$employee->e_ssn_number}}</p>
            </div>
          </div>

  </div>


  <div class="col-lg-2 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">تاريخ التسجيل في الضمان الاجتماعي</h6>
            </div>
            <div class="card-body">
            <p>{{$employee->e_ssn_date}}</p>
            </div>
          </div>

  </div>

  @endif




</div>


<div>
  <br><br>
  <hr>
  <br><br><br><br>
</div>




@if ($employee->marital_status != 'أعذب' ) 

<div class="row">









  <div class="col-lg-2 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">الزوج(ة) يعمل</h6>
            </div>
            <div class="card-body">
              <p>{{ $employee->spouse_works}}</p>
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
            <p> {{ $employee->family_compensation}}</p>
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
            <p>{{$employee->children_compensation_count}} </p>
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
            <p>{{ $employee->income_tax_concession }}</p>
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
            <p>{{$employee->itc_children_count}}</p>
            </div>
          </div>

  </div>

 

</div>


<div>
  <br><br>
  <hr>
  <br><br><br><br>
</div>

@endif



<div class="row">




  <div class="col-lg-2 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">أساس الراتب</h6>
            </div>
            <div class="card-body">
            <p>{{$employee->salary_basis}}</p>
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
            <p>{{$employee->daily_transportation}}</p>
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
            <p>{{$employee->working_days}}</p>
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
            <p>{{$employee->representation_allowance}}</p>
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
            <p>{{$employee->housing_allowance}}</p>
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
            <p>{{$employee->food_voucher}}</p>
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
            <p>{{$employee->cash_food_allowance}}</p>
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
            <p>{{$employee->other_benefits}}</p>
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
          <p>{{ $employee->other_company }}</p>
          </div>
        </div>

</div>

@if ($employee->other_company == 'نعم' ) 

<div class="col-lg-2 mb-4">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-danger">اسم الشركة</h6>
          </div>
          <div class="card-body">
          <p>{{$employee->other_company_name}}</p>
          </div>
        </div>

</div>

<div class="col-lg-2 mb-4">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-danger">رقم التسجيل في وزارة المالية</h6>
          </div>
          <div class="card-body">
          <p>{{$employee->other_company_mofnumber}}</p>
          </div>
        </div>

</div>

<div class="col-lg-2 mb-4">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-danger">رقم التسجيل في الضمان الاجتماعي</h6>
          </div>
          <div class="card-body">
          <p>{{$employee->other_company_ssnnumber}}</p>
          </div>
        </div>

</div>

@endif

</div>








</div>




<br><br>

@endsection