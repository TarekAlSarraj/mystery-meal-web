@extends ('owner/layout')

@section ('owner_home_content')

<br><br>
<!-- Begin Page Content -->

<div class="container-fluid">




<!-- Content Row -->

<div class="row">

  <div class="col-lg-12 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">My Stores</h6>
                            
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Store Logo</th>
                                            <th>Store Name</th>
                                            <th>Store Category</th>
                                            <th>Store Address</th>
                                            <th>Store Address</th>
                                            <th>Store Close Time</th>
                                        </tr>
                                    </thead>
                               
                                    <tbody>
                                      @foreach($stores as $store)
                                        <tr>
                                            <td><i class="fas fa-store" style="font-size:2rem"></i></td>
                                            <td><a href="/owner/stores/{{$store->id}}">{{$store->s_name}}</a></td>
                                            <td>{{$store->s_category}}</td>
                                            <td>{{$store->s_address}}</td>
                                            <td>{{$store->s_phone}}</td>
                                            <td>{{$store->s_close_time}}</td>
                                        </tr>
                                      @endforeach
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
 
  </div>
 
               <!-- /.container-fluid -->
               <a href="/owner/stores/create" class=" d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-plus fa-sm text-white-50"></i> Create Store</a>
</div>










<br><br>




@endsection


