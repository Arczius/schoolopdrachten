<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Onkunde</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
        <header>
            <div class="top">
                <h1>Mad Libs</h1>
            </div>
            <div class="bottom">
                <p>er heerst... onkunde</p>
            </div>
        </header>
        <main>
            <form action="./onkunde.php" method="post" class="form">
                <p>Wat zou je graag willen kunnen?</p>                
                <input type="text" name="kunnen">
                <p> Met welke persoon kun je goed opschieten?</p>
                <input type="text" name="persoon">
                <p>Wat is je favoriete getal?</p>                
                <input type="text" name="favNumber">
                <p>Wat heb je altijd bij je als je op vakantie gaat?</p>
                <input type="text" name="vakantie">
                <p>Wat is je beste persoonlijke eigenschap?</p>                
                <input type="text" name="bestPer">
                <p>Wat is je slechtste persoonlijke eigenschap?</p>
                <input type="text" name="worstPer">
                <p>Wat is het ergste dat je kan overkomen?</p>
                <input type="text" name="worstOver">
                <div></div>
                <input type="submit" value="Versturen">
            </form>
        </main>
        <footer>
            <p>deze website is gemaakt door Damian Vaartmans 99061149 &copy; 2022</p>
        </footer>
    </div>
</body>
</html>