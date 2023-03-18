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
                        <div class="banner__image">
                            <img src="assets/img/home.png" alt="">
                        </div>
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
                            <div class="about__item">
                                <div class="about__icon">
                                    <i class="fa fa-tint" aria-hidden="true"></i>
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
        <section id="live">
            <div class="live__outer">
                <div class="container">
                    <div class="live__inner">
                        <div class="live__title title">
                            <span>#</span> Join our last big winners
                        </div>
                        <div class="live__block">
                            <div class="live__win block">
                                <div class="live__win-inner block-inner">
                                    <div class="live__win-list">
                                        <div class="live__win-item">
                                            <div class="live__win-image"><img src="assets/img/win-1.png" alt=""></div>
                                            <div class="live__win-info">
                                                <div class="live__win-name">
                                                    Julia Dertas
                                                </div>
                                                <div class="live__win-price">
                                                    $2300,000
                                                </div>
                                            </div>
                                        </div>
                                        <div class="live__win-item">
                                            <div class="live__win-image"><img src="assets/img/win-1.png" alt=""></div>
                                            <div class="live__win-info">
                                                <div class="live__win-name">
                                                    Julia Dertas
                                                </div>
                                                <div class="live__win-price">
                                                    $2300,000
                                                </div>
                                            </div>
                                        </div>
                                        <div class="live__win-item">
                                            <div class="live__win-image"><img src="assets/img/win-1.png" alt=""></div>
                                            <div class="live__win-info">
                                                <div class="live__win-name">
                                                    Julia Dertas
                                                </div>
                                                <div class="live__win-price">
                                                    $2300,000
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="live__comments block">
                                <div class="live__comments-inner block-inner">
                                    <div class="live__comments-list">
                                        <div class="live__comments-list-inner">
                                            <?php
                                            chdir($_SERVER["DOCUMENT_ROOT"]);
                                            $names = file_get_contents('./assets/data/names.json');
                                            $names = json_decode($names);

                                            $comments = file_get_contents('./assets/data/comments.json');
                                            $comments = json_decode($comments);

                                            $result = array();
                                            $time = 6;
                                            for ($i = 0; $i < 250; $i++) {
                                            ?>
                                                <div class="live__comment-item">
                                                    <div class="live__comment-image">
                                                        <img src="assets/img/anonym.png" alt="">
                                                    </div>
                                                    <div class="live__comment-info">
                                                        <div class="live__comment-name">
                                                            <span>#</span>Anonym
                                                        </div>
                                                        <div class="live__comment-text">
                                                            <?php echo $comments[rand(0, count($comments) - 1)]->comment ?>
                                                        </div>
                                                    </div>
                                                    <div class="live__comment-controll">
                                                        <div class="live__comment-date"><?php echo $time; ?> min</div>
                                                        <div class="live__comment-meta">
                                                            <div class="live__comment-view">
                                                                <?php echo rand(0, 99) ?> <i class="fa fa-eye" aria-hidden="true"></i>
                                                            </div>
                                                            <div class="live__comment-share">
                                                                <i class="fa fa-share" aria-hidden="true"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php
                                                $time += rand(0, 3);
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <div class="live__comments-form">
                                        <textarea name="" id="" rows="2" placeholder="Your comment..."></textarea>
                                        <button id="comment-btn" class="live__comments-button btn">Send</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="author">
            <div class="author__outer">
                <div id="tsparticles"></div>
                <div class="container">
                    <div class="author__inner">
                        <div class="author__list">
                            <div class="author__item">
                                <div class="author__text">
                                    Nullam blandit urna lacus, malesuada interdum lacus scelerisque a.
                                    Vivamus a est non arcu iaculis varius a nec tortor.
                                    Cras ut dolor sollicitudin, consectetur felis a, molestie purus.
                                </div>
                                <div class="author__info">
                                    <div class="author__image">
                                        <img src="assets/img/author-1.png" alt="">
                                    </div>
                                    <div class="author__name">
                                        #fruitAuthor
                                    </div>
                                </div>
                            </div>
                            <div class="author__item">
                                <div class="author__text">
                                    Nullam blandit urna lacus, malesuada interdum lacus scelerisque a.
                                    Vivamus a est non arcu iaculis varius a nec tortor.
                                    Cras ut dolor sollicitudin, consectetur felis a, molestie purus.
                                </div>
                                <div class="author__info">
                                    <div class="author__image">
                                        <img src="assets/img/author-2.png" alt="">
                                    </div>
                                    <div class="author__name">
                                        #fruitAuthor
                                    </div>
                                </div>
                            </div>
                            <div class="author__item">
                                <div class="author__text">
                                    Nullam blandit urna lacus, malesuada interdum lacus scelerisque a.
                                    Vivamus a est non arcu iaculis varius a nec tortor.
                                    Cras ut dolor sollicitudin, consectetur felis a, molestie purus.
                                </div>
                                <div class="author__info">
                                    <div class="author__image">
                                        <img src="assets/img/author-3.png" alt="">
                                    </div>
                                    <div class="author__name">
                                        #fruitAuthor
                                    </div>
                                </div>
                            </div>
                            <div class="author__item">
                                <div class="author__text">
                                    Nullam blandit urna lacus, malesuada interdum lacus scelerisque a.
                                    Vivamus a est non arcu iaculis varius a nec tortor.
                                    Cras ut dolor sollicitudin, consectetur felis a, molestie purus.
                                </div>
                                <div class="author__info">
                                    <div class="author__image">
                                        <img src="assets/img/author-4.png" alt="">
                                    </div>
                                    <div class="author__name">
                                        #fruitAuthor
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="steps">
            <div class="steps__outer">
                <div class="container">
                    <div class="steps__inner">
                        <div class="steps__title title">
                            <span>#</span> Easy to go
                        </div>
                        <div class="steps__desc">
                            Vestibulum vel diam hendrerit, aliquam massa non, tempor magna. Aliquam erat volutpat.
                            Mauris luctus ante diam, sit amet condimentum odio lacinia vel.
                            Sed sit amet nulla dolor. Nam porta sed mi in auctor. Nunc et lacus ex. In hac habitasse platea dictumst.
                        </div>
                        <div class="steps__list">
                            <div class="steps__item">
                                <div class="steps__item-inner">
                                    <div class="steps__top">
                                        <div class="steps__image"><img src="assets/img/step-1.png" alt=""></div>
                                        <div class="steps__number">01</div>
                                    </div>
                                    <div class="steps__item-title">Mauris ut tristique</div>
                                    <div class="steps__text">
                                        Sed dolor ligula, consectetur at quam ultricies, imperdiet facilisis ipsum.
                                        Suspendisse in varius leo. Suspendisse ut elementum justo.
                                    </div>
                                    <div class="steps__button btn">Taste me!</div>
                                </div>
                            </div>
                            <div class="steps__item">
                                <div class="steps__item-inner">
                                    <div class="steps__top">
                                        <div class="steps__image"><img src="assets/img/step-2.png" alt=""></div>
                                        <div class="steps__number">02</div>
                                    </div>
                                    <div class="steps__item-title">Mauris ut tristique</div>
                                    <div class="steps__text">
                                        Sed dolor ligula, consectetur at quam ultricies, imperdiet facilisis ipsum.
                                        Suspendisse in varius leo. Suspendisse ut elementum justo.
                                    </div>
                                    <div class="steps__button btn">Taste me!</div>
                                </div>
                            </div>
                            <div class="steps__item">
                                <div class="steps__item-inner">
                                    <div class="steps__top">
                                        <div class="steps__image"><img src="assets/img/step-3.png" alt=""></div>
                                        <div class="steps__number">03</div>
                                    </div>
                                    <div class="steps__item-title">Mauris ut tristique</div>
                                    <div class="steps__text">
                                        Sed dolor ligula, consectetur at quam ultricies, imperdiet facilisis ipsum.
                                        Suspendisse in varius leo. Suspendisse ut elementum justo.
                                    </div>
                                    <div class="steps__button btn">Taste me!</div>
                                </div>
                            </div>
                            <div class="steps__item">
                                <div class="steps__item-inner">
                                    <div class="steps__top">
                                        <div class="steps__image"><img src="assets/img/step-4.png" alt=""></div>
                                        <div class="steps__number">04</div>
                                    </div>
                                    <div class="steps__item-title">Mauris ut tristique</div>
                                    <div class="steps__text">
                                        Sed dolor ligula, consectetur at quam ultricies, imperdiet facilisis ipsum.
                                        Suspendisse in varius leo. Suspendisse ut elementum justo.
                                    </div>
                                    <div class="steps__button btn">Taste me!</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="subscribe">
            <div class="subscribe__outer">
                <div class="container">
                    <div class="subscribe__inner">
                        <div class="subscribe__title title"> 🔥 Subscribe for Update</div>
                        <div class="subscribe__form">
                            <div class="subscribe__input">
                                <input type="text" placeholder="Your email">
                                <button class="subscribe__button btn btn_dark">Subscribe</button>
                            </div>
                        </div>
                        <div class="subscribe__desc">
                            For more information check out our <span>privacy policy</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="place">
            <div class="place__outer">
                <div class="container">
                    <div class="place__inner">
                        <div class="place__title title">
                            <span>#</span> Check our places
                        </div>
                        <div class="place__desc">
                            Vestibulum vel diam hendrerit, aliquam massa non, tempor magna. Aliquam erat volutpat.
                            Mauris luctus ante diam, sit amet condimentum odio lacinia vel.
                            Sed sit amet nulla dolor. Nam porta sed mi in auctor. Nunc et lacus ex. In hac habitasse platea dictumst.
                        </div>
                        <div class="place__list">
                            <div class="place__item">
                                <div class="place__image"></div>
                                <div class="place__inner">
                                    <div class="place__button btn btn_dark">Taste me!</div>
                                    <div class="place__meta">
                                        <div class="place__meta-item">
                                            <i class="fa fa-calendar" aria-hidden="true"></i> 20 Feb, 2023
                                        </div>
                                        <div class="place__meta-item">
                                            <i class="fa fa-eye" aria-hidden="true"></i> 1004
                                        </div>
                                    </div>
                                    <div class="place__item-title">
                                        Place <span>#1 </span>
                                    </div>
                                    <div class="place__text">
                                        Nunc eu sapien ut lorem dignissim pharetra in eu velit. Nulla facilisi.
                                        Donec lobortis molestie nibh, rhoncus venenatis risus hendrerit at. Duis eget facilisis erat.
                                        Nullam rhoncus odio eget consectetur sagittis. Integer ut tincidunt odio.
                                    </div>
                                </div>
                            </div>
                            <div class="place__item">
                                <div class="place__image"></div>
                                <div class="place__inner">
                                    <div class="place__button btn btn_dark">Taste me!</div>
                                    <div class="place__meta">
                                        <div class="place__meta-item">
                                            <i class="fa fa-calendar" aria-hidden="true"></i> 12 Mar, 2023
                                        </div>
                                        <div class="place__meta-item">
                                            <i class="fa fa-eye" aria-hidden="true"></i> 567
                                        </div>
                                    </div>
                                    <div class="place__item-title">
                                        Place <span>#2 </span>
                                    </div>
                                    <div class="place__text">
                                        Nunc eu sapien ut lorem dignissim pharetra in eu velit. Nulla facilisi.
                                        Donec lobortis molestie nibh, rhoncus venenatis risus hendrerit at. Duis eget facilisis erat.
                                        Nullam rhoncus odio eget consectetur sagittis. Integer ut tincidunt odio.
                                    </div>
                                </div>
                            </div>
                            <div class="place__item">
                                <div class="place__image"></div>
                                <div class="place__inner">
                                    <div class="place__button btn btn_dark">Taste me!</div>
                                    <div class="place__meta">
                                        <div class="place__meta-item">
                                            <i class="fa fa-calendar" aria-hidden="true"></i> 20 Feb, 2023
                                        </div>
                                        <div class="place__meta-item">
                                            <i class="fa fa-eye" aria-hidden="true"></i> 1004
                                        </div>
                                    </div>
                                    <div class="place__item-title">
                                        Place <span>#3 </span>
                                    </div>
                                    <div class="place__text">
                                        Nunc eu sapien ut lorem dignissim pharetra in eu velit. Nulla facilisi.
                                        Donec lobortis molestie nibh, rhoncus venenatis risus hendrerit at. Duis eget facilisis erat.
                                        Nullam rhoncus odio eget consectetur sagittis. Integer ut tincidunt odio.
                                    </div>
                                </div>
                            </div>
                            <div class="place__item">
                                <div class="place__image"></div>
                                <div class="place__inner">
                                    <div class="place__button btn btn_dark">Taste me!</div>
                                    <div class="place__meta">
                                        <div class="place__meta-item">
                                            <i class="fa fa-calendar" aria-hidden="true"></i> 06 Feb, 2023
                                        </div>
                                        <div class="place__meta-item">
                                            <i class="fa fa-eye" aria-hidden="true"></i> 3305
                                        </div>
                                    </div>
                                    <div class="place__item-title">
                                        Place <span>#4 </span>
                                    </div>
                                    <div class="place__text">
                                        Nunc eu sapien ut lorem dignissim pharetra in eu velit. Nulla facilisi.
                                        Donec lobortis molestie nibh, rhoncus venenatis risus hendrerit at. Duis eget facilisis erat.
                                        Nullam rhoncus odio eget consectetur sagittis. Integer ut tincidunt odio.
                                    </div>
                                </div>
                            </div>
                            <div class="place__item">
                                <div class="place__image"></div>
                                <div class="place__inner">
                                    <div class="place__button btn btn_dark">Taste me!</div>
                                    <div class="place__meta">
                                        <div class="place__meta-item">
                                            <i class="fa fa-calendar" aria-hidden="true"></i> 21 Oct, 2022
                                        </div>
                                        <div class="place__meta-item">
                                            <i class="fa fa-eye" aria-hidden="true"></i> 1004
                                        </div>
                                    </div>
                                    <div class="place__item-title">
                                        Place <span>#5 </span>
                                    </div>
                                    <div class="place__text">
                                        Nunc eu sapien ut lorem dignissim pharetra in eu velit. Nulla facilisi.
                                        Donec lobortis molestie nibh, rhoncus venenatis risus hendrerit at. Duis eget facilisis erat.
                                        Nullam rhoncus odio eget consectetur sagittis. Integer ut tincidunt odio.
                                    </div>
                                </div>
                            </div>
                            <div class="place__item">
                                <div class="place__image"></div>
                                <div class="place__inner">
                                    <div class="place__button btn btn_dark">Taste me!</div>
                                    <div class="place__meta">
                                        <div class="place__meta-item">
                                            <i class="fa fa-calendar" aria-hidden="true"></i> 02 Oct, 2022
                                        </div>
                                        <div class="place__meta-item">
                                            <i class="fa fa-eye" aria-hidden="true"></i> 2234
                                        </div>
                                    </div>
                                    <div class="place__item-title">
                                        Place <span>#6 </span>
                                    </div>
                                    <div class="place__text">
                                        Nunc eu sapien ut lorem dignissim pharetra in eu velit. Nulla facilisi.
                                        Donec lobortis molestie nibh, rhoncus venenatis risus hendrerit at. Duis eget facilisis erat.
                                        Nullam rhoncus odio eget consectetur sagittis. Integer ut tincidunt odio.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="faq">
            <div class="faq__outer">
                <div class="container">
                    <div class="faq__inner">
                        <div class="faq__content">
                            <div class="faq__title title">
                                <span>#</span> FAQ
                            </div>
                            <div class="faq__list">
                                <div class="faq__item">
                                    <div class="faq__q">Lorem ipsum dolor sit amet, consectetur adipiscing elit?</div>
                                    <div class="faq__a">
                                        Aliquam nulla sem, lacinia at tortor porta, sollicitudin mollis eros.
                                        Sed congue dui lectus, at venenatis urna ultricies quis.
                                        Suspendisse efficitur quam nec quam congue rutrum.
                                    </div>
                                </div>
                                <div class="faq__item">
                                    <div class="faq__q">Lorem ipsum dolor sit amet, consectetur adipiscing elit?</div>
                                    <div class="faq__a">
                                        Sed congue dui lectus, at venenatis urna ultricies quis.
                                        Suspendisse efficitur quam nec quam congue rutrum. Ut nisi leo, facilisis vel ultrices in, vulputate vel ante.
                                    </div>
                                </div>
                                <div class="faq__item">
                                    <div class="faq__q">Lorem ipsum dolor sit amet, consectetur adipiscing elit?</div>
                                    <div class="faq__a">
                                        Aliquam nulla sem, lacinia at tortor porta, sollicitudin mollis eros.
                                        Sed congue dui lectus, at venenatis urna ultricies quis.
                                        Suspendisse efficitur quam nec quam congue rutrum. Ut nisi leo, facilisis vel ultrices in, vulputate vel ante.
                                    </div>
                                </div>
                                <div class="faq__item">
                                    <div class="faq__q">Lorem ipsum dolor sit amet, consectetur adipiscing elit?</div>
                                    <div class="faq__a">
                                        Aliquam nulla sem, lacinia at tortor porta, sollicitudin mollis eros.
                                        Suspendisse efficitur quam nec quam congue rutrum. Ut nisi leo, facilisis vel ultrices in, vulputate vel ante.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="faq__image">
                            <img src="assets/img/faq.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="info">
            <div class="info__outer">
                <div class="container">
                    <div class="info__inner">
                        <div class="info__title title">
                            <span>#</span> Nullam rhoncus odio eget
                        </div>
                        <div class="info__text">
                            Mauris ut tristique nunc. Aenean eu leo velit. Nullam efficitur quam in felis vehicula auctor.
                            Fusce tellus tellus, efficitur vel nunc a, ornare posuere mauris.
                            Vestibulum vel diam hendrerit, aliquam massa non, tempor magna. Aliquam erat volutpat.
                            Mauris luctus ante diam, sit amet condimentum odio lacinia vel.
                            Sed sit amet nulla dolor. Nam porta sed mi in auctor. Nunc et lacus ex. In hac habitasse platea dictumst.
                        </div>
                        <div class="info__list">
                            <div class="info__item">
                                <i class="fa fa-check" aria-hidden="true"></i>
                                Nam porta sed mi in auctor.
                            </div>
                            <div class="info__item">
                                <i class="fa fa-check" aria-hidden="true"></i>
                                Nam porta sed mi in auctor.
                            </div>
                            <div class="info__item">
                                <i class="fa fa-check" aria-hidden="true"></i>
                                Nam porta sed mi in auctor.
                            </div>
                            <div class="info__item">
                                <i class="fa fa-check" aria-hidden="true"></i>
                                Nam porta sed mi in auctor.
                            </div>
                        </div>
                        <div class="info__text">
                            Mauris ut tristique nunc. Aenean eu leo velit. Nullam efficitur quam in felis vehicula auctor.
                            Fusce tellus tellus, efficitur vel nunc a, ornare posuere mauris.
                            Vestibulum vel diam hendrerit, aliquam massa non, tempor magna. Aliquam erat volutpat.
                            Mauris luctus ante diam, sit amet condimentum odio lacinia vel.
                            Sed sit amet nulla dolor. Nam porta sed mi in auctor. Nunc et lacus ex. In hac habitasse platea dictumst.
                        </div>
                        <div class="info__button btn btn_dark">
                            Taste me!
                        </div>
                        <div class="info__title title">
                            <span>#</span> Duis eget facilisis erat
                        </div>
                        <div class="info__text">
                            Mauris ut tristique nunc. Aenean eu leo velit. Nullam efficitur quam in felis vehicula auctor.
                            Fusce tellus tellus, efficitur vel nunc a, ornare posuere mauris.
                            Vestibulum vel diam hendrerit, aliquam massa non, tempor magna. Aliquam erat volutpat.
                            Mauris luctus ante diam, sit amet condimentum odio lacinia vel.
                            Sed sit amet nulla dolor. Nam porta sed mi in auctor. Nunc et lacus ex. In hac habitasse platea dictumst.
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="gallery">
            <div class="gallery__outer">
                <div class="container">
                    <div class="gallery__inner">
                        <div class="gallery__list">
                            <div class="gallery__item"><img src="assets/img/gallery-1.jpg" alt=""></div>
                            <div class="gallery__item"><img src="assets/img/gallery-2.jpg" alt=""></div>
                            <div class="gallery__item"><img src="assets/img/gallery-3.jpg" alt=""></div>
                            <div class="gallery__item"><img src="assets/img/gallery-4.jpg" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="point">
            <div class="point__outer">
                <div class="container">
                    <div class="point__inner">
                        <div class="point__title title">
                            <span>#</span> What is the Point?
                        </div>
                        <div class="point__text">
                            Nullam blandit urna lacus, malesuada interdum lacus scelerisque a.
                            Vivamus a est non arcu iaculis varius a nec tortor. Cras ut dolor sollicitudin, consectetur felis a, molestie purus.
                            Donec porta, leo ornare sagittis posuere, elit sem mollis magna, ac tempor urna est eget erat. Cras sed consectetur dui.
                            Cras pretium sapien nisl, at egestas ipsum rutrum sed. Phasellus cursus sem in enim mollis, a facilisis ex iaculis.
                            Nunc eu sapien ut lorem dignissim pharetra in eu velit. Nulla facilisi.
                            Donec lobortis molestie nibh, rhoncus venenatis risus hendrerit at.
                            Duis eget facilisis erat. Nullam rhoncus odio eget consectetur sagittis. Integer ut tincidunt odio.
                        </div>
                        <div class="point__text">
                            Nullam blandit urna lacus, malesuada interdum lacus scelerisque a.
                            Vivamus a est non arcu iaculis varius a nec tortor. Cras ut dolor sollicitudin, consectetur felis a, molestie purus.
                            Donec porta, leo ornare sagittis posuere, elit sem mollis magna, ac tempor urna est eget erat. Cras sed consectetur dui.
                            Cras pretium sapien nisl, at egestas ipsum rutrum sed. Phasellus cursus sem in enim mollis, a facilisis ex iaculis.
                            Nunc eu sapien ut lorem dignissim pharetra in eu velit. Nulla facilisi.
                            Donec lobortis molestie nibh, rhoncus venenatis risus hendrerit at.
                            Duis eget facilisis erat. Nullam rhoncus odio eget consectetur sagittis. Integer ut tincidunt odio.
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include 'assets/includes/footer.php' ?>
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/tsparticles@1.30.1/tsparticles.min.js"></script>
    <script src="assets/scripts/app.js?<?= time() ?>"></script>
</body>

</html>