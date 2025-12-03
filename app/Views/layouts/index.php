<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?? 'Mi sitio' ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <style>

        html, body {
            height: 100%;
        }
        body {
            display: flex;
            flex-direction: column;
        }
        main {
            flex: 1; 
        }
    </style>
</head>
<body>

    <?php include __DIR__ . '/../components/Header.php'; ?>

    <main>
        <?= $content ?>
    </main>

    <?php include __DIR__ . '/../components/Footer.php'; ?>

</body>
</html>
