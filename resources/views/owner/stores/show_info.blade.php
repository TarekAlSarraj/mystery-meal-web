@extends ('owner/layout')

@section ('owner_home_content')

<!-- Begin Page Content -->
<div class="container-fluid">






<!-- Content Row -->
<br>
<h1 class="h3 mb-0 text-primary">
<img src="{{ url('storage/'.$store->s_picture) }}" alt="No Image" class="img-thumbnail imgsize">
<b>{{$store->s_name}}</b>
<button class=" btn-primary btn" onclick="showEdit(this.id,'showEdit','storeInfo','saveButton');" id="showEditButton">
<i class="fas fa-pencil-alt "></i>
</button>
</h1>
<br><br>

<form method="POST" action="/owner/stores/{{$store->id}}" enctype="multipart/form-data">
  @csrf
  @method('PUT')


<div class="row">

  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
            <div class="storeInfo">
              <h6 class="m-0 font-weight-bold text-primary">Store Name</h6>
              </div>



              <div class="showEdit" style="display:none">
                    
                    <input type="text" class="form-control form-control-user " id="s_name" name="s_name"  
                              value="{{ $store->s_name }}" >
                    </div>
              
            </div>
            <div class="card-body">



              <div class="storeInfo">
            {{$store->s_name}}
            </div>

            
              <div class="showEdit" style="display:none">
                    
              <input type="file" class="form-control form-control-user " id="s_picture" name="s_picture"  
              accept="image/*" value="{{ $store->s_picture }}" >
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
  <form method="POST" action="/owner/stores/{{$store->id}}" enctype="multipart/form-data">
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
            accept="image/*">
                    
                   

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




<div class="row">
@foreach ($items as $item)
  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->

        


          <div class="card shadow mb-4">
            <div class="card-header py-3">
              
          

              <div class="Item{{$item->id}}">
              <h6 class="m-0 font-weight-bold text-primary" style="float:left">{{$item->title}}</h6>
              <button class="btn" onclick="showEdit(this.id,'Edit{{$item->id}}','Item{{$item->id}}','save{{$item->id}}Button');" 
              id="Button{{$item->id}}" style="float:right">
              <i class="fas fa-edit "></i>
              </button>

              <form method="POST" action="{{route('update-item', [$store->id , $item->id]) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

             

              </div>

              <div class="Edit{{$item->id}}" style="display:none">
                <br><br>
                <span class="text-primary"><b> Title:</b></span>
                <input type="text" class="form-control form-control-user " id="title" name="title"  
                            value="{{ $item->title }}" >

              </div>

            </div>
             
              
          
            <div class="card-body">
          
            <div class="Item{{$item->id}}">
            <img src="{{ url('storage/'.$item->picture) }}" alt="No Image" class="img-thumbnail ">
            </div>

            <div class="Edit{{$item->id}}" style="display:none">
            
            <input type="file" class="form-control " id="picture" name="picture"  
                        value="{{ $item->picture }}" >

                        

            </div>
            <div class="card-body Item{{$item->id}}">
            <h6> <span class="text-primary"><i class="fas fa-list-ul "></i><b> Category:</b></span> {{$item->category}}</h6>
            </div>

            <div class="Edit{{$item->id}}" style="display:none">
            <br><br>
            <span class="text-primary"><i class="fas fa-list-ul "></i><b> Category:</b></span>
            <input type="text" class="form-control form-control-user " id="category" name="category"  
                        value="{{ $item->category }}" >

            </div>

            <div class="card-body Item{{$item->id}}">
            <h6>
            <span class="text-primary"><i class="fas fa-dollar-sign "></i><b> Price:</b></span>
             {{$item->price}}</h6>
            </div>

            <div class="Edit{{$item->id}}" style="display:none">
            <br>
            <span class="text-primary"><i class="fas fa-dollar-sign "></i><b> Price:</b></span>
            <input type="text" class="form-control form-control-user " id="price" name="price"  
                        value="{{ $item->price }}" >

            </div>
            <br>
            <button type="submit" class=" btn-primary btn" id="save{{$item->id}}Button"
     style="display:none">Save</button>
            </div>
          </div>
         

    </div>
  




     </form>

@endforeach

</div>


     

<br><br><br><br><br><br><br><br>




@endsection