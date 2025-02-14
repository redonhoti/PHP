<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kuptimi i klasave dhe objekteve</title>
</head>
<body>
<?php
// Krijimi i një klase
class Person {
    // Atributet e klasës
    public $name;
    public $age;
    // Konstruktori (ekzekutohet kur krijohet një objekt)
    public function _construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
    // Metodë për të përshkruar personin
    public function describe() {
        return "Unë jam $this->name dhe jam $this->age vjeç.";
    }
    // Metodë për të ndryshuar emrin
    public function changeName($newName) {
        $this->name = $newName;
        return "Emri u ndryshua në $this->name.";
    }
}
// Krijimi i një objekti nga klasa Person
$person1 = new Person("Arbër", 25);
// Përdorimi i metodave të klasës
echo $person1->describe(); // Shfaq: Unë jam Arbër dhe jam 25 vjeç.
echo "<br>";
// Ndryshimi i emrit të objektit
echo $person1->changeName("Besnik"); // Shfaq: Emri u ndryshua në Besnik.
echo "<br>";
// Shfaqja e përshkrimit të përditësuar
echo $person1->describe(); // Shfaq: Unë jam Besnik dhe jam 25 vjeç.
?>
</body>
</html>  
