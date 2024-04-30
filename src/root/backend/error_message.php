<?php
$message = "";

if (isset($_GET["errorReg"])) {
    $message = $_GET["errorReg"];
}
?>

<?php if(isset($message) && !empty($message)): ?>
    <div style='color:#ffea00;text-align:center;'>
        <p><?= $message ?></p>
    </div>
<?php endif; ?>
