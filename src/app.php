<?php

require "Map.php";
require "Player.php";
require "Game.php";

/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

fscanf(STDIN, "%d %d %d", $width, $height, $myId);
for ($i = 0; $i < $height; $i++)
{
    $line = stream_get_line(STDIN, $width + 1, "\n");
}

// Write an action using echo(). DON'T FORGET THE TRAILING \n
// To debug (equivalent to var_dump): error_log(var_export($var, true));

echo("7 7\n");

// game loop
while (TRUE)
{
    fscanf(STDIN, "%d %d %d %d %d %d %d %d", $x, $y, $myLife, $oppLife, $torpedoCooldown, $sonarCooldown, $silenceCooldown, $mineCooldown);
    fscanf(STDIN, "%s", $sonarResult);
    $opponentOrders = stream_get_line(STDIN, 200 + 1, "\n");

    // Write an action using echo(). DON'T FORGET THE TRAILING \n
    // To debug (equivalent to var_dump): error_log(var_export($var, true));

    echo("MOVE N TORPEDO\n");
}
