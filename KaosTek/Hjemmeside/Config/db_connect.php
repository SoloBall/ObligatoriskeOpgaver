<?php
if (session_id() == '') {
    session_start();
}
$conn = mysqli_connect('localhost', 'Admin', 'abc123', 'kaostekdb');
?>