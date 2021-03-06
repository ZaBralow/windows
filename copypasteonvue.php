<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Arimo" rel="stylesheet">
</head>

<body>

    <header id="up">
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #4990E3; color: white;">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav moimenu">
                    <a href="index.php"><img src="omg/s1200.png" width="40xp" height="40px" alt=""></a>
                    <a class="nav-item nav-link active c" href="index.php">На главную</a>
                    <a class="nav-item nav-link active c" href="gallery.php">Галерея</a>
                    <a class="nav-item nav-link active c" href="copypasteonvue.php">Расчет стоимости</a>
                    <li class="nav-item dropdown c">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Контакты
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item">8 800 555 35 35</a>
                            <a class="dropdown-item">fcksht@dno.ru</a>
                            <a class="dropdown-item">кв.45 ул.Пушкина</a>
                    </li>
                </div>
            </div>
        </nav>

    </header>



    <div class="container">
        <form id="main" v-cloak class="onvue">

            <h1>Услуги и виды окон</h1>

            <ul>
                <li v-for="service in services" v-on:click="toggleActive(service)"
                    v-bind:class="{ 'active': service.active}">
                    {{service.name}} <span>{{service.price | currency}}</span>
                </li>
            </ul>

            <div class="total">
                Итоговая стоимость: <span>{{total() | currency}}</span>
            </div>

        </form>

    </div>














    <div class="forform" id="kontakt">
        <div class="container">
            <div class="upform col-lg-12">
                <p class="text-center">Оставьте контакты и мы свяжемся с вами</p>
            </div>
            <form action="action.php" method="POST" id="windform" class="toodown">
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputName" aria-describedby="emailHelp"
                        placeholder="Ваше имя" value="" name="name">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" id="exampleInputEmail" placeholder="Ваша почта" value="" name="email">
                </div>
                <button type="submit" class="btn btn-outline-light" name="action" style="width: 100%;" id="button" onclick="sended();">ОТПРАВИТЬ</button>
            </form>
        </div>
    </div>

    <a href="#up" class="toup">Наверх</a>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col l4 s12">
                    <h5>ОАО "Windows"</h5>
                    <p>Мы принимаем к оплате карты МИР, MasterCard, Visa и так же оплату с моб. телефона.</p>
                </div>
                <div class="col l4 s12">
                    <h5>Контакты</h5>
                    <ul>
                        <li>8 800 555 35 35</li>
                        <li>fcksht@dno.ru</li>
                        <li>кв.45 ул.Пушкина сел.Колбаса</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2019 Все права защищены.
            </div>
        </div>
    </footer>




    <script src="js/vue.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/ajax.js"></script>
    <script src="js/script.js"></script>
</body>

</html>