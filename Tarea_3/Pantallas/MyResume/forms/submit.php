<?php

// Obtiene los datos del formulario
$employee = $_POST['employee'];
$originalStartDate = $_POST['originalStartDate'];
$originalEndDate = $_POST['originalEndDate'];
$newStartDate = $_POST['newStartDate'];
$newEndDate = $_POST['newEndDate'];
$reason = $_POST['reason'];

// Valida los datos
if (empty($employee)) {
  echo "El campo 'Empleado' es obligatorio.";
  exit;
}

if (empty($originalStartDate)) {
  echo "El campo 'Fecha de inicio original' es obligatorio.";
  exit;
}

if (empty($originalEndDate)) {
  echo "El campo 'Fecha de finalización original' es obligatorio.";
  exit;
}

if (empty($newStartDate)) {
  echo "El campo 'Nueva fecha de inicio' es obligatorio.";
  exit;
}

if (empty($newEndDate)) {
  echo "El campo 'Nueva fecha de finalización' es obligatorio.";
  exit;
}

// Guarda los datos en la base de datos
$sql = "INSERT INTO vacation_requests (employee, original_start_date, original_end_date, new_start_date, new_end_date, reason)
VALUES ('$employee', '$originalStartDate', '$originalEndDate', '$newStartDate', '$newEndDate', '$reason')";

$result = mysqli_query($conn, $sql);

if ($result) {
  echo "Su solicitud de cambio de fecha de vacaciones se ha enviado correctamente.";
} else {
  echo "Se produjo un error al enviar su solicitud.";
}

?>
