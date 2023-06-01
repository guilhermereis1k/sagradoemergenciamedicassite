<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <title>SAGRADO BETEL Emergência Médicas</title>
    <link rel="icon" type="image/x-icon" href="img/flavicon.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
    <?php include('./components/header.php'); ?>

    <a href="https://api.whatsapp.com/send?phone=5511971674912"><img class="whats-app" src="img/zap-icon.png" alt="Ícone do WhatsApp"></a>

    <section class="gallery">
        <a href="index.php#orcamento"><img class="gallery__image--1" id="gallery__img1" src="img/BANNER-1-SAGRADO-V2.png" alt="Banner 1"></a>
        <a href="index.php#orcamento"><img class="gallery__image--2" id="gallery__img2" src="img/BANNER-2-SAGRADO-V2.png" alt="Banner 2"></a>
        <a href="index.php#orcamento"><img class="gallery__image--3" id="gallery__img3" src="img/BANNER-3-SAGRADO.png" alt="Banner 3"></a>
        
        <div class="gallery__index">
            <span class="gallery__index--1" id="gallery-index-1" onClick="changeIndex(1)"></span>
            <span class="gallery__index--2" id="gallery-index-2" onClick="changeIndex(2)"></span>
            <span class="gallery__index--3" id="gallery-index-3" onClick="changeIndex(3)"></span>
        </div>
    </section>

    <section id="servicos" class="servicos">
        <h3 class="heading-3 servicos__heading">Nossos serviços</h3>
        <div class="servicos__cards margin-bottom-10">
            <div class="servicos__card--1">
                <img src="img/emergencia-icon.svg" alt="Ícone">
                <h5 class="heading-5 heading-cards">Remoção de urgência<br> e emergência</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur congue, lorem at auctor cursus.</p>
                <a href="#" class="btn btn-cards btn-white">FAZER ORÇAMENTO</a>
            </div>
            <div class="servicos__card--2">
                <img src="img/casa-icon.svg" alt="Ícone">
                <h5 class="heading-5 heading-cards">Remoção Domiciliar <br>e Hospitalar</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur congue, lorem at auctor cursus.</p>
                <a href="#" class="btn btn-cards btn-white">FAZER ORÇAMENTO</a>
            </div>
            <div class="servicos__card--3">
                <img src="img/ambulancia-icon.svg" alt="Ícone">
                <h5 class="heading-5 heading-cards">Remoção para consulta<br> e exames</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur congue, lorem at auctor cursus.</p>
                <a href="#" class="btn btn-cards btn-white">FAZER ORÇAMENTO</a>
            </div>
     </div>
    </section>

    <section class="orcamento">
        <div class="orcamento__bg">
        </div>
            <div class="orcamento__text">
                <h3 class="heading-3 orcamento__heading">Faça seu orçamento</h3>
                <p><br>Pellentesque suscipit massa purus, ac ultrices justo lobortis et. Maecenas semper lorem eget justo commodo lacinia a vel velit. Sed in mi gravida, pellentesque elit ut,</p>
            </div>
       
            <div class="orcamento__form" >
                <h4 class="heading-4 orcamento__heading--form">Preencha seu dados</h4>
                <form action="orcamento">
                    <input class="orcamento__input" type="text" id="orcamento-nome" name="nome" placeholder="Seu nome" required>
                    <label class="orcamento__label" for="orcamento-nome">Seu nome</label>

                    <input class="orcamento__input" type="tel" id="orcamento-telefone" name="telefone" placeholder="Seu telefone" required>
                    <label class="orcamento__label" for="orcamento-telefone">Seu telefone</label>

                    <input class="orcamento__input" type="text" id="orcamento-localizacao" name="localizacao" placeholder="Sua localização" required>
                    <label class="orcamento__label" for="orcamento-localizacao">Sua localização</label>
                    
                    <input class="orcamento__input" type="text" id="orcamento-email" name="email" placeholder="Seu e-mail" required>
                    <label class="orcamento__label" for="orcamento-email">Seu e-mail</label>

                    <div class="orcamento__dropdown-row">
                        <label class="orcamento__label--dropdown" for="orcamento-servicos">Serviços</label>
                        <span class="material-symbols-outlined dropdown__arrow">arrow_drop_down</span>
                        <select name="serviços" class="orcamento__dropdown" id="orcamento-servicos" required>
                            <option value="servico" disabled selected>Selecione seu serviço</option>
                            <option value="emergencia">Remoção de urgência e emergência</option>
                            <option value="domiciliar">Remoção Domiciliar e Hospitalar</option>
                            <option value="consulta">Remoção para consulta e exames</option>
                        </select>
                    </div>
                    
                    <button type="submit" class="btn btn-blue orcamento__button">FAZER ORÇAMENTO</button>

                </form>
            </div>

            <div id="popup" class="popup__confirmation" style="display: none;" >
                <div class="popup__message">
                    <h4 class="heading-5">Seus dados foram enviados com sucesso. <br></h5>
                    <p>Em breve entraremos em contato.</p>
                    <button class="popup__button" href="index.php#orcamento" onClick="clickPopupHandler()">VOLTAR</button>
                </div>
            </div>
        
    </section>

    <?php include('./components/footer.php'); ?>
    <?php include('./components/popup-privacidade.php'); ?>

    <script src="./js/script.js"></script>
</body>
</html>