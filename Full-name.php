<?php
//echo '<pre>';
//print_r($_GET);

//$x=88;
//echo isset($_POST[btn]);$first_name = $_POST['first_name'];
//$last_name = $_POST['last_name'];
//$full_name = $first_name.' '.$last_name;
//echo $full_name;


$result= ' ';
if(isset($_POST['btn'])){
   require_once 'fullName.php';
   $fullName = new fullName();
   $result = $fullName->makeFullName($_POST['first_name'],$_POST['last_name']);
}

?>
<form action="" method="post">
 <table>
    <tr>
        <th>First Name</th>
        <th><input type="text" name="first_name"></th>
    </tr>
    <tr>
        <th>Last Name</th>
        <th><input type="text" name="last_name"></th>
    </tr>
    <tr>
        <th>Full Name</th>
        <th><input type="text" value="<?php echo $result; ?>" name="full_name"></th>
    </tr>
    <tr>
        <th></th>
        <th><input type="submit" name="btn" value="Submit"></th>
    </tr>
 </table>
</form>