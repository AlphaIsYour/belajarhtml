<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $msg = $_POST['message'] ?? '';
    file_put_contents('msgs.txt', $msg . "\n", FILE_APPEND | LOCK_EX);
    header('Location: view.php');
    exit;
}
?>
<!doctype html>
<form method="post">
    Message: <input name="message">
    <button>Submit</button>
</form>
<p>Contoh input untuk tes: &lt;script&gt;alert('XSS')&lt;/script&gt;</p>
