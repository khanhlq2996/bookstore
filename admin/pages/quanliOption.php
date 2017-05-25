<?php
include('conn.php');
    if(isset($_POST['submit'])){
        foreach ($_POST as $key => $value) {
            # code...
            if($value ===""){
                $value = "null";
            }
        }
        $siteUrl = $_POST['siteUrl'];
        $siteName = $_POST['siteName'];
        $siteDescription = $_POST['siteDescription'];
        $siteEmail = $_POST['siteEmail'];
        $sitePhone = $_POST['sitePhone'];
        $siteMapUrl = $_POST['siteMapUrl'];
        $siteAddress = $_POST['siteAddress'];

        $query = "update options
                set site_url = $siteUrl, site_name = $siteName, site_description = $siteDescription, site_email = $siteEmail
                , site_phone = $sitePhone, site-maps_url = $siteMapUrl, site_address = $siteAddress where 1";
        $result = mysql_query($query);
        if($result){
            $notice = '<div class="alert alert-success">
                                <strong>Upload thanh cong</strong>
                                </div>';
        }
        else{
            $notice = '<div class="alert alert-danger">
                                <strong>Upload that bai</strong>
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
                            update Options<?=$siteUrl;?>
                        </div>
                        <div class="panel-body" style="margin-left: 180px;">
                            <div class="row">
                                <div class="col-lg-6" style="width: 80%">
                                    <form role="form" action="" method="post">
                                        <div class="form-group">
                                        <?php
                                            include('conn.php');
                                            $result = mysql_query("select*from options");
                                            while ($row = mysql_fetch_assoc($result)) {
                                                # code...

                                            
                                        ?>
                                            <label>site-url </label>
                                            <input class="form-control" type="text" placeholder="" name="siteUrl" id="1" value="<?=$row['site_url']?>">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>site-name</label>
                                            <input class="form-control" name="siteName" id="2" value="<?=$row['site_name']?>">
                                        </div>

                                        

                                        <div class="form-group">
                                            <label>site-description</label>
                                            <textarea class="form-control" rows="3" name="siteDescription" id="3" value="<?=$row['site_description']?>"> <?=$row['site_description']?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>site-email</label>
                                            <input class="form-control" name="siteEmail" id="4" value="<?=$row['site_email']?>">
                                        </div>
                                         <div class="form-group">
                                            <label>site-phone</label>
                                            <input class="form-control" name="sitePhone" id="5" value="<?=$row['site_phone']?>">
                                        </div>
                                         <div class="form-group">
                                            <label>site-maps_url</label>
                                            <textarea class="form-control" rows="3" name="siteMapUrl" id="6"><?=$row['site_maps_url']?></textarea>
                                        </div>
                                         <div class="form-group">
                                            <label>site-address</label>
                                            <input class="form-control" name="siteAddress" id="7" value="<?=$row['site_address']?>">
                                        </div>
                                        <?php }?>




                                                                                                                         
                                    
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

