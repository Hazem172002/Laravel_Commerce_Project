
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
        <form method="POST" enctype="multipart/form-data" action="{{url('upload_category')}}" >
            @csrf
            <div style="padding: 15px">
                <label style="color: white;">Category Name</label>
                <input type="text" style="color: black;" name="name" placeholder="Write The Category Name" required>

            </div>
            <div style="padding: 15px">
                <label style="color: white;">Category Description</label>
                <input type="text" style="color: black;" name="description" placeholder="Write The Description" required>

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
