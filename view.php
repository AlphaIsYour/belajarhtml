<?php
// view.php - tampilkan pesan tanpa sanitasi (vulnerable)
$lines = file_exists('msgs.txt') ? file('msgs.txt', FILE_IGNORE_NEW_LINES) : [];
?>
<!doctype html>
<h2>Messages (vulnerable)</h2>
<?php foreach ($lines as $line): ?>
    <!-- INI BERBAHAYA: echo langsung bikin browser menjalankan script -->
    <div><?php echo $line; ?></div>
<?php endforeach; ?>
<p><a href="vuln.php">Submit lagi</a></p>
