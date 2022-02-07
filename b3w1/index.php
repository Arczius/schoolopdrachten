<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>b3w1</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body> 
    <?php
        //timezone instelling, voor nl Europe/Amsterdam
        date_default_timezone_set('Australia/Sydney');
        $hour = date("G:i");
        $hourCheck = date("G");
        if($hourCheck >= 6 && $hourCheck < 12){
            ?>
           <div class="container morning">
               <div class="content">
                   <p>goede morgen</p>
                   <p>het is nu <?php echo $hour;?></p> 
               </div>
          </div> 
        <?php
        }

        else if($hourCheck >= 12 && $hourCheck < 18){
            ?>
                 <div class="container afternoon">
                    <p>goede middag</p>
                    <p>het is nu <?php echo $hour;?></p> 
                 </div>
            <?php 
        }

        else if($hourCheck >= 18){
            ?>
            <div class="container evening">
                <p>goede avond</p> 
                <p>het is nu <?php echo $hour;?></p> 
            </div>
            <?php
        }
        else{
            ?>
            <div class="container night">
                <p>goede nacht</p>
                <p>het is nu <?php echo $hour;?></p> 
            </div>
            <?php
        }
    ?> 
</body>
</html>