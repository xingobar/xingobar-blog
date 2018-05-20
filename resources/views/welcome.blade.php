<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <title>GaryNg Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="vendor/css/jquery.fullpage.min.css" rel="stylesheet" type="text/css"/>
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .m-padding {
                padding-top: 50px;
            }

            /* 假如沒有這段第一個page會有多出的空白 */
            .section {
                overflow:hidden;
            }

            #section0 {
                position:relative;
                text-align:center;
                display:flex;
                align-items:center;
                justify-content:center;
            }

            #section0:after {
                background-image: url('image/cloud.jpeg');
                content:'';
                background-repeat: no-repeat;
                background-size:100% 100%;
                display:block;
                position:absolute;
                top:0;
                left:0;
                opacity:.5;
                width:100%;
                height:100%;
                z-index:2;
            }

            .project-panel {
                height:250px;
            }
        </style>
    </head>
    <body>
        <div id="fullpage">
            <index></index>
        </div>
    </body>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="vendor/js/jquery.fullpage.min.js"></script>
    <script src="vendor/js/three.min.js"></script>
    <script src="{{asset('js/page_welcome.js')}}"></script>

</html>
