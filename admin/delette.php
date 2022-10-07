<?php
$link=mysqli_connect("localhost","root","","projectmms");
$ sql="delete from doctor where doc_id=30";
if (mysqli_query($link,$sql))
{
echo"records were deleted";
}
else
{
echo"error";
mysqli_error($link);

}
mysqli_close($link);
?>