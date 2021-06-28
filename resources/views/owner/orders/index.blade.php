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



              <h6 class="m-0 font-weight-bold text-primary" style="float:left">Order #{{$order->id}}</h6>

              <div style="float:right;">
                <span class="badge
                @if ($order->status=='pending') badge-warning
                @elseif($order->status=='accepted' || $order->status=='delivered') badge-success
                @else badge-danger
                @endif
                " onclick="statusJs();" id="statusBadge">{{$order->status}}</span>
                <div id="statusInput" style="display:none;">
                  <form method="POST" action="/owner/orders/{{$order->id}}/update_status" >
                    @csrf
                    @method('PUT')
                  <select class="form-group form-control-user" name="status" value="{{$order->status}}">
                    <option value="pending">set status</option>
                    <option value="pending">pending</option>
                    <option value="accepted">accepted</option>
                    <option value="rejected">rejected</option>
                    <option value="delivered">delivered</option>
                  </select>
                  <button type="submit" class=" btn-primary" id="createButton">
                     <i class="fas fa-check"></i> </button>
                  </form>

                </div>

              </div>

            </div>

            <div class="card-body">

            <h6>
            <span class="text-primary"><i class="fas fa-user-tie "></i><b> Customer ID: #{{$order->customer_id}}</b></span>

           </h6>
           <br>

           <span class="text-primary"><i class="fas fa-box-open "></i><b> Box #{{$order->box_id}}</b></span>


             <br><br>

            <span class="text-primary"><i class="fas fa-dollar-sign "></i><b> Total Price:</b></span>
             ${{$order->total_order_price}}

             <br><br>

            <span class="text-primary"><i class="fas fa-store "></i><b> Store:</b></span>
             @php $store = \App\Store::where('id','=',$order->store_id)->first(); @endphp
             {{$store->s_name}}

             <br><br>

            <span class="text-primary"><i class="fas fa-clock "></i><b> Ordered at:</b></span>
             {{$order->created_at}}


            </div>
          </div>


    </div>






@endforeach

</div>










<br><br><br><br><br><br><br><br>




@endsection
