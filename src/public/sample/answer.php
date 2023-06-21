<?php
require_once __DIR__ . '/../../vendor/autoload.php';
use App\Minutes;

$time = filter_input(INPUT_POST, 'time');

try {
    if (!is_numeric($time)) {
        throw new Exception('時間は数値で指定してください。');
    }
    $seconds = $time * 3600;
} catch (Exception $e) {
    session_start();
    $_SESSION['errorMessage'] = $e->getMessage();
    header('Location: ./index.php');
    exit();
}
?>

<body>

  <h1><?php echo $seconds; ?></h1>
  
  <a href="./index.php">Top画面へ</a>

</body>
