<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Asoyaracuy</title>
        {!!Html::style('frontend/css/bootstrap.min.css')!!}
        {!!Html::style('frontend/css/style.css')!!}
        
        
		{!!Html::script('frontend/js/script.js')!!}
		{!!Html::script('frontend/js/jquery.min.js')!!}
		{!!Html::script('frontend/js/bootstrap.min.js')!!}
    </head>

    <body>
        @yield('content')
    </body>
</html>