
<?php
 include('conn.php');
 $notice="";
if(isset($_SERVER['REQUEST_METHOD']) == 'post'){
    $result = mysql_query('select*from user');
    $num = mysql_num_rows($result);
    for($i = 0 ; $i < $num ; $i++ ){
        $submit = 'submit'.$i;
        if(isset($_POST[$submit])){
            // nut thu i duoc click
           $t = 0;
           while($row = mysql_fetch_assoc($result)){
                if($t == $i){
                    $id = $row['user_id'];
                    $sql = "delete from user where user_id=$id";
                    mysql_query($sql);
                    $notice = '<div class="alert alert-success">
                                <strong>Xóa thành công</strong>
                                </div>';
                    break;
                }

                $t++;
           }
        }
    }
}
mysql_free_result($result);
include('close.php');
?>
       

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Thành viên</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Bảng thành viên
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        <form action="" method="post"><table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>user_id</th>
                                        <th style="text-align: left;">user_name</th>
                                        <th>user_password</th>
                                        <th>user_email</th>
                                        <th>user_phone</th>
                                        <th>user_address</th>
                                        <th> Tool</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                 include('conn.php');
                                $sql = "select*from user";
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
                                <td style="text-align: center;"><button type="submit" class="btn btn-link" name="submit<?=$count?>">Xóa</button></td></tr>
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
                        <?php echo $notice?>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

