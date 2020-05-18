<?PHP
do{
$num = array (1,2,3,4,5,6,7,8,9,0);
//$rand = array_rand ($num , 3 );
shuffle($num);
$rand = array_slice($num, 0, 3);
print_r($rand);
}while( $rand[0] == 0 );
do{
$input = fgets(STDIN);
$input_array = str_split($input);
print_r($input_array);
echo count($input_array);
}while( count ( $input_array ) != 3 );

/*if ($rand[0] === $rand[1] && $rand[1] === $rand[2] && $rand[2] === $rand[0] && $rand[0] === "0" ) {
    $rand[0] = mt_rand(0,9);
    $rand[1] = mt_rand(0,9);
    $rand[2] = mt_rand(0,9);
    echo $rand[0].$rand[1].$rand[2]."\n";
}*/
echo "抜けたよ\n";
?>
