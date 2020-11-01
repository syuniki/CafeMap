<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
        <title>CafeMap</title>
        <style>
            html {
                position: relative;
                min-height: 100%;
            }
            body {
                margin-top: 100px;
                margin-bottom: 100px;
            }
            .footer {
                position: absolute;
                bottom: 0;
                width: 100%;
                height: 70px;
            }
            .text-muted {
                text-align :right ;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
		  <a class="navbar-brand" href={{ route('shop.list') }}>CafeMap</a>
		</nav>
        <div class='container'>
            @yield('content')
        </div>
        <footer class="footer bg-dark">
            <div class="container">
                <p class="text-muted">produced by syu-niki   2020/11/01</p>
            </div>
        </footer>
    </body>
</html>