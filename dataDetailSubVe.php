<?php
session_start();
header('Access-Control-Allow-Origin: *');
header("Content-type:application/json");
include '../config.inc.php';
$_SESSION['page_current'] = '/site/health/';

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
// $sql_all_mode = "SELECT * FROM db_health.mix where id = '$id'";
// $sql_all_mode = "
// SELECT
// mix.name_mix,
// mix.id,
// mix.detail_mix,
// mix.img_mix,
// mix.method_mix,
// mix.properties,
// product.name,
// product.id
// FROM
// mix
// INNER JOIN product ON mix.id_product = product.id
// where mix.id = '$id'
// ";

// if($id > 100){

// $sql_all_mode = "
// SELECT
// mix.name_mix,
// mix.detail_mix,
// mix.method_mix,
// mix.img_mix,
// mix.properties,
// product.`name`,
// product.id as mainID,
// mix.id as mixID
// FROM
// mix
// INNER JOIN mix_product ON mix.id = mix_product.id_mix
// INNER JOIN product ON mix_product.id_product = product.id
// WHERE
// mix.id = '$id'";

// $query_all_mode = mysqli_query($connh, $sql_all_mode);
// while ($result_all_mode = mysqli_fetch_assoc($query_all_mode)) {
//     $row_array['id']   = $result_all_mode['mixID'];
//     // $row_array['id_product']   = $result_all_mode['mainID'];
//     $row_array['name_mix'] = $result_all_mode['name_mix'];
//     $row_array['img_mix'] = $result_all_mode['img_mix'];
//     $row_array['detail_mix'] = $result_all_mode['detail_mix'];
//     $row_array['method_mix'] = $result_all_mode['method_mix'];
//     $row_array['properties'] = $result_all_mode['properties'];
//     $row_array['name_product'] = $result_all_mode['name'];

//     array_push($arr_mode, $row_array);
// }

// echo json_encode($arr_mode, JSON_UNESCAPED_UNICODE);
// }else{
    $arr_mode     = array();
$sql_all_mode = "
SELECT
mix.name_mix,
mix.id,
mix.detail_mix,
mix.method_mix,
mix.id_product,
mix.img_mix,
mix.properties
FROM
mix
WHERE
mix.id = '$id'";

$query_all_mode = mysqli_query($connh, $sql_all_mode);
while ($result_all_mode = mysqli_fetch_assoc($query_all_mode)) {
    $row_array['id']   = $result_all_mode['id'];
    $row_array['name_mix'] = $result_all_mode['name_mix'];
    $row_array['detail_mix'] = $result_all_mode['detail_mix'];
    $row_array['method_mix'] = $result_all_mode['method_mix'];
    $row_array['img_mix'] = $result_all_mode['img_mix'];
    $row_array['properties'] = $result_all_mode['properties'];


    array_push($arr_mode, $row_array);
}

echo json_encode($arr_mode, JSON_UNESCAPED_UNICODE);
// }
?>