<?php

$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "msqliphp";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    echo "Error: " . $conn->connect_error;
}

$q = "INSERT INTO cards (cardname, rarity, price) 
     VALUES ('Fênix Incandescente', 'Comum', 5.99),
('Dragão das Profundezas', 'Raro', 12.49),
('Gigante de Pedra', 'Comum', 8.99),
('Guardião Celestial', 'Épico', 24.99),
('Sombra Eterna', 'Raro', 15.00),
('Mago Estelar', 'Lendário', 49.99),
('Tornado Furioso', 'Comum', 4.99),
('Vidente das Águas', 'Raro', 19.99),
('Feiticeiro do Vento', 'Épico', 29.99),
('Rei das Sombras', 'Lendário', 79.99),
('Serpente Flamejante', 'Comum', 6.49),
('Feiticeira do Gelo', 'Épico', 22.99),
('Dragão de Ferro', 'Lendário', 39.99),
('Guardião da Luz', 'Raro', 13.99),
('Espírito do Bosque', 'Comum', 7.99),
('Emissário das Estrelas', 'Lendário', 59.99),
('Tempestade do Deserto', 'Comum', 5.49),
('Mestre dos Espíritos', 'Raro', 18.99),
('Falcão Dourado', 'Lendário', 89.99),
('Leão de Prata', 'Épico', 34.99),
('Lobo Fantasma', 'Comum', 4.79),
('Ninfa das Águas', 'Raro', 14.99),
('Lince da Tempestade', 'Lendário', 44.99),
('Vórtice das Sombras', 'Comum', 3.99),
('Cavaleiro das Estrelas', 'Épico', 27.99)";

$conn->query($q);

$conn->close();
