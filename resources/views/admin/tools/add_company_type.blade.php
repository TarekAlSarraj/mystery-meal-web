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
              <h6 class="m-0 font-weight-bold text-danger">أنواع الشّركات</h6>
            </div>
            <div class="card-body"> 
              <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                  <thead  class="mytableheader">
                    <tr>
                      <th>النوع</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                    @foreach ($types as $type)
                    <tr>
                      <td>{{$type->type}} 
                          &nbsp;&nbsp;
                          <a href="/admin/tools/add_company_type/{{$type->id}}/delete"><i class="fas fa-times text-danger"></i></a>
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


<div class="row">
<div class="col-lg-12 mb-4">

<div class="card-body" style="display:inline-flex">
<form method="POST" action="/admin/tools/add_company_type" style="display:flex">
@csrf

      <input type="text" class="form-control form-control-user " id="type" name="type" 
              placeholder="أضف نوع جديد ..." required>
           
      <button type="submit" class="btn btn-danger btn-user"> <i class="fas fa-plus-square"></i></button>

            

</form>           
</div>
</div>
</div>




<br><br>




@endsection