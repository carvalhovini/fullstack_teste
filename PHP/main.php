<?php

<?php include 'exibir_avaliacoes.php';?>

// Conexão com o banco de dados (substitua as credenciais e o nome do banco de dados pelos seus próprios)
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "banco_do_site";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica se houve erro na conexão
if ($conn->connect_error) {
  die("Falha na conexão: " . $conn->connect_error);
}

// Recupera as últimas avaliações e comentários (limitado a 5)
$sql = "SELECT name, prof, materia, email, rating, comment FROM Tabela_do_site ORDER BY id DESC LIMIT 5";
$result = $conn->query($sql);

// Exibe as avaliações e comentários em uma tabela HTML
if ($result->num_rows > 0) {
  echo "<table>";
  echo "<tr><th>Nome</th><th>Professor(a)</th><th>Matéria</th><th>E-mail</th><th>Avaliação</th><th>Comentário</th></tr>";
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["name"] . "</td><td>" . $row["prof"] . "</td><td>" . $row["materia"] . "</td><td>" . $row["email"] . "</td><td>" . $row["rating"] . "</td><td>" . $row["comment"] . "</td></tr>";
  }
  echo "</table>";
} else {
  echo "Não há avaliações ainda.";
}

$conn->close();
?>

<?php
// busca as últimas 5 avaliações no banco de dados
$latest_reviews = $db->query("SELECT * FROM reviews ORDER BY date DESC LIMIT 5");

// exibe as avaliações na div latest-reviews-box
echo '<div class="latest-reviews-box">';
echo '<h2>Últimas Avaliações</h2>';
echo '<ul>';
while ($review = $latest_reviews->fetch_assoc()) {
  echo '<li>' . $review['user_name'] . ' - ' . $review['review_text'] . '</li>';
}
echo '</ul>';
echo '</div>';
?>


