<!DOCTYPE html>
 <head>
 <meta charset = "utf-8">
 <title>My airportscript</title>
 <link rel="stylesheet" href="style.css">
 <script src="airport.php"></script>
 
<style>
<?php include 'CSS/style.css'; ?>
</style>
</head>
<?php 
$num = 30;
foreach ($vals AS $val=>$num) {
    $first = array_splice($array,0,$i);
    $tmp = array_splice($array,30,$num);
    if ($keyrev) { krsort($tmp); } else { ksort($tmp); }
    $array = array_merge($first,$tmp,$array);
    unset($tmp);
    $i = 1;
    echo "\ndebut traitement\r\n";
}
$i = 1;
while ($i > 0)
{
echo "“Le but de notre vie est d’être heureux.";
echo "\033[32m 100 % \033[0m \r\n";
echo "\nfin traitement\r\n";
$i++;
}
function intervalle($string, $intervalle)
{
    $results = [];
    $strings = str_split($string, $intervalle);
    foreach ($strings as $string) {
        for ($i = 0; $i < $intervalle; $i++) {
            $results[$i] .= $string[$i];
        }
    }
 
    return $results;
}
 
const STRING = 'Le but de notre vie est d’être heureux.';
 
var_dump(
  intervalle(STRING, 0.5),
  intervalle(STRING, 0.5),
  NULL
);

?>
</html>

