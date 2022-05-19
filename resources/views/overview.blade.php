
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes"/>

        <style>
            html,
            body{
                margin: 0;
                padding: 0;
            }
            .container {
                width: 100%;
                height: 300px;
                overflow: hidden;
                border: green 1px solid;
            }

            .klikrakkertje{
                position: absolute;
                width: 20px;
                height: 20px;
                background: red;
                left: 20px;
                top: 100px;
            }
        </style>

        <script type="text/javascript" src="/js/pinch-zoom.umd.js"></script>
    </head>
    <body>

    <div class="container">
        <div class="zoom">
            <span onclick="console.log('anus')" class="klikrakkertje"></span>
            <img src="{{$url}}"/>
        </div>
    </div>


    </body>
    <script type="text/javascript">
        new window.PinchZoom.default(document.querySelector('div.zoom'), {  });
    </script>
</html>





ditt is test tekst

