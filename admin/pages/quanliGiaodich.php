
<?php
 include('conn.php');
 $notice="";
if(isset($_SERVER['REQUEST_METHOD']) == 'post'){
    $result = mysql_query('select*from transaction');
    $num = mysql_num_rows($result);
    for($i = 0 ; $i < $num ; $i++ ){
        $submit = 'submit'.$i;
        $submitt = 'submitt'.$i;
        if(isset($_POST[$submit])){
            // nut thu i duoc click
           $t = 0;
           while($row = mysql_fetch_assoc($result)){
                if($t == $i){
                    $id = $row['transaction_id'];
                    $sql = "delete from transaction where transaction_id=$id";
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
        if(isset($_POST[$submitt])){
            // nut thu i duoc click
           $t = 0;
           while($row = mysql_fetch_assoc($result)){
                if($t == $i){
                    $id = $row['transaction_id'];
                    if($row['transaction_status'] == 0){
                        $sql = "update transaction set transaction_status = 1 where transaction_id=$id";

                    }
                    else{
                        $sql = "update transaction set transaction_status = 0 where transaction_id=$id";
                    }
                    $result = mysql_query($sql);
                   if($result > 0){
                     $notice = '<div class="alert alert-success">
                                <strong> Sửa thành công</strong>
                                </div>';
                   }
                   else{
                     $notice = '<div class="alert alert-danger">
                                <strong>Sửa thất bại</strong>
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
       

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Giao dịch</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Bảng Giao dịch
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        <form action="" method="post"><table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>transaction_id</th>
                                        <th>user_id</th>
                                        <th>user_name</th>
                                        <th>user_phone</th>
                                        <th>user_address</th>
                                        <th>order</th>
                                        <th>total_pay</th>
                                        <th>comment_created</th>
                                        <th>transaction_status</th>
                                        <th>Tools</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                 include('conn.php');
                                $sql = "select*from transaction";
                                $result = mysql_query($sql);
                                $count = 0;
                                 while($row = mysql_fetch_assoc($result)){
                                    if($row['transaction_status'] == 0){
                                ?>
                                 <tr class="danger">
                                 <?php
                                 foreach ($row as $key => $value) {
                                 # code...
                                ?>
                                <td style="text-align: center; padding: 10px" ><?=$value?></td>
                                <?php
                                    }
                                ?>
                                <td style="text-align: center;">
                                <button type="submit" class="btn btn-link" name="submit<?=$count?>">Xóa</button>
                                <button type="submit" class="btn btn-link" name="submitt<?=$count?>">Sửa</button>
                                </td>
                                </tr>
                                <?php
                            
                                    }
                                    else{

                                ?>
                                 <tr class="success">
                                 <?php
                                 foreach ($row as $key => $value) {
                                 # code...
                                ?>
                                <td style="text-align: center;"><?=$value?></td>
                                <?php
                                    }
                                ?>
                                <td style="text-align: center;">
                                <button type="submit" class="btn btn-link" name="submit<?=$count?>">Xóa</button>
                                <button type="submit" class="btn btn-link" name="submitt<?=$count?>">Sửa</button>
                                </td>
                                </tr>  
                                <?php        
                                    }
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