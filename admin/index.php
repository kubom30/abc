<?php
session_start();

require_once '../global.php';
require_once '../model/pdo.php';
if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = '';
}
switch ($action) {
    case '':
        $VIEWS = "views/home/index.php";
        break;
    case 'danh-muc':
        $VIEWS = "views/danh-muc/add-danh-muc.php";
        break;
    case 'update_dm':
        $VIEWS = "views/danh-muc/update_dm.php";
        break;
    case 'san-pham':
        $VIEWS = "views/san-pham/add-san-pham.php";
        break;
        case 'san-pham':
            $VIEWS = "views/san-pham/trang-san-pham.php";
            break;
    case 'khuyen-mai':
        $VIEWS = "views/khuyen-mai/add-km.php";
        break;
}
require_once 'views/layouts/index.php';
