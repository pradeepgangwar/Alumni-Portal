<?php
session_start();
  $fname=$_SESSION['fname'];
  $user=$_SESSION['user'];
  if($user=="")
  {
    header("Location: index.php");
  }
?>
<html>
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="https://use.fontawesome.com/994d7c72ea.js"></script>
  <script src = "js/bootbox.js"></script>
<style>
#bar_blank {
  border: solid 1px #000;
  height: 20px;
  width: 300px;
}
#bar_color {
  background-color: #006666;
  height: 20px;
  width: 0px;
}
#bar_blank, #hidden_iframe {
  display: none;
}
</style>  
</head>
<body>

  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Alumni Portal</a>
    </div>

   
     
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

  <?php
  echo "<div class = 'container'>";
  echo "<h1>Welcome ".$fname."</h1>";
  echo"<h2>Fill out your form below</h2>";
  ?>
  
  

<form class="form-horizontal" action="submit.php" method="POST">

  <div class="form-group">
    <label for="usr" class="col-sm-2 control-label">Name:</label>
    <div class="col-sm-10">
      <input class="form-control" type="text" placeholder="<?php echo $fname ?>" id="usr" name="usr" readonly>
    </div>
  </div>

  <div class="form-group">
    <label for="roll" class="col-sm-2 control-label">Enrollment No.:</label>
    <div class="col-sm-10">
      <input class="form-control" type="text" placeholder="<?php echo $user ?>" id="roll" name="roll" readonly>    </div>
  </div>

  <div class="form-group">
    <div class="radio">
      <label for="btech" class="col-sm-2 control-label"><b>Course*:</b></label>
      <div class="col-sm-10">
        <label>
          <input type="radio" name="course" id="btech" value="B. Tech" checked>
          B.Tech
        </label>

         <label>
          <input type="radio" name="course" id="mtech" value="Dual Degree (B.Tech + M.Tech)">
          Dual Degree (B.Tech + M.Tech)
        </label>
      
        <label>
          <input type="radio" name="course" id="mtech" value="M. Tech">
          M.tech
        </label>


        <label>
          <input type="radio" name="course" id="mtech" value="Dual Degree (M.tech + Ph.D)">
          Dual Degree (M.tech + Ph.D)
        </label>

        <label>
          <input type="radio" name="course" id="mtech" value="Ph. D">
          Ph.D
        </label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label for="branch" class="col-sm-2 control-label">Branch*:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="branch" name="branch" required>
    </div>
  </div>

  <div class="form-group">
    <label for="address" class="col-sm-2 control-label">Permanent Address*:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="address" name="address" required>
    </div>
  </div>

  <div class="form-group">
    <label for="contact" class="col-sm-2 control-label">Contact No.*:</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="contact" name="contact" required>
    </div>
  </div>

  <div class="form-group">
    <label for="email" class="col-sm-2 control-label">Personal E-mail id *:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="email" name="mail" required>
    </div>
  </div>

  <div class="form-group">
    <label for="placed" class="col-sm-2 control-label">Company Placed or Add your details if opted for higher education *:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="placed" name="placed" required>
    </div>
  </div>

  <div class="form-group">
    <label for="loc" class="col-sm-2 control-label">Location placed *:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="loc" name="placeloc" required>
    </div>
  </div>

  <div class="form-group">
    <label for="fb" class="col-sm-2 control-label">Link to Facebook account (optional) :</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="fb" name="fb">
    </div>
  </div>

  <div class="form-group">
    <label for="linkedin" class="col-sm-2 control-label">Linkedin Account (optional) :</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="linkedin" name="linkedin">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
    <input type="submit" class="btn btn-submit btn-lg" value="Submit" style="margin-left:20em;"  name="submit">
    </div>
  </div>
</form>


</body>
</html>
