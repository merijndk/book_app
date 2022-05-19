
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes"/>
    </head>
    <body>

    <form method="post" enctype="multipart/form-data" action="{{route('image_upload')}}">
        @csrf
        <input type="file" name="image">
        <input type="submit">
    </form>


    </body>
</html>

