@extends ('client/layout')

@section ('client_home_content')

<!-- Begin Page Content -->
<div class="container-fluid">



@include('client.companies.header' , ['activeclass' => 'files'])



<br><br>
<div style="display:block">

<h1 class="text-gray-800"><a href="/client/companies/{{$company->id}}/files"> ملفّات شركة {{$company->c_name}} <i class="fas fa-folder-open"></i> </a> </h1>



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
<h1 class="h3 mb-0 text-danger">مستندات السّجلّ التّجاري</h1>

<br><br>



       
<div class="row">



    <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">
                طلب تسجيل الشّركة
              </h6>
            </div>
            <div class="card-body">


          <form  method="POST" action="{{action('Client\CompanyFilesController@upload_files' , $company->id) }}"
             enctype="multipart/form-data" class="allUploadForms" >
            @csrf
            @method('PUT')


            <div style="display:flex ; margin-bottom:10px" >

            <input type="file" class=" form-control form-control-user"  id="tasjil_sherke" name="tasjil_sherke[]" 
            accept="image/* , .pdf" onchange="toggleButton(this.id,'tasjil_sherke_Btn');" multiple>

           <input type="hidden" value="tasjil_sherke" name="filetit">
           <input type="hidden" value="sijil_tijare_files" name="filecat">
           <input type="hidden" value="st_ts" name="fileprefix">

            <button href="" class="btn btn-danger btn-user" type="submit" id="tasjil_sherke_Btn" disabled>
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
              <h6 class="m-0 font-weight-bold text-danger">النظام الأساسي</h6>
            </div>
            <div class="card-body">
           
          <form  method="POST" action="{{action('Client\CompanyFilesController@upload_files' , $company->id) }}" 
            enctype="multipart/form-data" class="allUploadForms" >
            @csrf
            @method('PUT')


            <div style="display:flex ; margin-bottom:10px" >

            <input type="file" class=" form-control form-control-user"  id="nizam_asese" name="nizam_asese[]" 
            accept="image/* , .pdf" onchange="toggleButton(this.id,'nizam_asese_Btn')" multiple>

           <input type="hidden" value="nizam_asese" name="filetit">
           <input type="hidden" value="sijil_tijare_files" name="filecat">
           <input type="hidden" value="st_na" name="fileprefix">

            <button href="" class="btn btn-danger btn-user" type="submit" id="nizam_asese_Btn" disabled><i class="fas fa-upload"></i></button>
          </form>
        </div>

         
              
                  
            </div>
          </div>

  </div>

  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">إذاعة تجارية</h6>
            </div>
            <div class="card-body">
            <form  method="POST" action="{{action('Client\CompanyFilesController@upload_files' , $company->id) }}" 
              class="allUploadForms" enctype="multipart/form-data" id="maform" >
            @csrf
            @method('PUT')


            <div style="display:flex ; margin-bottom:10px" >

            <input type="file" class="form-control form-control-user"  id="ize3a_tijareyye" name="ize3a_tijareyye[]" 
            accept="image/* , .pdf"  onchange="toggleButton(this.id,'ize3a_tijareyye_btn');" multiple>

           <input type="hidden" value="ize3a_tijareyye" name="filetit">
           <input type="hidden" value="sijil_tijare_files" name="filecat">
           <input type="hidden" value="st_it" name="fileprefix">

            <button href="" class="btn btn-danger btn-user" type="submit" id="ize3a_tijareyye_btn" disabled><i class="fas fa-upload"></i></button>
          </form>
        </div>

            

            </div>
          </div>

  </div>

  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">شهادة تسجيل</h6>
            </div>
            <div class="card-body">
        
            <form  method="POST" action="{{action('Client\CompanyFilesController@upload_files' , $company->id) }}" 
              class="allUploadForms" enctype="multipart/form-data" id="maform" >
            @csrf
            @method('PUT')


            <div style="display:flex ; margin-bottom:10px" >

            <input type="file" class="form-control form-control-user"  id="shhedit_tasjil_st" name="shhedit_tasjil_st[]" 
            accept="image/* , .pdf" onchange="toggleButton(this.id,'shhedit_tasjil_st_btn');"  multiple>

           <input type="hidden" value="shhedit_tasjil_st" name="filetit">
           <input type="hidden" value="sijil_tijare_files" name="filecat">
           <input type="hidden" value="st_ts" name="fileprefix">

            <button href="" class="btn btn-danger btn-user" type="submit" id="shhedit_tasjil_st_btn" disabled><i class="fas fa-upload"></i></button>
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
              <h6 class="m-0 font-weight-bold text-danger">محضر جمعيّة عموميّة</h6>
            </div>
            <div class="card-body">

            <form  method="POST" action="{{action('Client\CompanyFilesController@upload_files' , $company->id) }}" 
              class="allUploadForms" enctype="multipart/form-data" id="maform" >
            @csrf
            @method('PUT')


            <div style="display:flex ; margin-bottom:10px" >

            <input type="file" class="form-control form-control-user"  id="mahdar_jam3eyye" name="mahdar_jam3eyye[]" 
            accept="image/* , .pdf" onchange="toggleButton(this.id,'mahdar_jam3eyye_btn');"  multiple>

           <input type="hidden" value="mahdar_jam3eyye" name="filetit">
           <input type="hidden" value="sijil_tijare_files" name="filecat">
           <input type="hidden" value="st_mj" name="fileprefix">

            <button href="" class="btn btn-danger btn-user" type="submit" id="mahdar_jam3eyye_btn" disabled><i class="fas fa-upload"></i></button>
          </form>
        </div>

          


            </div>
          </div>

  </div>

  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">إتفاقية محامي الشّركة</h6>
            </div>
            <div class="card-body">
           
            <form  method="POST" class="allUploadForms" action="{{action('Client\CompanyFilesController@upload_files' , $company->id) }}" enctype="multipart/form-data" id="maform" >
            @csrf
            @method('PUT')


            <div style="display:flex ; margin-bottom:10px" >

            <input type="file" class="form-control form-control-user"  id="itifa2yet_mohame" name="itifa2yet_mohame[]" 
            accept="image/* , .pdf"  onchange="toggleButton(this.id,'itifa2yet_mohame_btn');" multiple>

           <input type="hidden" value="itifa2yet_mohame" name="filetit">
           <input type="hidden" value="sijil_tijare_files" name="filecat">
           <input type="hidden" value="st_im" name="fileprefix">

            <button href="" class="btn btn-danger btn-user" type="submit" id="itifa2yet_mohame_btn" disabled><i class="fas fa-upload"></i></button>
          </form>
        </div>

           

            </div>
          </div>

  </div>


  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">إفادة وقوعات</h6>
            </div>
            <div class="card-body">
  
            <form  method="POST" action="{{action('Client\CompanyFilesController@upload_files' , $company->id) }}"
              class="allUploadForms" enctype="multipart/form-data" id="maform" >
            @csrf
            @method('PUT')


            <div style="display:flex ; margin-bottom:10px" >

            <input type="file" class="form-control form-control-user"  id="ifedit_woko3at" name="ifedit_woko3at[]" 
            accept="image/* , .pdf" onchange="toggleButton(this.id,'ifedit_woko3at_btn');"  multiple>

           <input type="hidden" value="ifedit_woko3at" name="filetit">
           <input type="hidden" value="sijil_tijare_files" name="filecat">
           <input type="hidden" value="st_iw" name="fileprefix">

            <button href="" class="btn btn-danger btn-user" type="submit" id="ifedit_woko3at_btn" disabled><i class="fas fa-upload"></i></button>
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
         
            <form  method="POST" action="{{action('Client\CompanyFilesController@upload_files' , $company->id) }}" 
              class="allUploadForms" enctype="multipart/form-data"  >
            @csrf
            @method('PUT')


            <div style="display:flex ; margin-bottom:10px" >

            <input type="file" class="form-control form-control-user"  id="st_others" name="st_others[]" 
            accept="image/* , .pdf" onchange="toggleButton(this.id,'st_others_btn');"  multiple >

           <input type="hidden" value="st_others" name="filetit">
           <input type="hidden" value="sijil_tijare_files" name="filecat">
           <input type="hidden" value="st_ot" name="fileprefix">

            <button href="" class="btn btn-danger btn-user" type="submit" id="st_others_btn" disabled><i class="fas fa-upload"></i></button>
          </form>
        </div>

       
            </div>
          </div>

  </div>
