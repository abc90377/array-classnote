<h1>陣列宣告</h1>
<hr>
<p>$a=arrat();</p>
<p>print_r($a);</p>

<?php
$a=array();
$b=[];
echo "print-r=";
print_r($a);
var_dump($b);
?>
<h1>陣列宣告並給值</h1>
$a=[1,2,3];
$a[]=1;
<hr>
<?php
$a=[1,2,3];
echo "print-r=";
print_r($a);
echo "</br>";
echo "var_dump=";
var_dump($a);
echo "</br>";
$c=['a',1,$a];
echo "print-r=";
print_r($c);
echo "</br>";
echo "var_dump=";
var_dump($c);

echo "<hr>";
$d['A01']='大同';
$d['A02']='小明';
print_r($d);

?>
<hr>
<h1>使用</h1>
<?php
echo "echo_d_a01";
echo $d["A01"];
?>
<hr>
<h1>practice</h1>
<?php
$p=[];
$p[]=1;
$p[]=2;
$p[]='A';
$p[]=4;

print_r($p);
echo "</br>";
echo $p[0];
?>
<hr>
<h1>practice2</h1>
<?PHP
$chi_score=[95,88,45,59,71];
$eng_score=[64,78,60,32,62];
$math_score=[70,54,68,77,80];
$geo_score=[90,81,70,54,62];
$his_score=[84,71,62,42,64];
$name=["judy",'amo','john','peter','hebe'];
$subject=['國文','英文','數學','地理','歷史'];
?>
<hr>

<div>解法1:$judy=['國文'=>95,......]</div>
<div>解法2:$score=["judy"=>['國文'=>95,......]]</div>
<div>$score["judy"]["數學"]</div>
<hr>
<?php
$score=["judy"=>['國文'=>95,'英文'=>64,'數學'=>70,"地理"=>90,'歷史'=>84],"amo"=>['國文'=>91,'英文'=>60,'數學'=>100,"地理"=>50,'歷史'=>84]];
print_r($score);
echo "</br>";
echo "echo_score_judy_數學=";
echo $score["judy"]["數學"];
echo "</br>";
echo "echo_score_amo_國文=";
echo $score["amo"]["國文"];
?>
<hr>
<?php
$ninenine=[];
for ($i=1; $i <=9 ; $i++) { 
    for ($j=1; $j <=9 ; $j++) { 
        $ninenine[]= $i."x".$j."=".($i*$j);
    }   
}
print_r($ninenine);
?>
<hr>
<?php
$ninenine2=[];
for ($i=1; $i <=9 ; $i++) { 
    for ($j=1; $j <=9 ; $j++) { 
        $ninenine2[$i.$j]= $i."x".$j."=".($i*$j);
    }   
}
print_r($ninenine2);
echo "<br>";
echo "echo-ninenine2-54=&nbsp";
echo $ninenine2[54];
?>
<h1>城市產生二維陣列</h1>
<?php
$ninenine3=[];
for ($i=1; $i <=9 ; $i++) { 
    for ($j=1; $j <=9 ; $j++) { 
        $ninenine3[$i][$j]= $i."x".$j."=".($i*$j);
    }   
}
print_r($ninenine3);
echo $ninenine3[1][9];