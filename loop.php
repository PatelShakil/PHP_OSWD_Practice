<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop</title>
</head>
<body>

<table border="1" style="border-collapse: collapse;" >
    <thead>
        <th>No.</th>
    </thead>

    <tbody>
            <?php 
            $n=10;
            $ar=[1,2,3,4,5];
            for($i=0;$i<count($ar);$i++){ ?>
            <!-- for($i=1;$i<=10;$i++){ ?> -->

                <!-- <tr><td><?php echo $i; ?></td></tr> -->
                <tr><td><?php echo $ar[$i]; ?></td></tr>

            <?php } ?>

    </tbody>
</table>
</body>
</html>