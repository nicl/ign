<?php

require 'Plates.php';
use Ign\Nic\Plates;
use Exception;

header('Content-Type: text/html; charset=utf-8');
print '<h1>IGN #2 - Car license plates</h1>';
$pop = isset($_GET['population']) ? $_GET['population'] : false;

if ($pop) {
    try {
        $plates = new Plates($pop);
    } catch (Exception $e) {
        print $e->getMessage() . "<br/>";
        print '<a href="index.php">Back</a>';
    }
    $pattern = $plates->getPattern($pop);
    // give answer
    printf('For a population of %d, use %d number(s), and %d letter(s)',
        htmlspecialchars($pop, ENT_QUOTES, 'UTF-8'),
        $pattern['numbers'],
        $pattern['letters']);
}
?>

<form action="index.php" method="get">
    <label for="population">Population:</label>
    <input type="text" id="population" name="population" value="<?php print htmlspecialchars($pop, ENT_QUOTES, 'UTF-8'); ?>" />
    <input name="submit" type="submit" value="Go for it!" />
</form>
