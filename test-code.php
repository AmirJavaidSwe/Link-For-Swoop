<?php
// Bubble Sort

function bubbleSort(array $arr)
{
    $n = sizeof($arr);
    for ($i = 1; $i < $n; $i++) {
        for ($j = $n - 1; $j >= $i; $j--) {
            if($arr[$j-1] > $arr[$j]) {
                $tmp = $arr[$j - 1];
                $arr[$j - 1] = $arr[$j];
                $arr[$j] = $tmp;
            }
        }
    }

    return $arr;
}

// Bubble Sort Example:
$arr = array(255,1,22,3,45,5);
$result = bubbleSort($arr);
print_r($result);




// Bubble Sort Improved
function bubbleSortImproved(array $arr)
{
    $n = sizeof($arr);
    for ($i = 1; $i < $n; $i++) {
        $flag = false;
        for ($j = $n - 1; $j >= $i; $j--) {
            if($arr[$j-1] > $arr[$j]) {
                $tmp = $arr[$j - 1];
                $arr[$j - 1] = $arr[$j];
                $arr[$j] = $tmp;
                $flag = true;
            }
        }
        if (!$flag) {
            break;
        }
    }

    return $arr;
}

// Bubble Sort Improved Example:
$arr = array(255,1,22,3,45,5);
$result = bubbleSortImproved($arr);
print_r($result);



// Selection Sort

function selectionSort(array $arr)
{
    $n = sizeof($arr);
    for ($i = 0; $i < $n; $i++) {
        $lowestValueIndex = $i;
        $lowestValue = $arr[$i];
        for ($j = $i + 1; $j < $n; $j++) {
            if ($arr[$j] < $lowestValue) {
                $lowestValueIndex = $j;
                $lowestValue = $arr[$j];
            }
        }

        $arr[$lowestValueIndex] = $arr[$i];
        $arr[$i] = $lowestValue;
    }

    return $arr;
}

// Selection Sort Example:
$arr = array(255,1,22,3,45,5);
$result = selectionSort($arr);
print_r($result);



// Counting Sort
function countingSort(array $arr)
{
    $n = sizeof($arr);
    $p = array();
    $sorted = array();

    for ($i = 0; $i < $n; $i++) {
        $p[$i] = 0;
    }

    for ($i = 0; $i < $n; $i++) {
        for ($j = $i + 1; $j < $n; $j++) {
            if ($arr[$i] > $arr[$j]) {
                $p[$i]++;
            } else {
                $p[$j]++;
            }
        }
    }

    for ($i = 0; $i < $n; $i++) {
        $sorted[$p[$i]] = $arr[$i];
    }

    return $sorted;
}

// Counting Sort Example:
$arr = array(255,1,22,3,45,5);
$result = countingSort($arr);
print_r($result);



// Quick Sort
function quicksort(array $arr, $left, $right)
{
    $i = $left;
    $j = $right;
    $separator = $arr[floor(($left + $right) / 2)];

    while ($i <= $j) {
        while ($arr[$i] < $separator) {
            $i++;
        }

        while($arr[$j] > $separator) {
            $j--;
        }

        if ($i <= $j) {
            $tmp = $arr[$i];
            $arr[$i] = $arr[$j];
            $arr[$j] = $tmp;
            $i++;
            $j--;
        }
    }

    if ($left < $j) {
        $arr = quicksort($arr, $left, $j);
    }

    if ($right > $i) {
        $arr = quicksort($arr, $i, $right);
    }

    return $arr;
}

// Quick Sort Example:
$arr = array(20,12,4,13,5);
$result = quicksort($arr, 0, (sizeof($arr)-1));
print_r($result);

?>