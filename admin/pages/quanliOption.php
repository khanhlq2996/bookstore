<?php
    include('conn.php');
    if(isset($_POST['submit'])){
        $siteUrl = $_POST['siteUrl'];
        $siteName = $_POST['siteName'];
        $siteDescription = $_POST['siteDescription'];
        $siteEmail = $_POST['siteEmail'];
        $sitePhone = $_POST['sitePhone'];
        $siteMapUrl = $_POST['siteMapUrl'];

        $sql = "insert into options values('$siteUrl','$siteName','$siteDescription','$siteEmail','$sitePhone','$siteMapUrl')";
        $result = mysql_query($sql);
        if($result>0){
            $notice= '<div class="alert alert-success">
                                <strong>Them thanh cong</strong>
                                </div>';
        }
        else{
            $notice = '<div class="alert alert-danger">
                                <strong>Them that bai</strong>
                                </div>';
        }
    }
    include('close.php');

?>

<div id="page-wrapper">
            
             <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Option</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Thêm Option
                        </div>
                        <div class="panel-body" style="margin-left: 180px;">
                            <div class="row">
                                <div class="col-lg-6" style="width: 80%">
                                    <form role="form" action="" method="post">
                                        <div class="form-group">
                                            <label>site-url </label>
                                            <input class="form-control" type="text" placeholder="" name="siteUrl">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>site-name</label>
                                            <input class="form-control" name="siteName">
                                        </div>

                                        

                                        <div class="form-group">
                                            <label>site-description</label>
                                            <textarea class="form-control" rows="3" name="siteDescription"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>site-email</label>
                                            <input class="form-control" name="siteEmail">
                                        </div>
                                         <div class="form-group">
                                            <label>site-phone</label>
                                            <input class="form-control" name="sitePhone">
                                        </div>
                                         <div class="form-group">
                                            <label>site-map-url</label>
                                            <input class="form-control" name="siteMapUrl">
                                        </div>



                                                                                                                         
                                    
                                        <button type="submit" class="btn btn-default" name="submit">Thuc hien</button>
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

