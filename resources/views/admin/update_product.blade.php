
<!DOCTYPE html>
<html lang="en">

<head>
  @include('admin.css');
</head>

<body class=" ">
  <div class="wrapper ">
  @include('admin.sidebar')
    <div class="main-panel">
      <!-- Navbar -->


      @include('admin.navbar')
      <!-- End Navbar -->
      <div class="container" align="center" style="padding-top: 100px;">
        @if(session()->has('message'))

        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">x</button>
            {{session()->get('message')}}
        </div>

        @endif
        <form method="POST" enctype="multipart/form-data" action="{{url('updated_product',$data->id)}}" >
            @csrf
            <div style="padding: 15px">
                <label style="color: white;">Product Name</label>
                <input type="text" style="color: black;" name="name" placeholder="{{$data->name}}" required>
            </div>
            <div style="padding: 15px">
                <label style="color: white;">Product Description</label>
                <input type="text" style="color: black;" name="description" placeholder="{{$data->description}}" required>
            </div>
            <div style="padding: 15px">
                <label style="color: white;">Product Old Price</label>
                <input type="text" style="color: black;" name="old_price" placeholder="{{$data->old_price}}" required>
            </div>
            <div style="padding: 15px">
                <label style="color: white;">Product Price</label>
                <input type="text" style="color: black;" name="price" placeholder="{{$data->price}}" required>
            </div>
            <div style="padding: 15px">
                <label style="color: white;">Stock</label>
                <input type="text" style="color: black;" name="stock" placeholder="{{$data->stock}}" required>
            </div>

            <div style="padding: 15px">
                <label style="color: white;">Product Category</label>
                <select name="category" style="color: black; width: 200px;" required>
                  @foreach($datas as $datass)
                    <option value="{{$datass->id}}">{{$datass->name}}</option>
                    @endforeach

                </select>


            </div>
            <div style="padding: 15px">
                <label style="color: white;">Old Image</label>
                <td style="padding: 10px; color: white;"> <img height="100px" width="100px" src="categoryimage/{{$data->image}}" alt=""></td>

            </div>


            <div style="padding: 15px">
                <label>Product Image</label>
                <input type="file"  name="file" required>

            </div>
            <div style="padding: 15px">

                <input type="submit" class="btn btn-success">

            </div>

        </form>
    </div>


      </div>
    </div>

    <!--   Core JS Files   -->
    @include('admin.script')
</body>

</html>
