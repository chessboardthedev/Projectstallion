<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Service Status</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/readable/bootstrap.min.css" rel="stylesheet" integrity="sha384-Li5uVfY2bSkD3WQyiHX8tJd0aMF91rMrQP5aAewFkHkVSTT2TmD2PehZeMmm7aiL" crossorigin="anonymous">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head> 
    <style>
     .logo-container {
      width: 100% !important;
      max-width: 100% !important;
      height: 300px;
      padding: 20px 0 !important;
      border-bottom: 1px solid #d7d7d7;
      background: orange no-repeat top center;
      background-size: cover;
      text-align: center;
      margin-bottom: 60px !important;
    }

    .logo-container > .text-center {
      margin: 60px auto 0;
      float: none !important;
      color: white;
    }

    .status {
      width: 90%;
      max-width: 850px;
    }

    .alert {
      font-size: 20px;
      margin-bottom: 50px;
      font-weight: 500;
    }

    .alert > .time {
      font-weight: 400;
      color: rgba(255,255,255,0.8);
      font-size: 15px;
      position: relative;
      top: 5px;
    } 

    .list-group.list-group-root {
      padding: 0;
      overflow: hidden;
    }

    .list-group.list-group-root .list-group {
      margin-bottom: 0;
    }

    .list-group.list-group-root .list-group-item {
      padding: 15px 20px 15px 20px;
      border-radius: 0;
      border-width: 1px 0 0 0;
    }

    .list-group.list-group-root > .list-group-item:first-child {
      border-top-width: 0;
    }

    .list-group.list-group-root > .list-group > .list-group-item {
      padding-left: 30px;
    }

    .list-group.list-group-root > .list-group > .list-group > .list-group-item {
      padding-left: 45px;
    }

    .list-group.list-group-root > .list-group > .list-group > .list-group-time, .inner{
      color: grey;
    }

    .top {
      border-radius: 4px 4px 0 0 !important;
      -moz-border-radius: 4px 4px 0 0 !important;
      -webkit-border-radius: 4px 4px 0 0 !important;
      -o-border-radius: 4px 4px 0 0 !important;
      -ms-border-radius: 4px 4px 0 0 !important;
    }

    .middle {
      border-radius: 0 0 0 0 !important;
      -moz-border-radius: 0 0 0 0 !important;
      -webkit-border-radius: 0 0 0 0 !important;
      -o-border-radius: 0 0 0 0 !important;
      -ms-border-radius: 0 0 0 0 !important;
    }

    .bottom {
      border-radius: 0 0 4px 4px !important;
      -moz-border-radius: 0 0 4px 4px !important;
      -webkit-border-radius: 0 0 4px 4px !important;
      -o-border-radius: 0 0 4px 4px !important;
      -ms-border-radius: 0 0 4px 4px !important;
    }

    .text-success,.text-success:hover,.text-danger,.text-danger:hover,.text-warning,.text-warning:hover{
      font-weight: 400;
    }

    .btn-circle {
      position: relative;
      border-radius: 99px;
      -moz-border-radius: 99px;
      -webkit-border-radius: 99px;
      -o-border-radius: 99px;
      -ms-border-radius: 99px;
      cursor: default;
      display: inline-block;
      border-width: 1px;
      border-style: solid;
      height: 18px;
      width: 18px;
      text-align: center;
      font-size: .75rem;
      line-height: 18px;
      margin-left: 5px;
      top: 0px;
      color: #666;
      font-size: 13px;
    }

    .fa-expand, a:hover, a:link, a:visited, a:active{
      color: black;
      text-decoration: none;
    }

    .incidents {
      margin-top: 50px;
    }

    .incidents > .day {
      font-size: 20px;
      margin-bottom: 10px;
    }

    .incidents > hr {
      margin-top: -10px;
      margin-bottom: 10px;
    }

    .incidents > .incident-details {
      color: #99aab5;
      margin-bottom: 20px;
    }

  </style>
  <body>
  	<div class="logo-container">
  		<div class="text-center">
  			<h1>Project Stallion</h1>
  			<h2>PHP Based Status Page</h2>	
  		</div>
  	</div>
  	<div class="container status">
      <!-- Start of Status Alert -->
      <div class="alert alert-danger">Major outage on Web Server<span class="time pull-right hidden-xs">Updated 6 minutes ago</span></div>
      <!-- Bottom of Status Alert -->
      <div class="list-group list-group-root well">

        <!-- Top layer -->
        <div class="list-group-item top">
          Cloudflare 
          <!-- Start of Tooltip -->
          <span class="btn-circle" data-toggle="tooltip" data-container="body" data-placement="top" title="Cloudflare is being used for CDN, to deliver content faster.">?</span>
          <!-- End of Tooltip-->
          <span class="text-success pull-right">Operational <i class="fa fa-check text-success"></i></span>
        </div>
        <!-- End of Top Layer -->
        <!-- Start of Middle Layer -->
        <div class="list-group-item middle">
          <span class="expansion">
            <a href="#expand" class="fa-expand fa fa-plus-square-o" data-toggle="collapse"></a></span>
            API
            <span class="text-success pull-right">Operational 
              <i class="fa fa-check text-success"></i>
            </span>
          </div>


          <!-- Start of Inner List-Group -->
          <div class="list-group collapse inner" id="expand">
            <div class="list-group-item middle" data-toggle="collapse">New York<span class="text-success pull-right">Operational <i class="fa fa-check text-success"></i></span></div>
            <div class="list-group-item middle" data-toggle="collapse">Los Angeles<span class="text-success pull-right">Operational <i class="fa fa-check text-success"></i></span></div>
            <div class="list-group-item middle" data-toggle="collapse">London<span class="text-success pull-right">Operational <i class="fa fa-check text-success"></i></span></div>
            <div class="list-group-item middle" data-toggle="collapse">Amsterdam<span class="text-success pull-right">Operational <i class="fa fa-check text-success"></i></span></div>
          </div>
          <!-- End of Inner List-Group -->

          <!-- End of Middle Layer -->
          <!-- Start of Bottom Layer -->
          <div class="list-group-item bottom">Web Server<span class="text-danger pull-right">Major Outage <i class="fa fa-warning text-danger"></i></span></div>
          <!-- End of Bottom Layer -->
        </div>

        <div class="incidents">
          <h2>Past Incidents</h2>
          <!-- One Day -->
          <div class="day">
            <p>October 7, 2016</p>
          </div>
          <hr>
          <div class="incident-details"
          <p>No incidents reported.</p>
        </div>
        <div class="day">
          <p>October 6, 2016</p>
        </div>
        <hr>
        <div class="incident-details"
        <p>No incidents reported.</p>
      </div>

    </div>
  </div>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script>
    $(function() {

      $('.expansion').on('click', function() {
        $('.fa-expand', this)
        .toggleClass('fa-plus-square-o')
        .toggleClass('fa-minus-square-o');
      });

    });
    $("[data-toggle=tooltip]").tooltip({ container: 'body' });
  </script>
</body>
</html>