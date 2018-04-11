<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Events</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/css/material-dashboard.css">
    <!-- <link rel="stylesheet" href="http://demos.creative-tim.com/material-kit-pro/assets/css/material-kit.min.css"> -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="dist/css/styles.css">

    <link rel="shortcut icon" type="image/png" href="dist/img/logo.png"/>
<script src="dist/js/jquery-3.1.0.min.js" type="text/javascript"></script>
    <style>
   @font-face {
     font-family: 'Bayon';
     font-style: normal;
     font-weight: 400;
     src: url(dist/fonts/khmer-bayon.woff) format('woff');
   }
   @font-face {
      font-family: 'Hanuman';
      font-style: normal;
      font-weight: 400;
      src: url(dist/fonts/khmer-hanuman.woff2) format('woff2');
      unicode-range: U+1780-17FF, U+200B-200C, U+25CC;
   }
   .animated {
     -webkit-animation-duration: 0.3s;
     animation-duration: 0.3s;
     -webkit-animation-fill-mode: both;
     animation-fill-mode: both;
   }

   .animated.infinite {
     -webkit-animation-iteration-count: infinite;
     animation-iteration-count: infinite;
   }
   @-webkit-keyframes slideInUp {
      from {
        -webkit-transform: translateY(20px);
        opacity: 0
     }
     to {
        -webkit-transform: translateY(0);
        opacity: 1
     }
   }

   @keyframes slideInUp {
      from {
         -webkit-transform: translateY(20px);
         transform: translateY(20px);
         opacity: 0
      }
      to {
         -webkit-transform: translateY(0);
         transform: translateY(0);
         opacity: 1
      }
   }

   .slideInUp {
     -webkit-animation-name: slideInUp;
     animation-name: slideInUp;

   }

   </style>
   <script src="dist/js/vue.js"></script>
  </head>
   <body>
