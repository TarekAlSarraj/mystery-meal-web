@extends ('employee/layout')

@section ('employee_home_content')

<!-- Begin Page Content -->
<div class="container-fluid">



@include('/employee.header' , ['activeclass' => 'child'])




<br>
<h1 class="h3 mb-0 text-danger">اضافة ولد</h1>
<br><br>






<form method="POST" action="/employee/child">
          @csrf





 
          <div class="row">

<div class="col-lg-2 mb-4">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-danger">اسم الولد</h6>
          </div>
          <div class="card-body">
          <input type="text" class="form-control form-control-user" id="firstname" name="firstname" >
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
          <input type="text" class="form-control form-control-user" id="lastname" name="lastname" >
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
                      value="">
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
                      value=" " >
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
          <select class="form-control form-control-user" id="sex" name="sex">
            
            <option value="ذكر" >
               ذكر
            </option>

            <option value="أنثى" >
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
            <h6 class="m-0 font-weight-bold text-danger">تاريخ الولادة</h6>
          </div>
          <div class="card-body">
          <input type="date" class="form-control form-control-user" id="birthdate" name="birthdate" 
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
            <h6 class="m-0 font-weight-bold text-danger">مكان الولادة</h6>
          </div>
          <div class="card-body">
          <input type="text" class="form-control form-control-user" id="birthplace" name="birthplace" 
                      value=" " >
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
                      value=" " >
        </div>
      </div>

</div>

<div class="col-lg-2 mb-4">
      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-danger"> الوضع العائلي</h6>
        </div>
        <div class="card-body">
        <select class="form-control form-control-user" id="marital_status" name="marital_status">
            
            <option value="متزوّج" >
            متزوّج
            </option>

            <option value="أعذب" >
            أعذب
            </option>

            <option value="أرمل" >
            أرمل
            </option>

            <option value="مطلّق" >
            مطلّق
            </option>
          </select>
        </div>
      </div>

</div>

<div class="col-lg-2 mb-4">
      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-danger">عجز دائم</h6>
        </div>
        <div class="card-body">
        <select class="form-control form-control-user" id="disability" name="disability">
            
            <option value="كلّا" >
            كلّا
            </option>

            <option value="نعم" >
            نعم
            </option>
        </select>
        </div>
      </div>

</div>

<div class="col-lg-2 mb-4">
      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-danger">طالب</h6>
        </div>
        <div class="card-body">
        <select class="form-control form-control-user" id="student" name="student" onchange="checkIfStudent(this.id)">
    
        <option value="نعم" >
            نعم
            </option>

            <option value="كلّا" >
            كلّا
            </option>

            
        </select>
        </div>
      </div>

</div>

<div class="col-lg-2 mb-4 isstudent">
      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-danger"> اسم المؤسّسة التعليميّة </h6>
        </div>
        <div class="card-body">
        <input type="text" class="form-control form-control-user" id="edu_name" name="edu_name" 
                      value=" " >
        </div>
      </div>

</div>







</div>


<div class="row">


<div class="col-lg-2 mb-4 isstudent">
      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-danger">المستوى</h6>
        </div>
        <div class="card-body">
        <input type="text" class="form-control form-control-user" id="level" name="level" 
                      value=" " >
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
                      value=" " >
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