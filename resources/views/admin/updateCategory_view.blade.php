
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
  <div align="center" style="padding: 70px;">
        @if(session()->has('message'))

        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">x</button>
            {{session()->get('message')}}
        </div>

        @endif
        <table>
            <tr style="background-color: black;">
                <th style="padding: 10px; font-size: 20px; color: white;">Category Name</th>
                <th style="padding: 10px; font-size: 20px; color: white;">Category Description</th>
                <th style="padding: 10px; font-size: 20px; color: white;">Image</th>

                <th style="padding: 10px; font-size: 20px; color: white;">Update</th>
                <th style="padding: 10px; font-size: 20px; color: white;">Delete</th>
            </tr>
            @foreach($data as $datas)
            <tr style="background-color: black;" align="center">
                <td style="padding: 10px; color: white;">{{$datas->name}}</td>
                <td style="padding: 10px; color: white;">{{$datas->description}}</td>
                <td style="padding: 10px; color: white;"> <img height="100px" width="100px" src="categoryimage/{{$datas->image}}" alt=""></td>
                <td><a class="btn btn-success" href="{{url('update_category_upload',$datas->id)}}">Update</td>
                <td><a class="btn btn-danger" href="{{url('delete_category',$datas->id)}}">Delete</td>

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
