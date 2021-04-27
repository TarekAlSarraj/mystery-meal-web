@extends ('admin/layout')

@section ('admin_home_content')

<!-- Begin Page Content -->
<div class="container-fluid">

<br>
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
</div>
<br>
<!-- Content Row -->
<div class="row">

  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-4 col-md-6 mb-4">
    <div class="card border-left-gray shadow h-100">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-gray-800 text-uppercase mb-1">
            <a href="/admin/clients" class="myCardLink">
            العملاء
            </a>
          </div>
          </div>
          <div class="col-auto">
          <div class="fas fa-user-tie mb-0 text-danger my-text-2"></div>
          <div class="h5 mb-0 font-weight-bold text-danger my-text-1">
          @php 
          echo \App\User::where('profile_type','App\Client')->where('is_deleted',0)->where('is_deactivated',0)->get()->count();
          
          @endphp
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Earnings (Monthly) Card Example -->
  
  <div class="col-xl-4 col-md-6 mb-4">
    <div class="card border-left-gray shadow h-100">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            
          <div class="text-xs font-weight-bold text-gray-800 text-uppercase mb-1">
            <a href="/admin/companies" class="myCardLink">
            الشركات
            </a>
          </div>
            
          </div>
          <div class="col-auto">
            <div class="fas fa-building mb-0 text-danger my-text-2"></div>
          <div class="h5 mb-0 font-weight-bold text-danger my-text-1">@php echo \App\Company::all()->count() @endphp</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-4 col-md-6 mb-4 " >
    <div class="card border-left-gray shadow h-100">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-gray-800 text-uppercase mb-1">
            <a href="/admin/employees" class="myCardLink">
            الموظّفين
            </a>
            </div>
          
           
          </div>
          <div class="col-auto">
          <div class="fas fa-users mb-0 text-danger my-text-2"></div>
          <div class="h5 mb-0 font-weight-bold text-danger my-text-1">@php echo \App\Employee::all()->count() @endphp</div>

          </div>
        </div>
      </div>
    </div>
  </div>


</div>



<!-- /.container-fluid -->


<br><br><br><br>

<div class="row">

  <div class="col-lg-12 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">قائمة العملاء</h6>
            </div>
            <div class="card-body"> 
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead  class="mytableheader">
                    <tr>
                      <th>صورة العميل</th>
                      <th>إسم العميل</th>
                      <th>إسم مستخدم العميل</th>
                      <th>البريد الالكتروني للعميل</th>
                      <th>الشركات التابعة للعميل</th>
           
                    </tr>
                  </thead>
                  <tbody>
                    
                    @foreach ($clients as $client)
                    @if($client->is_deactivated == 0 && $client->is_deleted == 0)
                    <tr>
                      <td><a> <i class="fas fa-user-circle" style="font-size:2rem"></i> </a></td>
                      <td><a href="/admin/clients/{{$client->id}}/profile"> {{$client->user->firstname}}  {{$client->user->lastname}} </a></td>
                      <td>{{$client->user->username}}</td>
                      <td>{{$client->user->email}}</td>
                      <td>
                        @php 
                        $companies = $client->company;
                        $i=0;
                        @endphp
                        @foreach ($companies as $company)
                        @if($i>=1) | @endif
                          <a href="/admin/companies/{{$company->id}}">{{$company->c_name}}</a>
                          

                          @php $i++; @endphp
                        
                        @endforeach

                      </td>
                     
                    </tr>
                      @endif
                      @endforeach


                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>

  </div>


</div>

<a href="/admin/clients/create" class=" d-sm-inline-block btn btn-sm btn-danger shadow-sm " style="margin:10px;">إنشاء عميل &nbsp;&nbsp;<i class="fas fa-plus fa-sm text-white-50"></i> </a>


</div>

<br><br>
</div>


<!-- End of Main Content -->




@endsection