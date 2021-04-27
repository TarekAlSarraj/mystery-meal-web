@extends ('client/layout')

@section ('client_home_content')

<!-- Begin Page Content -->
<div class="container-fluid">

@include('client.employees.header' , ['activeclass' => 'files'])


<!-- Content Row -->
<div class="row">

</div>



<br><br>
<div style="display:block">

<h1 class="text-gray-800"><a href="/client/companies/{{$company->id}}/employees/{{$employee->id}}/files"> ملفّات الموظّف {{$employee->user->firstname}} {{$employee->user->firstname}} <i class="fas fa-folder-open"></i> </a> </h1>



<!-- MOF ADDRESS ============ Content Row -->


<br><br>
<div style="display:flex; width:30%;" id="progBarDiv">

<div id="progressbar" class="progress-bar" role="progressbar" style="width: 0% ; background-color:#d1d3e2; margin-bottom:10px;border-radius:5px" 
            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
            
           
      <div style="margin:auto; text-align:center;width:250px;" >
        <p id="upload_msg"></p>
      </div>


</div>
</div>

          

<br><br>



       
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


          <form  method="POST" action="{{action('Client\EmployeeFilesController@upload_files' , [$company->id,$employee->id]) }}"
             enctype="multipart/form-data" class="allUploadForms" >
            @csrf
            @method('PUT')


            <div style="display:flex ; margin-bottom:10px" >

            <input type="file" class=" form-control form-control-user"  id="id_card" name="id_card[]" 
            accept="image/* , .pdf" onchange="toggleButton(this.id,'id_card_btn');" multiple>

           <input type="hidden" value="id_card" name="filetit">
           <input type="hidden" value="id_" name="fileprefix">

            <button href="" class="btn btn-danger btn-user" type="submit" id="id_card_btn" disabled>
              <i class="fas fa-upload"></i>
            </button>
          </form>
        </div>

        
       
              
           

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
           
            <form  method="POST" action="{{action('Client\EmployeeFilesController@upload_files' , [$company->id,$employee->id]) }}"
             enctype="multipart/form-data" class="allUploadForms" >
            @csrf
            @method('PUT')


            <div style="display:flex ; margin-bottom:10px" >

            <input type="file" class=" form-control form-control-user"  id="spouse_id_card" name="spouse_id_card[]" 
            accept="image/* , .pdf" onchange="toggleButton(this.id,'spouse_id_card_btn');" multiple>

           <input type="hidden" value="spouse_id_card" name="filetit">
           <input type="hidden" value="sid_" name="fileprefix">

            <button href="" class="btn btn-danger btn-user" type="submit" id="spouse_id_card_btn" disabled>
              <i class="fas fa-upload"></i>
            </button>
          </form>
        </div>

         
              
                  
            </div>
          </div>

  </div>

  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">بطاقة هويّة الأولاد </h6>
            </div>
            <div class="card-body">
            <form  method="POST" action="{{action('Client\EmployeeFilesController@upload_files' , [$company->id,$employee->id]) }}"
             enctype="multipart/form-data" class="allUploadForms" >
            @csrf
            @method('PUT')


            <div style="display:flex ; margin-bottom:10px" >

            <input type="file" class=" form-control form-control-user"  id="child_id_card" name="child_id_card[]" 
            accept="image/* , .pdf" onchange="toggleButton(this.id,'child_id_card_btn');" multiple>

           <input type="hidden" value="child_id_card" name="filetit">
           <input type="hidden" value="cid_" name="fileprefix">

            <button href="" class="btn btn-danger btn-user" type="submit" id="child_id_card_btn" disabled>
              <i class="fas fa-upload"></i>
            </button>
          </form>
        </div>

            

            </div>
          </div>

  </div>

  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">إخراج قيد فردي </h6>
            </div>
            <div class="card-body">
        
            <form  method="POST" action="{{action('Client\EmployeeFilesController@upload_files' ,[$company->id,$employee->id]) }}"
             enctype="multipart/form-data" class="allUploadForms" >
            @csrf
            @method('PUT')


            <div style="display:flex ; margin-bottom:10px" >

            <input type="file" class=" form-control form-control-user"  id="individual_status_record" name="individual_status_record[]" 
            accept="image/* , .pdf" onchange="toggleButton(this.id,'individual_status_record_btn');" multiple>

           <input type="hidden" value="individual_status_record" name="filetit">
           <input type="hidden" value="isc_" name="fileprefix">

            <button href="" class="btn btn-danger btn-user" type="submit" id="individual_status_record_btn" disabled>
              <i class="fas fa-upload"></i>
            </button>
          </form>
        </div>

           

            </div>
          </div>

  </div>



