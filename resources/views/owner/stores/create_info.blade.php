@extends ('owner/layout')

@section ('owner_home_content')

<!-- Begin Page Content -->
<div class="container-fluid">






<!-- Content Row -->
<br>
<h1 class="h3 mb-0 text-primary">Create Store <i class="fas fa-store"></i></h1>
<br><br>

  <form method="POST" action="/owner/stores">
  @csrf

<div class="row">

  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Store Name</h6>
            </div>
            <div class="card-body">
             
                      <input type="text" class="form-control form-control-user @error('s_name') border-danger @enderror" id="s_name" name="s_name" 
                      value="{{ old('s_name') }}" placeholder=" Store Name ...">
                      @error('s_name') 
                      <br>
                      <p class="text-danger"><i class="fas fa-exclamation-triangle"></i> Please Enter The Store's Name! </p>
                      @enderror
                     

            </div>
          </div>

  </div>

  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Store Category</h6>
            </div>
            <div class="card-body">

                      <input type="text" class="form-control form-control-user @error('s_category') border-danger @enderror" id="s_category" name="s_category"  
                      value="{{ old('s_category') }}"  placeholder="Store Category... ">


            </div>
          </div>

  </div>


  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Store Address</h6>
            </div>
            <div class="card-body">
              
           
            <input type="text" class="form-control form-control-user " id="s_address" name="s_address"  
                      value="{{ old('s_address') }}" placeholder="Store Address ...">


            </div>
          </div>

  </div>

  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Store Phone</h6>
            </div>
            <div class="card-body">
              
            <input type="text" class="form-control form-control-user " id="s_phone" name="s_phone"  
                      value="{{ old('s_phone') }}" placeholder="Store Phone ...">

            </div>
          </div>

  </div>

</div>

<div class="row">



  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Store Close Time</h6>
            </div>
            <div class="card-body">
            
            <input type="text" class="form-control form-control-user " id="s_close_time" name="s_close_time"  
                      value="{{ old('s_close_time') }}" placeholder="Store Close Time ...">
  
            </div>
          </div>

  </div>
</div>


      <!-- /.container-fluid -->
      <button type="submit" class=" d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-plus fa-sm text-white-50"></i> Create Store</button>

</form>

<br><br><br><br><br><br><br><br>




@endsection