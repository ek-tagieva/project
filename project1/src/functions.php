<?php
function task1($strings, $return = true): string
{
    if ($return) {
        return implode(' ', $strings);
    } else {
        return implode( "\n", array_map(function (string $str) {
            return "<p>$str</p>";
        }, $strings));
    }
}
function task2(string $action, ...$args)
{
    foreach ($args as $n => $arg) {
        if (!is_int($arg) && !is_float($arg)) {
            trigger_error('argument #' . $n . 'is not integer or float');
            return 'ERROR: wrong argument';
        }
    }
    switch ($action){
        case '+':
            return array_sum($args);
        case '-':
            return array_shift($args) - array_sum($args);
        case '/':
            $result = array_shift($args);
            foreach ($args as $n => $arg) {
                if ($arg == 0) {
                    trigger_error('derive by zero on argument #' . ($n + 1));
                    return 'ERROR: derive by zero';
                }
                $result = $result / $arg;
            }
            return $result;
        case '*':
            $result = 1;
            foreach ($args as $arg) {
                $result *= $arg;
            }
            return $result;

        default:
            return 'ERROR: unknown actions';
    }

}
function task3($a, $b)
{   if (!is_int($a)) {
        trigger_error('A is not integer');
        return false;
    }
    if (!is_int($b)) {
        trigger_error('B is not integer');
        return false;
    }
    if ($a < 0 || $b < 0) {
        trigger_error('Argumentsmust be positive');
        return false;
    }

    $result = '<table>';
    for ($i = 1; $i <= $a; $i++) {
        $result .= '<tr>';
        for ($j = 1; $j <= $b; $j++){
            $result .= '<td>';
            $result .= $i * $j;
            $result .= '</td>';
        }
        $result .= '</tr>';
    }
    $result .= '</table>';
    echo $result;
}

function my_file_get_contents($filename)
{
    $fp = fopen($filename, 'r');
    if (!$fp){
        return false;
    }
    $str = '';
    while (!feof($fp)) {
        $str .= fgets($fp, 1024);
    }
    echo $str;
}











