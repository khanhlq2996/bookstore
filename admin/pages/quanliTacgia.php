<?php
include('conn.php');
if(isset($_POST['submit'])){
    //xu li anh
    // tao thu muc 
    $link="";
    $notice="";
        $date = date('d/m/y');
        $date = explode("/", $date);
        $date = implode("-", $date);
        $dirpath = '../uploads/'.$date;
        if(!is_dir($dirpath)){
            mkdir($dirpath);
            chmod($dirpath, 777);
        }
        // xu li upload
       if(is_dir($dirpath)){
            if(isset($_FILES['file'])){
                move_uploaded_file($_FILES['file']['tmp_name'],$dirpath.'/'.$_FILES['file']['name']);
                $link = $dirpath.'/'.$_FILES['file']['name'];
            }
       }

    //them sach
    $tensach = $_POST['tentacgia'];
    $description = $_POST['description'];
    $ngaysinh = $_POST['ngaysinh'];
    $ngayquadoi = $_POST['ngayquadoi'];
    $native= $_POST['native'];

    $query ="insert into author values('null','$tensach','$link','$ngaysinh','$ngayquadoi','$native','$description')";
    $result = mysql_query($query);

}
include('close.php');


?>
<script type="text/javascript">
    function showValue(){
        var x = document.getElementById('image').value;
        var str = x.split("\\");
        document.getElementById('disabledInput').value = str[str.length -1];


    }

</script>
<div id="main">
<div id="page-wrapper" id="idThemSach">
            
             <div class="row">
                <div class="col-lg-12" id="idThemSach">
                    <h1 class="page-header">Tác giả</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Thêm tác giả
                        </div>
                        <div class="panel-body" style="margin-left: 180px;">
                            <div class="row">
                                <div class="col-lg-6" style="width: 80%">
                                    <form role="form" action="" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Tên tác giả </label>
                                            <input class="form-control" type="text" name="tentacgia">
                                        </div>
                                    
                                            <div class="form-group">
                                            <label>ảnh đại diện</label>
                                            <input class="form-control" type="text" id="disabledInput" disabled value="" name="link">
                                            </div>
                                        <div class="form-group">
                                            <label>File input</label>
                                            <input type="file" id="image" name="file" onmouseout="showValue();">
                                        </div>
                                         <div class="form-group">
                                            <label>Ngày sinh</label>
                                            <input class="form-control" placeholder="dd/mm/yy" type="date" name="ngaysinh">
                                        </div>
                                         <div class="form-group">
                                            <label>Ngày qua đời</label>
                                            <input class="form-control" placeholder="dd/mm/yy" type="date" name="ngayquadoi">
                                        </div>
                                        <div class="form-group">
                                            <label>Author-native-land </label>
                                            <input class="form-control" type="text" name="native">
                                        </div>

                                        <div class="form-group">
                                            <label>Mô tả</label>
                                            <textarea class="form-control" rows="3" name="description"></textarea>
                                        </div>

                                           
                                        <button type="submit" class="btn btn-default" name="submit">Thực hiện</button>
                                        <button type="reset" class="btn btn-default">Reset</button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                              </div>
                            <!-- /.row (nested) -->
                        </div>
                        <?php if(isset($notice)) echo $notice?>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->


<?php
 include('conn.php');
 $notice="";
if(isset($_SERVER['REQUEST_METHOD']) == 'post'){
    $result = mysql_query('select*from author');
    $num = mysql_num_rows($result);
    for($i = 0 ; $i < $num ; $i++ ){
        $submit = 'submit'.$i;
        $submitt = 'submitt'.$i;
        if(isset($_POST[$submit])){
            // nut thu i duoc click
           $t = 0;
           while($row = mysql_fetch_assoc($result)){
                if($t == $i){
                    $id = $row['author_id'];
                    $sql = "delete from author where author_id=$id";
                    $result = mysql_query($sql);
                   if($result > 0){
                     $notice = '<div class="alert alert-success">
                                <strong>Xóa thành công</strong>
                                </div>';
                   }
                   else{
                     $notice = '<div class="alert alert-danger">
                                <strong>Xóa thất bại</strong>
                                </div>';
                   }
                    break;
                }

                $t++;
           }
        }
    }
}

include('close.php');
?>

       
            <div class="row">
                <div class="col-lg-12" id="TTSach">

                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Thông tin sách
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        <form action="" method="post"><table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>mã tác giả</th>
                                        <th>tên tác giả</th>
                                        <th>ảnh đại diện</th>
                                        <th>Ngày sinh</th>
                                        <th>Ngày mất</th>
                                        <th>Author-native-land</th>
                                        <th>mô tả</th>
                                        <th>Tools</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                 include('conn.php');
                                $sql ="select* 
                                    from author";
                                $result = mysql_query($sql);
                                $count = 0;
                                 while($row = mysql_fetch_assoc($result)){
                                ?>
                                 <tr>
                                 <?php
                                 foreach ($row as $key => $value) {
                                 # code...
                                ?>
                                <td style="text-align: center;"><?=$value?></td>
                                <?php
                                    }
                                ?>
                                <td style="text-align: center;">
                                <button type="submit" class="btn btn-link" name="submit<?=$count?>">Xóa Author</button>
                                <a href="#idThemSach" class="btn btn-link" name="submittt<?=$count?>">Thêm Author</a>
                                </td>
                                </tr>
                            
                                <?php        
                                
                                    $count++;
                                }
                                mysql_free_result($result);
                                include('close.php');
                                ?>
                                </tbody>
                            </table>
                        </form>
                            <!-- /.table-responsive -->
                          
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
</div>
        <!-- /#page-wrapper -->



</div>

<!-- main -->

