<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital@1&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">
    <title>Trindade FullStack</title>
</head>
<style>
    * {
        padding: 0;
        margin: 0;
    }

    .tabela {
        padding: 0px 20px;
        font-family: 'Comfortaa', cursive;
    }
</style>

<body>
    <?php
    $i = 0;
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];
    $n4 = $_POST['n4'];

    $v = [
        2 => $n1 * 2,
        3 => $n1 * 3,
        4 => $n1 * 4,
        5 => $n1 * 5,
        6 => $n1 * 6,
    ];

    $elev = [
        2 => pow($n1, 2),
        3 => pow($n1, 3),
        4 => pow($n1, 4),
        5 => pow($n1, 5),
        6 => pow($n1, 6),
    ];

    $delta = (pow($n2, 2)) - 4 * $n1 * $n3;
    $x1 = ((0 - $n2) + (sqrt($delta))) / 2;
    $x2 = ((0 - $n2) - (sqrt($delta))) / 2;

    $media = ($n1 + $n2 + $n3 + $n4) / 4;

    $restodiv = [
        0 => $n1 % 2,
        1 => $n2 % 2,
        2 => $n3 % 2,
        3 => $n4 % 2,
    ];
    ?>
    <br>
    <div class="tabela">
        <table border="1" class=" table is-bordered">
            <tr>
                <td>Multiplicação(*)</td>
                <td>Potenciação(^)</td>
            </tr>
            <?php
            $i = 2;
            while ($i < 6) {
                echo ("<tr>
                    <td>$v[$i]</td>
                    <td>$elev[$i]</td>
                </tr>");
                $i += 1;
            }
            ?>
        </table>
    </div>
    <br>
    <div class="tabela">
        <table border="1" class=" table is-bordered">
            <tr>
                <td>Delta</td>
                <td>X1</td>
                <td>X2</td>
            </tr>
            <?php
            $i = 2;
            echo ("<tr>
                <td>$delta</td>
                <td>$x1</td>
                <td>$x2</td>
            </tr>");
            ?>
        </table>
    </div>
    <br>
    <div class="tabela">
        <table border="1" class="table is-bordered">
            <tr>
                <td>Média</td>
            </tr>
            <?php
            $i = 2;
            echo ("<tr>
                <td>$media</td>
            </tr>");
            ?>
        </table>
    </div>
    <br>
    <div class="tabela">


        <table border="1" class="table is-bordered">
            <tr>
                <td>Nº1 é impopar?</td>
                <td>Nº2 é impopar?</td>
                <td>Nº3 é impopar?</td>
                <td>Nº4 é impopar?</td>
            </tr>
            <?php
            $i = 0;
            echo ("<tr>");
            while ($i < 4) {
                if ($restodiv[$i] != 0) {
                    echo ("<td>Ímpar</td>");
                } else {
                    echo ("<td>Par</td>");
                }
                $i += 1;
            }
            echo ("</tr>");
            ?>
        </table>
    </div>
</body>

</html>