<script type="text/javascript">
    function showthaydoiMK(){
        var str = '<form action="" method="post"><div><label>Nhập vào mật khẩu cũ:</label><input type="text" class="form-control" name="mkcu"><label>Nhập vào mật khẩu mới:</label><input type="text" class="form-control" name="mkmoi" placeholder="mk phải chứa ít nhất 1 kí tự đặc biệt và 1 chữ cái hoa"><input type="submit" name="submit" value="thay đổi"></div></form>';
        document.getElementById('doimk').innerHTML = str;
    }

    function showsuaTT(){

    }

</script>
<style type="text/css">
    #frame{
        border: 1px dotted;

        width: 450px;
        height: 500px;

    }
    #image{
        width: 150px;
        height: 150px;
        float: left;
    }
    #content{
        clear: both;
    }
    td{
        font-size: 18px;
    }
    #doimk{
        width: 450px;
        height: 500px;
        position: relative;
        top: -500px;
        left: 500px;
    }

</style>

<?php
    include('conn.php');
    if(isset($_SESSION['userName'])){
        $admin = $_SESSION['userName'];
         $query="select*from adminstrator where admin_name = '$admin'";
         $result = mysql_query($query);
         $row = mysql_fetch_assoc($result);

        }

include('close.php');
?>
<?php
    $notice="";
    include('conn.php');
    if(isset($_POST['submit'])){
        $mkcu = $_POST['mkcu'];
        $mkmoi = $_POST['mkmoi'];
        $admin = $_SESSION['userName'];
        if($mkcu ==="" || $mkmoi === ""){

            $notice = '<div class="alert alert-info">
                                <strong>Vui lòng Điền vào đầy đủ các field</strong>
                                </div>'; 
        }
        else{
            $data = md5($mkmoi);
            $query = "update adminstrator set admin_password = '$data' where admin_name = '$admin'";
            $result = mysql_query($query);

        if($result){
            $notice = '<div class="alert alert-success">
                                <strong>thay đổi mk thành công</strong>
                                </div>';
        }
        else{
            $notice = '<div class="alert alert-danger">
                                <strong>Đổi mật khẩu thất bại</strong>
                                </div>';
        }
    }

}
include('close.php');

?>

<div id="page-wrapper">
            
             <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header" style="text-align: center;">Trang Thông tin cá nhân</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div id="frame">

                    <div id="image">
                    <img src="../uploads/person.png" id="image">
                    </div>
                    <div id="content">
                    <table>
                        <tr>
                            <td style="padding: 15px;" width="200px"> <strong>ID:</strong></td>
                            <td style="padding: 15px;"><?=$row['admin_id']?> </td>
                        </tr>
                        <tr>
                            <td style="padding: 15px;"> <strong>Tên tài khoản: </strong></td>
                            <td style="padding: 15px;"><?=$row['admin_name']?> </td>
                        </tr>
                        <tr>
                            <td style="padding: 15px;"><strong>Password:</strong></td>
                            <td style="padding: 15px;"><?=$row['admin_password']?> </td>
                        </tr>
                        <tr>
                            <td style="padding: 15px;"> <strong>Email:</strong></td>
                            <td style="padding: 15px;"><?=$row['admin_email']?> </td>
                        </tr>
                        <tr>
                            <td style="padding: 15px;"><strong>Level:</strong></td>
                            <td style="padding: 15px;"><?=$row['admin_level']?> </td>
                        </tr>
                    </table>
                       
                    </div>
                    <button type="button" class="btn btn-link" name="doimk" onclick="showthaydoiMK();">Thay đổi mật khẩu</button>
                </div>
                <div id="doimk">
                    <?=$notice;?>
                </div>
            </div>
            <!-- /.row -->
</div>
        <!-- /#page-wrapper -->

