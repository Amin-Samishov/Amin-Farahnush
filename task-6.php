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



