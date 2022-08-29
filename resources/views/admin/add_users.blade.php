<x-app-layout>
</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<style>
    label{
        display: inline-block;
        width: 200px;
    }
</style>

<head>
  <!-- Required meta tags -->
  @include('admin.css')
</head>

<body>
  <div class="container-scroller">

    <!-- partial:partials/_sidebar.html -->
    @include('admin.sidebar')
    <!-- partial -->

    <div class="container-fluid page-body-wrapper">

        <div class="container" align="center" >
            <form method="post" action="{{ url('add_users') }}" enctype="multipart/form-data">
                @csrf

                <div style="padding: 15px;">
                    <label for="">name</label>
                    <input type="text" style="color:black ;" name="name" placeholder="name">
                </div>

                <div style="padding: 15px;">
                    <label for="">email</label>
                    <input type="text" style="color:black ;" name="email" placeholder="email">
                </div>

                <div style="padding: 15px;">
                    <label for="">contact_number</label>
                    <input type="text" style="color:black ;" name="contact_number" placeholder="contact_number">
                </div>

                <div style="padding: 15px;">
                    <label for="">password</label>
                    <input type="text" style="color:black ;" name="password" placeholder="password">
                </div>

                <div style="padding: 15px;">
                    <input type="submit" class="btn btn-success">

                    
                    <!-- ekhan theke kivabe submit button dile database a update korbo? -->
                </div>

            </form>


            
            
        </div>

    </div>

      <!-- body contsainers part -->
      
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  @include('admin.script')
  <!-- End custom js for this page -->
</body>

</html>