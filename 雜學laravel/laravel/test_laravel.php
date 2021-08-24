<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    class welcome extends controller{
        public function about()
        {
            $name = '悟空';
            return view(view:"pages.about");
        }
    }

    Route::get('/', function()
    {
        return view(view:"welcome");
    })

    Route::get('/cats/{id}/{name}', function($id,$name)
    {
        return '我是第'.$id.'幾隻貓:'.$name;
    })

    Route::get('/about', 'UsersController@show');


    ?>
</body>

</html>