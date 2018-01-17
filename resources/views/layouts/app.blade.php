<!DOCTYPE html>
<html lang="en">
<head>
  <title>Maiasmoka koogiabi</title>
      
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <div id="app">
       @include('inc.navbar')
       <div class="container">
            <div class="row">
        <div class="col-md-8 col-lg-8">
            @include('inc.messages')
            @yield('content')   
       </div>
    </div>
    
    
    </div>
    
     <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
    
    <footer class="container-fluid text-center">
          <p>Copyright 2017 &copy: Maiasmoka koogiabi</p>  
        </footer>
    
</body>
</html>
