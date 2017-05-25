
<script type="text/javascript">  
// xu li them vao so luong anh vao slide
    function showField(){
        var x = frm.txt.value;
        var str="";
        for(i=1;i<=x;i++){
            str+='<label>Image '+i+'</label>'+
                 '<input type ="text"  class="form-control" name="'+i+'" id='+i+' disabled>'
                 +'<input type="file" name ="file[]" id="file'+i+'" onmouseout="showValue('+i+');">';
        }
        document.getElementById('image').innerHTML=str;
    }

    function showValue(i){
        var idname = "file"+i;
        var x = document.getElementById(idname).value;
        var str = x.split("\\");
        document.getElementById(i).value = str[str.length -1];

    }


</script>

<?php
    $notice;
    if(isset($_POST['upload'])){
        $urlSlide ="";
        // tao 1 file
        $imageNb = $_POST['txt'];
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
                    for($i = 0; $i<$imageNb;$i++){
                        $urlSlide .= $dirpath.'/'.$_FILES['file']['name'][$i].','; 
                        move_uploaded_file($_FILES['file']['tmp_name'][$i],$dirpath.'/'.$_FILES['file']['name'][$i]);
                        // ghep vao thanh xau s,dad,ada
                    }
            
            }
        }

        // them vao csdl
        $tenSlide = $_POST['tenSlide'];
        include('conn.php');
        $sql = "insert into slide values('null','$tenSlide', '$urlSlide')";
       // echo $sql;
        $result = mysql_query($sql);
        if($result > 0 ){
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

?>
<div id="page-wrapper">
            
             <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Slide-show</h1>
                </div> 
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Thêm Slide
                        </div>
                        <div class="panel-body" style="margin-left: 180px;">
                            <div class="row">
                                <div class="col-lg-6" style="width: 80%">
                                    <form role="form" id="frm" action="" method="post" enctype='multipart/form-data'>
                                        <div class="form-group">
                                            <label>Tên-Slide </label>
                                            <input class="form-control" name="tenSlide">
                                            <p class="help-block">Nhập vào Slide-name</p>
                                        </div>

                                            
                                        <div class="form-group">
                                            <label>Nhập vào số lượng ảnh: </label>
                                            <input class="form-control" type="text" name="txt" >
                                        <input type="button" name="submit" value="Thêm-vào-slide" onclick="showField();">    


                                        </div>
                                         <div class="form-group" id="image">

                                        </div>
                                 
                                     
                                        
                                        <button type="submit" class="btn btn-default" name="upload">Thực hiện</button>
                                        <button type="reset" class="btn btn-default">Reset</button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                              </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    <?php if(isset($notice)) echo $notice?>
                </div>
                <!-- /.col-lg-12 -->

            </div>
            <!-- /.row -->
</div>
        <!-- /#page-wrapper -->

