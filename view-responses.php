<?php
$file = "responses.json";
$data = [];

if (file_exists($file)) {
  $data = json_decode(file_get_contents($file), true);
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Form Submissions</title>
  <style>
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }
    th, td {
      padding: 12px;
      border: 1px solid #ccc;
    }
    th {
      background-color: #00bfa6;
      color: white;
    }
  </style>
</head>
<body>
  <h2>Form Submissions</h2>
  <table>
    <table>
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Message</th>
    <th>Date</th>
  </tr>
  <?php foreach ($data as $entry): ?>
  <tr>
    <td><?= htmlspecialchars($entry['name']) ?></td>
    <td><?= htmlspecialchars($entry['email']) ?></td>
    <td><?= htmlspecialchars($entry['phone']) ?></td>
    <td><?= htmlspecialchars($entry['message']) ?></td>
    <td><?= htmlspecialchars($entry['date']) ?></td>
  </tr>
  <?php endforeach; ?>
</table>
  </table>
</body>
</html>