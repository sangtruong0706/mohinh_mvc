<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mô hình MVC</title>
</head>
<body>

    <h1>
        <?php 
            include_once('app/config/config.php');
            include_once('system/libs/Functions.php');
            spl_autoload_register(function($class){
                include_once('system/libs/'.$class.'.php');
            });

            $main = new Main();

            // $url = isset($_GET['url']) ? $_GET['url'] : NULL ;

            // if ($this->url != NULL){
            //     $this->url = rtrim($this->url, '/'); 
            //     $this->url = explode('/', filter_var($this->url, FILTER_SANITIZE_URL));   
            // }else{
            //     unset($this->url);
            // }


            // if (isset($url[0])){
            //     include_once('app/controllers/'.$url[0].'.php');
            //     $ctrl = new $url[0]();
            //     if (isset($url[2])){
            //         $ctrl->{$url[1]}($url[2]);
            //     }else{
            //         if (isset($url[1])){
            //             $ctrl->{$url[1]}();
            //         }else{

            //         }
            //     }

            // }else{
            //     include_once('app/controllers/index.php');
            //     $index = new index();
            //     $index->homePage();
            // }








        ?>
    </h1>


</body>
</html>