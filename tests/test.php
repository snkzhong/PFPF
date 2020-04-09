<?php

define('_', '__FUNCTION_ARGUMENT_PLACE_HOLDER__'.microtime(true));

class T
{
    public static function say($words, $rest=null)
    {
        echo 'hello: '.$words;
    }
}

$fn = ['T', 'say'];
// $fn('ZQ');
$fn = 'T::say';
$refs = new ReflectionMethod('T', 'say');
// print_r($refs->getNumberOfParameters());

$composed = compose('f3', 'f2', 'f1');
// var_dump( $composed('hello') );
// var_dump( is_iterable($fn) );
// echo genArityN(20);


$arr = [
    'name'  => 'Zhong Qin',
    'age'   => 38,
    'address'=> 'BeiJing',
    'sub'   => [
        'name'=> 'Wang Li Na',
        'age'   => 38,
    ]
];
$a1 = $arr['sub'];
unset($a1['name']);
print_r($arr);

function genArity($n)
{
    $rs = '';
    $caseTemp = "
    case {{n}}:
        return function({{arg}}) { return \$fn({{arg}}); };";
    for ($i=0; $i <= $n; $i++) { 
        $row = str_replace('{{n}}', $i, $caseTemp);

        $arrArg = [];
        for ($j=0; $j<$i; $j++) {
            $arrArg[] = '$a'.$j;
        }
        $strArgs = implode(', ', $arrArg);
        $row = str_replace('{{arg}}', $strArgs, $row);
        $rs .= $row."\r";
    }

    return $rs;
}

function genArityN($n)
{
    $rs = '';
    $caseTemp = "
    case {{n}}:
        list({{arg}}) = \$arguments;
        return \$fn({{arg}});";
    for ($i=0; $i <= $n; $i++) { 
        $row = str_replace('{{n}}', $i, $caseTemp);

        $arrArg = [];
        for ($j=0; $j<$i; $j++) {
            $arrArg[] = '$a'.$j;
        }
        $strArgs = implode(', ', $arrArg);
        $row = str_replace('{{arg}}', $strArgs, $row);
        $rs .= $row."\r";
    }

    return $rs;
}

function compose(...$fns)
{
    return \array_reduce(
        array_reverse($fns),
        function(callable $prevFn, callable $fn) {
            return function($a) use ($prevFn, $fn) {
                return $fn($prevFn($a));
            };
        },
        'identity'
    );
}

function identity($val)
{
    return $val;
}

function f1($str)
{
    return $str.'_1_';
}

function f2($str)
{
    return $str.'_2_';
}

function f3($str)
{
    return $str.'_3_';
}


class Obj
{
    public $name = 'Zhong Qin';
    public $age = 38;
    public $address = 'beijing';
}