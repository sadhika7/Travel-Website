<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Visit Nepal</title>
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/landing-page.min.css" rel="stylesheet">

</head>

<body>
  <header>
    <div class="container">
      <div id="branding">
        <h1><button class="astext" style="color:#ffffff" onclick="location.href='home.html'">Visit Nepal</button></h1>
      </div>
    <nav class="navbar static-top">
      </nav>
    </div>
  </header>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- <a class="navbar-brand" href="home.html">Visit Nepal</a> -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="home.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="accomodation.html">Accomodation</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="trekkingguide.html">Trekking guide</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tours.html">Tours</a>
        </li>
        <li class="nav-item" id="contact" style="display:none">
          <a class="nav-link" href="contactMe.php"><span class="sr-only">(current)</span>Contact Me</a>
        </li>
      </ul>
      <div class="bttn">
        <button id="signIn" class="btn btn-info">Sign In</button>
      </div>
    </div>
  </nav>

	<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Contact Us!</h5>
              <form action="#" id="form" method="post" name="form">
                <label for="name">Name</label>
                <input type="text" name="vname" id="name" class="form-control" placeholder="Name" value="">

                <label for="textEmail">Email address</label>
                <input name="vemail" type="text" id="textEmail" class="form-control" placeholder="Email address" required autofocus value=""
                pattern=".+@go.olemiss.edu" title="Please provide only your olemiss.edu email address.">
                <label for="subject">Subject</label>
                <input name="sub" id="subject" class="form-control" placeholder="Subject" type="text" value="">
                <label for="msg">Description</label>
                <textarea name="msg" id="msg" class="form-control" rows="3" cols="2"></textarea>
                <br>
              <input class="btn btn-lg btn-primary btn-block btn-action text-uppercase" id="send" name="submit" type="submit" value="Submit"/>
            </form>
            <h5><?php include "contact_me.php"?></h5>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="page-footer font-small" id="footer">
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2019 Copyright VisitNepal
      <!-- date and time on the footer -->
      <div id="time"></div>
    </div>

  </footer>
  <!-- The core Firebase JS SDK is always required and must be listed first -->
  <script src="https://www.gstatic.com/firebasejs/7.7.0/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/7.7.0/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/7.7.0/firebase-auth.js"></script>
  <script src="https://www.gstatic.com/firebasejs/7.7.0/firebase-firestore.js"></script>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script src="js/firebase.js"></script>
<script src="js/signIn.js"></script>

</html>
