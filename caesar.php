<?php
function cipher($text, $key) {
    if (ctype_alpha($text)) {
        $nilai = ord(ctype_upper($text) ? 'A' : 'a');
        $ch = ord($text);
        $mod = fmod($ch + $key - $nilai, 26);
        $hasil = chr($mod + $nilai);
        return $hasil;
    }
}

function encrypt($char, $key) {
    $output = "";
    $chars = str_split($char);
    foreach ($chars as $text) {
        $output .= cipher($text, $key);
    }
    return $output;
}

function decrypt($enkripuser, $key) {
return encrypt($enkripuser, 26 - $key);
}
?>