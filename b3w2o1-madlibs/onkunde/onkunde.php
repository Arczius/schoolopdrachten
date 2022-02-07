<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
        <header>
            <div class="top">
                <h1>Mad Libs</h1>
            </div>
            <div class="bottom">
                <p>er heerst... paniek</p>
            </div>
        </header>
        <main>
            <h1>Onkunde</h1>
            <?php 
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $kunnen = $_POST['kunnen'];
                    $persoon = $_POST['persoon'];
                    $favNumber = $_POST['favNumber'];
                    $vakantie = $_POST['vakantie'];
                    $bestPer = $_POST['bestPer'];
                    $worstPer = $_POST['worstPer'];
                    $worstOver = $_POST['worstOver'];
                    ?>
                    <p>Er zijn veel mensen die niet kunnen <?php echo $kunnen; ?>. Neem nou <?php echo $persoon; ?>, zelfs met de hulp van een <?php echo $vakantie; ?> of zelfs <?php echo $favNumber; ?> kan <?php echo $persoon; ?> niet <?php echo $kunnen; ?>. dat heeft niet te maken met een gebrek aan <?php echo $bestPer; ?>, maar met een te veel aan <?php echo $worstPer; ?>. te veel <?php $worstPer; ?> leidt tot <?php echo $worstOver; ?> en dat is niet goed als je wilt <?php echo $kunnen?>. helaas voor <?php echo $persoon; ?></p>
                    <?php
                } 
            ?>
        </main>
        <footer>
            <p>deze website is gemaakt door Damian Vaartmans 99061149 &copy; 2022</p>
        </footer>
    </div> 
</body>
</html>