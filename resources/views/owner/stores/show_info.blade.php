@extends ('owner/layout')

@section ('owner_home_content')

<!-- Begin Page Content -->
<div class="container-fluid">






<!-- Content Row -->
<br>
<h1 class="h3 mb-0 text-primary">{{$store->s_name}} Store <i class="fas fa-store"></i> 
<button class=" btn-primary btn" onclick="showEdit(this.id,'showEdit','storeInfo','saveButton');" id="showEditButton">
<i class="fas fa-pencil-alt "></i>
</button>
</h1>
<br><br>

<form method="POST" action="/owner/stores/{{$store->id}}">
  @csrf
  @method('PUT')


<div class="row">

  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Store Name</h6>
            </div>
            <div class="card-body">
            <div class="storeInfo">
            {{$store->s_name}}
            </div>
  
              <div class="showEdit" style="display:none">
                    
              <input type="text" class="form-control form-control-user " id="s_name" name="s_name"  
                        value="{{ $store->s_name }}" >
              </div>

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
            <div class="storeInfo">
            {{$store->s_category}}
            </div>

            <div class="showEdit" style="display:none">
            <input type="text" class="form-control form-control-user " id="s_category" name="s_category"  
                        value="{{ $store->s_category }}" >

            </div>

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
              

            <div class="storeInfo">
            {{$store->s_address}}
            </div>

            <div class="showEdit" style="display:none">
            <input type="text" class="form-control form-control-user " id="s_address" name="s_address"  
                        value="{{ $store->s_address }}" >

            </div>

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
            <div class="storeInfo">
            {{$store->s_phone}}
            </div>

            <div class="showEdit" style="display:none">
            <input type="text" class="form-control form-control-user " id="s_phone" name="s_phone"  
                        value="{{ $store->s_phone }}" >

            </div>
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
            <div class="storeInfo">
            {{$store->s_close_time}}
            </div>

            <div class="showEdit" style="display:none">
            <input type="text" class="form-control form-control-user " id="s_close_time" name="s_close_time"  
                        value="{{ $store->s_close_time }}" >

            </div>
            </div>
          </div>

  </div>
</div>

     <br>

     <button type="submit" class=" btn-primary btn" id="saveButton"
     style="display:none">Save</button>

     </form>

<br> <hr><br><br>



<!-- Menu Items Content Row -->
<br>
<h1 class="h3 mb-0 text-primary">{{$store->s_name}} Menu Items <i class="fas fa-utensils"></i></h1>
<br><br>

     <button class=" d-sm-inline-block btn btn-sm btn-primary shadow-sm"
     onclick="revealAddItem();" id="addItemButton"><i class="fas fa-arrow-down fa-sm text-white-50"></i> Add Item</button>



<br><br>

<!-- Add Items Div -->
<div id="addItem" style="display:none">
  <form method="POST" action="/owner/stores/{{$store->id}}">
    @csrf


<div class="row" >

<div class="col-lg-3 mb-4">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Item Picture</h6>
          </div>
          <div class="card-body">
           
          <input type="file" class="form-control form-control-user"  id="picture" name="picture" 
            accept="image/*" onchange="toggleButton(this.id,'picture');">
                    
                   

          </div>
        </div>

</div>

<div class="col-lg-3 mb-4">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Item Title</h6>
          </div>
          <div class="card-body">

                    <input type="text" class="form-control form-control-user " id="title" name="title"  
                    value="{{ old('title') }}"  placeholder="Item Title... ">


          </div>
        </div>

</div>


<div class="col-lg-3 mb-4">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Item Category</h6>
          </div>
          <div class="card-body">
            
         
          <input type="text" class="form-control form-control-user " id="category" name="category"  
                    value="{{ old('category') }}" placeholder="Item Category ...">


          </div>
        </div>

</div>

<div class="col-lg-3 mb-4">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Item Price</h6>
          </div>
          <div class="card-body">
            
          <input type="text" class="form-control form-control-user " id="price" name="price"  
                    value="{{ old('price') }}" placeholder="Item Price ...">

          </div>
        </div>

</div>

</div>


       <!-- /.container-fluid -->
       <button type="submit" class=" d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-plus fa-sm text-white-50"></i> Add</button>

  </form>
</div>

<br><br>
<!-- End Of Add Items Div -->



@foreach ($items as $item)


<div class="row">

  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Item Picture


              <button class="btn" onclick="showEdit(this.id,'Edit{{$item->id}}','Item{{$item->id}}','save{{$item->id}}Button');" id="Button{{$item->id}}">
              <i class="fas fa-edit "></i>
              </button>
              <form method="POST" action="{{route('update-item', [$store->id , $item->id]) }}">
                @csrf
                @method('PUT')

                
              </h6>
            </div>
            <div class="card-body">
          
            <div class="Item{{$item->id}}">
            {{$item->picture}}
            </div>

            <div class="Edit{{$item->id}}" style="display:none">
            <input type="file" class="form-control form-control-user " id="picture{{$item->id}}" name="picture{{$item->id}}"  
                        value="{{ $item->picture}}}" >

            </div>
            
            </div>
          </div>

  </div>

  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Item Title</h6>
            </div>
            <div class="card-body">
           
            <div class="Item{{$item->id}}">
            {{$item->title}}
            </div>

            <div class="Edit{{$item->id}}" style="display:none">
            <input type="text" class="form-control form-control-user " id="title{{$item->id}}" name="title{{$item->id}}"  
                        value="{{ $item->title }}" >

            </div>

            </div>
          </div>

  </div>


  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Item Category</h6>
            </div>
            <div class="card-body">
              
            <div class="Item{{$item->id}}">
            {{$item->category}}
            </div>

            <div class="Edit{{$item->id}}" style="display:none">
            <input type="text" class="form-control form-control-user " id="category{{$item->id}}" name="category{{$item->id}}"  
                        value="{{ $item->category }}" >

            </div>

            </div>
          </div>

  </div>

  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Item Price</h6>
            </div>
            <div class="card-body">
             
             <div class="Item{{$item->id}}">
            {{$item->price}}
            </div>

            <div class="Edit{{$item->id}}" style="display:none">
            <input type="text" class="form-control form-control-user " id="price{{$item->id}}" name="price{{$item->id}}"  
                        value="{{ $item->price }}" >

            </div>
            </div>
          </div>

  </div>

</div>



<button type="submit" class=" btn-primary btn" id="save{{$item->id}}Button"
     style="display:none">Save</button>

     </form>

@endforeach


     

<br><br><br><br><br><br><br><br>




@endsection