<?php
session_start();
header('Access-Control-Allow-Origin: *');
header("Content-type:application/json");
include '../config.inc.php';
$_SESSION['page_current'] = '/site/healthmenu/';

if (isset($_POST)) {
    foreach ($_POST as $k => $v) {
        ${$k} = $v;
    }

}
if (isset($_GET)) {
    foreach ($_GET as $k => $v) {
        ${$k} = $v;
    }

}

$arr_mode     = array();
$sql_all_mode = "SELECT * FROM db_health.product where product_type = 1 OR product_type = 2";

$query_all_mode = mysqli_query($connh, $sql_all_mode);
while ($result_all_mode = mysqli_fetch_assoc($query_all_mode)) {
    $row_array['id']   = $result_all_mode['id'];
    $row_array['name'] = $result_all_mode['name'];

    array_push($arr_mode, $row_array);
}

echo json_encode($arr_mode, JSON_UNESCAPED_UNICODE);

?>