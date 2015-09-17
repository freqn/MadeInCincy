<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>BuysGuys: Buy,Trade &amp; Sell</title>
    @section('meta_keywords')
        <meta name="keywords" content="men,sales,craigslist,competitor,cincinnati"/>
    @show @section('meta_author')
        <meta name="author" content="Jake Boyles"/>
    @show @section('meta_description')
        <meta name="description"
              content="Where men buy, sell and trade online. Looking for video games, electronics, car parts or more? Then you need to look no further!"/>
    @show
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
        <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"></script>
        <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.5/leaflet.css" />
        <script src="http://cdn.leafletjs.com/leaflet-0.7.5/leaflet.js"></script>
        <script src="http://jawj.github.io/OverlappingMarkerSpiderfier-Leaflet/bin/oms.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" type="text/css">

    @yield('styles')
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<div class="nav container-fluid">
<div class="col-md-4">
<h2>Made in Cincy</h2>
</div>

<div class="col-md-2 col-md-offset-6">
  <a class="pull-right btn btn-primary" data-toggle="modal" data-target="#myModal" href="#">Add +</a>
</div>
</div>
<div class="container-fluid main-container">
    <div>
        @yield('content')
    </div>
</div>




@yield('scripts')

</body>
</html>