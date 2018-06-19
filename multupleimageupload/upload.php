<?php
include('connect.php');
/*if (isset($_POST['submit'])) {
$j = 0;     // Variable for indexing uploaded image.
$target_path = "uploads/";     // Declaring Path for uploaded images.
for ($i = 0; $i < count($_FILES['file']['name']); $i++) {
// Loop to get individual element from the array
//$validextensions = array("jpeg", "jpg", "png");      // Extensions which are allowed.
$arr = array($_FILES['file']['name'][$i]);   // Explode file name from dot(.)
$img=explode('.', basename($_FILES['file']['name'][$i])); 
//$file_extension = end($arr); // Store extensions in the variable.
$target_path = uniqid();     // Set the target path with a new name of image.
$j = $j + 1;      // Increment the number of uploaded images according to the files in array.
if ($_FILES["file"]["size"][$i] < 100000000)     // Approx. 100kb files can be uploaded.
 {
if (move_uploaded_file($_FILES['file']['tmp_name'][$i], $target_path)) {
	 $sql="INSERT INTO multi_image(image) values('$img')";
$result=mysqli_query($conn, $sql);
echo"First 4 images are uploaded and inserted into database";
// If file moved to uploads folder.
//echo $j. ').<span id="noerror">Image uploaded successfully!.</span><br/><br/>';
//} else {     //  If File Was Not Moved.
//echo $j. ').<span id="error">please try again!.</span><br/><br/>';
//}
//} 
//else {     //   If File Size And File Type Was Incorrect.
//echo $j. ').<span id="error">***Invalid file Size or Type***</span><br/><br/>';
}
}
}
}
*/
?>










<?php
/*if (isset($_POST['submit'])) {
$j = 0;     // Variable for indexing uploaded image.
$target_path = "uploads/";     // Declaring Path for uploaded images.
for ($i = 0; $i < count($_FILES['file']['name']); $i++) {
// Loop to get individual element from the array
$validextensions = array("jpeg", "jpg", "png");      // Extensions which are allowed.
$ext = explode('.', basename($_FILES['file']['name'][$i]));
   // Explode file name from dot(.)
$file_extension = end($ext); // Store extensions in the variable.
$target_path = $target_path . md5(uniqid()) . "." . $ext[count($ext) - 1];     // Set the target path with a new name of image.
$j = $j + 1;      // Increment the number of uploaded images according to the files in array.
if (($_FILES["file"]["size"][$i] < 100000)     // Approx. 100kb files can be uploaded.
&& in_array($file_extension, $validextensions)) {
if (move_uploaded_file($_FILES['file']['tmp_name'][$i], $target_path)) {
// If file moved to uploads folder.
echo $j. ').<span id="noerror">Image uploaded successfully!.</span><br/><br/>';
 $sql="INSERT INTO multi_image(image) values('$target_path')";
$result=mysqli_query($conn, $sql);
echo"First 4 images are uploaded and inserted into database";

} else {     //  If File Was Not Moved.
echo $j. ').<span id="error">please try again!.</span><br/><br/>';
}
} else {     //   If File Size And File Type Was Incorrect.
echo $j. ').<span id="error">***Invalid file Size or Type***</span><br/><br/>';
}
}
}*/
?>








<?php
include('connect.php');
if (isset($_POST['submit'])) {
for($i=0; $i<count($_FILES["file"]["tmp_name"][$i]); $i++){
$filetmp=$_FILES["file"]["tmp_name"][$i];
$filename=$_FILES["file"]["name"][$i];
$filetype=$_FILES["file"]["type"][$i];
$filepath = "uploads/".$filename;
$arr=explode(",", $_FILES["file"]["type"][$i]);
move_uploaded_file($filetmp, $filepath);
$sql="INSERT INTO multi_image(image) values('$arr')";
$result=mysqli_query($conn, $sql);
}
echo"First 4 images are uploaded and inserted into database";
echo "It is multi upload";
}
?>