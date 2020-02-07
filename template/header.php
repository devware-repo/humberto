<!doctype html>
<html lang="pt-br">

<head>
    <title>Insituto de Olhos Humberto Cunha | <?= $currentRoute['routeName'] ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <?php if($has_css) { ?>
        <link rel="stylesheet" href="<?= $css_file ?>">
    <?php } ?>
    <link rel="stylesheet" href="assets/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/owl-carousel/owl.theme.default.min.css">

    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="global-wrapper">
        <!-- Header Mobile -->
        <header class="d-block d-lg-none section-header py-2">
            <div class="container">
                <div class="row">
                    <div class="col-3 pt-2 col-lg-8 d-flex align-items-start justify-content-center">
                        <img id="header-opener" class="header-open-btn" src="assets/img/menu.svg" alt="Menu" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    </div>
                    <div class="col-9 col-lg-4 d-flex">
                        <img class="header-logo" src="assets/img/logo-iohc-small.svg" alt="Insituto de Olhos Humberto Cunha">
                    </div>
                </div>
            </div>
        </header>
        <div class="collapse" id="collapseExample">
            <div class="card card-body mobile-list">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <ul class="menu-list p-0 m-0">
                                <li class="menu-item <?= $currentRoute['routeName'] == 'Home' ? 'active' : '' ?>"><a href="./">HOME</a></li>
                                <li class="menu-item <?= $currentRoute['routeName'] == 'Quem Somos' ? 'active' : '' ?>"><a href="./quem-somos">QUEM SOMOS</a></li>
                                <li class="menu-item <?= $currentRoute['routeName'] == 'Estrutura' ? 'active' : '' ?>"><a href="#">ESTRUTURA</a></li>
                                <li class="menu-item <?= $currentRoute['routeName'] == 'Serviços' ? 'active' : '' ?>"><a href="#">SERVIÇOS</a></li>
                                <li class="menu-item <?= $currentRoute['routeName'] == 'Localização' ? 'active' : '' ?>"><a href="#">LOCALIZAÇÃO</a></li>
                                <li class="menu-item <?= $currentRoute['routeName'] == 'Fale Conosco' ? 'active' : '' ?>"><a href="#">FALE CONOSCO</a></li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <div class="contato-wrapper d-flex align-items-end justify-content-end">
                                <p class="contato">Tel: (61) 3364-0001 | 3364-0172</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>

        </section>
        <!-- Header Desktop -->
        <header class="d-none d-lg-block section-header py-2">
            <div class="container desktop-list">
                <div class="row">
                    <div class="col-12">
                        <div class="contato-wrapper text-right">
                            <p class="contato">Tel: (61) 3364-0001 | 3364-0172</p>
                        </div>
                    </div>
                    <div class="col-6 col-lg-4 d-flex">
                        <img class="header-logo" src="assets/img/logo-iohc-small.svg" alt="Insituto de Olhos Humberto Cunha">
                    </div>
                    <div class="col-6 col-lg-8 d-flex align-items-center justify-content-end">
                        <div class="menu-wrapper">
                            <ul class="menu-list">
                                <li class="menu-item <?= $currentRoute['routeName'] == 'Home' ? 'active' : '' ?>"><a href="./">HOME</a></li>
                                <li class="menu-item <?= $currentRoute['routeName'] == 'Quem Somos' ? 'active' : '' ?>"><a href="./quem-somos">QUEM SOMOS</a></li>
                                <li class="menu-item <?= $currentRoute['routeName'] == 'Estrutura' ? 'active' : '' ?>"><a href="#">ESTRUTURA</a></li>
                                <li class="menu-item <?= $currentRoute['routeName'] == 'Serviços' ? 'active' : '' ?>"><a href="#">SERVIÇOS</a></li>
                                <li class="menu-item <?= $currentRoute['routeName'] == 'Localização' ? 'active' : '' ?>"><a href="#">LOCALIZAÇÃO</a></li>
                                <li class="menu-item <?= $currentRoute['routeName'] == 'Fale Conosco' ? 'active' : '' ?>"><a href="#">FALE CONOSCO</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>