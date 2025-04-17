<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>index</title>
</head>

<body>
    <?php include 'components/header.php' ?>
    <main>
        <section class="feed">
            <?php include 'components/cards.php' ?>
        </section>
    </main>

    <?php include 'components/card-modal.php' ?>
    <script src="js/main.js"></script>
</body>

</html>