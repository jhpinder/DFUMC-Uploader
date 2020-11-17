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
/*
$objects = $s3->getIterator('ListObjects', array(
    "Bucket" => $bucket,
    "Prefix" => $keyname
));

foreach ($objects as $object) {
    echo $object['Key'] . "<br>";
}
*/

try {
    $results = $s3->getPaginator('ListObjects', [
        'Bucket' => $bucket
    ]);

    foreach ($results as $result) {
        foreach ($result['Contents'] as $object) {
            echo $object['Key'] . PHP_EOL;
        }
    }
} catch (S3Exception $e) {
    echo $e->getMessage() . PHP_EOL;
}
?>
