<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/styles/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>My Art</title>
</head>
<body id="art-page">
    <main>
        <?= include('./admin.php'); ?>
        <div class="image-grid">
            <ul>
                <?php for($i=0; $i<count($images); $i++):
                    $isBig = '';
                    if ($i/5  === 1) {
                        $isBig = 'big1 blub';
                    } elseif ($i/10 === 1) {
                        $isBig = 'big2 blub';
                    }
                    
                    echo "<li class='$isBig'><img src='../../assets/$images[$i]'></li>"
                    ?>
                <?php endfor; ?>
            </ul>
        </div>
    </main>
    <?php include("./pagelets/navigation.php"); ?>
</body>
</html>