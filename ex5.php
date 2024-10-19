<?php
function detecterMotsCles($texte, $motsCommuns) {
    // Convertir le texte en minuscules pour une comparaison insensible à la casse
    $texte = strtolower($texte);
    
    // Utiliser str_word_count pour extraire les mots du texte
    $mots = str_word_count($texte, 1);
    
    // Exclure les mots courants
    $motsFiltrés = array_diff($mots, $motsCommuns);
    
    // Compter la fréquence des mots restants
    $frequenceMots = array_count_values($motsFiltrés);
    
    // Trier les mots par fréquence décroissante
    arsort($frequenceMots);
    
    // Retourner les mots-clés les plus fréquents
    return $frequenceMots;
}

// Exemple d'utilisation
$texte = "Le chat et le chien jouent dans le jardin. Le chat est très heureux.";
$motsCommuns = ["le", "la", "et"];

$motsCles = detecterMotsCles($texte, $motsCommuns);

// Afficher les résultats
echo "Mots-clés les plus fréquents : <br>";
foreach ($motsCles as $mot => $frequence) {
    echo "$mot : $frequence<br>";
}
?>
