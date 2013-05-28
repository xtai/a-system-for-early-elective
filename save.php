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
          
          $all = file_get_contents("data/all.txt");
          $alldata = explode(",",$all);
          
          $student = file_get_contents("data/$id.txt");
          $data = explode(",",$student);
          for($i=0;$i<15;$i++){
              if($_POST["$i"]){
                if($data[$i]==0){
                    $data[$i]=1;
                    $alldata[$i]+=1;
                }
              }else{
                if($data[$i]==1){
                    $data[$i]=0;
                    $alldata[$i]-=1;
                }
              }
          }
          $save = implode(",",$data);
          file_put_contents("data/$id.txt",$save);
          $saveall = implode(",",$alldata);
          file_put_contents("data/all.txt",$saveall);
          
    ?>
    
    
  <div id="wrapper">
    <div id="content">
<h1 id="">信管专业预选课</h1>

<h2 id="">学科基础选修课</h2>
<br>
<hr>
<h3><?php print($id); ?>, 存好了！</h3>
<p>点击下面按钮返回，查看结果</p>
<a class="button" href="index.html">返回</a>
<hr>

    </div>
  </div> <!-- End wrapper -->
</body>
</html>