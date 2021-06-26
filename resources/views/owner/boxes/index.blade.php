@extends ('owner/layout')

@section ('owner_home_content')

<!-- Begin Page Content -->
<div class="container-fluid">







<!-- Menu Items Content Row -->
<br>
<h1 class="text-primary"><b>My Mystery Boxes <i class="fas fa-boxes"></i></b></h1>

<br><br>


<div class="row">
@foreach ($boxes as $box)
  <div class="col-lg-3 mb-4" id="boxCard{{$box->id}}">
          <!-- DataTales Example -->




          <div class="card shadow mb-4" id="">
            <div class="card-header py-3">



              <h6 class="m-0 font-weight-bold text-primary" style="float:left">Box #{{$box->id}}</h6>


            </div>

            <div class="card-body">

            <h6>
            <span class="text-primary"><i class="fas fa-dollar-sign "></i><b> Box Categories:</b></span>
              @php $i=0 @endphp
              @foreach($box->category  as $cat)

              @if ($i== count($box->category)-1)
              {{$cat}}
              @else
                {{$cat}} |
              @endif
                @php $i++ @endphp
              @endforeach

           </h6>
           <br>

           <span class="text-primary"><i class="fas fa-list-ul "></i><b> Number of items:</b></span>
            {{$box->nb_of_items}}

             <br><br>

            <span class="text-primary"><i class="fas fa-dollar-sign "></i><b> Total Price:</b></span>
             ${{$box->total_price}}


            </div>
          </div>


    </div>






@endforeach

</div>










<br><br><br><br><br><br><br><br>




@endsection
