<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- css -->
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <!-- header -->
    <header class="ms_header">
        <img class="header-logo" src="../img/logo.png" alt="">
    </header>
    <!-- /header -->

    <!-- main -->
    <main>
        <div class="container">
            <!-- includo il database -->
            <?php include __DIR__ . "/../database.php"; ?>
                <?php foreach ($database as $item) { ?>
            <div class="album-card">
                <div class="card_image">
                    <?php echo '<img src="' . $item["poster"] . '" alt="error">'; ?>
                </div>
                <h3>
                    <?php echo $item["title"]; ?>
                </h3>
                <h4>
                    <?php echo $item["author"]; ?>
                </h4>
                <div class="year">
                    <?php echo $item["year"]; ?>
                </div>
            </div>
            <?php } ?>
        </div>
    </main>
    <!-- /main -->

</body>
</html>