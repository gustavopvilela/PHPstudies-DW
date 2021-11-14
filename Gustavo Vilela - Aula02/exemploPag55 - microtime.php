<html>
<head>
    <meta charset="UTF-8">
    <title>Exemplo da pág. 55 - Microtime</title>
</head>
<body>
    <?php
        $time_start = microtime(true);
        # captura o tempo neste instante

        usleep(1000000);
        # aguarda 1 segundo

        $time_end = microtime(true);
        # captura o tempo após 1 microssegundo

        $time = $time_end - $time_start;

        echo "Já se passaram $time segundos\n";
        # mostra a diferença entre a captura do tempo anterior e o atual
    ?>
</body>
</html>