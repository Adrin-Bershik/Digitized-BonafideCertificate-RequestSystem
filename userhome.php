<?php
session_start();


if(!isset($_SESSION["username"]))
{
	header("location:login.php");
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Bonfied</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.css" />
  </head>
  <body>
 <!-- <?php echo $_SESSION["username"] ?>-->
 <center>
 <img src="sreclogo231121084746.jpg" alt="srec logo" height=100px>
 </center>
 <h1 style="text-align:center;margin-bottom:3rem;font-family:Arial,Helvetica,sans-serif;">Sri Ramakrishna Engineering College</h1>
    <div class="container">
      <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
            <h1>Bonafied Request Details</h1>
          </div>
          <div class="panel-body">
            <form action="connect.php" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label for="firstName">Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="firstName"
                  name="firstName"
                />
              </div>
             <!-- <div class="form-group">
                <label for="lastName">LastName</label>
                <input
                  type="text"
                  class="form-control"
                  id="lastName"
                  name="lastName"
                />
              </div>-->
             <!-- <div class="form-group">
                <label for="gender">Gender</label>
                <div>
                  <label for="male" class="radio-inline"
                    ><input
                      type="radio"
                      name="gender"
                      value="m"
                      id="male"
                    />Male</label
                  >
                  <label for="female" class="radio-inline"
                    ><input
                      type="radio"
                      name="gender"
                      value="f"
                      id="female"
                    />Female</label
                  >
                  <label for="others" class="radio-inline"
                    ><input
                      type="radio"
                      name="gender"
                      value="o"
                      id="others"
                    />Others</label
                  >
                </div>
              </div>-->
              <div class="form-group">
                <label for="email">Email</label>
                <input
                  type="text"
                  class="form-control"
                  id="email"
                  name="email"
                />
             </div>
            <!--  <div class="form-group">
                <label for="password">Password</label>
                <input
                  type="password"
                  class="form-control"
                  id="password"
                  name="password"
                />
              </div>-->
              <div class="form-group">
                <label for="number">Phone Number</label>
                <input
                  type="number"
                  class="form-control"
                  id="number"
                  name="number"
                />
              </div>
              <div class="form-group">
    <label for="purpose">Purpose</label>
    <div>
        <label for="passport" class="radio-inline">
            <input type="radio" name="purpose" value="p" id="passport" /> Passport
        </label>
        <label for="scholarship" class="radio-inline">
            <input type="radio" name="purpose" value="s" id="scholarship" /> Scholarship
        </label>
        <label for="buspass" class="radio-inline">
            <input type="radio" name="purpose" value="b" id="buspass" /> Bus Pass
        </label>
        <label for="job" class="radio-inline">
            <input type="radio" name="purpose" value="j" id="job" /> Job Search
        </label>
        <label for="loan" class="radio-inline">
            <input type="radio" name="purpose" value="l" id="loan" />Loan Application
        </label>
        <!-- Add other purposes similarly -->
    </div>
</div>

              <!--<label>File Upload</label>
              <input type="file" name="file"> -->
              <input type="submit" class="btn btn-primary" />
              <button style="width:7rem;height:3.3rem;background-color:#337AB7;border:none;border-radius:6px"><a href="logout.php" style="color:#FFFFFF;text-decoration:none">Logout</a></button>
            </form>
          </div>
          <!--<div class="panel-footer text-right">
            <small>&copy; Technical Babaji</small>
          </div>-->
        </div>
      </div>
    </div>
    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
  <!--<div class="toast-header">
    <img src="..." class="rounded mr-2" alt="...">
    <strong class="mr-auto">Bootstrap</strong>
    <small>11 mins ago</small>
    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>-->
  <!--<div class="toast-body">
    Hello, world! This is a toast message.
  </div>-->
</div>

  </body>
</html>