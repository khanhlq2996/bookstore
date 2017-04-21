  <?php
$tensach = $_POST['txttensach'];
$loaisach = $_POST['txtloaisach'];
$tacgia = $_POST['txttacgia'];
$nxb = $_POST['txtnxb'];
$giasach = $_POST['txtgiasach'];
$giamgia = $_POST['txtgiamgia'];
$lka = $_POST['txtlka'];
$created = $_POST['txtcreated'];
$mota = $_POST['txtmota'];

$conn = mysql_connect('localhost','root','')or die('loi ket noi csdl');
mysql_select_db('qlsach', $conn);

$sql = "insert into sach values('null','";
$sql.= $tensach."','".$loaisach."', '".$giasach."','".$tacgia."','".$nxb."','".$mota."','".$giamgia."','".$lka."','".$created."')";

$flag = true;
if($tensach ==="" || $loaisach ==="" || $tacgia ==="" || $nxb ==="" || $giamgia === "" || $lka ==="" || $created ===""){
  $flag = false;
}
if($flag == true){
  mysql_query($sql,$conn);
  header('Location: templateAdmin2.php');
}


?>