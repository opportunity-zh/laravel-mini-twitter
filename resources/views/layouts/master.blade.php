<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- Hier wird der Wert von der Konstanten APP_NAME aus .env eingetragen, falls vorhanden. 
   Andernfalls wird der Default-String "Laravel" verwendet -->
   <title>{{ config('app.name', 'Laravel') }}</title>

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</head>
<body>
   <div class="row">
         <div class="col-2">
         </div>
         <div class="col-8">   
            <!-- hier wird auch der Wert von der section "title" eines blade templates ausgefüllt,
            welches dieses layout "extended" -->
            <h1><a href="/messages">@yield('title')</a></h1>
            <!-- hier wird der Wert von der section "content" eines blade templates ausgefüllt,
            welches dieses layout "extended" -->
            @yield('content')
            <!-- hier wird die php Funktion date() aufgerufen mit dem Format-Pattern 'd.m.Y'
            und im html ausgegeben-->
            <div><b>Dummy Footer: {{date('d.m.Y')}}</b></div>   
         </div>
      </div>
   </div>
</body>
</html>