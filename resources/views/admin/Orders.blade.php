
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
                <th style="padding: 10px; font-size: 10px; color: white;">Name</th>
                <th style="padding: 10px; font-size: 10px; color: white;">Email</th>
                <th style="padding: 10px; font-size: 10px; color: white;">Phone</th>

                <th style="padding: 10px; font-size: 10px; color: white;">Address</th>
                <th style="padding: 10px; font-size: 10px; color: white;">Country</th>
                <th style="padding: 10px; font-size: 10px; color: white;">City</th>




                <th style="padding: 10px; font-size: 10px; color: white;"> Product Name</th>
                <th style="padding: 10px; font-size: 10px; color: white;"> Product Image</th>
                <th style="padding: 10px; font-size: 10px; color: white;">Stock</th>


            </tr>
            @foreach($data as $datas)
            <tr style="background-color: black;" align="center">
                <td style="padding: 10px; font-size: 10px; color: white;">{{$datas->first_name}} {{$datas->last_name}}</td>
                <td style="padding: 10px; font-size: 10px; color: white;">{{$datas->email}}</td>
                <td style="padding: 10px; font-size: 10px; color: white;">{{$datas->phone}}</td>
                <td style="padding: 10px; font-size: 10px; color: white;">{{$datas->country}}</td>
                <td style="padding: 10px; font-size: 10px; color: white;">{{$datas->city}}</td>


                <td style="padding: 10px; font-size: 10px; color: white;">{{$datas->name}}</td>
                <td style="padding: 10px; font-size: 10px; color: white;">{{$datas->image}}</td>
                <td style="padding: 10px; font-size: 10px; color: white;">{{$datas->stock}}</td>
                <td style="padding: 10px; font-size: 10px; color: white;"> <img height="100px" width="100px" src="categoryimage/{{$datas->image}}" alt=""></td>




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
