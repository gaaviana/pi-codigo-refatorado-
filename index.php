<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>index</title>
</head>

<body>
    <header>
        <div>
            <h1 class="header-titulo">Página inicial</h1>
            <div class="header-links">
                <a href="" class="header-link">Para você</a>
                <a href="" class="header-link">Seguindo</a>
            </div>
        </div>
    </header>
    <main>
        <section class="acoes-index">
            <div>
                <div class="pesquisa-container">

                    <button class="nav-icon pesquisa-icon" id="searchToggle">
                        <i class="fas fa-search"></i>
                        <span>Pesquisar</span>
                    </button>

                    <div class="barra-pesquisa">
                        <input type="text" placeholder="Pesquisar projetos...">
                        <button class="botao-pesquisa">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>

                    <button class="botao-cria">
                        <i class="fas fa-plus-circle"></i>
                    
                </div>
        </section>
        <section class="feed">
            <?php include 'components/cards.php' ?>
        </section>
    </main>

    <?php include 'components/nav.php' ?>
    <?php include 'components/card-modal.php' ?>
</body>
<script src="js/index.js"></script>

</html>