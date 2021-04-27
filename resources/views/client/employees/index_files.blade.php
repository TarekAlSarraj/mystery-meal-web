@extends ('client/layout')

@section ('client_home_content')

<!-- Begin Page Content -->
<div class="container-fluid">

@include('client.employees.header' , ['activeclass' => 'files'])

<!-- Content Row -->
<div class="row">

</div>


<br><br>

<h1 class="text-gray-800"> ملفّات الموظّف {{$employee->user->firstname}} {{$employee->user->firstname}} 

<span><a href="/client/companies/{{$company->id}}/employees/{{$employee->id}}/files/upload"><i class="fas fa-edit text-gray-800"></i></span>

<span>  <a href="/client/companies/{{$company->id}}/employees/{{$employee->id}}/files/delete" 
            data-toggle="modal" data-target="#deleteModal" id="{{uniqid()}}" onclick="getDeleteModal(this.id,'هل تريد الغاء جميع ملفات الموظّف {{$employee->user->firstname}} {{$employee->user->firstname}} ؟')" >
           <i class="fas fa-trash-alt text-danger"></i>
        </a>
</span>
</h1>


<br><br><br><br>

<div class="row">

 



    <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">
                بطاقة الهويّة 
              </h6>
            </div>
            <div class="card-body">
            @foreach ($files as $file) 

            
            
                  @if ($file!=null && $file->filetitle=='id_card')
                    <div style="display:flex;margin-left:5px;">
                    <a href="/client/companies/{{$company->id}}/employees/{{$employee->id}}/files/{{$file->id}}/download" class="btn btn-danger btn-user btn-block" type="submit"><i class="fas fa-download"></i> {{basename($file->filepath)}}</a>
                    &nbsp;&nbsp;
                    <a href="/client/companies/{{$company->id}}/employees/{{$employee->id}}/files/{{$file->id}}/delete" 
                    data-toggle="modal" data-target="#deleteModal" id="{{uniqid()}}" onclick="getDeleteModal(this.id,'هل تريد الغاء {{basename($file->filepath)}}؟')"> 
                    
                    <i class="fas fa-times text-danger" style="font-size:20px; "></i>
                    </a>
                    </div>

                 
                    <br>
                  @endif
            @endforeach
                
              
            
        
                     
            </div>
          </div>

    </div>

  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">بطاقة هويّة الزوج(ة) </h6>
            </div>
            <div class="card-body">
            @foreach ($files as $file) 

            
            
                  @if ($file!=null && $file->filetitle=='spouse_id_card')
                    <div style="display:flex;margin-left:5px;">
                    <a href="/client/companies/{{$company->id}}/employees/{{$employee->id}}/files/{{$file->id}}/download" class="btn btn-danger btn-user btn-block" type="submit"><i class="fas fa-download"></i> {{basename($file->filepath)}}</a>
                    &nbsp;&nbsp;
                    <a href="/client/companies/{{$company->id}}/employees/{{$employee->id}}/files/{{$file->id}}/delete" 
                    data-toggle="modal" data-target="#deleteModal" id="{{uniqid()}}" onclick="getDeleteModal(this.id,'هل تريد الغاء {{basename($file->filepath)}}؟')"> 
                    
                    <i class="fas fa-times text-danger" style="font-size:20px; "></i>
                    </a>
                    </div>

                 
                    <br>
                  @endif
            @endforeach
                  
            </div>
          </div>

  </div>

  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">بطاقة هويّة الأولاد /h6>
            </div>
            <div class="card-body">
            @foreach ($files as $file) 

            
            
                  @if ($file!=null && $file->filetitle=='child_id_card')
                    <div style="display:flex;margin-left:5px;">
                    <a href="/client/companies/{{$company->id}}/employees/{{$employee->id}}/files/{{$file->id}}/download" class="btn btn-danger btn-user btn-block" type="submit"><i class="fas fa-download"></i> {{basename($file->filepath)}}</a>
                    &nbsp;&nbsp;
                    <a href="/client/companies/{{$company->id}}/employees/{{$employee->id}}/files/{{$file->id}}/delete" 
                    data-toggle="modal" data-target="#deleteModal" id="{{uniqid()}}" onclick="getDeleteModal(this.id,'هل تريد الغاء {{basename($file->filepath)}}؟')"> 
                    
                    <i class="fas fa-times text-danger" style="font-size:20px; "></i>
                    </a>
                    </div>

                 
                    <br>
                  @endif
            @endforeach
            </div>
          </div>

  </div>

  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">إخراج قيد فردي</h6>
            </div>
            <div class="card-body">
            @foreach ($files as $file) 

            
            
          @if ($file!=null && $file->filetitle=='individual_status_record')
            <div style="display:flex;margin-left:5px;">
            <a href="/client/companies/{{$company->id}}/employees/{{$employee->id}}/files/{{$file->id}}/download" class="btn btn-danger btn-user btn-block" type="submit"><i class="fas fa-download"></i> {{basename($file->filepath)}}</a>
            &nbsp;&nbsp;
            <a href="/client/companies/{{$company->id}}/employees/{{$employee->id}}/files/{{$file->id}}/delete" 
            data-toggle="modal" data-target="#deleteModal" id="{{uniqid()}}" onclick="getDeleteModal(this.id,'هل تريد الغاء {{basename($file->filepath)}}؟')"> 
            
            <i class="fas fa-times text-danger" style="font-size:20px; "></i>
            </a>
            </div>


            <br>
          @endif
          @endforeach
            </div>
          </div>

  </div>



