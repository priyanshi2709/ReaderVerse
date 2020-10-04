<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Thank You</title>
    <link rel="stylesheet" href="assets2/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i">
</head>

<body>
    <header class="masthead text-center text-white">
        <div class="masthead-content">
            <div class="container">
                <h1 class="masthead-heading mb-0">Thank You</h1>
                <h2 class="masthead-subheading mb-0">You're signed up now!</h2>
            </div>
        </div>
        <div class="bg-circle-1 bg-circle"></div>
        <div class="bg-circle-2 bg-circle"></div>
        <div class="bg-circle-3 bg-circle"></div>
        <div class="bg-circle-4 bg-circle"></div>
    </header>
    <section>
        <div class="container">
            <div class="pt-5">

                <h2 style="color:red">Your details:</h2>
                <h4>Email ID: <span><p>
                  <?php echo $_POST['email']; ?>
                </p>
                </span>
<br>

                <h4>Contact Number: <span><p>
                  <?php echo $_POST['number']; ?>
                </p>
                </span>
              </h4>
<br>
                <h4>Genre of Books You Prefer Reading: <br>
                <?php

                if (isset($_POST['submit'])) {
                  // code...
                $chkbox = $_POST['chk'];

                $i=0;
                while ($i < sizeof($chkbox)) {
                  // code...
                  echo $chkbox[$i]. '</br>';
                  $i++;
                }

              }
              ?></h4>
            </div>
        </div>
    </section>
    <br>
    <footer class="pt-5 py-5 bg-black">
        <div class="container">
            <p class="text-center text-white m-0 small">Copyright&nbsp;© ReaderVerse 2020</p>
        </div>
    </footer>
    <script src="assets2/js/jquery.min.js"></script>
    <script src="assets2/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>





<!--<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Thank you for Signing Up! </h1>

    <h2>The details you provided are:</h2>
    <h2>Email ID:</h2>
    <?php echo $_POST['email']; ?>
    <h2>Contact Number:</h2>
      <?php echo $_POST['number']; ?>
    <h2>Genre of Books You Prefer Reading:</h2>
    <?php

    if (isset($_POST['submit'])) {
      // code...
    $chkbox = $_POST['chk'];

    $i=0;
    while ($i < sizeof($chkbox)) {
      // code...
      echo $chkbox[$i]. '</br>';
      $i++;
    }

  }
  ?>
  </body>
</html>-->
