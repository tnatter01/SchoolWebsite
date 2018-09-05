<?php
session_start();
$user = $_SESSION['USER'];

session_
echo"
<script>
    document.write('Tot ziens ' + $user) ;
    windows.href='inloggen.html';
</script>
";
session_destroy();
?>
