<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1 plus MathML 2.0//EN"
"http://www.w3.org/TR/2001/REC-MathML2-20010221/dtd/xhtml-math11-f.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<title>信管专业预选课</title>
	<meta name="author" content="Xiaoyu Tai"/>
	<meta name="email" content="taixiaoyu@gmail.com"/>
	<meta name="date" content="May 28, 2013"/>
    <link href="stylesheet.css" rel="stylesheet">
	
</head>
<body>
    <?php
          $id = $_POST["id"];
          if(file_exists("data/$id.txt")){
            $file = fopen("data/$id.txt","r+");
          }else{
            $file = fopen("data/$id.txt","w");
            file_put_contents("data/$id.txt","0,0,0,0,0,0,0,0,0,0,0,0,0,0,0");
          }
          $student = file_get_contents("data/$id.txt");
          $all = file_get_contents("data/all.txt");
          $alldata = explode(",",$all);
          $data = explode(",",$student);
          $sum1 = $data[0]*3+$data[1]*2+$data[2]*2+$data[3]*2+$data[4]*2;
          $sum2 = $data[5]*3+$data[6]*3+$data[7]*2+$data[8]*2+$data[9]*2+$data[10]*2+$data[11]*2+$data[12]*2+$data[13]*2+$data[14]*2;
        ?>
    
    
  <div id="wrapper">
    <div id="content">
<h1 id="">信管专业预选课</h1>

<p><?php print($id); ?>, 你好嘛？</p>
<form action="save.php" method="post">

<table>
<colgroup>
<col style="text-align:center;"/>
<col style="text-align:center;"/>
<col style="text-align:center;"/>
<col style="text-align:center;"/>
<col style="text-align:center;"/>
</colgroup>

<thead>
<tr>
	<th style="text-align:center;">学科基础选修课</th>
	<th style="text-align:center;">开课时间</th>
	<th style="text-align:center;">学分</th>
	<th style="text-align:center;">已选人数</th>
	<th style="text-align:center;">选课</th>
</tr>
</thead>

<tbody>
<tr>
	<td style="text-align:center;">应⽤用统计学I</td>
	<td style="text-align:center;">大三上</td>
	<td style="text-align:center;">3</td>
	<td style="text-align:center;"><?php print("$alldata[0]"); ?></td>
	<td style="text-align:center;"><input id="0" type="checkbox" name="0" <?php if($data[0]){print("checked='checked'");} ?> onclick="sum1(0,3)"/></td>
</tr>
<tr>
	<td style="text-align:center;">数据库管理</td>
	<td style="text-align:center;">大三上</td>
	<td style="text-align:center;">2</td>
	<td style="text-align:center;"><?php print("$alldata[1]"); ?></td>
	<td style="text-align:center;"><input id="1" type="checkbox" name="1" <?php if($data[1]){print("checked='checked'");} ?> onclick="sum1(1,2)"/></td>
</tr>
<tr>
	<td style="text-align:center;">管理系统⼯工程</td>
	<td style="text-align:center;">大三下</td>
	<td style="text-align:center;">2</td>
	<td style="text-align:center;"><?php print("$alldata[2]"); ?></td>
	<td style="text-align:center;"><input id="2" type="checkbox" name="2" <?php if($data[2]){print("checked='checked'");} ?> onclick="sum1(2,2)"/></td>
</tr>
<tr>
	<td style="text-align:center;">⽣生产与运作管理</td>
	<td style="text-align:center;">大四上</td>
	<td style="text-align:center;">2</td>
	<td style="text-align:center;"><?php print("$alldata[3]"); ?></td>
	<td style="text-align:center;"><input id="3" type="checkbox" name="3" <?php if($data[3]){print("checked='checked'");} ?> onclick="sum1(3,2)"/></td>
</tr>
<tr>
	<td style="text-align:center;">管理决策⽅方法与模型</td>
	<td style="text-align:center;">大四上</td>
	<td style="text-align:center;">2</td>
	<td style="text-align:center;"><?php print("$alldata[4]"); ?></td>
	<td style="text-align:center;"><input id="4" type="checkbox" name="4" <?php if($data[4]){print("checked='checked'");} ?> onclick="sum1(4,2)"/></td>
</tr>
<tr>
	<td style="text-align:center;" colspan="2">总计</td>
	<td style="text-align:center;" colspan="2">需要9学分</td>
	<td style="text-align:center;">已选<span id="sum1"></span>学分</td>
</tr>
</tbody>
</table>

<table>
<colgroup>
<col style="text-align:center;"/>
<col style="text-align:center;"/>
<col style="text-align:center;"/>
<col style="text-align:center;"/>
<col style="text-align:center;"/>
</colgroup>

<thead>
<tr>
    <th style="text-align:center;">专业限选课</th>
    <th style="text-align:center;">开课时间</th>
    <th style="text-align:center;">学分</th>
    <th style="text-align:center;">已选人数</th>
    <th style="text-align:center;">选课</th>
</tr>
</thead>

<tbody>
<tr>
    <td style="text-align:center;">经济法概论I</td>
    <td style="text-align:center;">大三上</td>
    <td style="text-align:center;">3</td>
    <td style="text-align:center;"><?php print("$alldata[5]"); ?></td>
    <td style="text-align:center;"><input id="5" type="checkbox" name="5" <?php if($data[5]){print("checked='checked'");} ?> onclick="sum2(5,3)"/></td>
