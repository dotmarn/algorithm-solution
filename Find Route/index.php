<?php
function find_from($routes, $dest)
{
    $from = null;
    foreach ($routes as $key => $value) {
        if ($value[1] == $dest) {
            $from = $value[0];
        }
    }
    return $from;
}

function find_dest($routes, $from)
{
    $dest = null;
    foreach ($routes as $key => $value) {
        if ($value[0] == $from) {
            $dest = $value[1];
        }
    }
    return $dest;
}

function find_routes(array $routes): string
{
    $output = [];

    if (sizeof($routes) == 0) {
        return $output;
    }

    $firstFrom = null;
    $from = $routes[0][0];
    $dest = null;
    $counter = 0;
    do {
        $firstFrom = find_from($routes, $from);
        if ($firstFrom != null) {
            $from = $firstFrom;
        }
        $counter++;
    } while ($firstFrom != null && $counter < sizeof($routes));

    array_push($output, $from);

    $counter = 0;
    do {
        $dest = find_dest($routes, $from);
        if ($dest != null) {
            array_push($output, $dest);
            $from = $dest;
        }
        $counter++;
    } while ($dest != null && $counter < sizeof($routes));

    return implode(", ", $output);
}
