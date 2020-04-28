<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Laravel</title>

        <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>
        #footer{
            margin-top:20px;
            padding:20px;
            color:#fff;
            background-color:#000;
        }
    </style>
</head>
<body>
     @include('inc.nav')


     <div class="container">
      @if(Request::is('/'))
        @include('inc.showcase')
      @endif

      
      <div class="row">
        <div class="col-md-8 col-lg-8">
          @include('inc.messages')
          @yield('content')
        </div>
        <div class="col-md-4 col-lg-4">
          @include('inc.sidebar')
        </div>
      </div>
    </div>


    <footer class="text-center" id="footer">
    All Right Reserved by &copy; 2020
    </footer>


  </body>

</body>
</html>