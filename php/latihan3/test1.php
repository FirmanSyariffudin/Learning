<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .warnaBaris{
        background-color:silver;
    }
    </style>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <!-- gaya biasa -->
        <!-- <?php 
        for($i=1 ; $i <= 3; $i++){
            echo "<tr>";
            for($j=1; $j <=5; $j++){
                echo "<td>$i,$j</td>";
            }
            echo "</tr>";
        }
        ?> -->

        <!-- gaya template -->
        <?php for( $i = 1; $i <=5; $i++ ): ?>
            
            <?php if ($i % 2 == 1):?>
                <tr class="warnaBaris">
                <?php else:?>
                <tr>
            <?php endif;?>

            <?php for( $j=1; $j <= 7; $j++ ) { ?>
                <td><?php echo"$i,$j"; ?></td>
            <?php }?>

            </tr>
            
        <?php endfor; ?>
    </table>
</body>
</html>