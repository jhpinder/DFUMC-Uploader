<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<head>
  <title>DFUMC Virtual Choir</title>
  <link rel="icon" href="umhLogoSmall.png" type="image/x-icon">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <style media="screen">
    .list-group-item {
      border-width: thin;
      border-color: grey;
      border-top: thin !important;
      border-top-style: solid !important;
      border-top-color: grey !important;
    }

    .list-group-item.active {
      background-color: #d1e0ff;
      color: black;
      border-color: #2a53f5;
      border-top-color: #2a53f5 !important;
    }

    .bg-light-1 {
      background: #f3f3f3 !important;
    }

    .display-5 {
      font-size: 2.5rem;
      font-weight: 300;
      line-height: 1.2;
    }

    .display-6 {
      font-size: 2.2rem;
      font-weight: 300;
      line-height: 1.2;
    }
  </style>
</head>

<body>

  <nav class="navbar navbar-expand-sm navbar-light bg-light border-bottom mb-3">
    <a class="navbar-brand" href="#">DFUMC Virtual Choir</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item disabled">
          <a class="nav-link" href="/index.html">Hymn Uploader<span class="sr-only"></span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">Hymn Sheets><span class="sr-only">(current)</span></a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container bg-light-1 rounded-lg py-2 px-3 my-2">
    <h1 class="display-5">Upload Viewer</h1>
    <hr class="my-4">
 </div>

  <div class="container p-0">
    <form enctype="multipart/form-data" id="fileSubmit" novalidate>

      <ul class="list-group bg-light-1 rounded-lg py-2 px-3 mb-2 row-d-flex">
        <div class="display-6 pb-2">Select hymn:</div>
        <div class="display-7 pb-6">December 6, 2020 (due 11/28/2020)</div>
        <li class="list-group-item col-lg-3 my-2 p-3 rounded-lg border-top" id="211">Hymn 211: O Come, O Come</li>
        <!--<li class="list-group-item col-lg-3 my-2 p-3 rounded-lg border-top" id="328">Hymn 328 - Solo</li>-->
        <!--<li class="list-group-item col-lg-3 my-2 p-3 rounded-lg border-top" id="Anthem">Anthem - Choir</li>-->
        <br>
        <div class="display-7 pb-6">December 12, 2020: Festival of Readings and Carols (due 11/28/2020)</div>
        <li class="list-group-item col-lg-3 my-2 p-3 rounded-lg border-top" id="PREP">Prepare Ye the Way of the Lord</li>
        <li class="list-group-item col-lg-3 my-2 p-3 rounded-lg border-top" id="WHAT">What Child Is This</li>
        <li class="list-group-item col-lg-3 my-2 p-3 rounded-lg border-top" id="CLMB">Climb to the Top</li>
        <li class="list-group-item col-lg-3 my-2 p-3 rounded-lg border-top" id="NOEL">The First Noel</li>
        <br>
        <div class="display-7 pb-6">December 20, 2020 (due 12/12/2020)</div>
        <li class="list-group-item col-lg-3 my-2 p-3 rounded-lg border-top" id="242">Hymn 242: Love Came Down</li>
        <br>
        <div class="display-7 pb-6">December 24, 2020 (due 12/12/2020)</div>
        <li class="list-group-item col-lg-3 my-2 p-3 rounded-lg border-top" id="COME">O Come, All Ye Faithful</li>
        <li class="list-group-item col-lg-3 my-2 p-3 rounded-lg border-top" id="NGHT">Silent Night</li>
        <br>
        <div class="display-7 pb-6">Other misc uploads: video, audio, anything that doesn't have a category:</div>
        <li class="list-group-item col-lg-3 my-2 p-3 rounded-lg border-top" id="misc">Other - Video or Audio</li>
      </ul>

      <div class="container bg-light-1 mb-2 py-2 px-3 rounded-lg">
        <div class="display-6 pb-3">Type your name:</div>
        <input class="form-control form-control-lg" type="text" placeholder="Name" name="fullname" id="name" required>
        <div class="invalid-feedback">
          Please enter your name.
        </div>
      </div>

      <div class="container bg-light-1 mb-2 py-2 px-3 rounded-lg">
        <div class="display-6 pb-3">Type the password:</div>
        <input class="form-control form-control-lg" type="password" placeholder="Password" id="pwd" required>
        <div class="alert alert-danger mt-3 mb-2 d-none" id="wrongPass" role="alert">
          Incorrect password, please try again.
        </div>

      </div>


      <div class="container bg-light-1 mb-3 py-2 px-3 rounded-lg">
        <div class="display-6 pb-3">Select your video:</div>

        <input type="hidden" name="hymn">
        <div class="custom-file mb-3">
          <input type="file" class="custom-file-input mb-0 p-2" name="video" accept="video/*,audio/*" id="customFile">
          <label class="custom-file-label" for="customFile">Select hymn video...</label>
          <div class="invalid-feedback">
            Please select a video.
          </div>
        </div>
    </form>


    <div class="progress mt-3 mb-3 d-none" id="progressbar">
      <div class="progress-bar progress-bar-striped progress-bar-animated" id="uploadProgress" role="progressbar" style="width: 0%"></div>
    </div>
  </div>
  <button type"button" class="display-6 col-12 mb-4 form-control-lg btn btn-primary" value="UPLOAD" id="submitButton">
    Upload
    <!-- <span class="spinner-border d-none" role="status" id="spin"></span> -->
  </button>

  </div>



  <!-- DO NOT TOUCH!!!!! -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</html>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require 'hidden/keys.php';
require 'vendor/autoload.php':

use Aws\S3\S3Client;
use Aws\S3\Exception\S3Exception;

$bucket = 'choir.jhpinder.com';
$keyname = 'secrect_hymn_uploads/';

$s3 = new S3Client([
    'version'     => 'latest',
    'region'      => 'us-east-1',
    'credentials' => [
    'key'         => $key,
    'secret'      => $secret,
    ],
]);

$objects = $s3->getIterator('ListObjects', array(
    "Bucket" => $bucket,
    "Prefix" => $keyname
));

foreach ($objects as $object) {
    echo $object['Key'] . "<br>";
}
?>
