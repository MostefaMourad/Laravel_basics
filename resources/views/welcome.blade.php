
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body>
         <?php /* echo $name */
           use Illuminate\Support\Facades\Route;

           $route = Route::currentRouteAction();

          dd($route) ;
           
         ?> 
         <h1> Wie geht es ihnen , guten tag</h1>
    </body>
</html>
