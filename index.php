<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$countAverage = 0;
$average = 0;
$count = 0;
$data = [
    [
        'name' => 'Alice',
        'grades' => array(4, 3, 5, 4, 5)
    ],
    [
        'name' => 'Bob',
        'grades' => array(3, 4, 3, 5, 4)
    ],
    [
        'name' => 'Chalrie',
        'grades' => array(5, 5, 5, 5, 5)
    ]
];
?>

<table style="border: 1px black" width="60%">
    <tr>
        <td>
            Name
        </td>
        <td>
            Grades 1
        </td>
        <td>
            Grades 2
        </td>
        <td>
            Grades 3
        </td>
        <td>
            Grades 4
        </td>
        <td>
            Grades 5
        </td>
        <td>
            Average
        </td>
    </tr>
    <?php
    foreach ($data as $item) {

    ?>
    <tr>
        <td>
            <?php
            echo $item['name']
            ?>
        </td>
        <?php
        foreach ($item['grades'] as $item2) {

        ?>
        <td>
            <?php
            echo $item2;
            ?>
        </td>
        <?php
            $average += $item2;
            $count++;
        }
        ?>
        <td>
            <?php
            echo $average /= $count;
            ?>
        </td>
    <?php
    $countAverage += $average;
    $average = 0;
    $count = 0;
    }
    ?>
    </tr>
    <tr>
        <td>
            Average
        </td>
        <?php
        $sumAverage = array_fill(0, count($data[0]['grades']), 0);
        foreach ($data as $item) {
            foreach ($item['grades'] as $key => $items) {
                $sumAverage[$key] += $items;
            }
        }
        for ($i = 0; $i < count($sumAverage); $i++){
            $sumAverage[$i] /= count($data);
        ?>
        <td>
            <?php
                echo round($sumAverage[$i], 1);
            ?>
        </td>
        <?php
             }
            ?>
        <td>
            <?php
            echo round(($countAverage / count($data)), 1) ;
            ?>
        </td>
    </tr>
</table>
</body>
</html>
