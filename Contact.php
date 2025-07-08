<?php
$data = [
  "name" => $_POST['name'],
  "email" => $_POST['email'],
  "phone" => $_POST['phone'],
  "message" => $_POST['message'],
  "date" => date("Y-m-d H:i:s") // this adds the timestamp
];

$file = "responses.json";

if (file_exists($file)) {
  $json = json_decode(file_get_contents($file), true);
} else {
  $json = [];
}

$json[] = $data;

if (file_put_contents($file, json_encode($json, JSON_PRETTY_PRINT))) {
  header("Location: view-responses.php"); // or thank-you.html
  exit;
} else {
  echo "Error saving message.";
}
?>