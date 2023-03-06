<?php
    $jml = $_GET['jml'];

    echo "<table border=1>\n";

    $col = $jml;

    for ($a = $jml; $a > 0; $a--) {
        
        $j = 0;
        for ($c = $a; $c > 0; $c--) {
            $j += $c;
        }
        echo "<tr>\n";
        echo "<td colspan=$col>Total: $j</td>\n";
        echo "</tr>\n";

        echo "<tr>\n";
        
        for ($b = $a; $b > 0; $b--) {
            echo "<td>$b</td>";
        }
        echo "</tr>\n";
    }
    echo "</table>";
?>