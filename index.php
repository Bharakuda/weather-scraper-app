<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title> Weather Scraper </title>

    <!-- Bootstrap -->
    <!-- Local <link href="css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">  -->

    <!-- Optional theme -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
        html, body {
            height: 100%;
        }

        .container {
            background-image: url("background.jpg");
            background-size: cover;
            height: 100%;
            width: 100%;
            background-position: center;
            padding-top: 150px;
        }

        .center {
            text-align: center;

        }

        .white {
            color: white;

        }

        p {
            padding-top: 15px;
        }

        button {
            margin-top: 20px;
        }

        .alert {
            margin-top: 15px;
            display: none;
        }
    </style>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 center">
                <h1 class="center white">Weather predictor</h1>
                <p class="lead center white">Enter your city below to get the weather forecast.</p>

                <form>
                    <div class="form-group center">
                        <input type="text" class="form-control" placeholder="Eg. Paris, London, San Francisco" name="city" id="city">
                    </div>
                </form>
                <button class="btn btn-success btn-lg center" id="findMyWeather">Get weather!</button>
                <div class="alert alert-success" id="success"></div>
                <div class="alert alert-danger" id="fail">Please try again, could not find weather data for that city...</div>
                <div class="alert alert-danger" id="noCity">Please enter city name...</div>

            </div>
        </div>
    </div>

<!-- Latest compiled and minified JavaScript -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script>
    $("#findMyWeather").click(function(event){
        $(".alert").hide();
        event.preventDefault();
        if($("#city").val()!=""){
            $.get("scraper.php?city="+$("#city").val(), function(data){
                if(data==""){
                    $("#fail").fadeIn();
                }
                else{
                    $("#success").html(data).fadeIn();
                }
            });
        }else{
            $("#noCity").fadeIn();
        }
    });
</script>
</body>
</html>
