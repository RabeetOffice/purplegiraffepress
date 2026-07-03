<?php
require_once __DIR__ . '/includes/auth.php';
if (!empty($_SESSION['adm_auth_ok']) && admin_current_user()) {
    admin_redirect(admin_home_url());
}
admin_redirect('login.php');
