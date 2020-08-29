<!doctype html>
    <html lang="{{ app()->getLocale() }}">
        <head>
            
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="csrf-token" content="{{ csrf_token() }}">

            <title>Page</title>

            <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        </head>
        <body>

            <img src="storage/app/public/id.png">
            <div id="appll">
                <page :title="'{{$title}}'" :author="{{$author}}"></page>
                
            </div>
            
            <div id="appll">
                <h1>{{ pro }}</h1>
            </div>
          <script type="text/javascript" src="js/app.js"></script>
            
            <script src="https://unpkg.com/vue"></script> 
        </body>
    </html>