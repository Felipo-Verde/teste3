<?php
require_once "banco.php";
require_once "tabelas.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Barbearia Show!</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/" />

    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet" />

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, 0.1);
            border: solid rgba(0, 0, 0, 0.15);
            border-width: 1px 0;
            box-shadow: inset 0 0.5em 1.5em rgba(0, 0, 0, 0.1),
                inset 0 0.125em 0.5em rgba(0, 0, 0, 0.15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -0.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        ul {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        nav {
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .links {
            width: 100%;
            display: flex;
            flex: 1;
            justify-content: space-around;
            align-items: center;
        }

        ul {
            display: flex;
            gap: 300px;
            align-items: center;
        }
    </style>

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet" />


</head>

<body class="d-flex flex-column min-vh-100" style="background-color: #040d12; margin: 0; padding: 0; max-width: 100vw;">

    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #09181f">

        <a class="navbar-brand" href="index.php" style="width: 20%; margin-left: 30px">
            <img src="logoCortada.jpg" alt="Logo" style="width: 100%">
        </a>


        <div class="navbar-collapse justify-content-end" style="width: 25%; margin-right: 30px">
            <button class="btn btn-primary" type="button" style="padding: 30px 100px;">
                <a href="logando.php" style="color: white; text-decoration: none">
                    <h5>Login</h5>
                </a>
            </button>
        </div>

    </nav>

    <main class="mx-auto" style="width: 30%">

        <h1 class="mx-auto" style="text-align: center; color: white"> Altere uma Reserva </h1>

        <form method="post" class="mx-auto" action="update.php" style="padding-top: 20px; margin-bottom: 50px;">
            <div class="form-floating" style="margin: 22px;">
                <input type="text" class="form-control" id="nome" name="nome" value="<?php  ?>" required />
                <label for="nome">Nome</label>
            </div>
            <div class="form-floating" style="margin: 22px;">
                <input type="email" class="form-control" id="email" name="email" placeholder="exeplo@123.com" required />
                <label for="email">E-mail</label>
            </div>
            <div class="form-floating" style="margin: 22px;">
                <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="(99)99999-9999" required />
                <label for="telefone">Telefone</label>
            </div>
            <div class="form-floating" style="margin: 22px;">
                <input type="date" class="form-control" id="data" name="data" placeholder="dd/mm/aaaa" required />
                <label for="data">Data</label>
            </div>
            <div class="form-floating" style="margin: 22px;">
                <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="servico">
                    <?php
                    $servicos = select_servicos();
                    foreach ($servicos as $servico) {

                        echo "<option value=\"{$servico['id']}\">{$servico['tipo']}</option>";
                    }
                    ?>
                </select>
                <label for="floatingSelect">Serviço</label>
            </div>
            <div style="margin: 22px;">
                <h5 class="text-light">Barbeiro</h5>
                <?php
                $barbeiros = select_barbeiros();
                foreach ($barbeiros as $barbeiro) {

                    echo "<div class='form-check'>";
                    echo "<input class=\"form-check-input\" type=\"radio\" name=\"barbeiro\" id=\"barbeiro_{$barbeiro['id']}\" value=\"{$barbeiro['id']}\" required>";
                    echo "<label class=\"form-check-label text-light\" for=\"barbeiro_{$barbeiro['id']}}\"> {$barbeiro['nome_barbeiro']} </label>";
                    echo "</div>";
                }
                ?>
            </div>
            <div class="form-floating" style="margin: 22px;">
                <textarea class="form-control" placeholder="na régua" id="corte" name="corte" style="height: 100px"></textarea>
                <label for="floatingTextarea2">Como gostaria do seu corte?</label>
            </div>
            <div class="form-check" style="margin: 22px;">
                <input class="form-check-input" type="checkbox" name="notificacao" id="notificacao" value="1">
                <label class="form-check-label text-light" for="notificacao">
                    Deseja receber notificações via E-mail?
                </label>
            </div>
            <button type="submit" class="btn btn-primary" style="width: 50%; margin-left: 25%;">Enviar</button>
            </div>
        </form>
    </main>

</body>

</html>