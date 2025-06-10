<?php
// Variables estas se definen con el simbolo $
// PHP no necesita que le pasemos el tipo, el solo interpreta si es int, string, boolean, etc.
$name = "Bruno";
$isDev= true;
$age = '20';



// Constante Global, se usa define, dentro ponemos el nombre de la constante y seguido de la coma
// el valor
define('LOGO_URL', 'https://cdn.freebiesupply.com/logos/large/2x/php-1-logo-png-transparent.png');


// const sirve para crear constantes Locales
const NOMBRE = 'Bruno';

$isOld = $age > 40;

/*
if ($isOld){
    echo"<h2> Eres viejo, lo siento</h2>";
} elseif ($isDev){
    echo "<h2> No eres viejo, pero eres dev. Estas jodido</h2>";
} else{
    echo "<h2> Eres joven, felicidades";
}
*/


// Ternaria
$output = "Hola $name, con una edad de $age.";
$outputAge = $isOld
    ? 'Eres viejo, lo siento'
    : 'Eres joven, felicidades';


// Match
$outputAge2 = match ($age){
    0, 1, 2 => "Eres un bebé, $name",
    3, 4, 5, 6, 7, 8, 9, 10 => "Eres un niño, $name",
    11, 12, 13, 14, 15, 16, 17, 18 => "Eres un adolescente, $name",
    19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30 => "Eres un adulto, $name",
    default => "Eres un adulto, $name",
};

// Mejor Match
$outputAge3 = match(true){
    $age < 2 => "Eres un bebé, $name",
    $age < 10 => "Eres un niño, $name",
    $age < 18 => "Eres un adolescente, $name",
    $age == 18 => "Eres un adulto, $name",
    $age < 40 => "Eres un adulto joven, $name",
    $age > 40 => "Eres un adulto viejo, $name",
    default => "Hueles más a madera que a fruta, $name",
};

// Arrays

$bestLanguages = ["PHP", "JavaScript", "Python", 1, 2];
$bestLanguages [3] = "Java";
$bestLanguages [] = "TypeScript";


// Diccionario
$person = [
    "name" => "Bruno",
    "age" => 20,
    "isDev" => true,
    "languages" => ["PHP", "JavaScript", "Phyton"],
];
$person["name"] = "pheralb";
$person["languages"][] = "Java";

?>

<h3>
    El mejor lenguaje es <?= $bestLanguages[5] ?>
</h3>

<!-- Foreach -->
<ul>
    <?php foreach($bestLanguages as $language) : ?>
        <li><?= $language ?></li>
    <?php endforeach; ?>
</ul>

<!-- Foreach con indice -->
<ul>
    <?php foreach($bestLanguages as $key => $language) : ?>
        <li><?= $key . " " . $language ?></li>
    <?php endforeach; ?>
</ul>

<!-- Mejor version de condicionales: 

<?php if ($isOld) : ?>
    <h2>Eres viejo, lo siento</h2>
<?php elseif ($isDev) : ?>
    <h2>No ere viejo, pero eres dev. Estás jodido</h2>
<?php else : ?>
    <h2>Eres joven, felicidades</h2>
<?php endif; ?>

-->

<h2><?= $outputAge ?></h2>
<h2><?= $outputAge3 ?></h2>

<img src="<?= LOGO_URL ?>" alt="PHP Logo" width="200">
<h1>

<!-- Otra forma mas corta de usar un echo es usar el simbolo = despues del ? -->
<?= "Hola" . $name . "Con una edad de " . $age; ?>
</h1>
<style>
    :root{
        color-scheme: light dark;
    }

    body{
        display: grid;
        place-content: center;
    }
</style>