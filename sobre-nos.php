<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>SAGRADO BETEL Emergência Médicas | Sobre nós</title>
    <link rel="icon" type="image/x-icon" href="img/flavicon.png">
</head>
<body>
    <?php include('./components/header.php'); ?>

    <a href="https://api.whatsapp.com/send?phone=5511971674912"><img class="whats-app" src="img/zap-icon.png" alt="Ícone do WhatsApp"></a>
    
    <main class="sobre-nos">
        <h1 class="heading-1 margin-bottom-6 sobre-nos__heading">Conheça mais sobre nossa empresa</h1>
        <div class="sobre-nos__content">
            <div class="sobre-nos__text">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc bibendum neque vel tellus viverra, ultricies lobortis orci cursus. Aenean neque nisi, pretium sit amet aliquam ut, consequat in lorem. Praesent sem sem, scelerisque ut felis vitae, semper faucibus mi. Donec sit amet risus ultricies nisi elementum fringilla. Nullam gravida suscipit dapibus. Sed efficitur felis in nisi posuere egestas. Phasellus tincidunt feugiat placerat. Phasellus pretium dignissim efficitur. Vivamus a risus eget libero elementum faucibus. Donec consectetur lobortis risus, sit amet facilisis turpis sagittis ut.</p>
            </div>
            <div class="sobre-nos__box">
                <ul class="sobre-nos__list">
                    <li class="sobre-nos__item"><span class="material-symbols-outlined">check_circle</span>Nullam sed.</li><br>
                    <li class="sobre-nos__item"><span class="material-symbols-outlined">check_circle</span>Vivamus iaculis neque nec.</li><br>
                    <li class="sobre-nos__item"><span class="material-symbols-outlined">check_circle</span>Nullam scelerisque luctus interdum. Suspendisse.</li><br>
                    <li class="sobre-nos__item"><span class="material-symbols-outlined">check_circle</span>Cras eu pulvinar.</li>
                </ul>
            </div>
        </div>
    </main>

    <section class="sobre-nos__image-bg">
        <div class="sobre-nos__image-row">
            <img src="./img/ambulance.jpg" class="sobre-nos__image" alt="Ambulância">
        </div>
    </section>

    <?php include('./components/footer.php'); ?>

    <script src="./js/script.js"></script>
</body>
</html>