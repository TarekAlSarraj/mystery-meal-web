@extends ('client/layout')

@section ('client_home_content')

<!-- Begin Page Content -->
<div class="container-fluid">



@include('client.companies.header' , ['activeclass' => 'info'])





<!-- Content Row -->
<br>
<h1 class="h3 mb-0 text-danger">معلومات الشركة - <span class="text-gray-800">{{$company->c_name}} </span> 
<span><a href="/client/companies/{{$company->id}}/edit"><i class="fas fa-edit text-gray-800"></i></a></span>
</h1>
<br><br>

<div class="row">

  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">اسم الشركة</h6>
            </div>
            <div class="card-body">
              <p>{{$company->c_name}}</p>
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
            <p>{{$company->c_email}}</p>
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
              <p>{{$company->c_type}}</p>
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
            <p>{{$company->com_fame}}</p>
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
            <p>{{$company->f_number}}</p>
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
            <p>{{$company->mof_date}}</p>
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
            <p>{{$company->ssn_number}}</p>
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
            <p>{{$company->com_reg_place}}</p>
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
            <p>{{$company->com_reg_number}}</p>
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
            <p>{{$company->com_reg_date}}</p>
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
              <h6 class="m-0 font-weight-bold text-danger">
                @if ($specialemps[0]->role == 'company_representative')
                  
                ممثّل الشركة القانوني

                @elseif ($specialemps[0]->role == 'mail_person')
                الشخص المكلّف بتبلغ البريد

                @elseif ($specialemps[0]->role == 'statement_person')
                الشخص الذي يساهم بتحضير التصاريح
                
                @endif
              </h6>
            </div>
            <div class="card-body">
              <p>{{$specialemps[0]->name}}</p>
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
              <p>{{$specialemps[0]->position}}</p>
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
              <p>{{$specialemps[0]->phone}}</p>
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
            <p> {{$specialemps[0]->mof_number}}</p>

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
            <p> {{$specialemps[0]->fax}}</p>

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
              <h6 class="m-0 font-weight-bold text-danger">
                @if ($specialemps[1]->role == 'company_representative')
                  
                ممثّل الشركة القانوني

                @elseif ($specialemps[1]->role == 'mail_person')
                الشخص المكلّف بتبلغ البريد

                @elseif ($specialemps[1]->role == 'statement_person')
                الشخص الذي يساهم بتحضير التصاريح
                
                @endif
              </h6>
            </div>
            <div class="card-body">
              <p>{{$specialemps[1]->name}}</p>
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
              <p>{{$specialemps[1]->position}}</p>
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
              <p>{{$specialemps[1]->phone}}</p>
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
            <p> {{$specialemps[1]->mof_number}}</p>

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
            <p> {{$specialemps[1]->fax}}</p>

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
              <h6 class="m-0 font-weight-bold text-danger">
                @if ($specialemps[2]->role == 'company_representative')
                  
                ممثّل الشركة القانوني

                @elseif ($specialemps[2]->role == 'mail_person')
                الشخص المكلّف بتبلغ البريد

                @elseif ($specialemps[2]->role == 'statement_person')
                الشخص الذي يساهم بتحضير التصاريح
                
                @endif
              </h6>
            </div>
            <div class="card-body">
              <p>{{$specialemps[2]->name}}</p>
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
              <p>{{$specialemps[2]->position}}</p>
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
              <p>{{$specialemps[2]->phone}}</p>
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
            <p> {{$specialemps[2]->mof_number}}</p>

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
            <p> {{$specialemps[2]->fax}}</p>

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
           <p>{{$company->mof_uname}}</p>
            </div>
          </div>

  </div>

  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">كلمة المرور</h6>
            </div>


            <div class="card-body" style="display:flex" id="mofPassHided">
            <p>
            @php 
             for($i=0; $i < strlen($company->mof_pass) ; $i++) {
              echo "•";
             }
            @endphp
            </p>
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a id="showPassAnchor"> <i class="fas fa-eye"></i></a>
            </div>

            <div class="card-body" style="display:none" id="showMofPass">
            <p>
            {{$company->mof_pass}}
            </p>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a id="hidePassAnchor"> <i class="fas fa-eye-slash"></i></a>
            </div>


          </div>

  </div>


</div>







@endsection