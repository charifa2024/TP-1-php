<?php
function nbr_phrase($text) {
    $phrases = explode(".", $text);
    return count($phrases) - 1; // On enlève 1 car la dernière partie après le dernier point n'est pas une phrase complète
}
function nbr_mots($text){
    $mots=explode(" ",$text);
    return count($mots);
}
function nbr_caractere($text) {
    // Compte tous les caractères sauf les espaces
    return strlen(str_replace(' ', '', $text));
}
function mot_plus_long($text) {
    $mots = explode(" ", $text);
    $longestWord = "";
    foreach ($mots as $mot) {
        if (strlen($mot) > strlen($longestWord)) {
            $longestWord = $mot;
        }
    }
    return $longestWord;
}
function mot_plus_frequent($text) {
    $mots = explode(" ", $text);
    $nbr_mots = count($mots);
    $wordFrequency = array($nbr_mots);
    for ($i = 0; $i < $nbr_mots;$i++) {
        $wordFrequency[$i]=1;
    }
    for($i=0;$i<$nbr_mots;$i++){
        for($j=0;$j<$nbr_mots;$j++){
            if($mots[$i]==$mots[$j] && $i!=$j){
                $wordFrequency[$i]++;
            }
        }
    }
    $max=1;$frequent_word="tout les mots s'apparait une fois";
    for ($i = 0; $i < $nbr_mots;$i++) {
        if($wordFrequency[$i]>$max){
            $max=$wordFrequency[$i];
            $frequent_word=$mots[$i];
        }
    }
    return $frequent_word;
}
function analyse_texte($text) {
    $nbr_mots = nbr_mots($text);
    $nbr_phrases = nbr_phrase($text);
    $nbr_caractere = nbr_caractere($text);
    $mot_plus_long = mot_plus_long($text);
    $mot_plus_frequent = mot_plus_frequent($text);
    return array(
        'nbr_mots' => $nbr_mots,
        'nbr_phrases' => $nbr_phrases,
        'nbr_caractere' => $nbr_caractere,
        'mot_plus_long' => $mot_plus_long,
        'mot_plus_frequent' => $mot_plus_frequent);}




$text="Bonjour. Comment ça va ?. Je vais bien.";
$tableau=analyse_texte($text);



echo "le texte : ".$text."<br>";
echo "le nombre des mots : ".$tableau['nbr_mots']."<br>";
echo "le nombre des phrases : ".$tableau['nbr_phrases']."<br>";
echo "le nombre des caractères : ".$tableau['nbr_caractere']."<br>";
echo "le mot le plus long : ".$tableau['mot_plus_long']."<br>";
echo "le mot le plus frequent : ".$tableau['mot_plus_frequent']."<br>";
?>