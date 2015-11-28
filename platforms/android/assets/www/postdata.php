 
 <?php 

if(isset($_GET['name'])){

$user_name= $_GET['name'];
$user_email= $_GET['email'];
}

  print_r("Name: "+ $user_name + "Email: "+ $user_email);
/*
 $data = json_decode(file_get_contents("php://input"));
 $hospital = mysql_real_escape_string($data->h);
 $specialty = mysql_real_escape_string($data->h);
 $qry = 'INSERT INTO doctors (hospital,specialty) 
 values ("'.$hospital.'","'.$specialty.'")';

 $qry_res = mysql_query($qry);
 if ($qry_res) {
    $arr = array('msg' => "User Created Successfully!!!", 'error' => '');
    $jsn = json_encode($arr);
    print_r($jsn);
} else {
    $arr = array('msg' => "", 'error' => 'Error In inserting');
    $jsn = json_encode($arr);
    print_r($jsn);
}
*/

 ?>