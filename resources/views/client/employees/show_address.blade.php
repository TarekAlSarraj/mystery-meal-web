@extends ('client/layout')

@section ('client_home_content')

<!-- Begin Page Content -->
<div class="container-fluid">


@include('client.employees.header' , ['activeclass' => 'address'])




<br>
<h1 class="h3 mb-0 text-danger">عنوان الموظّف  <span class="text-gray-800">{{$employee_address->employee->user->firstname}} {{$employee_address->employee->user->lastname}}</span>
<span><a href="/client/companies/{{$company->id}}/employees/{{$employee_address->employee_id}}/address/edit"><i class="fas fa-edit text-gray-800"></i></a></span>
</h1>
<br><br>




  <div class="row">

  <div class="col-lg-2 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">المحافظة</h6>
            </div>
            <div class="card-body">
            <p>{{$employee_address->e_governorate}}</p>
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
            <p>{{$employee_address->e_district}}</p>
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
            <p>{{$employee_address->e_rea}}</p>
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
            <p>{{$employee_address->e_town}}</p>
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
            <p>{{$employee_address->e_street}}</p>
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
            <p>{{$employee_address->e_neighborhood}}</p>
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
            <p>{{$employee_address->e_building}}</p>
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
          <p>{{$employee_address->e_floor}}</p>
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
          <p>{{$employee_address->e_rea_number}}</p>
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
          <p>{{$employee_address->e_division_number}}</p>
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
          <p>{{$employee_address->e_phone}}</p>
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
          <p>{{$employee_address->e_other_phone}}</p>
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
          <p>{{$employee_address->e_fax}}</p>
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
          <p>{{$employee_address->e_mailbox}}</p>
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
          <p>{{$employee_address->employee->user->email}}</p>
          </div>
        </div>

</div>






</div>


<br><br>

@endsection