<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/style/gameplay.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Click Frenzy</title>
</head>
<body onload="posicaoAleatoria()">
    <main>
        <section id="jogo">
            <div id="tempo-pontos-div">
                <div id="tempo-pontos-subdiv">
                    <div id="tempo">
                        <span  id="tempo-numero">30s</span>
                    </div>
                    <div id="pontos">
                        <span  id="pontos-numero">0 pontos</span>
                    </div>
                </div>
            </div>
            <section id="bolas-spawn">
                <div id="boll1" class="boll bg-primary rounded-circle position-relative"></div>
                <div id="boll2" class="boll bg-primary rounded-circle position-relative"></div>
                <div id="boll3" class="boll bg-primary rounded-circle position-relative"></div>
            </section>
        </section>
        <section id="tela-final" class="position-relative">
            <div id="div-tela-final">
                <form id="form-tela-final"  class="card bg-light-50 position-absolute card-body" action="../src/script/conexao.php" method="POST">
                    <h5 class="card-title">
                        O tempo acabou!!!
                    </h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary" id="pontos-h6">
                        Vocé fez 0 pontos.
                    </h6>
                    <div id="input-tela-final">
                        <label for="nome-player" class="form-label text-body-secondary-50">Nome:</label>
                        <input name="nome-player" id="nome-player" type="text" class="form-control bg-light" placeholder="Digite seu nome" required>
                        <input type="hidden" name="pontos-numero-evenviar" id="pontos-numero-evenviar">
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg" name="enviar-infos">Enviar</button>
                    <?php
                    
                    include '../src/script/conexao.php';
                    
                    echo tablaPontos()
                    
                    ?>

                </form>
            </div>
        </section>
    </main>
    <script src="../src/script/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
