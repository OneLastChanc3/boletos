<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Infojobs</title>
</head>

<body>
    
    <?php include __DIR__ . '/../app/Views/components/Carousel.php'; ?>



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
            <?php include __DIR__ . '/../app/Views/components/Card.php'; ?>
            <?php include __DIR__ . '/../app/Views/components/Card.php'; ?>
            <?php include __DIR__ . '/../app/Views/components/Card.php'; ?>
            <?php include __DIR__ . '/../app/Views/components/Card.php'; ?>
            <?php include __DIR__ . '/../app/Views/components/Card.php'; ?>
            <?php include __DIR__ . '/../app/Views/components/Card.php'; ?>
        </section>
    </div>
    
</body>

</html>