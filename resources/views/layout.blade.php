<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="Create an account or log into Apex Innovations. Learn stroke, heart failure, and EKG competency. Earn continuing education credits and become certified.">
    <meta name="keywords" content="Online,Continuing,Education,Nurse,CE,CEU,Physician,CME,Chest Pain,ECG,EKG,Stroke,Sepsis,Heart,Failure,ACS,Myocardial Infarction,Competency,MI Rule,NIHSS,Interactive,MI,Doctor,EMS">
    <meta name="author" content="Apex Innovations, LLC. Eddie Muller, John Klein, Chase Champagne, Liddy Rothermel">
    <meta name="theme-color" content="#B20000" />

    <title>Apex Innovations, LLC - Improving Outcomes Through Education</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/app.css" rel="stylesheet" />


    <!-- Custom CSS -->
    <style>

    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    @include('layout.navigation')
    
    <div id="app"></div>
    <div class="container">
    @yield('content')
    </div>
        @include('layout.footer')

    
	<script src="js/app.js"></script>
    </body>
</html>