<?php

//Verilen dizideki boş elemanları temizleyerek belirtilen adette rastgele değerlerden dizi oluşturan bir fonksiyon yazın.
// (array_map(), array_filter() ve array_rand() fonksiyonlarını kullanarak.)


$planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];

$planets=array_filter($planets);
print_r($planets);

function rand_write($planets ,$int){
    $rand_keys=array_rand($planets,$int);
    for ($i=0;$i<count($rand_keys);$i++){
        echo $planets[$rand_keys[$i]]. "\n";

    }
}
rand_write($planets,3);

?>