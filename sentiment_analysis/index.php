<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Sentiment Analysis</title>

  <!-- Bootstrap core CSS -->
  <link href="style/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="style/css/shop-item.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Sentiment Analysis</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">Input Sentence</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container" height="1000px">

    <div class="row">

      <div class="col-lg-3">
        <p>
        <div class="list-group">
          <a href="" class="list-group-item active">Home</a>
          <a href="" class="list-group-item">Input Sentence</a>
          <a href="about.php" class="list-group-item">About Us</a>
        </div>
      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">


        <!-- /.card -->

        <div class="card card-outline-secondary my-4" >
          <div class="card-header">
            Input Sentence
          </div>
          <div class="card-body" >


<!-- Start codes here -->

                 <center>

     
<form method = "post" action = "result.php">
        <table class="table table-bordered">
            <tr>
                <td>Sentence</td>
                <td>
                <textarea name="sentence" rows="4" cols="50">I love the flight</textarea>
                </td>
                </tr>
           
            <tr>
                <td> </td>
                <td><input type="reset" value="Reset" class="btn btn-primary"> 
          <input name = "submit" type = "submit" value = "Submit" class="btn btn-primary">
                </td>
                </tr>
        </table>
</form>
<p><p>
<!-- end codes here -->


            
          </div>
        </div>
        <!-- /.card -->

      </div>
      <!-- /.col-lg-9 -->

    </div>

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Interoperability Course 2022</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->

  <script src="style/vendor/jquery/jquery.min.js"></script>
  <script src="style/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
