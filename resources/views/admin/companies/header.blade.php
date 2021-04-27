<!-- Content Row -->
<div class="row">

  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-danger shadow h-100">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-gray-800 text-uppercase mb-1">
            <a href="/admin/companies/{{$company->id}}" class="myCardLink  @if($activeclass != null && $activeclass =='info') cardlink-active @endif">
            معلومات الشركة</a> <i class="text-danger fas fa-info-circle"></i> </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>

  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-4 col-md-6 mb-4">
    <div class="card border-left-danger shadow h-100">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-gray-800 text-uppercase mb-1">
            <a href="/admin/companies/{{$company->id}}/mof_ssn_address" class="myCardLink @if($activeclass != null && $activeclass =='mofssn') cardlink-active @endif"> 
            العنوان لدى وزارة المالية و الضمان الاجتماعي</a> <i class="text-danger fas fa-address-card"></i> </div>
            
          </div>
         
        </div>
      </div>
    </div>
  </div>


       <!-- Earnings (Monthly) Card Example -->
       <div class="col-xl-2 col-md-6 mb-4 " >
    <div class="card border-left-danger shadow h-100">
      <div class="card-body">
        <div class="row no-gutters align-items-center smallcardSize">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-gray-800 text-uppercase mb-1">
            <a href="/admin/companies/{{$company->id}}/lawyer" class="myCardLink @if($activeclass != null && $activeclass =='lawyer') cardlink-active @endif">
            محامي الشّركة</a> <i class="text-danger fas fa-gavel"></i> </div>
           
           
          </div>
        
        </div>
      </div>
    </div>
  </div>


    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-2 col-md-6 mb-4 " >
    <div class="card border-left-danger shadow h-100">
      <div class="card-body">
        <div class="row no-gutters align-items-center smallcardSize">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-gray-800 text-uppercase mb-1">
            <a href="/admin/companies/{{$company->id}}/files" class="myCardLink @if($activeclass != null && $activeclass =='files') cardlink-active @endif">
            ملفّات الشّركة</a> <i class="text-danger fas fa-folder-open"></i> </div>
           
           
          </div>
        
        </div>
      </div>
    </div>
  </div>


      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-2 col-md-6 mb-4 " >
    <div class="card border-left-danger shadow h-100">
      <div class="card-body">
        <div class="row no-gutters align-items-center smallcardSize">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-gray-800 text-uppercase mb-1">
            <a href="/admin/companies/{{$company->id}}/employees" class="myCardLink @if($activeclass != null && $activeclass =='employees') cardlink-active @endif">
            موظفين الشركة</a> <i class="text-danger fas fa-users"></i> </div>
          
          </div>
        
        </div>
      </div>
    </div>
  </div>
</div>