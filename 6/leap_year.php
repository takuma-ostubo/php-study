<?PHP
echo "西暦で年を入力してください";
$year=fgets(STDIN);
echo "入力された年は、";
if ( $year % 4 == 0) {
    echo "うるう年です。\n";
}else {
    echo "平年です。\n";
}
?>