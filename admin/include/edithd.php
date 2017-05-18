<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="renderer" content="webkit">
<title></title>
<link rel="stylesheet" href="../css/pintuer.css">
<link rel="stylesheet" href="../css/admin.css">
<script src="../js/jquery.js"></script>
</head>
<body>
<div class="panel admin-panel">
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>修改内容</strong></div>
  <div class="body-content">
    <?php
    require "util/connUtil.php";
    $id=$_GET["id"];
    echo "<form method='post' class='form-x' action='update.php?item=updatehd&id=".$id."' enctype='multipart/form-data'>
      <div class='form-group'>
        <div class='label'>
          <label>标题：</label>
        </div>
        <div class='field'>";
            $sql = "select * from huodong where id = ".$id."";
            $result = mysqli_query($conn,$sql);
            if($result -> num_rows > 0){
              while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
                echo "<input type='text' class='input w50' value='".$row["title"]."' name='title' data-validate='required:请输入标题' />
                <div class='tips'></div>
              </div>
            </div>";
                
            echo"<div class='form-group'>
              <div class='label'>
                <label>内容：</label>
              </div>
              <div class='field'>";
                echo "<textarea name='content' class='input' style='height:200px; border:1px solid #ddd;'>".$row["content"]."</textarea>
                <div class='tips'></div>
              </div>
            </div>";
                
            
     
      echo "<div class='clear'></div>
      <div class='form-group'>
        <div class='label'>
          <label></label>
        </div>
        <div class='field'>
          <button class='button bg-main icon-check-square-o' type='submit'> 提交</button>
        </div>
      </div>
    </form>";
      }
    }
    mysqli_close($conn);
  ?>
  </div>
</div>

</body>
  
</html>