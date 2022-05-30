
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes"/>

        <style>
            html,
            body{
                margin: 0;
                padding: 0;
                height: 100%;
            }
            .container {
                width: 100%;
                height: 50%;
                overflow: hidden;
            }

            .book_hitbox{
                position: absolute;
                width: 20px;
                height: 20px;
                background: red;
            }

            #booklist{
                height: 50%;

                margin: 0;
                padding: 0;
                list-style: none;
                overflow-x:auto ;
            }

            #booklist li{
                padding: 20px;
                border: 1px solid #eee;
            }
        </style>

        <script type="text/javascript" src="/js/pinch-zoom.umd.js"></script>
    </head>
    <body>

    <div class="container">
        <div class="zoom">

            <img src="{{$url}}"/>
        </div>
    </div>

    <ul id="booklist">

    </ul>


    </body>
    <script type="text/javascript">
        new window.PinchZoom.default(document.querySelector('div.zoom'), {  });

        let data = {!! json_encode($data)!!};

        let bookList = document.querySelector('#booklist');
        let imageContainer = document.querySelector('.zoom');

        data.map(item => {
            console.log(item);
            let li = document.createElement('li');
            li.innerHTML = item.name + "<br/>200 euro";
            bookList.append(li);

            let hitbox = document.createElement('span');
            hitbox.classList.add('book_hitbox');
            hitbox.style.left = item.x + "px";
            hitbox.style.top = item.y + "px";
            imageContainer.append(hitbox);
        })

    </script>
</html>

