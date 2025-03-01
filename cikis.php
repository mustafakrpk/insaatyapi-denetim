<?php
session_start();
session_destroy(); // Sessionları öldürük. Tanımladığımız değişkenler yok artık.
echo '<script> window.location.href="login.php"; </script>'; // Tekrar giriş yapması gerektiği için login sayfasına yönlendirdik.
?>