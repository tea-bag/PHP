<?php
$item = $_GET["item"];
require "util/connUtil.php";
switch ($item) {

    // 获取置顶新闻
    case 'showxwLg':
        $sql = "select * from xinwen order by id desc limit 1";
        $result = mysqli_query($conn, $sql);
        if ($result->num_rows > 0) {
            $ret = array();
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                array_push($ret, "<h4><a id=\"news_title\" title=\"\" target='_blank' href=\"#\">" . $row['title'] . "</a></h4>
                    <span id=\"news_content\">" . $row['content'] . "</span>");
            }
            echo json_encode(array_reverse($ret));
        }
        mysqli_close($conn);
    break;

    // 获取新闻图片
    case 'showxwImg':
        $sql = "select count(id) as total from xinwen";
        $result = mysqli_query($conn, $sql);
        while ($a = mysqli_fetch_assoc($result)) {
            $arr = $a;
        }
        $rowcount = $arr['total'];
        $start=$rowcount-6;
        if($rowcount <= 6){
            $sql = "select img from xinwen";
        }else{
            $sql = "select img from xinwen limit $start , 6 ";
        }
        $result = mysqli_query($conn, $sql);
        if ($result->num_rows > 0) {
            $ret = array();
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                array_push($ret, "<div class=\"item\"\>
                            <img src=\"admin/uploads/" . $row['img'] . "\" alt=\"\">
                        </div>");
            }
            echo json_encode(array_reverse($ret));
        }
        mysqli_close($conn);
    break;

    // 获取新闻
    case 'showxw':
        $sql = "select count(id) as total from xinwen";
        $result = mysqli_query($conn, $sql);
        while ($a = mysqli_fetch_assoc($result)) {
            $arr = $a;
        }
        $rowcount = $arr['total'];
        $start=$rowcount-7;
        if($rowcount <= 6){
            $sql = "select * from xinwen";
        }else{
            $sql = "select * from xinwen limit $start , 6 ";
        }
        $result = mysqli_query($conn, $sql);
        if ($result->num_rows > 0) {
            $ret = array();
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                array_push($ret, "<li><a class=\"text-overflow\" target='_blank' title=\"\" href=\"#\">" . $row["title"] . "</a></li>");
            }
            echo json_encode(array_reverse($ret));
        }
        mysqli_close($conn);
    break;

    // 获取机构
    case 'showjg':
        $sql = "select * from jigou";
        $result = mysqli_query($conn, $sql);
        if ($result->num_rows > 0) {
            $ret = array();
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                array_push($ret, "<div class=\"col-md-4 company\">
                            <div class=\"media\">
                                <a class=\"pull-left\" target='_blank' href=\"#\">
                                    <img class=\"img-circle\" src=\"admin/uploads/" . $row["img"] . "\" alt=\"\">
                                </a>
                                <div class=\"media-body\">
                                    <h4 class=\"media-heading\">
                                        <a target='_blank' href=\"#\">" . $row["title"] . "</a>
                                    </h4>
                                    <span>" . $row["content"] . "</span>
                                </div>
                            </div>
                        </div>");
            }
            echo json_encode($ret);
        }
        mysqli_close($conn);
    break;
    default:
        echo "查找失败！";
    break;
}
?>