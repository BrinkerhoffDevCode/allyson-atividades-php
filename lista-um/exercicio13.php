<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $ano = '2025';
   function anoBissexto($ano) {
    return ($ano % '4' === '0' && $ano % '100' !== '0') || ($ano % '400' === '0');
}
    ?>
</body>
</html>