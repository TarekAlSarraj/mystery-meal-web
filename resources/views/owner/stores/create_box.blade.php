@extends ('owner/layout')

@section ('owner_home_content')

<!-- Begin Page Content -->
<div class="container-fluid">







<!-- Menu Items Content Row -->
<br>
<h1 class="h3 text-grey"><b> Select from <span class="text-primary">{{$store->s_name }}</span> Menu Items to insert into the Box
  <i class="fas fa-box text-primary"></i></b></h1>

<br><br>

<form method="POST" action="/owner/stores/{{$store->id}}/createbox" >
  @csrf


<div class="h5">
  <b class="text-primary">Category of Box:</b> <br><br>
  @php $categories = array(); @endphp
  @foreach($items as $item)
  @if(!in_array($item->category, $categories))
  @php array_push($categories,$item->category) @endphp
  <input type="checkbox" name="category[]" value="{{$item->category}}" onchange="toggleCreateButton()"> {{$item->category}}<br>

  @endif
  @endforeach
</div>



<br>

<div class="row">
@foreach ($items as $item)
  <div class="col-lg-3 mb-4" style="display:none" id="itemCard{{$item->id}}">
          <!-- DataTales Example -->




          <div class="card shadow mb-4" id="cardclass{{$item->id}}">
            <div class="card-header py-3">



              <h6 class="m-0 font-weight-bold text-primary" style="float:left">{{$item->title}}</h6>
              <input type="checkbox"
              onclick="selectItem(this.id,'Edit{{$item->id}}','Item{{$item->id}}',
              'saveButton' , 'cardclass{{$item->id}}');"
              id="Button{{$item->id}}" name="items[]" style="float:right" value="{{$item->id}}" disabled>

              <input type="hidden" class="hiddenInputs" value="{{$item->category}}" id="{{$item->id}}">




            </div>







            <div class="card-body">

            <img src="{{ url('storage/'.$item->picture) }}" alt="No Image" class="img-thumbnail ">




            <div class="Edit{{$item->id}}" style="display:none">
            <br><br>
            <span class="text-primary"><i class="fas fa-list-ul "></i><b> Quantity:</b></span>
            <input type="number" class="form-control form-control-user "  name="item_quantity[]"
                        value="1" min='1'>

            </div>

            <div class="card-body Item{{$item->id}}">
            <h6>
            <span class="text-primary"><i class="fas fa-dollar-sign "></i><b> Original Price:</b></span>
             ${{$item->price}}</h6>
            </div>

            <div class="Edit{{$item->id}}" style="display:none">
            <br>
            <span class="text-primary"><i class="fas fa-dollar-sign "></i><b> Original Price:</b></span>
             ${{$item->price}}
             <br>
            <span class="text-primary"><i class="fas fa-dollar-sign "></i><b> Price After Discount:</b></span>
            <input type="number" class="form-control form-control-user "name="item_price[]"
                        value="{{$item->price - ($item->price * 0.3) }}" id="item_price"
                        max="{{$item->price - ($item->price * 0.3)}}">
            <label for="item_price" class="text-danger">Note: Price must be discounted by at least 30%</label>

            </div>
            <br>

            </div>
          </div>


    </div>






@endforeach

</div>
  <button type="submit" class=" btn-primary btn" id="createButton" disabled>
    Create Box <i class="fas fa-box"></i> </button>

    <div class="text-danger" style="display:block" id="createErrormsg">
      <br>
      <p>Please choose at least one category</p>
    </div>

     </form>



<br><br><br><br><br><br><br><br>




@endsection
