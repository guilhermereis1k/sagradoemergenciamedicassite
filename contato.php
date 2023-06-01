<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <title>SAGRADO BETEL Emergência Médicas | Contato</title>
    <link rel="icon" type="image/x-icon" href="img/flavicon.png">
</head>
<body>
    <?php include('./components/header.php'); ?>

    <a href="https://api.whatsapp.com/send?phone=5511971674912"><img class="whats-app" src="img/zap-icon.png" alt="Ícone do WhatsApp"></a>
    
    <main class="contato">
        <section class="contato__row">
        <h3 class="heading-3 contato__heading margin-bottom-4">Entre em contato</h3>
        <form action="" class="contato__form" id="contato">
            <div class="contato__nome">
                <input class="contato__input" type="text" id="contato-nome" name="nome" placeholder="Seu nome" required>
                <label class="contato__label" for="contato-nome">Seu nome</label>
            </div>

            <div class="contato__telefone">
                <input class="contato__input" type="tel" id="contato-telefone" name="telefone" placeholder="Seu telefone" required>
                <label class="contato__label" for="contato-telefone">Seu telefone</label>
            </div>

            <div class="contato__email">
                <input class="contato__input" type="text" id="contato-email" name="email" placeholder="Seu e-mail" required>
                <label class="contato__label" for="contato-email">Seu e-mail</label>
            </div>

            <div class="contato__mensagem">
                <label class="contato__label--msg" for="contato-mensagem">Sua mensagem</label><br>
                <textarea  placeholder="Escreva sua mensagem aqui..."></textarea>
            </div>

            <input type="submit" class="btn btn-blue contato__button" value="ENVIAR">
        </form>
        </section>

        

        <img src="img/ambulance-1.png" alt="Ambulância" class="contato__img">
    </main>

    <?php include('./components/footer.php'); ?>
</body>
</html>