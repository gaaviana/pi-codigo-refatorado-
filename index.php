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
    <?php include 'components/header.php'?>
    <main>
        <section class="feed">
            <div class="post">
                <div class="post-card">
                    <div class="card-header">
                        <div class="card-icon">
                            <i class="far fa-user"></i>
                        </div>
                        <div class="card-header-info">
                            <h3 class="card-titulo">Projeto de Reciclagem Comunitária</h3>
                            <span class="card-data">15 de Março, 2024</span>
                        </div>
                    </div>
                    <div class="post-modal-banner">
                        <img src="https://images.unsplash.com/photo-1531058020387-3be344556be6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80"
                            alt="Banner do evento">
                    </div>
                    <div class="card-main">
                        <p class="card-conteudo">
                            <strong>📍 Local:</strong> Jardim das Flores<br>
                            <strong>🕒 Horário:</strong> 14:00<br>
                            <strong>👥 Organizador:</strong> Maria Silva<br><br>
                            Junte-se a nós nesta iniciativa de conscientização ambiental e reciclagem. Vamos criar
                            pontos de
                            coleta seletiva e aprender sobre a importância da separação correta dos resíduos.
                        </p>
                    </div>
                    <div class="card-footer">
                        <div class="card-acoes">
                            <span class="card-acao">
                                <i class="far fa-calendar-plus"></i>
                                <span>Participar</span>
                            </span>
                            <span class="card-acao">
                                <i class="far fa-share-square"></i>
                                <span>Compartilhar</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div id="postModal" class="post-modal">
            <div class="post-modal-conteudo">
                <span class="fechar-modal">&times;</span>
                <div class="post-modal-banner">
                    <img src="https://images.unsplash.com/photo-1531058020387-3be344556be6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80"
                        alt="Banner do evento">
                </div>

                <div class="post-modal-header">
                    <div class="post-header-icon">
                        <i class="far fa-user"></i>
                    </div>
                    <div class="post-header-info">
                        <h2 class="post-modal-titulo">Projeto de Reciclagem Comunitária</h2>
                        <div class="post-modal-meta">
                            <span><i class="far fa-calendar"></i> 15 de Março, 2024</span>
                            <span><i class="far fa-user"></i> Maria Silva</span>
                        </div>
                    </div>
                </div>

                <div class="post-modal-quebra">
                    <div class="post-modal-main">
                        <div class="post-modal-galeria">
                            <div class="galeria-item">
                                <img src="https://images.unsplash.com/photo-1532996122724-e3c354a0b15b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                    alt="Local do evento 1">
                            </div>
                            <div class="galeria-item">
                                <img src="https://images.unsplash.com/photo-1532996122724-e3c354a0b15b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                    alt="Local do evento 1">
                            </div>
                            <div class="galeria-item">
                                <img src="https://images.unsplash.com/photo-1532996122724-e3c354a0b15b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                    alt="Local do evento 1">
                            </div>
                            <div class="galeria-item">
                                <img src="https://images.unsplash.com/photo-1532996122724-e3c354a0b15b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                    alt="Local do evento 1">
                            </div>
                        </div>

                        <div class="post-modal-descricao">
                            <h3>Sobre o Evento</h3>
                            <p>Junte-se a nós nesta iniciativa de conscientização ambiental e reciclagem. Vamos criar
                                pontos de coleta seletiva e aprender sobre a importância da separação correta dos
                                resíduos.</p>
                            <p>Este evento faz parte do nosso projeto contínuo de sustentabilidade e educação ambiental
                                na comunidade. Durante o evento, teremos:</p>
                            <ul>
                                <li>Workshops sobre reciclagem</li>
                                <li>Atividades práticas de separação de resíduos</li>
                                <li>Palestras sobre sustentabilidade</li>
                                <li>Distribuição de materiais educativos</li>
                            </ul>
                        </div>
                    </div>

                    <div class="post-modal-lateral">
                        <div class="post-modal-info">
                            <div class="secao-info">
                                <h4 class="secao-titulo">
                                    <i class="fas fa-info-circle"></i>
                                    Informações do Evento
                                </h4>
                                <div class="info-item">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span><strong>Local:</strong> Jardim das Flores</span>
                                </div>
                                <div class="info-item">
                                    <i class="far fa-clock"></i>
                                    <span><strong>Horário:</strong> 14:00</span>
                                </div>
                                <div class="info-item">
                                    <i class="far fa-calendar"></i>
                                    <span><strong>Data:</strong> 15 de Março, 2024</span>
                                </div>
                            </div>

                            <div class="secao-info">
                                <h4 class="secao-titulo">
                                    <i class="fas fa-user-friends"></i>
                                    Organizadores
                                </h4>
                                <div class="info-item">
                                    <i class="far fa-user"></i>
                                    <span><strong>Responsável:</strong> Maria Silva</span>
                                </div>
                                <div class="info-item">
                                    <i class="far fa-building"></i>
                                    <span><strong>Organização:</strong> EcoVida</span>
                                </div>
                            </div>


                            <div class="secao-info">
                                <h4 class="secao-titulo">
                                    <i class="fas fa-tag"></i>
                                    Detalhes
                                </h4>
                                <div class="info-item">
                                    <i class="far fa-id-card"></i>
                                    <span><strong>ID do Evento:</strong> #2024031501</span>
                                </div>
                                <div class="info-item">
                                    <i class="fas fa-users"></i>
                                    <span><strong>Vagas:</strong> Ilimitadas</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="post-modal-acoes">
                    <button class="acoes-botao primeiro">
                        <i class="far fa-calendar-plus"></i>
                        Participar do Evento
                    </button>
                    <button class="acoes-botao segundo">
                        <i class="far fa-share-square"></i>
                        Compartilhar
                    </button>
                </div>
            </div>
        </div>

        <section class="ns">

        </section>
    </main>
    <script src="js/main.js"></script>
</body>

</html>