<?php
    $notice;
    include('conn.php');
    if(isset($_POST['thuchien'])){
        $menuName = $_POST['menuName'];
        $menuUrl = $_POST['menuUrl'];
        $menuParent = $_POST['menuParent'];

        // kiem tra da ton tai menu nay chua
        $sql = "select*from menu where menu_name = '$menuName'"; 

     $result = mysql_query($sql);
     $num = mysql_num_rows($result);
     if($num >0){
        $notice = '<div class="alert alert-info">
                                <strong>Menu nay da ton tai</strong>
                                </div>';

     }
     else{
        $query = "insert into menu values('null','$menuName', '$menuUrl','$menuParent')";
        $result = mysql_query($query);
        if($result >0){
            $notice = '<div class="alert alert-success">
                                <strong>Them thanh cong</strong>
                                </div>';
        }
        else {
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
                    <h1 class="page-header">Menu</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Thêm Menu
                        </div>
                        <div class="panel-body" style="margin-left: 180px;">
                            <div class="row">
                                <div class="col-lg-6" style="width: 80%">
                                    <form role="form" action="" method="post">
                                        <div class="form-group">
                                            <label>Tên-Menu </label>
                                            <input class="form-control" type="text" name="menuName">
                                            <p class="help-block">Nhập vào Menu-name</p>
                                        </div>
                                      <div class="form-group">
                                            <label>Menu-url </label>
                                            <input class="form-control" type="text" name="menuUrl">
                                        </div>
                                 
                                     
                                        <div class="form-group">
                                            <label>Menu-Parent </label>
                                            <input class="form-control" type="text" name="menuParent">
                                        </div>
                                        <button type="submit" class="btn btn-default" name="thuchien">Thực hiện</button>
                                        <button type="reset" class="btn btn-default">Reset</button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                              </div>
                            <!-- /.row (nested) -->
                        </div>
                        <?php if(isset($notice)) echo $notice;?>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
</div>
        <!-- /#page-wrapper -->

