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
    <div class="criar-container">
        <div class="criar-botoes">
            <button id="btnProjetp" class="criar-botao">Novo Projeto</button>
            <button id="btnEvento" class="criar-botao">Novo Evento</button>
        </div>

        <div class="formularios">
            <h2>Criar Novo Projeto</h2>

            <form id="formProjeto">
                <div class="form">
                    <label for="nomeprojeto">Nome do Projeto</label>
                    <input type="text" id="nomeProjeto" name="nomeProjeto" placeholder="Nome do Projeto" required>
                </div>

                <div class="form">
                    <label for="descricaoProjeto">Descrição</label>
                    <textarea name="descricaoProjeto" id="descricaoProjeto" placeholder="Descreva seu projeto..." required></textarea>
                </div>

                <div class="form">
                    <label for="dataProjeto">Data</label>
                    <input type="date" name="dataProjeto" id="dataProjeto" required>
                </div>

                <div class="form">
                    <label for="horarioProjeto">Horario</label>
                    <input type="time" name="horarioProjeto" id="horarioProjeto" required>
                </div>
                <!-- PAREI AQUI NEGO TO EM DUVIDA SE VAI TER Q MUDAR O JS -->
                <div class="form">
                    <label for="cepEvento">CEP</label>
                    <div class="cep">
                        <input type="text" name="cepEvento" id="cepEvento" placeholder="00000-000" required>
                        <button type="button" id="buscarBtn" class="btnCEP">buscar</button>
                    </div>
                    <div id="resultado"></div>
                </div>

                <div class="form formCep">
                    <label for="ruaEvento">Rua</label>
                    <input type="text" id="ruaEvento" name="ruaEvento" required>
                </div>

                <div class="form formCep">
                    <label for="complementoEvento">complemento</label>
                    <input type="text" id="complementoEvento" name="complementoEvento">
                </div>

                <div class="form formCep">
                    <label for="bairroEvento">Bairro</label>
                    <input type="text" id="bairroEvento" name="bairroEvento" required>
                </div>

                <div class="form formCep">
                    <label for="cidadeEvento">Cidade</label>
                    <input type="text" id="cidadeEvento" name="cidadeEvento" required>
                </div>

                <div class="form formCep">
                    <label for="estadoEvento">Estado</label>
                    <input type="text" id="estadoEvento" name="estadoEvento" required>
                </div>

                <div class="form">
                    <label for="celularEvento">Telefone</label>
                    <input type="tel" id="celularEvento" name="celularEvento" required placeholder="99-9999-9999">
                </div>

                <div class="form">
                    <label for="imagemEvento">Imagem do Evento</label>
                    <input type="file" id="imagemEvento" name="imagemEvento" accept="image/*" required>
                </div>
            </form>

            <form id="formEvento" style="display: none;">
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

                <div class="form formCep">
                    <label for="ruaEvento">Rua</label>
                    <input type="text" id="ruaEvento" name="ruaEvento" required>
                </div>

                <div class="form formCep">
                    <label for="complementoEvento">complemento</label>
                    <input type="text" id="complementoEvento" name="complementoEvento">
                </div>

                <div class="form formCep">
                    <label for="bairroEvento">Bairro</label>
                    <input type="text" id="bairroEvento" name="bairroEvento" required>
                </div>

                <div class="form formCep">
                    <label for="cidadeEvento">Cidade</label>
                    <input type="text" id="cidadeEvento" name="cidadeEvento" required>
                </div>

                <div class="form formCep">
                    <label for="estadoEvento">Estado</label>
                    <input type="text" id="estadoEvento" name="estadoEvento" required>
                </div>

                <div class="form">
                    <label for="celularEvento">Telefone</label>
                    <input type="tel" id="celularEvento" name="celularEvento" required placeholder="99-9999-9999">
                </div>

                <div class="form">
                    <label for="imagemEvento">Imagem do Evento</label>
                    <input type="file" id="imagemEvento" name="imagemEvento" accept="image/*" required>
                </div>
            </form>
        </div>
    </div>

    <?php include 'components/nav.php' ?>

    <script type="module">
        import {
            buscarCEP
        } from './js/modules/cep.js';

        document.addEventListener('DOMContentLoaded', () => {
            document.getElementById('buscarBtn').addEventListener('click', function(e) {
                e.preventDefault();

                const cep = document.getElementById('cepEvento').value;
                buscarCEP(cep, 'resultado')

                const formCep = document.querySelectorAll('.formCep');
                formCep.forEach(el => el.classList.add('ativo'));
            });
        });

        const url = new URLSearchParams(window.location.search);

        const nome = url.get('nome');

        if (nome) {
            document.getElementById('nomeEvento').value = nome;
        }
    </script>
</body>

</html>