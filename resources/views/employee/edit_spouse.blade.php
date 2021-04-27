@extends ('employee/layout')

@section ('employee_home_content')


<!-- Begin Page Content -->
<div class="container-fluid">


@include('employee.header' , ['activeclass' => 'spouse'])



<br>
<h1 class="h3 mb-0 text-danger">تعديل زوج(ة) الموظّف </h1>
<br><br>






<form method="POST" action="/employee/spouse/{{$spouse->id}}">
          @csrf
          @method('PUT')





 
          <div class="row">

<div class="col-lg-2 mb-4">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-danger">اسم الزوج</h6>
          </div>
          <div class="card-body">
          <input type="text" class="form-control form-control-user" id="firstname" name="firstname" 
          value="{{$spouse->firstname}}">
          </div>
        </div>

</div>

<div class="col-lg-2 mb-4">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-danger">شهرة الزوج قبل الزواج</h6>
          </div>
          <div class="card-body">
          <input type="text" class="form-control form-control-user" id="lastname" name="lastname" 
          value="{{$spouse->lastname}}">
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
          <input type="text" class="form-control form-control-user" id="father" name="father" 
          value="{{$spouse->father}}">
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
          <input type="text" class="form-control form-control-user" id="mother" name="mother" 
                      value=" {{$spouse->mother}}" >
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
          <input type="text" class="form-control form-control-user" id="nationality" name="nationality" 
                      value="{{$spouse->nationality}} " >
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
          <input type="date" class="form-control form-control-user" id="birthdate" name="birthdate" 
                      value="{{$spouse->birthdate}} " >
          </div>
        </div>

</div>





</div>

<div class="row">

<div class="col-lg-2 mb-4">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-danger">مكان الولادة</h6>
          </div>
          <div class="card-body">
          <input type="text" class="form-control form-control-user" id="birthplace" name="birthplace" 
                      value="{{$spouse->birthplace}} " >
          </div>
        </div>

</div>


<div class="col-lg-2 mb-4">
      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-danger">تاريخ الوفاة</h6>
        </div>
        <div class="card-body">
        <input type="date" class="form-control form-control-user" id="deathdate" name="deathdate" 
                      value="{{$spouse->deathdate}} " >
        </div>
      </div>

</div>

<div class="col-lg-2 mb-4">
      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-danger"> رقم السّجلّ</h6>
        </div>
        <div class="card-body">
        <input type="text" class="form-control form-control-user" id="record_number" name="record_number" 
                      value="{{$spouse->record_number}} " >
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
                      value="{{$spouse->record_place}} " >
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
        <input type="text" class="form-control form-control-user" id="mof_number" name="mof_number" 
                      value="{{$spouse->mof_number}} " >
        </div>
      </div>

</div>

<div class="col-lg-2 mb-4">
      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-danger"> رقم الضمان </h6>
        </div>
        <div class="card-body">
        <input type="text" class="form-control form-control-user" id="ssn_number" name="ssn_number" 
                      value="{{$spouse->ssn_number}} " >
        </div>
      </div>

</div>







</div>


<div class="row">


<div class="col-lg-2 mb-4">
      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-danger">يعمل</h6>
        </div>
        <div class="card-body">
        <input type="text" class="form-control form-control-user" id="isworking" name="isworking" 
                      value="{{$spouse->isworking}} " >
        </div>
      </div>

</div>

<div class="col-lg-2 mb-4">
      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-danger"> اسم الشّركة</h6>
        </div>
        <div class="card-body">
        <input type="text" class="form-control form-control-user" id="company_name" name="company_name" 
                      value="{{$spouse->company_name}} " >
        </div>
      </div>

</div>


<div class="col-lg-2 mb-4">
      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-danger">الرقم المالي للشّركة </h6>
        </div>
        <div class="card-body">
        <input type="text" class="form-control form-control-user" id="company_mof_number" name="company_mof_number" 
                      value="{{$spouse->company_mof_number}} " >
        </div>
      </div>

</div>




<div class="col-lg-2 mb-4">
      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-danger">تاريخ بدء الاستقادة</h6>
        </div>
        <div class="card-body">
        <input type="date" class="form-control form-control-user" id="benefit_start_date" name="benefit_start_date" 
                      value="{{$spouse->benefit_start_date}} " >
        </div>
      </div>

</div>


<div class="col-lg-2 mb-4">
      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-danger">تاريخ انتهاء الاستفادة </h6>
        </div>
        <div class="card-body">
        <input type="date" class="form-control form-control-user" id="benefit_end_date" name="benefit_end_date" 
                      value="{{$spouse->benefit_end_date}}  " >
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