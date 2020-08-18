<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    
    .fail{

        color:red;
    }
    
    </style>
</head>
<body>

<?php

    $scoreList=array(100,90,50,95);

?>

<ul>
    <?php foreach($scoreList as $score){ ?>      
        <?php  if($score>60){ ?> 
                <li><?= $score ?></li>            
        <?php }else {?>
                <li class="fail"><?= $score ?></li> 
            <?php }?> 
    <?php }?>
</ul>

<hr>

<ul>
    <?php  foreach($scoreList as $score){ ?>      

        <li class="<?=(($score<60)? "fail" : "")?>">
        
            <?= $score ?>
        </li> 
    <?php }?>
</ul>
    
</body>
</html>