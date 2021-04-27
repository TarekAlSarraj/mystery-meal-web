@extends ('admin/layout')

@section ('admin_home_content')

<br><br>
<!-- Begin Page Content -->

<div class="container-fluid">


<!-- Content Row -->

<div class="row">

  <div class="col-lg-6 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">إضافة مهمّة</h6>
            </div>
            <div class="card-body">
            <form method="POST" action="/admin/tasks/create">
                        @csrf

                        <div class="form-group row">
                        
                            
                            <div class="col-md-4">
                            <label for="task_name">اسم المهمّة</label>
                            <input id="task_name" type="text" class="form-control" name="task_name" required autocomplete="task_name" autofocus>
                            </div>

                              
                            <div class="col-md-4">
                            <label for="task_company">الشّركة المعنيّة</label>
                            <select class=" form-control form-control-user " id="task_company" name="task_company" required>
                               @foreach ($companies as $company)
                                <option value="{{$company->id}}" selected="selected">{{$company->c_name}}</option>
                               @endforeach
                                </select>
                            </div>

                            <div class="col-md-4">
                            <br>
                            
                             <button href="" class="d-sm-inline-block btn btn-sm btn-danger shadow-sm" type="submit"
                             style="margin-top:11px;">
                             إضافة المهمّة &nbsp;&nbsp;<i class="fas fa-plus fa-sm text-white-50"></i> </button>
                            </div>

                            
                        </div>

                        <div class="form-group row">
                        
                     
                         

                           

                        </div>


            </form>
            </div>
          </div>

  </div>


</div>

<!-- Content Row -->

<div class="row">

  <div class="col-lg-6 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">قائمة المهام</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead  class="mytableheader">
                    <tr>
                      <th>إسم المهمّة</th>
                      <th>الشّركة</th>
          
                    </tr>
                  </thead>
                  <tbody>
                    
                    @foreach ($tasks as $task)
                    <tr>
                      <td><a href="/admin/tasks/{{$task->id}}"> {{$task->task_name}}</a></td>
                      <td>{{$task->company->c_name}}</td>
                
                    </tr>
                  
                      @endforeach


                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>

  </div>


</div>










<br><br>




@endsection