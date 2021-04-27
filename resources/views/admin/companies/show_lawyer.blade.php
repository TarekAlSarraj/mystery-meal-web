@extends ('admin/layout')

@section ('admin_home_content')

<!-- Begin Page Content -->
<div class="container-fluid">



@include('admin.companies.header' , ['activeclass' => 'lawyer'])




<!-- Content Row -->
<br>
<h1 class="h3 mb-0 text-gray-800">معلومات محامي شركة <span class="text-danger">{{$company->c_name}}</span>
</h1>

<br><br>


<div class="row">

  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">اسم المحامي</h6>
            </div>
            <div class="card-body">
             
                     {{$lawyer != null ? $lawyer->lawyer_name : ''}}
                    
                     

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

            {{$lawyer != null ? $lawyer->lawyer_email : ''}}

                      
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

                
            {{$lawyer != null ? $lawyer->lawyer_phone: ''}}

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

                
            {{$lawyer != null ? $lawyer->lawyer_mobile : ''}}

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
             
            {{$lawyer != null ? $lawyer->lawyer_fax : ''}}
                    
                     

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
             
            {{$lawyer != null ? $lawyer->lawyer_address : ''}}
                    
                     

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
             
            {{$lawyer != null ? $lawyer->law_office_name: ''}}
                     

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
             
            {{$lawyer != null ? $lawyer->lawyer_mof_number : ''}}
                    
                     

            </div>
          </div>

  </div>



</div>










@endsection