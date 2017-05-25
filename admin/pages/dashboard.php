
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div id="morris-bar-chart"></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <!-- /.row -->
                            Biểu đồ thể hiện số lượng giao dịch thành công của các tháng trong năm 

                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-8 -->
                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-book fa-fw"></i> Số lượng các loại Sách trong shop
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <canvas id="countries" width="300" height="200"></canvas>
                            <ul style="list-style-type: none;">
                            <?php
                            $data;
                            $i=0;
                            include('conn.php');
                            $result= mysql_query("select category_name from category where category_id >=1 and category_id <=8");
                                while ($row= mysql_fetch_assoc($result)) {
                                    # code...
                                    $data[$i] = $row['category_name'];
                                    $i++;
                                }
                                
                            ?>
                            <li style=" color: #878BB6"><?=$data[0]?> </li>
                            <li style="color: #4ACAB4"><?=$data[1]?> </li>
                            <li style="color: #FF8153"><?=$data[2]?> </li>
                            <li style="color: #FFEA88"><?=$data[3]?> </li>
                            <li style="color: #c76262"><?=$data[4]?> </li>
                            <li style="color: #3a0ee2"><?=$data[5]?> </li>
                            <li style="color: #d68b09"><?=$data[6]?> </li>
                            <li style="color: #333"><?=$data[7]?> </li>
                            </ul>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    <!-- /.panel -->
                    <div class="chat-panel panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-comments fa-fw"></i> Đánh giá của chủ cửa hàng về site
                            
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <ul class="chat">
                                <li class="left clearfix">
                                    <span class="chat-img pull-left">
                                        <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-circle" />
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <strong class="primary-font">Vũ Minh Tùng</strong>
                                            <small class="pull-right text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i> 12 mins ago
                                            </small>
                                        </div>
                                        <p>
                                            Giao diện, đơn giản, dễ sử dụng 
                                        </p>
                                    </div>
                                </li>
                                <li class="right clearfix">
                                    <span class="chat-img pull-right">
                                        <img src="http://placehold.it/50/FA6F57/fff" alt="User Avatar" class="img-circle" />
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <small class=" text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i> 13 mins ago</small>
                                            <strong class="pull-right primary-font">Lê Quốc Khánh</strong>
                                        </div>
                                        <p>
                                            Quá là đơn điệu thiếu sự chuyên nghiệp
                                        </p>
                                    </div>
                                </li>
                                <li class="left clearfix">
                                    <span class="chat-img pull-left">
                                        <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-circle" />
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <strong class="primary-font">Lê Bá Thuyên</strong>
                                            <small class="pull-right text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i> 14 mins ago</small>
                                        </div>
                                        <p>
                                            Lên thuê ông khác làm lại
                                        </p>
                                    </div>
                                </li>
                                <li class="right clearfix">
                                    <span class="chat-img pull-right">
                                        <img src="http://placehold.it/50/FA6F57/fff" alt="User Avatar" class="img-circle" />
                                    </span>
                                     <div class="chat-body clearfix">
                                        <div class="header">
                                            <strong class="primary-font">Phạm Tuấn Sang</strong>
                                            <small class="pull-right text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i> 17 mins ago</small>
                                        </div>
                                        <p>
                                            Làm gì thì làm có tiền là được 
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- /.panel-body -->
                       
                        <!-- /.panel-footer -->
                    </div>
                    <!-- /.panel .chat-panel -->
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>

    <script src="../vendor/pie/Chart.min.js"></script>
  
    <script type="text/javascript">
    //data bar chart
        $(function() {

    Morris.Bar({
        element: 'morris-bar-chart',
        <?php
        include('conn.php');
        $query =
        "
            SELECT substring(comment_created,6,2) thang, count(transaction_status) sl from transaction where substring(comment_created,6,2) = '01' and transaction_status =1
group by transaction_status
union DISTINCT
SELECT substring(comment_created,6,2) thang, count(transaction_status) sl from transaction where substring(comment_created,6,2) = '02' and transaction_status =1
group by transaction_status
union DISTINCT
SELECT substring(comment_created,6,2) thang, count(transaction_status) sl from transaction where substring(comment_created,6,2) = '03' and transaction_status =1
group by transaction_status
union DISTINCT
SELECT substring(comment_created,6,2) thang, count(transaction_status) sl from transaction where substring(comment_created,6,2) = '04' and transaction_status =1
group by transaction_status
union DISTINCT
SELECT substring(comment_created,6,2) thang, count(transaction_status) sl from transaction where substring(comment_created,6,2) = '05' and transaction_status =1
group by transaction_status
union DISTINCt
SELECT substring(comment_created,6,2) thang, count(transaction_status) sl from transaction where substring(comment_created,6,2) = '06' and transaction_status =1
group by transaction_status
union DISTINCT
SELECT substring(comment_created,6,2) thang, count(transaction_status) sl from transaction where substring(comment_created,6,2) = '07' and transaction_status =1
group by transaction_status
union DISTINCT
SELECT substring(comment_created,6,2) thang, count(transaction_status) sl from transaction where substring(comment_created,6,2) = '08' and transaction_status =1
group by transaction_status
union DISTINCT
SELECT substring(comment_created,6,2) thang, count(transaction_status) sl from transaction where substring(comment_created,6,2) = '09' and transaction_status =1
group by transaction_status
union DISTINCT
SELECT substring(comment_created,6,2) thang, count(transaction_status) sl from transaction where substring(comment_created,6,2) = '10' and transaction_status =1
group by transaction_status
union DISTINCT
SELECT substring(comment_created,6,2) thang, count(transaction_status) sl from transaction where substring(comment_created,6,2) = '11' and transaction_status =1
group by transaction_status
union DISTINCT
SELECT substring(comment_created,6,2) thang, count(transaction_status) sl from transaction where substring(comment_created,6,2) = '12' and transaction_status =1
group by transaction_status
        ";
        $result = mysql_query($query);
        $str = "";
        $data = "";
        while ($row = mysql_fetch_assoc($result)) {
                # code...
                $str .= "{y: ".$row['thang'].", a: ".$row['sl']."},";
            }
            $str = trim($str,",");
            $data .="element: 'morris-bar-chart',"."data: [".$str."], xkey: 'y',
        ykeys: ['a'],
        labels: ['Series A', 'Series B'],
        hideHover: 'auto',
        resize: true
    }";
        echo $data;    
        ?>);
    
});


    </script>
   

