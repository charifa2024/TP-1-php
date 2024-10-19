<?php
function remplacerMot($text, $mot, $remplacement){
    $mots = explode(" ", $text);
    $new_text = "";
    foreach ($mots as $mot_actuel) {
        if ($mot_actuel == $mot) {
            $new_text .= $remplacement . " ";
        } else {
            $new_text .= $mot_actuel . " ";
        }
    }
    return $new_text;
}
$text = "Bonjour, je suis un texte avec des mots à remplacer.";
echo $text . "<br>";
$mot_a_remplacer = "texte";
$remplacement = "nouveau texte";
$nouveau_texte = remplacerMot($text, $mot_a_remplacer, $remplacement);
echo $nouveau_texte;
?>