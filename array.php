<?php 


/*
task1 

$color=array('red', 'green' , 'white' );
echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the  $color[0] carpet, the  $color[1] lawn, the  $color[2] house, the leaden sky. The new president and his first lady. - Richard M. Nixon";
*/

/*
task2
$color = array('white', 'green', 'red');
sort($color); //sort array in alphabet
foreach ($color as $c)
{
echo "<li>$c</li>";
}
*/

/*
task3
$city= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" );

asort($city) ;
foreach($city as $country => $capital) //for loop on all array
{
echo "The capital of $country is $capital"."\n"."<br>" ;
}
*/

/*
task4
$color = array (4 => 'white', 6 => 'green', 11=> 'red');
echo current($color)."\n"; // pointer in first element
*/

/*
task5
$new= array(1,2,3,4,5);
$newitem= '$';
array_splice($new,3,0,$newitem);//position 3 in array
foreach($new as $n){
    echo "$n";
}
*/

/*
task6..................................................................................................
$fruits=array("d"=>"lemon","a"=>"orange","b"=>"banana","c"=>"apple");
sort($fruits); 
foreach ($fruits as $f=>$f_value)
{
echo $f."=".$f_value."<br>";
}
*/

// explode يحول قطعة صغيرة الى مصفوفه
//explode(seprator المساحة,string,limit)
$temp="78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73";
$temp1=explode(",",$temp);












?>