<script type="text/javascript">
 // pie chart data
    var pieData = [
            <?php
                include('conn.php');
                $data;
                $i = 0;
                $query = "select count(*) a from product where find_in_set('1',categories)
                        UNION all
                        select count(*) a from product where find_in_set('2',categories)
                        UNION all
                        select count(*) a from product where find_in_set('3',categories)
                        UNION ALL
                        select count(*) a from product where find_in_set('4',categories)
                        UNION all
                        select count(*) a from product where find_in_set('5',categories)
                        UNION all
                        select count(*) a from product where find_in_set('6',categories)
                        UNION all
                        select count(*) a from product where find_in_set('7',categories)
                        UNION all
                        select count(*) a from product where find_in_set('8',categories)";
                $result = mysql_query($query);
                while ($row = mysql_fetch_assoc($result)) {
                    # code...
                    $data[$i] = $row['a'];
                    $i++;
                }
            ?>
        {
            value: <?=$data[0]?>,
            color:"#878BB6"
        },
        {
            value : <?=$data[1]?>,
            color : "#4ACAB4"
        },
        {
            value : <?=$data[2]?>,
            color : "#FF8153"
        },
        {
            value : <?=$data[3]?>,
            color : "#FFEA88"
        },
        {
            value : <?=$data[4]?>,
            color : "#c76262"
        },
        {
            value : <?=$data[5]?>,
            color : "##3a0ee2"
        },
        {
            value : <?=$data[6]?>,
            color : "#d68b09"
        },
        {
            value : <?=$data[7]?>,
            color : "#333"
        }
    ];

    // pie chart options
    var pieOptions = {
        segmentShowStroke : false,
        animateScale : true
    }
    
    // get pie chart canvas
    var countries= document.getElementById("countries").getContext("2d");
    
    // draw pie chart
    new Chart(countries).Pie(pieData, pieOptions);
    

</script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
