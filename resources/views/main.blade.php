<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="/media/images/logo-sixphere-favicon.png" sizes="32x32"/>

        <title>6PHR API Suite</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background: linear-gradient(-60deg,#DC911B,#67AB6A);
                color: #636b6f;
                font-family: 'Roboto', sans-serif;
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
                font-size: 50px;
                color: #FFFFFF;
            }

            .links > a {
                color: #000000;
                padding: 0 25px;
                font-size: 14px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            img {
                width: 150px;
                margin-bottom: 50px; 
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div>
                    <img src="/media/images/logo-sixphere.png"/>
                </div>
                <div class="title m-b-md">
                    Welcome to 6PHR REST Suite
                </div>

                <div class="links">
                    <a href="http://www.sixphere.com">SIXPHERE</a>
                    <a href="docs">API DOCS</a>
                    <a href="{{ env('KIBANA_URL_SITE', '#') }}">KIBANA</a>
                </div>
            </div>
        </div>
    </body>
</html>