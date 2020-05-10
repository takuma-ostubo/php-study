<?PHP
$fever = 37.8;
if ($fever <= 37.0){
    echo "\n";
} else if ( 37.0 < $fever && $fever < 37.5 ) {
    echo "平熱です。\n";
} else{
    echo "コロナの可能性あり。。\n";
}
?>