<?php

$tmpArray = array(
    array("one", array(1, 2, 3)),
    array("two", array(4, 5, 6)),
    array("three", array(
        7,
        8,
        array("four", 9, 10)
    ))
);

//echo "<pre>";print_r($tmpArray);


//  Output array
displayArrayRecursively($tmpArray);

/**
 * Recursive function to display members of array with indentation
 *
 * @param array $arr Array to process
 * @param string $indent indentation string
 */
function displayArrayRecursively($arr) {
    foreach ($arr as $value) {
            if (is_array($value)) {
                displayArrayRecursively($value);
            } else {
                echo "$value<br>";
            }
        }

}
?>