</div>


<div>
  <br><br>
  <hr>
  <br><br><br><br>
</div>


<h1 class="h3 mb-0 text-danger" id="mof">مستندات وزارة الماليّة </h1>

<br><br>

<div class="row">



    <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">
                شهادة تسجيل الماليّة
              </h6>
            </div>
            <div class="card-body">
           
            
            <form  method="POST" action="{{action('Client\CompanyFilesController@upload_files' , $company->id) }}"
              class="allUploadForms" enctype="multipart/form-data" >
            @csrf
            @method('PUT')


            <div style="display:flex ; margin-bottom:10px" >

            <input type="file" class="form-control form-control-user"  id="tasjil_meliyye" name="tasjil_meliyye[]" 
            accept="image/* , .pdf"  onchange="toggleButton(this.id,'tasjil_meliyye_btn');" multiple>

           <input type="hidden" value="tasjil_meliyye" name="filetit">
           <input type="hidden" value="mof_files" name="filecat">
           <input type="hidden" value="mf_tm" name="fileprefix">

            <button href="" class="btn btn-danger btn-user" type="submit" id="tasjil_meliyye_btn" disabled><i class="fas fa-upload"></i></button>
          </form>
        </div>

          
            

                     
            </div>
          </div>

    </div>

  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">شهادة تسجيل VAT</h6>
            </div>
            <div class="card-body">
     
            
            <form  method="POST" action="{{action('Client\CompanyFilesController@upload_files' , $company->id) }}" 
              class="allUploadForms" enctype="multipart/form-data" id="maform" >
            @csrf
            @method('PUT')


            <div style="display:flex ; margin-bottom:10px" >

            <input type="file" class="form-control form-control-user"  id="tasjil_vat" name="tasjil_vat[]" 
            accept="image/* , .pdf" onchange="toggleButton(this.id,'tasjil_vat_btn');"  multiple>

           <input type="hidden" value="tasjil_vat" name="filetit">
           <input type="hidden" value="mof_files" name="filecat">
           <input type="hidden" value="mf_tv" name="fileprefix">

            <button href="" class="btn btn-danger btn-user" type="submit" id="tasjil_vat_btn" disabled><i class="fas fa-upload"></i></button>
          </form>
        </div>

          


            </div>
          </div>

  </div>

  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">مباشرة عمل</h6>
            </div>
            <div class="card-body">
 
            
            <form  method="POST" action="{{action('Client\CompanyFilesController@upload_files' , $company->id) }}" 
              class="allUploadForms" enctype="multipart/form-data" >
            @csrf
            @method('PUT')


            <div style="display:flex ; margin-bottom:10px" >

            <input type="file" class="form-control form-control-user"  id="mobeshrit_3amal" name="mobeshrit_3amal[]" 
            accept="image/* , .pdf" onchange="toggleButton(this.id,'mobeshrit_3amal_btn');"  multiple>

           <input type="hidden" value="mobeshrit_3amal" name="filetit">
           <input type="hidden" value="mof_files" name="filecat">
           <input type="hidden" value="mf_m3" name="fileprefix">

            <button href="" class="btn btn-danger btn-user" type="submit" id="mobeshrit_3amal_btn" disabled><i class="fas fa-upload"></i></button>
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
          
            
            <form  method="POST" action="{{action('Client\CompanyFilesController@upload_files' , $company->id) }}"
              class="allUploadForms" enctype="multipart/form-data">
            @csrf
            @method('PUT')


            <div style="display:flex ; margin-bottom:10px" >

            <input type="file" class="form-control form-control-user"  id="mof_others" name="mof_others[]" 
            accept="image/* , .pdf"  onchange="toggleButton(this.id,'mof_others_btn');"  multiple>

           <input type="hidden" value="mof_others" name="filetit">
           <input type="hidden" value="mof_files" name="filecat">
           <input type="hidden" value="mf_ot" name="fileprefix">

            <button href="" class="btn btn-danger btn-user" type="submit" id="mof_others_btn" disabled><i class="fas fa-upload"></i></button>
          </form>
        </div>

            


            </div>
          </div>

  </div>


