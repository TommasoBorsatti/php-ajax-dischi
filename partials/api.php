
<?php

include __DIR__ . "/database.php";

  // Codifico il Database in un JSON trasformandolo in una API
  header('Content-Type: application/json');
  echo json_encode($database);
  // Codifico il Database in un JSON trasformandolo in una API


?>
