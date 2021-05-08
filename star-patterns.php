<?php
echo "Start pattern : 1";
echo '<br>';

$no_of_rows = 10;
for ($i = 0; $i < $no_of_rows; $i++) {
    for ($j = 0; $j < $no_of_rows ; $j++) { 
        echo "*";
    }
    echo '<br>';
}

echo "Start pattern : 2";
echo '<br>';

for ($i = 0; $i < $no_of_rows; $i++) {
    for ($j = 0; $j <= $i ; $j++) { 
        echo "*";
    }
    echo '<br>';
}

echo "Start pattern : 3";
echo '<br>';

for ($i = 0; $i < $no_of_rows; $i++) {
    for( $j = $no_of_rows; $j > $i; $j-- ) {
        echo "*";
    }
    echo '<br>';
}

echo "Start pattern : 4";
echo '<br>';
// Print Row.

for ($i = 0; $i < $no_of_rows; $i++) { 
    // Print space.
    for ($j = $no_of_rows - 1; $j > $i; $j--) { 
        echo "&nbsp;&nbsp;";
    }
    // Print Star.
    for( $k = 0; $k <= $i; $k++ ) {
        echo "*";
    }
    echo '<br>';
    // Print star.
}

echo "Start pattern : 5";
echo '<br>';
for ($i = 0; $i < $no_of_rows; $i++) {
    // Print space.
    for( $k = 0; $k < $i; $k++ ) {
        echo "&nbsp;&nbsp;";
    }
    // Print Star.
    for( $j = $no_of_rows; $j > $i; $j-- ) {
        echo "*";
    }
    echo '<br>';
}

echo "Start pattern : 6";
echo '<br>';

// Print first half.
for ($i = 0; $i < $no_of_rows; $i++) { 
    for ($j = 0; $j <= $i; $j++) { 
        echo "*";
    }
    echo '<br>';
}
// Print second half.
for ($i = 0; $i < $no_of_rows - 1; $i++) { 
    for ($j = $no_of_rows - 1; $j > $i; $j--) { 
        echo "*";
    }
    echo '<br>';
}

echo "Start pattern : 7";
echo '<br>';

// Print Row.
for ($i = 0; $i < $no_of_rows; $i++) {
    // Print spaces
    for($k = $no_of_rows; $k > $i+1; $k-- ) {
        echo "&nbsp;&nbsp;";
    }
    // Print Stars.
    for($j = 0; $j <= $i; $j++ ) {
        echo "* ";
    }
    // Go to new line after each row pattern is printed.
    echo "<br>";
}