@extends ('admin/layout')

@section ('admin_home_content')

<br><br>
<!-- Begin Page Content -->

<div class="container-fluid">


<!-- Content Row -->
<h2 style="color:black"> <i class="fas fa-tasks"></i> اسم المهمّة : <span class="text-danger">{{$task->task_name}}</span> 
| تابعة لشركة : <a href="/admin/companies/{{$task->company->id}}"class="text-danger">{{$task->company->c_name}} </a> </h2>
<br>







<!-- Content Row -->

<div class="row">

  <div class="col-lg-12 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">إضافة مهمّة فرعيّة</h6>
            </div>
            <div class="card-body">
            <form method="POST" action="/admin/tasks/{{$task->id}}/create">
                        @csrf

                        <div class="form-group row">
                        
                            <div class="col-md-4">
                            <label for="task_description">تفصيل المهمّة الفرعيّة</label>
                            <input id="task_description" type="text" class="form-control" name="task_description" required autocomplete="task_description" autofocus>
                            </div>

                            <div class="col-md-2">
                            <label for="task_start_time">تاريخ البدأ</label>
                            <input id="task_start_time" type="datetime-local" class="form-control" name="task_start_time" required autocomplete="task_start_time" autofocus>
                            </div>

                            <!-- <div class="col-md-2">
                            <label for="task_end_time">تاريخ الانتهاء</label>
                            <input id="task_end_time" type="datetime-local" class="form-control" name="task_end_time" required autocomplete="task_end_time" autofocus>
                            </div> -->

                            <div class="col-md-2">
                            <br>
                             <button  type="submit" class=" d-sm-inline-block btn btn-sm btn-danger shadow-sm " 
                             style="margin:10px;">إضافة &nbsp;&nbsp;<i class="fas fa-plus fa-sm text-white-50"></i> </button>
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

  <div class="col-lg-12 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger"> قائمة المهام الفرعيّة التابعة ل {{$task->task_name}}</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead  class="mytableheader">
                    <tr>
                      <th>تفصيل المهمّة الفرعيّة</th>
                      <th>تاريخ البدأ</th>
                      <th>تاريخ الانتهاء</th>
                      <th>الوقت المستغرق</th>
                      <th>الحالة</th>
          
                    </tr>
                  </thead>
                  <tbody>
                    @php   $total_minutes = array(); @endphp
                    @foreach ($instances as $instance)
                    <tr>
                      <td>{{$instance->task_description}}</td>
                      <td dir="ltr">{{$instance->task_start_time}}</td>
                      <td dir="ltr">{{$instance->task_end_time}}</td>
                      <td>

                      @if($instance->task_end_time != null )
                      @php 
                      
                    

                      $startTime = $instance->task_start_time;
                      $endTime = $instance->task_end_time;

                      $startTime = new DateTime($instance->task_start_time);
                      $duration = $startTime->diff(new DateTime($instance->task_end_time));
                      
                      $years_stmt =  $duration->y != 0 ? $duration->y . ' سنة ' : '';
                      $months_stmt =  $duration->m != 0 ? $duration->m . ' شهر ' : '';
                      $days_stmt =  $duration->d != 0 ? $duration->d . ' يوم  ' : '';
                      $hours_stmt =  $duration->h != 0 ? $duration->h . ' ساعة ' : '';
                      $minutes_stmt =  $duration->i != 0 ? $duration->i . ' دقيقة ' : '';
            
                    echo $years_stmt . $months_stmt . $days_stmt . $hours_stmt . $minutes_stmt ;

                      array_push($total_minutes,floor(abs((new \DateTime($instance->task_end_time))->getTimestamp() - (new \DateTime($instance->task_start_time))->getTimestamp()) / 60));


                      @endphp

                      @else @endif

                      </td>
                      <td>
                      @if($instance->task_end_time == null )
                      
                        <form action="/admin/tasks/{{$task->id}}/{{$instance->id}}/end" method="POST">
                        @csrf
                        @method('PUT')

                        <input type="hidden" name="task_end_time" value="{{Carbon\Carbon::now()->toDateTimeString()}}">
                      
                        <button  type="submit" class=" d-sm-inline-block btn btn-sm btn-success shadow-sm " 
                             style="margin:10px;">إنهاء المهمّة &nbsp;&nbsp;<i class="fas fa-check fa-sm text-white-50"></i> </button>

                        </form>
                            </div>

                      @else
                        <span class="text-success"> تم إنهاء المهمّة <i class="fas fa-check"></i> </span>
                        
                      @endif


                      
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


<!-- widgets -->

<div class="row">

  <div class="col-xl-7 col-md-6 mb-4">
      <div class="card border-left-gray shadow h-100">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-gray-800 text-uppercase mb-1">
              الوقت الإجمالي
            </div>
            </div>
            <div class="col-auto">
            <div class="fas fa-clock mb-0 text-danger my-text-2"></div>
            <div class="h5 mb-0 font-weight-bold text-danger my-text-1">
            @php $sum=0 @endphp
            @foreach($total_minutes as $value)
               @php  $sum+=$value @endphp
             
            @endforeach
            @php
            $years = floor($sum/60/24/30/365);
            $months = floor($sum/60/24/30) - ($years * 12);
            $days = floor($sum/60/24) - ($months * 30) - ($years * 365);
            $hours = floor(abs($sum/60 - ($years*8760) - ($months * 730) - ($days * 24)));
            $minutes = floor(abs($sum - ($years*525600) - ($months * 43800) - ($days * 1440) - ($hours * 60)) );
            
            $years_stmt =  $years != 0 ? $years . ' سنة ' : '';
            $months_stmt =  $months != 0 ? $months . ' شهر  ' : '';
            $days_stmt =  $days != 0 ? $days . ' يوم ' : '';
            $hours_stmt =  $hours != 0 ? $hours . ' ساعة ' : '';
            $minutes_stmt =  $minutes != 0 ? $minutes . ' دقيقة ' : '';
            
            echo $years_stmt . $months_stmt . $days_stmt . $hours_stmt . $minutes_stmt ;

            
            @endphp
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>

</div>


<!-- ends widgets -->












<br><br>




@endsection