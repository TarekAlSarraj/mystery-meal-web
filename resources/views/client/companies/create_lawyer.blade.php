@extends ('client/layout')

@section ('client_home_content')

<!-- Begin Page Content -->
<div class="container-fluid">



@include('client.companies.header' , ['activeclass' => 'lawyer'])





<!-- Content Row -->
<br>
<h1 class="h3 mb-0 text-danger">إدخال معلومات محامي الشركة</h1>
<br><br>

  <form method="POST" action="/client/companies/{{$company->id}}/lawyer">
  @csrf

<div class="row">

  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">اسم المحامي</h6>
            </div>
            <div class="card-body">
             
                      <input type="text" class="form-control form-control-user " id="lawyer_name" name="lawyer_name" 
                      value="{{ old('lawyer_name') }}" placeholder="اسم المحامي ...">
                    
                     

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

                      <input type="email" class="form-control form-control-user " id="lawyer_email" name="lawyer_email"  
                      value="{{ old('lawyer_email') }}"  placeholder="البريد الالكتروني ... ">

                      
            </div>
          </div>

  </div>

  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">الهاتف</h6>
            </div>
            <div class="card-body">

                
            <input type="tel" class="form-control form-control-user " id="lawyer_phone" name="lawyer_phone"  
                      value="{{ old('lawyer_phone') }}"  placeholder="الهاتف  ... ">

            </div>
          </div>

  </div>

 



  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">الهاتف المحمول</h6>
            </div>
            <div class="card-body">

                
            <input type="tel" class="form-control form-control-user " id="lawyer_mobile" name="lawyer_mobile"  
                      value="{{ old('lawyer_mobile') }}"  placeholder="الهاتف المحمول ... ">

            </div>
          </div>

  </div>

</div>






<div class="row">

  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">الفاكس</h6>
            </div>
            <div class="card-body">
             
                      <input type="text" class="form-control form-control-user " id="lawyer_fax" name="lawyer_fax" 
                      value="{{ old('lawyer_fax') }}" placeholder=" الفاكس ...">
                    
                     

            </div>
          </div>

  </div>

  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">العنوان</h6>
            </div>
            <div class="card-body">
             
                      <input type="text" class="form-control form-control-user " id="lawyer_address" name="lawyer_address" 
                      value="{{ old('lawyer_address') }}" placeholder=" الفاكس ...">
                    
                     

            </div>
          </div>

  </div>

  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">اسم مكتب المحاماة</h6>
            </div>
            <div class="card-body">
             
                      <input type="text" class="form-control form-control-user " id="law_office_name" name="law_office_name" 
                      value="{{ old('law_office_name') }}" placeholder=" اسم مكتب المحاماة ...">
                    
                     

            </div>
          </div>

  </div>

 



  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">  الرقم المالي</h6>
            </div>
            <div class="card-body">
             
                      <input type="text" class="form-control form-control-user " id="lawyer_mof_number" name="lawyer_mof_number" 
                      value="{{ old('lawyer_mof_number') }}" placeholder="  الرقم المالي ...">
                    
                     

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