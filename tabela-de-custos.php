<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>SAGRADO BETEL Emergência Médicas | Tabela de custos</title>
    <link rel="icon" type="image/x-icon" href="img/flavicon.png">
</head>
<body>
    <?php include('./components/header.php'); ?>

    <a href="https://api.whatsapp.com/send?phone=5511971674912"><img class="whats-app" src="img/zap-icon.png" alt="Ícone do WhatsApp"></a>
    
    <main class="tabela-de-custos">
        <h3 class="heading-3 tabela__heading margin-bottom-4">Nossa tabela de custos</h3>
        
        <table class="tabela">
            <tr>
                <th></th>
                <th>Contém pacote emergencial</th>
                <th>Contém atendimento imediato</th>
                <th>Preço</th>
            </tr>
            <tbody class="tabela__corpo">
            <tr>
                <th>Serviço 1</th>
                <td><span class="material-symbols-outlined tabela__icon--yes">check_circle</span></td>
                <td><span class="material-symbols-outlined tabela__icon--no">close</span></td>
                <td>R$ 89,00</td>
            </tr>
            <tr>
                <th>Serviço 2</th>
                <td><span class="material-symbols-outlined tabela__icon--yes">check_circle</span></td>
                <td><span class="material-symbols-outlined tabela__icon--no">close</span></td>
                <td>R$ 89,00</td>
            </tr>
            <tr>
                <th>Serviço 3</th>
                <td><span class="material-symbols-outlined tabela__icon--yes">check_circle</span></td>
                <td><span class="material-symbols-outlined tabela__icon--no">close</span></td>
                <td>R$ 89,00</td>
            </tr>
            <tr>
                <th>Serviço 4</th>
                <td><span class="material-symbols-outlined tabela__icon--yes">check_circle</span></td>
                <td><span class="material-symbols-outlined tabela__icon--no">close</span></td>
                <td>R$ 89,00</td>
            </tr>
            <tr>
                <th>Serviço 5</th>
                <td><span class="material-symbols-outlined tabela__icon--yes">check_circle</span></td>
                <td><span class="material-symbols-outlined tabela__icon--no">close</span></td>
                <td>R$ 89,00</td>
            </tr>
            </tbody>
        </table>

        <a href="#" class="btn btn-blue tabela__button">FAZER ORÇAMENTO</a>
    </main>

    <?php include('./components/footer.php'); ?>

</body>
</html>