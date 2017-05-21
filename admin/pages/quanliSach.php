<div id="main">
<div id="page-wrapper" id="idThemSach">
            
             <div class="row">
                <div class="col-lg-12" id="idThemSach">
                    <h1 class="page-header">SẢN PHẨM</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Thêm Sản Phẩm
                        </div>
                        <div class="panel-body" style="margin-left: 180px;">
                            <div class="row">
                                <div class="col-lg-6" style="width: 80%">
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Tên-Sách </label>
                                            <input class="form-control">
                                            <p class="help-block">Nhập vào tên sản phẩm</p>
                                        </div>
                                        <div class="form-group">
                                            <label>ID-Tác-giả</label>
                                            <input class="form-control">
                                        </div>

                                        <form>
                                            <div class="form-group">
                                            <label>Avatar-link-book</label>
                                            <input class="form-control" type="text" id="disabledInput" disabled value="">
                                            </div>
                                        <div class="form-group">
                                            <label>File input</label>
                                            <input type="file">
                                            <input type="submit" name="upLoad" value="upload">
                                        </div>

                                        </form>

                                        <div class="form-group">
                                            <label>Description-books</label>
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>
                                       
                                        <div class="form-group">
                                            <label>Categories </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" value="1">1
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" value="2">2
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" value="3">3
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" value="4">4
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" value="5">5
                                            </label>
                                        </div>
                                         <div class="form-group">
                                            <label>Giá-Sản phẩm</label>
                                            <input class="form-control" type="text">
                                        </div>
                                        <div class="form-group">

                                         <div class="form-group">
                                            <label>Số lượng Views </label>
                                            <input class="form-control" type="text" id="disabledInput" disabled value="0">
                                        </div>

                                        <div class="form-group">
                                            <label>Số lượng likes </label>
                                            <input class="form-control" type="text" id="disabledInput" disabled value="0">
                                        </div>
                                        <div class="form-group">
                                            <label>Số lượng shares</label>
                                            <input class="form-control" type="text" id="disabledInput" disabled value="0">
                                        </div>

                                           
                                        <div class="form-group">
                                            <label>Thêm-Tag</label>
                                            <select multiple class="form-control">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                         <div class="form-group">
                                            <label>Ngày-tạo-sản-phẩm</label>
                                            <input class="form-control" placeholder="dd/mm/yy" type="date">
                                        </div>
                                        <button type="submit" class="btn btn-default">Submit Button</button>
                                        <button type="reset" class="btn btn-default">Reset Button</button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                              </div>
                            <!-- /.row (nested) -->
                        </div>
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
    $result = mysql_query('select*from product');
    $num = mysql_num_rows($result);
    for($i = 0 ; $i < $num ; $i++ ){
        $submit = 'submit'.$i;
        $submitt = 'submitt'.$i;
        if(isset($_POST[$submit])){
            // nut thu i duoc click
           $t = 0;
           while($row = mysql_fetch_assoc($result)){
                if($t == $i){
                    $id = $row['product_id'];
                    $sql = "delete from product where product_id=$id";
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
                                        <th>product_id</th>
                                        <th>product_name</th>
                                        <th>author_id</th>
                                        <th>categories</th>
                                        <th>produc_description</th>
                                        <th>product_price</th>
                                        <th>product_avatar</th>
                                        <th>tags</th>
                                        <th>product_created</th>
                                        <th>Tools</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                 include('conn.php');
                                $sql ="select product_id, product_name, author_id, categories,product_description, product_price, product_avata, tags, product_created 
                                    from product";
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
                                <button type="submit" class="btn btn-link" name="submit<?=$count?>">Xóa sách</button>
                                <a href="#idThemSach" class="btn btn-link" name="submittt<?=$count?>">Thêm Sách</a>
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
                        <?php echo $notice?>
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

