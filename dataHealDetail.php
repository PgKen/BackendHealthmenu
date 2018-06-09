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
// $id=3;

$arr_mode     = array();
$sql_all_mode = "
SELECT
mix.id,
mix.name_mix
FROM
mix
INNER JOIN heal_mix ON heal_mix.id_mix = mix.id
INNER JOIN heal ON heal_mix.id_heal = heal.id
WHERE
heal.id = '$id'";

$query_all_mode = mysqli_query($connh, $sql_all_mode);
while ($result_all_mode = mysqli_fetch_assoc($query_all_mode)) {
    $row_array['id']   = $result_all_mode['id'];
    $row_array['name_mix'] = $result_all_mode['name_mix'];
    // $row_array['detail'] = $result_all_mode['detail'];
    // $row_array['link'] = $result_all_mode['link'];

    array_push($arr_mode, $row_array);
}

echo json_encode($arr_mode, JSON_UNESCAPED_UNICODE);

?>