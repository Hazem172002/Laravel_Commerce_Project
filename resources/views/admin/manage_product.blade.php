
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
      <div align="center" style="padding: 90px;">
        @if(session()->has('message'))

        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">x</button>
            {{session()->get('message')}}
        </div>

        @endif
        <table>
            <tr style="background-color: black;">
                <th style="padding: 10px; font-size: 10px; color: white;">Product Name</th>
                <th style="padding: 10px; font-size: 10px; color: white;">Product Description</th>
                <th style="padding: 10px; font-size: 10px; color: white;">Old Price</th>
                <th style="padding: 10px; font-size: 10px; color: white;">Price</th>
                <th style="padding: 10px; font-size: 10px; color: white;">Stock</th>

                <th style="padding: 10px; font-size: 10px; color: white;">Image</th>
                <th style="padding: 10px; font-size: 10px; color: white;">Update</th>
                <th style="padding: 10px; font-size: 10px; color: white;">Delete</th>
            </tr>
            @foreach($data as $datas)
            <tr style="background-color: black;" align="center">
                <td style="padding: 10px; font-size: 10px; color: white;">{{$datas->name}}</td>
                <td style="padding: 10px; font-size: 10px; color: white;">{{$datas->description}}</td>
                <td style="padding: 10px; font-size: 10px; color: white;">{{$datas->old_price}}</td>
                <td style="padding: 10px; font-size: 10px; color: white;">{{$datas->price}}</td>
                <td style="padding: 10px; font-size: 10px; color: white;">{{$datas->stock}}</td>

                <td style="padding: 10px; font-size: 10px; color: white;"> <img height="100px" width="100px" src="categoryimage/{{$datas->image}}" alt=""></td>
                <td style="font-size: 10px;"><a class="btn btn-success" href="{{url('update_product_after',$datas->id)}}">Update</td>
                <td style="font-size: 10px;"><a class="btn btn-danger" href="{{url('delete_product',$datas->id)}}">Delete</td>

            </tr>
            @endforeach
        </table>
      </div>


      </div>
    </div>

    <!--   Core JS Files   -->
    @include('admin.script')
</body>

</html>
