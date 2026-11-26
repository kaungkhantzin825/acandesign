<?php
// /admin/ -> dashboard (dashboard.php sends unauthenticated visitors to login.php).
header('Location: dashboard.php');
exit;