</div>

<div class="row">


<div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">إخراج قيد عائلي  </h6>
            </div>
            <div class="card-body">
            @foreach ($files as $file) 

            
            
          @if ($file!=null && $file->filetitle=='family_status_record')
            <div style="display:flex;margin-left:5px;">
            <a href="/client/companies/{{$company->id}}/employees/{{$employee->id}}/files/{{$file->id}}/download" class="btn btn-danger btn-user btn-block" type="submit"><i class="fas fa-download"></i> {{basename($file->filepath)}}</a>
            &nbsp;&nbsp;
            <a href="/client/companies/{{$company->id}}/employees/{{$employee->id}}/files/{{$file->id}}/delete" 
            data-toggle="modal" data-target="#deleteModal" id="{{uniqid()}}" onclick="getDeleteModal(this.id,'هل تريد الغاء {{basename($file->filepath)}}؟')"> 
            
            <i class="fas fa-times text-danger" style="font-size:20px; "></i>
            </a>
            </div>


            <br>
          @endif
          @endforeach
            </div>
          </div>

  </div>

  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger"> إفادة خدمة ضمان اجتماعي </h6>
            </div>
            <div class="card-body">
            @foreach ($files as $file) 

            
            
          @if ($file!=null && $file->filetitle=='ssn_statement')
            <div style="display:flex;margin-left:5px;">
            <a href="/client/companies/{{$company->id}}/employees/{{$employee->id}}/files/{{$file->id}}/download" class="btn btn-danger btn-user btn-block" type="submit"><i class="fas fa-download"></i> {{basename($file->filepath)}}</a>
            &nbsp;&nbsp;
            <a href="/client/companies/{{$company->id}}/employees/{{$employee->id}}/files/{{$file->id}}/delete" 
            data-toggle="modal" data-target="#deleteModal" id="{{uniqid()}}" onclick="getDeleteModal(this.id,'هل تريد الغاء {{basename($file->filepath)}}؟')"> 
            
            <i class="fas fa-times text-danger" style="font-size:20px; "></i>
            </a>
            </div>


            <br>
          @endif
          @endforeach
            </div>
          </div>

  </div>


  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">إفادة بالرقم المالي </h6>
            </div>
            <div class="card-body">
            @foreach ($files as $file) 

            
            
          @if ($file!=null && $file->filetitle=='mof_statement')
            <div style="display:flex;margin-left:5px;">
            <a href="/client/companies/{{$company->id}}/employees/{{$employee->id}}/files/{{$file->id}}/download" class="btn btn-danger btn-user btn-block" type="submit"><i class="fas fa-download"></i> {{basename($file->filepath)}}</a>
            &nbsp;&nbsp;
            <a href="/client/companies/{{$company->id}}/employees/{{$employee->id}}/files/{{$file->id}}/delete" 
            data-toggle="modal" data-target="#deleteModal" id="{{uniqid()}}" onclick="getDeleteModal(this.id,'هل تريد الغاء {{basename($file->filepath)}}؟')"> 
            
            <i class="fas fa-times text-danger" style="font-size:20px; "></i>
            </a>
            </div>


            <br>
          @endif
          @endforeach
            </div>
          </div>

  </div>

  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">مستندات أخرى</h6>
            </div>
            <div class="card-body">
            @foreach ($files as $file) 

            
            
          @if ($file!=null && $file->filetitle=='emp_other_files')
            <div style="display:flex;margin-left:5px;">
            <a href="/client/companies/{{$company->id}}/employees/{{$employee->id}}/files/{{$file->id}}/download" class="btn btn-danger btn-user btn-block" type="submit"><i class="fas fa-download"></i> {{basename($file->filepath)}}</a>
            &nbsp;&nbsp;
            <a href="/client/companies/{{$company->id}}/employees/{{$employee->id}}/files/{{$file->id}}/delete" 
            data-toggle="modal" data-target="#deleteModal" id="{{uniqid()}}" onclick="getDeleteModal(this.id,'هل تريد الغاء {{basename($file->filepath)}}؟')"> 
            
            <i class="fas fa-times text-danger" style="font-size:20px; "></i>
            </a>
            </div>


            <br>
          @endif
          @endforeach
            </div>
          </div>

  </div>
</div>





@endsection