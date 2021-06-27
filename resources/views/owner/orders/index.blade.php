@extends ('owner/layout')

@section ('owner_home_content')

<!-- Begin Page Content -->
<div class="container-fluid">







<!-- Menu Items Content Row -->
<br>
<h1 class="text-primary"><b>My Mystery orders <i class="fas fa-orders"></i></b></h1>

<br><br>


<div class="row">
@foreach ($orders as $order)
  <div class="col-lg-3 mb-4" id="orderCard{{$order->id}}">
          <!-- DataTales Example -->




          <div class="card shadow mb-4" id="">
            <div class="card-header py-3">



              <h6 class="m-0 font-weight-bold text-primary" style="float:left">order #{{$order->id}}</h6>


            </div>

            <div class="card-body">

            <h6>
            <span class="text-primary"><i class="fas fa-dollar-sign "></i><b> order Categories:</b></span>
              @php $i=0 @endphp
              @foreach($order->category  as $cat)

              @if ($i== count($order->category)-1)
              {{$cat}}
              @else
                {{$cat}} |
              @endif
                @php $i++ @endphp
              @endforeach

           </h6>
           <br>

           <span class="text-primary"><i class="fas fa-list-ul "></i><b> Number of items:</b></span>
            {{$order->nb_of_items}}

             <br><br>

            <span class="text-primary"><i class="fas fa-dollar-sign "></i><b> Total Price:</b></span>
             ${{$order->total_price}}


            </div>
          </div>


    </div>






@endforeach

</div>










<br><br><br><br><br><br><br><br>




@endsection
