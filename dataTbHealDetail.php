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
// $id = 1;

$arr_mode     = array();
$sql_all_mode = "SELECT * FROM db_health.tb_health where id = '$id'";

$query_all_mode = mysqli_query($connh, $sql_all_mode);
while ($result_all_mode = mysqli_fetch_assoc($query_all_mode)) {
    $row_array['id_menu']   = $result_all_mode['id'];
    $row_array['name_menu'] = $result_all_mode['name_menu'];
    $row_array['detail'] = $result_all_mode['detail'];
    $row_array['link'] = $result_all_mode['link'];

    array_push($arr_mode, $row_array);
}
$sql_all_mode = "
SELECT
heal.id,
heal.name_heal
FROM
heal
INNER JOIN tb_health_heal ON heal.id = tb_health_heal.id_health
INNER JOIN tb_health ON tb_health_heal.id_tb_health = tb_health.id
WHERE
tb_health.id = '$id'
GROUP BY
heal.name_heal";

// $sql_all_mode = "SELECT * FROM db_health.tb_health";

$query_all_mode = mysqli_query($connh, $sql_all_mode);
while ($result_all_mode = mysqli_fetch_assoc($query_all_mode)) {
    $row_array['id_heal']   = $result_all_mode['id'];
    $row_array['name_heal']   = $result_all_mode['name_heal'];

    array_push($arr_mode, $row_array);
}

echo json_encode($arr_mode, JSON_UNESCAPED_UNICODE);

?>