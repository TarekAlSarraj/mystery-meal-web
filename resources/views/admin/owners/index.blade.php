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
                            <h6 class="m-0 font-weight-bold text-primary">Store Owners</h6>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Photo</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Stores</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                      @foreach($owners as $owner)
                                        <tr>
                                            <td><i class="fas fa-user-circle" style="font-size:2rem"></i></td>
                                            <td><a href="/admin/owners/{{$owner->id}}">{{$owner->user->firstname}} {{$owner->user->lastname}}</a></td>
                                            <td>{{$owner->user->email}}</td>
                                            <td>{{$owner->user->phone}}</td>
                                            <td>
                                            @php
                                      $stores = $owner->store;
                                      $i=0;
                                      @endphp
                                      @foreach ($stores as $store)
                                      @if($i>=1) | @endif
                                        <a href="/admin/stores/{{$store->id}}">{{$store->s_name}}</a>


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

               <!-- /.container-fluid -->
               <a href="/admin/owners/create" class=" d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-plus fa-sm text-white-50"></i> Create Store Owner</a>
</div>










<br><br>




@endsection
