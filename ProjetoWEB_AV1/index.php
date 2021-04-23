<?php 

if(isset($_GET['url'])){
    $url = $_GET['url'];
}else{
    $url = 'home';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ViniciusHNF</title>
    <link rel="shortcut icon" href="imagens/favicon.gif" type="image/x-icon">

    <!--CSS bootstrap--> <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!--Icons bootstrap--> <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css_js/style.css">
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
    <a href="https://viniciushnf.com">
        <img src="imagens/logo.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
    </a>
    <div class="dropdown">
    <a class="btn btn-secondary <?php if($url == 'home'){echo "oculto";} ?>" href="home" role="button">Home</a>
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Questões
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item <?php if($url == 'qst1'){echo "selecionado";} ?>" href="qst1">Questão – 01</a>
            <a class="dropdown-item <?php if($url == 'qst2'){echo "selecionado";} ?>" href="qst2">Questão – 02</a>
            <a class="dropdown-item <?php if($url == 'qst3'){echo "selecionado";} ?>" href="qst3">Questão – 03</a>
        </div>
    </div>
</nav>

<?php 

switch($url){
    case 'home':
        include('pages/home.php');
    break;

    case 'qst1':
        include('pages/qst1.php');
        echo '<script src="css_js/qst1.js"></script>';
    break;

    case 'qst2':
        include('pages/qst2.php');
        echo '<script src="css_js/qst2.js"></script>';
    break;

    case 'qst3':
        include('pages/qst3.php');
        echo '<script src="css_js/qst3.js"></script>';
    break;

    default:
        include('pages/home.php');
    break;
}

?>

<footer>
    <a href="">GitHub</a>
</footer>

</body>
<!--Jquery bootstrap--><script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<!--JS bootstrap--> <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="    sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</html>