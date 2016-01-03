<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Asoyaracuy</title>
        {!!Html::style('css/bootstrap.min.css')!!}
        {!!Html::style('css/style.css')!!}
        
        
		{!!Html::script('js/script.js')!!}
		{!!Html::script('js/jquery.min.js')!!}
		{!!Html::script('js/bootstrap.min.js')!!}
    </head>

    <body>
        <div class="container">
            <nav class="">
                [MENU]
            </nav>
        </div>
        @yield('content')
    </body>
</html>