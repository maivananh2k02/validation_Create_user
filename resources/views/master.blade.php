<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel </title>
    <base href="{{asset('')}}">
    <link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" />
    <!-- font awesome 5.13.1 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" />
    <link rel="stylesheet" href="shopping/assets/dest/css/font-awesome.min.css">
    <link rel="stylesheet" href="shopping/assets/dest/vendors/colorbox/example3/colorbox.css">
    <link rel="stylesheet" href="shopping/assets/dest/rs-plugin/css/settings.css">
    <link rel="stylesheet" href="shopping/assets/dest/rs-plugin/css/responsive.css">
    <link rel="stylesheet" title="style" href="shopping/assets/dest/css/style.css">
    <link rel="stylesheet" href="shopping/assets/dest/css/animate.css">
    <link rel="stylesheet" title="style" href="shopping/assets/dest/css/huong-style.css">
</head>
<body>

@include('header')
<div class="rev-slider">
@yield('content')
</div> <!-- .container -->
@include('footer')
<!-- include js files -->
<script src="shopping/assets/dest/js/jquery.js"></script>
<script src="shopping/assets/dest/vendors/jqueryui/jquery-ui-1.10.4.custom.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="shopping/assets/dest/vendors/bxslider/jquery.bxslider.min.js"></script>
<script src="shopping/assets/dest/vendors/colorbox/jquery.colorbox-min.js"></script>
<script src="shopping/assets/dest/vendors/animo/Animo.js"></script>
<script src="shopping/assets/dest/vendors/dug/dug.js"></script>
<script src="shopping/assets/dest/js/scripts.min.js"></script>
<script src="shopping/assets/dest/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="shopping/assets/dest/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="shopping/assets/dest/js/waypoints.min.js"></script>
<script src="shopping/assets/dest/js/wow.min.js"></script>
<!--customjs-->
<script src="shopping/assets/dest/js/custom2.js"></script>
<script>
    // step 1
    const ipnElement = document.querySelector('#phone')
    const btnElement = document.querySelector('#btnPassword')

    // step 2
    btnElement.addEventListener('click', function () {
        // step 3
        const currentType = ipnElement.getAttribute('type')
        // step 4
        ipnElement.setAttribute(
            'type',
            currentType === 'password' ? 'text' : 'password'
        )
    })
</script>
</body>
</html>

