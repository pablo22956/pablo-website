<?php
// contact.php - receives POST from contact form and appends to messages.csv
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  echo json_encode(['ok' => false, 'msg' => 'Only POST allowed']);
  exit;
}

$name = isset($_POST['name']) ? trim($_POST['name']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$message = isset($_POST['message']) ? trim($_POST['message']) : '';

if ($name === '' || $email === '' || $message === '') {
  echo json_encode(['ok' => false, 'msg' => 'All fields required']);
  exit;
}

$time = date('Y-m-d H:i:s');
$line = str_putcsv([$time, $name, $email, $message]);

// ensure messages.csv is writeable by Apache
$file = __DIR__ . '/messages.csv';
$created = file_exists($file) ? true : false;
if (false === file_put_contents($file, $line . PHP_EOL, FILE_APPEND | LOCK_EX)) {
  echo json_encode(['ok' => false, 'msg' => 'Could not save message']);
  exit;
}

// Optionally send email (requires proper mail setup on server; might not work on localhost)
@$mailSent = false;
$subject = "Portfolio message from $name";
$headers = "From: $email\r\nReply-To: $email\r\n";
@mail('manirumvajohn22@gmail.com', $subject, $message, $headers);

echo json_encode(['ok' => true, 'msg' => 'Message saved. Thank you!']);

function str_putcsv($fields, $delimiter = ',', $enclosure = '"') {
    $fp = fopen('php://temp', 'r+');
    fputcsv($fp, $fields, $delimiter, $enclosure);
    rewind($fp);
    $data = stream_get_contents($fp);
    fclose($fp);
    return rtrim($data, "\n");
}
