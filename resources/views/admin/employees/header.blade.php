
<!-- Content Row -->
<div class="row">

  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-danger shadow h-100">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-gray-800 text-uppercase mb-1">
            <a  href="/admin/employees/{{$employee->id}}" class="myCardLink  @if($activeclass != null && $activeclass =='info') cardlink-active @endif ">معلومات الموظّف</a> <i class="text-danger fas fa-info-circle"></i> </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>


  <div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-danger shadow h-100">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-gray-800 text-uppercase mb-1">
            <a href="/admin/employees/{{$employee->id}}/address " class="myCardLink @if($activeclass != null && $activeclass =='address') cardlink-active @endif">عنوان الموظّف</a> <i class="text-danger fas fa-map-marker-alt"></i> </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>

  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-danger shadow h-100">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-gray-800 text-uppercase mb-1">
            <a href="/admin/employees/{{$employee->id}}/spouse" class="myCardLink @if($activeclass != null && $activeclass =='spouse') cardlink-active @endif">معلومات عن الزوج(ة)</a> <i class="text-danger fas fa-male"></i> <i class="text-danger fas fa-female"></i> </div>
            
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
            <a href="/admin/employees/{{$employee->id}}/child" class="myCardLink @if($activeclass != null && $activeclass =='child') cardlink-active @endif">معلومات عن الأولاد</a> <i class="text-danger fas fa-child"></i> </div>
            <!-- <div class="row no-gutters align-items-center">
            
              
            </div> -->
           
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
            <a href="/admin/employees/{{$employee->id}}/files " class="myCardLink @if($activeclass != null && $activeclass =='files') cardlink-active @endif">تحميل ملفّات الموظّف </a> <i class="text-danger fas fa-download"></i> </div>
            <!-- <div class="row no-gutters align-items-center">
            
              
            </div> -->
           
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
            <a href="/admin/employees/{{$employee->id}}/oldwork" class="myCardLink @if($activeclass != null && $activeclass =='oldwork') cardlink-active @endif">معلومات عن العمل السابق</a> <i class="text-danger fas fa-building"></i> </div>
            <!-- <div class="row no-gutters align-items-center">
            
              
            </div> -->
           
          </div>
        
        </div>
      </div>
    </div>
  </div>




</div>


<!-- Content Row -->