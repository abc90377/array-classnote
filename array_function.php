<h1>陣列函式</h1>
<h2>is_array()</h2>
<?php
$a=[1,2,3];
$b="天氣";
echo is_array($a);
echo is_array($b);
if (is_array($a)) {
    echo '$a is array';
}else {
    echo '$a is not array';
}
?>
<h2>in_array()</h2>
<?php
$a=['A','B','C','D','E'];
echo 'inarrayAa=';
echo in_array('A',$a);
?>
<h2>sort()</h2>
$a=['A','C','C','B','E']
<?php
$a=['A','C','C','B','E'];
echo 'sort=';
echo sort($a);
print_r($a);
?>
會把key洗掉
rsort反序
<h2>array_fill()</h2>
<?php
$a=array_fill(0,50,'a');
print_r($a);
echo "<pre>";

print_r($a);

echo"</pre>";
?>
<h2>array_search()</h2>
<?php
$a=['A','C','C','B','E'];
print_r($a);
echo array_search('B',$a);
?>
<hr>
<h2>array_keys()</h2>
<?php
$a=[
    '國文'=>'A',
    '數學'=>'C',
    '英文'=>'D',
    '歷史'=>'B',
];
$keys=array_keys($a);
print_r($a);
print_r($keys);
?>
<h2>array_merge()</h2>
<?php
$a=[1,2,3];
$b=['A','B','C'];
$c=array_merge($a,$b);
echo "<pre>"; print_r($c);
"</pre>";
?>
<h2>serialize</h2>
<?php
$a=[
    '國文'=>'A',
    '數學'=>'C',
    '英文'=>'D',
    '歷史'=>'B',
];
echo serialize($a);
?>
<h2>implode</h2>
<?php
$a=[
    '國文'=>'A',
    '數學'=>'C',
    '英文'=>'D',
    '歷史'=>'B',
];
echo implode('/',$a);

?>
