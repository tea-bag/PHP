<?php
require "connUtil.php";
$item = $_GET["item"];
switch ($item) {
        
    // 后台新闻    
    case 'back_xinwen':
        $sql = "select count(id) as total from xinwen";
        $result = mysqli_query($conn, $sql);
        while ($a = mysqli_fetch_assoc($result)) {
            $arr = $a;
        }
        $nowpage = !empty($_GET['p']) ? intval($_GET['p']) : 1;
        $page_size = 8; //每页显示条数
        $rowcount = $arr['total']; //总条数
        $pages = ceil($rowcount / $page_size); //总页数
        $prevpage = $nowpage - 1 > 0 ? $nowpage - 1 : 1;
        $nextpage = $nowpage + 1 > $pages ? $pages : $nowpage + 1;
        $startpage = ($nowpage - 1) * $page_size;
        $sql = "select * from xinwen limit $startpage,$page_size";
        $result = mysqli_query($conn, $sql);
        $array = array();
        while ($a = mysqli_fetch_assoc($result)) {
            $array[] = $a;
        }
        echo "<table class='table table-hover text-center'><tr><th width='100' style='text-align:left; padding-left:20px;'>ID</th><th>图片</th><th>标题</th><th width='10%'>更新时间</th><th width='310'>操作</th><tr>";
        foreach ($array as $value) {
            echo "<tr>";
            echo "<td style='text-align:left; padding-left:20px;'>
            <input type='checkbox' name='id' value='{$value['id']}' /> {$value['id']}</td>
          <td width='10%'>
          <img src='../uploads/{$value['img']}' width='70' height='50' /></td>
          <td>{$value['title']}</td>
          <td>" . date('Y-m-d', strtotime($value['createtime'])) . "</td>
          <td>
            <div class='button-group'>
              <a class='button border-main' href='editxw.php?id={$value['id']}'>
                <span class='icon-edit'></span> 修改
              </a>
              <a class='button border-red' href='javascript:void(0)' onclick=\"return del({$value['id']},'{$value['img']}')\">
                <span class='icon-trash-o'></span> 删除
              </a>
            </div>
          </td>
          </tr>";
        }
        echo "<tr><td colspan='8'>
                  <div class='pagelist'>
              <a> {$rowcount} 条记录 第 {$nowpage}/{$pages} 页</a>
              <a href='javascript:gotopage(1)'>首页</a>
              <a href='javascript:gotopage($prevpage)'>上一页</a>";
        for ($i = 1;$i <= $pages;$i++) {
            echo "<a href='javascript:gotopage(" . $i . ")'>" . $i . "</a>";
        }
        echo "<a href='javascript:gotopage($nextpage)'>下一页</a>
              <a href='javascript:gotopage($pages)'>尾页</a>                
            </div>
            </td></tr>
    </table>";
        mysqli_close($conn);
    break;
        
    // 后台机构    
    case 'back_jigou':
        $sql = "select count(id) as total from jigou";
        $result = mysqli_query($conn, $sql);
        while ($a = mysqli_fetch_assoc($result)) {
            $arr = $a;
        }
        $nowpage = !empty($_GET['p']) ? intval($_GET['p']) : 1;
        $page_size = 6; //每页显示条数
        $rowcount = $arr['total']; //总条数
        $pages = ceil($rowcount / $page_size); //总页数
        $prevpage = $nowpage - 1 > 0 ? $nowpage - 1 : 1;
        $nextpage = $nowpage + 1 > $pages ? $pages : $nowpage + 1;
        $startpage = ($nowpage - 1) * $page_size;
        $sql = "select * from jigou limit $startpage,$page_size";
        $result = mysqli_query($conn, $sql);
        $array = array();
        while ($a = mysqli_fetch_assoc($result)) {
            $array[] = $a;
        }
        echo "<table class='table table-hover text-center'><tr><th width='100' style='text-align:left; padding-left:20px;'>ID</th><th>图片</th><th>标题</th><th width='10%'>更新时间</th><th width='310'>操作</th><tr>";
        foreach ($array as $value) {
            echo "<tr>";
            echo "<td style='text-align:left; padding-left:20px;'>
            <input type='checkbox' name='id' value='{$value['id']}' /> {$value['id']}</td>
          <td width='10%'>
          <img src='../uploads/{$value['img']}' width='70' height='70' /></td>
          <td>{$value['title']}</td>
          <td>" . date('Y-m-d', strtotime($value['createtime'])) . "</td>
          <td>
            <div class='button-group'>
              <a class='button border-main' href='editjg.php?id={$value['id']}'>
                <span class='icon-edit'></span> 修改
              </a>
              <a class='button border-red' href='javascript:void(0)' onclick=\"return del({$value['id']},'{$value['img']}')\">
                <span class='icon-trash-o'></span> 删除
              </a>
            </div>
          </td>
          </tr>";
        }
        echo "<tr><td colspan='8'>
                  <div class='pagelist'>
              <a> {$rowcount} 条记录 第 {$nowpage}/{$pages} 页</a>
              <a href='javascript:gotopage(1)'>首页</a>
              <a href='javascript:gotopage($prevpage)'>上一页</a>";
        for ($i = 1;$i <= $pages;$i++) {
            echo "<a href='javascript:gotopage(" . $i . ")'>" . $i . "</a>";
        }
        echo "<a href='javascript:gotopage($nextpage)'>下一页</a>
              <a href='javascript:gotopage($pages)'>尾页</a>                
            </div>
            </td></tr>
    </table>";
        mysqli_close($conn);
    break;
        
    // 后台活动    
    case 'back_huodong':
        $sql = "select count(id) as total from huodong";
        $result = mysqli_query($conn, $sql);
        while ($a = mysqli_fetch_assoc($result)) {
            $arr = $a;
        }
        $nowpage = !empty($_GET['p']) ? intval($_GET['p']) : 1;
        $page_size = 8; //每页显示条数
        $rowcount = $arr['total']; //总条数
        $pages = ceil($rowcount / $page_size); //总页数
        $prevpage = $nowpage - 1 > 0 ? $nowpage - 1 : 1;
        $nextpage = $nowpage + 1 > $pages ? $pages : $nowpage + 1;
        $startpage = ($nowpage - 1) * $page_size;
        $sql = "select * from huodong limit $startpage,$page_size";
        $result = mysqli_query($conn, $sql);
        $array = array();
        while ($a = mysqli_fetch_assoc($result)) {
            $array[] = $a;
        }
        echo "<table class='table table-hover text-center'><tr><th>ID</th><th>标题</th><th>更新时间</th><th>操作</th><tr>";
        foreach ($array as $value) {
            echo "<tr align=center><td style='text-align:left; padding-left:20px;'>
                <input type='checkbox' name='id' value='{$value['id']}' /> {$value['id']}</td><td>{$value['title']}</td><td>" . date('Y-m-d', strtotime($value['createtime'])) . "</td><td>
                <div class='button-group'>
                  <a class='button border-main' href='edithd.php?id={$value['id']}'>
                    <span class='icon-edit'></span> 修改
                  </a>
                  <a class='button border-red' href='javascript:void(0)' onclick='return del({$value['id']})'>
                    <span class='icon-trash-o'></span> 删除
                  </a>
                </div>
              </td></tr>";
        }
        echo "<tr><td colspan='8'>
                <div class='pagelist'>
    <a> {$rowcount} 条记录 第 {$nowpage}/{$pages} 页</a>
    <a href='javascript:gotopage(1)'>首页</a>
    <a href='javascript:gotopage($prevpage)'>上一页</a>";
        for ($i = 1;$i <= $pages;$i++) {
            echo "<a href='javascript:gotopage(" . $i . ")'>" . $i . "</a>";
        }
        echo "<a href='javascript:gotopage($nextpage)'>下一页</a>
    <a href='javascript:gotopage($pages)'>尾页</a>                
    </div>
            </td></tr>
    </table>";
        mysqli_close($conn);
    break;
        
    // 前台新闻    
    case 'front_xinwen':
        $sql = "select count(id) as total from xinwen";
        $result = mysqli_query($conn, $sql);
        while ($a = mysqli_fetch_assoc($result)) {
            $arr = $a;
        }
        $nowpage = !empty($_GET['p']) ? intval($_GET['p']) : 1;
        $page_size = 8; //每页显示条数
        $rowcount = $arr['total']; //总条数
        $pages = ceil($rowcount / $page_size); //总页数
        $prevpage = $nowpage - 1 > 0 ? $nowpage - 1 : 1;
        $nextpage = $nowpage + 1 > $pages ? $pages : $nowpage + 1;
        $startpage = ($nowpage - 1) * $page_size;
        $sql = "select * from xinwen limit $startpage,$page_size";
        $result = mysqli_query($conn, $sql);
        $array = array();
        while ($a = mysqli_fetch_assoc($result)) {
            $array[] = $a;
        }
        foreach ($array as $value) {
            echo "<div class='list-box clearfix'>
                  <div class='text-overflow list-title'>
                      <a href='#' target='_blank'>{$value['title']}</a>
                  </div>
                  <div class='pull-left list-img'>
                      <a href='#' target='_blank'>
                          <img src='admin/uploads/{$value['img']}' alt='' style='width:150px;'/>
                      </a>
                  </div>
                  <div class='list-body'>
                      {$value['content']}                      
                  </div>
                  <div>                                                            
                      <span class='glyphicon glyphicon-calendar'></span>
                      " . date('Y年m月d日', strtotime($value['createtime'])) . "
                  </div>
              </div>";
        }
        echo "<div class='text-center'>
                      <ul class='pagination'>
                          <li><a> {$rowcount} 条记录 第 {$nowpage}/{$pages} 页</a></li>
                          <li><a href='javascript:gotopage(1)'>首页</a></li>
                          <li><a href='javascript:gotopage($prevpage)'>上一页</a></li>";
        for ($i = 1;$i <= $pages;$i++) {
            echo "<li><a href='javascript:gotopage(" . $i . ")'>" . $i . "</a></li>";
        }
        echo "<li><a href='javascript:gotopage($nextpage)'>下一页</a></li>
                          <li><a href='javascript:gotopage($pages)'>尾页</a></li>
                      </ul>
                  </div>";
        mysqli_close($conn);
    break;
        
    // 前台机构    
    case 'front_jigou':
        $sql = "select count(id) as total from jigou";
        $result = mysqli_query($conn, $sql);
        while ($a = mysqli_fetch_assoc($result)) {
            $arr = $a;
        }
        $nowpage = !empty($_GET['p']) ? intval($_GET['p']) : 1;
        $page_size = 9; //每页显示条数
        $rowcount = $arr['total']; //总条数
        $pages = ceil($rowcount / $page_size); //总页数
        $prevpage = $nowpage - 1 > 0 ? $nowpage - 1 : 1;
        $nextpage = $nowpage + 1 > $pages ? $pages : $nowpage + 1;
        $startpage = ($nowpage - 1) * $page_size;
        $sql = "select * from jigou limit $startpage,$page_size";
        $result = mysqli_query($conn, $sql);
        $array = array();
        while ($a = mysqli_fetch_assoc($result)) {
            $array[] = $a;
        }
        foreach ($array as $value) {
            echo "<div class='col-sm-6 col-md-4'>
                    <div class='in-thumbnail clearfix'>
                        <div class='in-thumbnail-title'>
                            <a href='#' target='_blank'>{$value['title']}</a>
                        </div>
                        <a href='#' target='_blank'>
                            <div class='in-thumbnail-img'>
                                <img class='center-block' src='admin/uploads/{$value['img']}' alt=''>
                            </div>
                        </a>
                        <div class='in-thumbnail-text justify'>{$value['content']}</div>
                        <div style='padding-bottom:10px;'>
                            <a target='_blank' href='#' class='btn btn-default center-block' role='button' style='width:100px;'>了解更多</a>
                        </div>
                    </div>
                </div>";
        }
        echo "<div style='clear:both'></div><div class='text-center'>
                    <ul class='pagination'>
                      <li><a> {$rowcount} 条记录 第 {$nowpage}/{$pages} 页</a></li>
                      <li><a href='javascript:gotopage(1)'>首页</a></li>
                      <li><a href='javascript:gotopage($prevpage)'>上一页</a></li>";
        for ($i = 1;$i <= $pages;$i++) {
            echo "<li><a href='javascript:gotopage(" . $i . ")'>" . $i . "</a></li>";
        }
        echo "<li><a href='javascript:gotopage($nextpage)'>下一页</a></li>
                      <li><a href='javascript:gotopage($pages)'>尾页</a></li>
                    </ul>
                  </div>";
        mysqli_close($conn);
    break;
        
    // 前台活动    
    case 'front_huodong':
        $sql = "select count(id) as total from huodong";
        $result = mysqli_query($conn, $sql);
        while ($a = mysqli_fetch_assoc($result)) {
            $arr = $a;
        }
        $nowpage = !empty($_GET['p']) ? intval($_GET['p']) : 1;
        $page_size = 8; //每页显示条数
        $rowcount = $arr['total']; //总条数
        $pages = ceil($rowcount / $page_size); //总页数
        $prevpage = $nowpage - 1 > 0 ? $nowpage - 1 : 1;
        $nextpage = $nowpage + 1 > $pages ? $pages : $nowpage + 1;
        $startpage = ($nowpage - 1) * $page_size;
        $sql = "select * from huodong limit $startpage,$page_size";
        $result = mysqli_query($conn, $sql);
        $array = array();
        while ($a = mysqli_fetch_assoc($result)) {
            $array[] = $a;
        }
        foreach ($array as $value) {
            echo "<div class='list-box clearfix'>
                <div class='text-overflow list-title'>
                    <a href='#' target='_blank'>{$value['title']}</a>
                </div>
                <div class='list-body'>
                    活动地点：{$value['content']}                      
                </div>
                <div>                                                            
                    <span class='glyphicon glyphicon-calendar'></span>
                    " . date('Y年m月d日', strtotime($value['createtime'])) . "
                </div>
            </div>";
        }
        echo "<div class='text-center'>
                      <ul class='pagination'>
                          <li><a> {$rowcount} 条记录 第 {$nowpage}/{$pages} 页</a></li>
                          <li><a href='javascript:gotopage(1)'>首页</a></li>
                          <li><a href='javascript:gotopage($prevpage)'>上一页</a></li>";
        for ($i = 1;$i <= $pages;$i++) {
            echo "<li><a href='javascript:gotopage(" . $i . ")'>" . $i . "</a></li>";
        }
        echo "<li><a href='javascript:gotopage($nextpage)'>下一页</a></li>
                          <li><a href='javascript:gotopage($pages)'>尾页</a></li>
                      </ul>
                  </div>";
        mysqli_close($conn);
    break;
    default:
        echo "分页失败";
    break;
}
?> 