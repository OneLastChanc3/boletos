<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <title>Infojobs</title>
</head>

<body>
    <?php require_once '../autoload.php';
         require_once '../src/Controllers/Lib/Routes/web.php';
    
    ?>
    <header>
        <?php include __DIR__ . '/../src/Views/components/NavBar.php'; ?>
    </header>
    <?php include __DIR__ . '/../src/Views/components/Carousel.php'; ?>



    <div class="container">
        <div class="my-4 text-center">
            <h2>Eventos destacados</h2>
        </div>
        <section style="
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            justify-content: center;
        ">
            <?php include __DIR__ . '/../src/Views/components/Card.php'; ?>
            <?php include __DIR__ . '/../src/Views/components/Card.php'; ?>
            <?php include __DIR__ . '/../src/Views/components/Card.php'; ?>
            <?php include __DIR__ . '/../src/Views/components/Card.php'; ?>
            <?php include __DIR__ . '/../src/Views/components/Card.php'; ?>
            <?php include __DIR__ . '/../src/Views/components/Card.php'; ?>
        </section>
    </div>
    <footer>
        <?php include __DIR__ . '/../src/Views/components/Footer.php' ?>
    </footer>
</body>

</html>