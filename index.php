<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruit Landing</title>

    <link rel="stylesheet" href="assets/css/footer.css?<?= time() ?>" />
    <link rel="stylesheet" href="assets/css/app.css?<?= time() ?>" />
    <link rel="stylesheet" href="assets/css/header.css?<?= time() ?>" />

    <link href="assets/css/font-awesome.min.css?<?= time() ?>" rel="stylesheet">
</head>

<body>
    <?php include 'assets/includes/header.php' ?>
    <main>
        <div class="custom-cursor-holder">
            <div class="circle-cursor   circle-cursor-top">
                <span class="circle-cursor-inner"></span>
            </div>
            <div class="circle-cursor circle-cursor-bottom"></div>
        </div>
        <section id="banner">
            <div class="banner__outer">
                <div class="container">
                    <div class="banner__inner">
                        <div class="banner__content">
                            <div class="banner__title">
                                <span class="banner__words" style="width: 266px">
                                    <b class="is-visible">Juicy</b>
                                    <b class="is-hidden">Tasty</b>
                                </span> Fruit
                            </div>
                            <div class="banner__text">
                                Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                                Vivamus fermentum in ligula id tristique.
                            </div>
                            <div class="banner__button-block">
                                <div class="banner__button btn">Taste me!</div>
                                <div class="banner__button btn">About me!</div>
                            </div>
                        </div>
                        <div class="banner__image"></div>
                    </div>
                </div>
            </div>
        </section>
        <section id="about">
            <div class="about__outer">
                <div class="container">
                    <div class="about__inner">
                        <div class="about__list">
                            <div class="about__item">
                                <div class="about__icon">
                                    <i class="fa fa-apple" aria-hidden="true"></i>
                                </div>
                                <div class="about__text">
                                    Cras id erat maximus, hendrerit eros a, eleifend enim.
                                    Quisque quis felis imperdiet, finibus eros et, porttitor metus.
                                </div>
                            </div>
                            <div class="about__item">
                                <div class="about__icon">
                                    <i class="fa fa-diamond" aria-hidden="true"></i>
                                </div>
                                <div class="about__text">
                                    Cras id erat maximus, hendrerit eros a, eleifend enim.
                                    Quisque quis felis imperdiet, finibus eros et, porttitor metus.
                                </div>
                            </div>
                            <div class="about__item">
                                <div class="about__icon">
                                    <i class="fa fa-leaf" aria-hidden="true"></i>
                                </div>
                                <div class="about__text">
                                    Cras id erat maximus, hendrerit eros a, eleifend enim.
                                    Quisque quis felis imperdiet, finibus eros et, porttitor metus.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include 'assets/includes/footer.php' ?>
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <script src="assets/scripts/app.js?<?= time() ?>"></script>
</body>

</html>