</tr>
<tr>
    <td style="text-align:center;">经济计量学</td>
    <td style="text-align:center;">大三上</td>
    <td style="text-align:center;">3</td>
    <td style="text-align:center;"><?php print("$alldata[6]"); ?></td>
    <td style="text-align:center;"><input id="6" type="checkbox" name="6" <?php if($data[6]){print("checked='checked'");} ?> onclick="sum2(6,3)"/></td>
</tr>
<tr>
    <td style="text-align:center;">软件项目管理</td>
    <td style="text-align:center;">大三上</td>
    <td style="text-align:center;">2</td>
    <td style="text-align:center;"><?php print("$alldata[7]"); ?></td>
    <td style="text-align:center;"><input id="7" type="checkbox" name="7" <?php if($data[7]){print("checked='checked'");} ?> onclick="sum2(7,2)"/></td>
</tr>
<tr>
    <td style="text-align:center;">数据仓库与数据挖掘</td>
    <td style="text-align:center;">大三下</td>
    <td style="text-align:center;">2</td>
    <td style="text-align:center;"><?php print("$alldata[8]"); ?></td>
    <td style="text-align:center;"><input id="8" type="checkbox" name="8" <?php if($data[3]){print("checked='checked'");} ?> onclick="sum2(8,2)"/></td>
</tr>
<tr>
    <td style="text-align:center;">地理信息系统</td>
    <td style="text-align:center;">大三下</td>
    <td style="text-align:center;">2</td>
    <td style="text-align:center;"><?php print("$alldata[9]"); ?></td>
    <td style="text-align:center;"><input id="9" type="checkbox" name="9" <?php if($data[9]){print("checked='checked'");} ?> onclick="sum2(9,2)"/></td>
</tr>
<tr>
    <td style="text-align:center;">电子商务I</td>
    <td style="text-align:center;">大四上</td>
    <td style="text-align:center;">2</td>
    <td style="text-align:center;"><?php print("$alldata[10]"); ?></td>
    <td style="text-align:center;"><input id="10" type="checkbox" name="10" <?php if($data[10]){print("checked='checked'");} ?> onclick="sum2(10,2)"/></td>
</tr>
<tr>
    <td style="text-align:center;">知识管理</td>
    <td style="text-align:center;">大四上</td>
    <td style="text-align:center;">2</td>
    <td style="text-align:center;"><?php print("$alldata[11]"); ?></td>
    <td style="text-align:center;"><input id="11" type="checkbox" name="11" <?php if($data[11]){print("checked='checked'");} ?> onclick="sum2(11,2)"/></td>
</tr>
<tr>
    <td style="text-align:center;">⼈机交互技术</td>
    <td style="text-align:center;">大四上</td>
    <td style="text-align:center;">2</td>
    <td style="text-align:center;"><?php print("$alldata[12]"); ?></td>
    <td style="text-align:center;"><input id="12" type="checkbox" name="12" <?php if($data[12]){print("checked='checked'");} ?> onclick="sum2(12,2)"/></td>
</tr>
<tr>
    <td style="text-align:center;">技术管理</td>
    <td style="text-align:center;">大四上</td>
    <td style="text-align:center;">2</td>
    <td style="text-align:center;"><?php print("$alldata[13]"); ?></td>
    <td style="text-align:center;"><input id="13" type="checkbox" name="13" <?php if($data[13]){print("checked='checked'");} ?> onclick="sum2(13,2)"/></td>
</tr>
<tr>
    <td style="text-align:center;">技术经济学</td>
    <td style="text-align:center;">大四下</td>
    <td style="text-align:center;">2</td>
    <td style="text-align:center;"><?php print("$alldata[14]"); ?></td>
    <td style="text-align:center;"><input id="14" type="checkbox" name="14" <?php if($data[14]){print("checked='checked'");} ?> onclick="sum2(14,2)"/></td>
</tr>
<tr>
    <td style="text-align:center;" colspan="2">总计</td>
    <td style="text-align:center;" colspan="2">需要12学分</td>
    <td style="text-align:center;">已选<span id="sum2"></span>学分</td>
</tr>
</tbody>
</table>


<input type="text" name="id" <?php print("value='$id'")?> style="display:none;">
<div style="text-align:center;">
<button type="submit" style="font-size:30px;">保存</button>

</div>
</form>

    </div>
  </div> <!-- End wrapper -->
  <script src="jquery.js"></script>
  <script>
      $(document).ready(function () {
        $sum1=<?php print($sum1); ?>;
        $('#sum1').text($sum1);
        $sum2=<?php print($sum2); ?>;
        $('#sum2').text($sum2);
      });
      function sum1(i,k) {
        var ele = document.getElementById(i);
        if (ele.checked) {
            $sum1+=k;
        }else{
            $sum1-=k;
        }
        $('#sum1').text($sum1);
      }
      function sum2(i,k) {
        var ele = document.getElementById(i);
        if (ele.checked) {
            $sum2+=k;
        }else{
            $sum2-=k;
        }
        $('#sum2').text($sum2);
      }
      
  </script>
</body>
</html>