</div>

<div class="row">


<div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">إخراج قيد عائلي</h6>
            </div>
            <div class="card-body">

            <form  method="POST" action="{{action('Client\EmployeeFilesController@upload_files' , [$company->id,$employee->id]) }}"
             enctype="multipart/form-data" class="allUploadForms" >
            @csrf
            @method('PUT')


            <div style="display:flex ; margin-bottom:10px" >

            <input type="file" class=" form-control form-control-user"  id="family_status_record" name="family_status_record[]" 
            accept="image/* , .pdf" onchange="toggleButton(this.id,'family_status_record_btn');" multiple>

           <input type="hidden" value="family_status_record" name="filetit">
           <input type="hidden" value="fsc_" name="fileprefix">

            <button href="" class="btn btn-danger btn-user" type="submit" id="family_status_record_btn" disabled>
              <i class="fas fa-upload"></i>
            </button>
          </form>
        </div>

          


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
           
            <form  method="POST" action="{{action('Client\EmployeeFilesController@upload_files' , [$company->id,$employee->id]) }}"
             enctype="multipart/form-data" class="allUploadForms" >
            @csrf
            @method('PUT')


            <div style="display:flex ; margin-bottom:10px" >

            <input type="file" class=" form-control form-control-user"  id="ssn_statement" name="ssn_statement[]" 
            accept="image/* , .pdf" onchange="toggleButton(this.id,'ssn_statement_btn');" multiple>

           <input type="hidden" value="ssn_statement" name="filetit">
           <input type="hidden" value="ssn_" name="fileprefix">

            <button href="" class="btn btn-danger btn-user" type="submit" id="ssn_statement_btn" disabled>
              <i class="fas fa-upload"></i>
            </button>
          </form>
        </div>

           

            </div>
          </div>

  </div>


  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">إفادة بالرقم المالي</h6>
            </div>
            <div class="card-body">
  
            <form  method="POST" action="{{action('Client\EmployeeFilesController@upload_files' , [$company->id,$employee->id]) }}"
             enctype="multipart/form-data" class="allUploadForms" >
            @csrf
            @method('PUT')


            <div style="display:flex ; margin-bottom:10px" >

            <input type="file" class=" form-control form-control-user"  id="mof_statement" name="mof_statement[]" 
            accept="image/* , .pdf" onchange="toggleButton(this.id,'mof_statement_btn');" multiple>

           <input type="hidden" value="mof_statement" name="filetit">
           <input type="hidden" value="mof_" name="fileprefix">

            <button href="" class="btn btn-danger btn-user" type="submit" id="mof_statement_btn" disabled>
              <i class="fas fa-upload"></i>
            </button>
          </form>
        </div>

           
            

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
         
            <form  method="POST" action="{{action('Client\EmployeeFilesController@upload_files' , [$company->id,$employee->id]) }}"
             enctype="multipart/form-data" class="allUploadForms" >
            @csrf
            @method('PUT')


            <div style="display:flex ; margin-bottom:10px" >

            <input type="file" class=" form-control form-control-user"  id="emp_other_files" name="emp_other_files[]" 
            accept="image/* , .pdf" onchange="toggleButton(this.id,'emp_other_files_btn');" multiple>

           <input type="hidden" value="emp_other_files" name="filetit">
           <input type="hidden" value="eof_" name="fileprefix">

            <button href="" class="btn btn-danger btn-user" type="submit" id="emp_other_files_btn" disabled>
              <i class="fas fa-upload"></i>
            </button>
          </form>
        </div>

       
            </div>
          </div>

  </div>
</div>










@endsection
