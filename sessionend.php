<?php
function sessionEnd() {
    // Уничтожаем все данные сессии
    session_destroy();
    $new_url = '/index.php';
    header('Location: ' . $new_url);
    die();
}
if (isset($_GET['endSession'])) {
    sessionEnd();
}
?>