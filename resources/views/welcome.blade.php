<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pizza Project | Backend</title>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
     <div class="container-fluid mt-5 mb-5 bg-white">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="list-group">
                  <a href="/" class="list-group-item active">API LIST</a>
                  <a href="/pizza" target="_blank" class="list-group-item">Pizza List</a>
                  <a href="/pizza/margherita-classic" target="_blank" class="list-group-item">Pizza Detail</a>
                  <a href="/topping" target="_blank" class="list-group-item">All Toppings <a>
                  <a href="#" class="list-group-item">Vestibulum at eros</a>
                </div>
            </div>
        </div>
     </div>
    </body>
</html>
