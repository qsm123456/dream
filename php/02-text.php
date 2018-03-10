
<?php
echo "<table  border='1'>";
for($i=1;$i<=9;$i++){
    echo "<tr>";
    for($j=1;$j<=$i;$j++){
        echo "<td>$i*$j=".($i*$j)."</td>";
    }
    echo "</tr>";
}
echo '</table>';
?>


<?php
echo "<table  border='1'>";
for($i=9;$i>=1;$i--){
    echo "<tr>";
    for($j=1;$j<=$i;$j++){
        echo "<td>$i*$j=".($i*$j)."</td>";
    }
    echo "</tr>";
}
echo '</table>';
?>


<?php
echo "<table  border='1'>";
for($i=9;$i>=1;$i--){
    echo "<tr>";
	for($z=1;$z<=9-$i;$z++){
		echo '<td> </td>';
	}
    for($j=1;$j<=$i;$j++){
        echo "<td>$i*$j=".($i*$j)."</td>";
    }
    echo "</tr>";
}
echo '</table>';
?>

<?php
echo "<table  border='1'>";
for($i=1;$i<=9;$i++){
    echo "<tr>";
	for($z=1;$z<=9-$i;$z++){
		echo "<td> </td>";
	};
    for($j=1;$j<=$i;$j++){
        echo "<td>$i*$j=".($i*$j)."</td>";
    }
    echo "</tr>";
}
echo '</table>';
?>

