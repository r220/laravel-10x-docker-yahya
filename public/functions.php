<?php

function echo_number($row, $row_color)
{
    switch ($row_color) {
        case 1:
            echo "<td style=\"color: red\">" . $row . "</td>";
            break;
        case 0:
            echo "<td>" . $row . "</td>";
            break;
        case -1:
            echo "<td style=\"color: blue\">" . $row . "</td>";
            break;
    }
}
