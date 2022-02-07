<?php
$fauna = array(array("birds" => "arra",
    "colour" => "red",
    "beak" => "chiseling"
),
    array("birds" => "sparrow",
        "colour" => "dark",
        "beak" => "insect",
    ),
    array("birds" => "crow",
        "colour" => "black",
        "beak" => "grain",
    ),
);

$fauna_filters = [];
foreach ($fauna as $row)
{
    $fauna_filters[$row['birds']][] = $row['colour'];
}

foreach ($fauna_filters as $birds => $colours)
{
    echo '<div>';
    foreach ($colours as $colour)
    {
        echo $colour.' - '.$birds.'<br>';
    }
    echo '</div>';
}
$fauna_filters = [];
foreach ($fauna as $row)
{
    $fauna_filters[$row['birds']][] = $row['beak'];
}

foreach ($fauna_filters as $birds => $beaks)
{
    echo '<div>';
    foreach ($beaks as $beak)
    {
        echo $beak.' - '.$birds.'<br>';
    }
    echo '</div>';
}

array_unshift($fauna, null);
$fauna = call_user_func_array("array_map", $fauna);
print_r($fauna);


