@extends ('admin/layout')

@section ('admin_home_content')

<br><br>
<!-- Begin Page Content -->

<div class="container-fluid">




<!-- Content Row -->

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
                    <tr>
                      <td><a> <i class="fas fa-user-circle" style="font-size:2rem"></i> </a></td>
                      <td><a href=""> {{$client->user->firstname}}  {{$client->user->lastname}} </a></td>
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
                  
                      @endforeach


                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>

  </div>


</div>


<a href="/admin/clients/create" class=" d-sm-inline-block btn btn-sm btn-danger shadow-sm " style="margin:10px;">إنشاء عميل &nbsp;&nbsp;<i class="fas fa-plus fa-sm text-white-50"></i> </a>








<br><br>




@endsection