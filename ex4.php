<?php
function nbr_occurence_alphabet($text){
    $alphabet="abcdefghijklmnopqrstuvwxyz";
    $nbr_occurence=array(
        'a'=>0,
        'b'=>0,
        'c'=>0,
        'd'=>0,
        'e'=>0,
        'f'=>0,
        'g'=>0,
        'h'=>0,
        'i'=>0,
        'j'=>0,
        'k'=>0,
        'l'=>0,
        'm'=>0,
        'n'=>0,
        'o'=>0,
        'p'=>0,
        'q'=>0,
        'r'=>0,
        's'=>0,
        't'=>0,
        'u'=>0,
        'v'=>0,
        'w'=>0,
        'x'=>0,
        'y'=>0,
        'z'=>0,
    );
    for($i=0;$i<strlen($text);$i++){
        for($j=0;$j<strlen($alphabet);$j++){
            if(strtolower($text[$i])==$alphabet[$j]){
                $nbr_occurence[$alphabet[$j]]++;
            }
        }
    }
    return $nbr_occurence;}
    
$text = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
$nbr_occurence=nbr_occurence_alphabet($text);
foreach($nbr_occurence as $key=>$value){
    echo $key." : ".$value."<br>";
}
?>