<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Criar</title>
</head>

<body>
    <div class="formularios">
        <h2>Criar Novo Projeto</h2>
        <form id="formEvento">
            <div class="form">
                <label for="nomeEvento">Nome do Evento</label>
                <input type="text" id="nomeEvento" name="nomeEvento" placeholder="Nome do Evento" required>
            </div>

            <div class="form">
                <label for="descricaoEvento">Descrição</label>
                <textarea name="descricaoEvento" id="descricaoEvento" placeholder="Descreva seu evento..." required></textarea>
            </div>

            <div class="form">
                <label for="dataEvento">Data</label>
                <input type="date" name="dataEvento" id="dataEvento" required>
            </div>

            <div class="form">
                <label for="horarioEvento">Horario</label>
                <input type="time" name="horarioEvento" id="horarioEvento" required>
            </div>

            <div class="form">
                <label for="cepEvento">CEP</label>
                <div class="cep">
                    <input type="text" name="cepEvento" id="cepEvento" placeholder="00000-000" required>
                    <button type="button" id="buscarBtn" class="btnCEP">buscar</button>
                </div>
                <div id="resultado"></div>
            </div>

            <div class="form">
                <label for="ruaEvento">Rua</label>
                <input type="text" id="ruaEvento" name="ruaEvento" readonly>
            </div>

            <div class="form">
                <label for="bairroEvento">Bairro</label>
                <input type="text" id="bairroEvento" name="bairroEvento" readonly>
            </div>

            <div class="form">
                <label for="cidadeEvento">Cidade</label>
                <input type="text" id="cidadeEvento" name="cidadeEvento" readonly>
            </div>

            <div class="form">
                <label for="estadoEvento">Estado</label>
                <input type="text" id="estadoEvento" name="estadoEvento" readonly>
            </div>
        </form>
    </div>

    <?php include 'components/nav.php' ?>
</body>

<!-- nao ta funcionando -->
<script src="./js/criar.js"></script>

<script type="module">
    import {
        buscarCEP
    } from './js/criar.js';

    document.addEventListener('DOMContentLoaded', () => {
        document.getElementById('buscarBtn').addEventListener('click', function(e) {
            e.preventDefault();
            const cep = document.getElementById('cepEvento').value;
            buscarCEP(cep, 'resultado')
        });
    });
</script>

</html>