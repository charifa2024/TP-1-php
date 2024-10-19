<?php
function part_string($str) {
    if ($str != "") {
        $new_str = "";
        $nbr = strlen($str)-1; // Set the length based on the original string
        $random=rand(1, $nbr);
        for ($i = 0; $i < $random; $i++) {
            // Use random_int for better randomness
            $new_str .= $str[random_int(0, $nbr)];
        }
        return $new_str;
    } else {
        return "erreur"; // Handle the empty string case
    }
}

function generate_password(){
$miniscules="abcdefghijklmnopqrstuvwxyz";
$majuscules=strtoupper($miniscules);
$chiffres="0123456789";
$speciaux="!@#$%^&*()_+-=[]{}|;:,.<>?";

$min=part_string($miniscules);
$maj=part_string($majuscules);
$chif=part_string($chiffres);
$spec=part_string($speciaux);
$password=$min.$maj.$chif.$spec;
return $password;

}
// Call the function and echo the result

echo  "Générateur des mots de passe <br>".generate_password();
?>
