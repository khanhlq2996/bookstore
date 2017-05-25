<script type="text/javascript">
    function showValue(){
        var x = document.getElementById('file11').value;
        var data = x.split("\\");
        document.getElementById('disabledInput').value = data[data.length-1];
    }

</script>
<?php
    include('conn.php');
    if(isset($_POST['submit'])){
        $notice;
        $link = "";
        // tao thu muc 
        $date = date('d/m/y');
        $date = explode("/", $date);
        $date = implode("-", $date);
        $dirpath = '../uploads/'.$date;
        if(!is_dir($dirpath)){
            mkdir($dirpath);
            chmod($dirpath, 777);
        }
        // xu li upload
       if(is_dir($date)){
            if(isset($_FILES['file'])){
                move_uploaded_file($_FILES['file']['tmp_name'],$dirpath.'/'.$_FILES['file']['name']);
                $link = $dirpath.'/'.$_FILES['file']['name'];
            }
       }

        // them vao csdl
        $categoryName = $_POST['categoryName'];
        $area = $_POST['area'];
        $parent = $_POST['parent'];
        $slug = $_POST['slug'];

        $sql = "select*from category where category_name = '$categoryName'";
        $result = mysql_query($sql);
        $num = mysql_num_rows($result);
        if($num >0){
            $notice = '<div class="alert alert-info">
                                <strong>Category nay da ton tai</strong>
                                </div>';
        }
        else{
            $query = "insert into category values('null','$categoryName','$slug','$area','$link','$parent')";
            $result = mysql_query($query);
            if($result>0){
                $notice = '<div class="alert alert-success">
                                <strong>Them thanh cong</strong>
                                </div>';
            }
            else{
                $notice = '<div class="alert alert-danger">
                                <strong>Them that bai</strong>
                                </div>';
            }
        }

    }
    include('close.php');

?>

<div id="page-wrapper">
            
             <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Categories</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Thêm Category
                        </div>
                        <div class="panel-body" style="margin-left: 180px;">
                            <div class="row">
                                <div class="col-lg-6" style="width: 80%">
                                    <form role="form" action="" method="post" enctype='multipart/form-data'>
                                        <div class="form-group">
                                            <label>Tên-Category </label>
                                            <input class="form-control" name="categoryName">
                                            <p class="help-block">Nhập vào tên Category tag</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Slug </label>
                                            <input class="form-control" name="slug">
                
                                        </div>
                                      
                                      
                                            <div class="form-group">
                                            <label>Avatar-link-Category</label>
                                            <input class="form-control" type="text" id="disabledInput" disabled name="link">
                                            </div>
                                        <div class="form-group">
                                            <label>File input</label>
                                            <input type="file" id="file11" name="file" onmouseout="showValue();">
                                        </div>


                                        <div class="form-group">
                                            <label>Description-Category</label>
                                            <textarea class="form-control" rows="3" name="area"></textarea>
                                        </div>
                                       
                                       
                                        
                                         <div class="form-group">
                                            <label>Category-Parent </label>
                                            <input class="form-control" name="parent">
                                        </div>
                                        <button type="submit" class="btn btn-default" name="submit">Submit Button</button>
                                        <button type="reset" class="btn btn-default">Reset Button</button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                              </div>
                            <!-- /.row (nested) -->
                        </div>
                        <?php if(isset($notice)) echo $notice; ?>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
</div>
        <!-- /#page-wrapper -->