</div>


<div>
  <br><br>
  <hr>
  <br><br><br><br>
</div>


<h1 class="h3 mb-0 text-danger" id="ssn">مستندات الصندوق الوطني للضمان الاجتماعي  </h1>

<br><br>

<div class="row">



    <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">
                شهادة تسجيل
              </h6>
            </div>
            <div class="card-body">
           
            
            <form  method="POST" action="{{action('Client\CompanyFilesController@upload_files' , $company->id) }}"
              class="allUploadForms" enctype="multipart/form-data"  >
            @csrf
            @method('PUT')


            <div style="display:flex ; margin-bottom:10px" >

            <input type="file" class="form-control form-control-user"  id="tasjil_ssn" name="tasjil_ssn[]" 
            accept="image/* , .pdf" onchange="toggleButton(this.id,'tasjil_ssn_btn');"  multiple>

           <input type="hidden" value="tasjil_ssn" name="filetit">
           <input type="hidden" value="ssn_files" name="filecat">
           <input type="hidden" value="sn_ts" name="fileprefix">

            <button href="" class="btn btn-danger btn-user" type="submit" id="tasjil_ssn_btn" disabled><i class="fas fa-upload"></i></button>
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
        
            
            <form  method="POST" action="{{action('Client\CompanyFilesController@upload_files' , $company->id) }}" 
              class="allUploadForms" enctype="multipart/form-data"  >
            @csrf
            @method('PUT')


            <div style="display:flex ; margin-bottom:10px" >

            <input type="file" class="form-control form-control-user"  id="ssn_others" name="ssn_others[]" 
            accept="image/* , .pdf" onchange="toggleButton(this.id,'ssn_others_btn');"  multiple>

           <input type="hidden" value="ssn_others" name="filetit">
           <input type="hidden" value="ssn_files" name="filecat">
           <input type="hidden" value="sn_ot" name="fileprefix">

            <button href="" class="btn btn-danger btn-user" type="submit" id="ssn_others_btn" disabled><i class="fas fa-upload"></i></button>
          </form>
        </div>

           



            </div>
          </div>

  </div>




</div>



<div>
  <br><br>
  <hr>
  <br><br><br><br>
</div>


<h1 class="h3 mb-0 text-danger" id="ot">مستندات أخرى  </h1>

<br><br>

<div class="row">



    <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">
                مستندات أخرى
              </h6>
            </div>
            <div class="card-body">
      
            
            <form  method="POST" action="{{action('Client\CompanyFilesController@upload_files' , $company->id) }}" 
              class="allUploadForms" enctype="multipart/form-data"  >
            @csrf
            @method('PUT')


            <div style="display:flex ; margin-bottom:10px" >

            <input type="file" class="form-control form-control-user"  id="f_others" name="f_others[]" 
            accept="image/* , .pdf" onchange="toggleButton(this.id,'f_others_btn');"  multiple>

           <input type="hidden" value="f_others" name="filetit">
           <input type="hidden" value="others_files" name="filecat">
           <input type="hidden" value="of_ot" name="fileprefix">

            <button href="" class="btn btn-danger btn-user" type="submit" id="f_others_btn" disabled><i class="fas fa-upload"></i></button>
          </form>
        </div>

          

                     
            </div>
          </div>

    </div>






</div>







<br><br>








@endsection
