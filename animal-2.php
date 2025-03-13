<?php

class animal {
    public $animals;

    public function __construct($ar_animal)
{
    $this->animals = $ar_animal;
} 

public function index()
{
    foreach ($this->animals as $animal) {
        echo "- $animal <br/>";
    }
}
public function store($animal){
    $this->animals[] = $animal;
}
public function update($index, $animal){
    $this->animals[$index] = $animal;
}
public function destroy($index){
    unset ($this->animals[$index]);
}



}
$animal = new animal(["Ayam","Ikan"]);

echo "Index - Menampilkan seluruh hewan <br/>";
$animal->Index();
echo "<br/>";

echo "Store - Menambahkan hewan baru (burung) <br/>";
$animal->Store("Burung");
$animal->index();
echo "<br/>";

echo "Update - Mengupdate hewan <br/>";
$animal->Update(0, "Kucing Anggora");
$animal->index();
echo "<br/>";

echo "Destroy - Menghapus hewan <br/>";
$animal->Destroy(1);
$animal->index();
echo "<br/>";