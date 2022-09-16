
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
        <form method="POST" enctype="multipart/form-data" action="{{url('add_product')}}" >
            @csrf
            <div style="padding: 15px">
                <label style="color: white;">Product Name</label>
                <input type="text" style="color: black;" name="name" placeholder="Write The Category Name" required>

            </div>
            <div style="padding: 15px">
                <label style="color: white;">Product Description</label>
                <input type="text" style="color: black;" name="description" placeholder="Write The Description" required>

            </div>
            <div style="padding: 15px">
                <label style="color: white;">Product Old Price</label>
                <input type="text" style="color: black;" name="oldprice" placeholder="Write The Old Price" required>

            </div>
            <div style="padding: 15px">
                <label style="color: white;">Product Price</label>
                <input type="text" style="color: black;" name="price" placeholder="Write The Price" required>

            </div>
            <div style="padding: 15px">
                <label style="color: white;">Stock</label>
                <input type="text" style="color: black;" name="stock" required>

            </div>
            <div style="padding: 15px">
                <label style="color: white;">Product Category</label>
                <select name="category" style="color: black; width: 200px;" required>
                  @foreach($data as $datas)
                    <option value="{{$datas->id}}">{{$datas->name}}</option>
                    @endforeach

                </select>


            </div>

            <div style="padding: 15px">
                <label>Category Image</label>
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
