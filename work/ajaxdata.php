<?php
require("../connecton.php");
$query="SELECT * FROM ajax";
$result=mysqli_query($con,$query);


$output="
<table>
    <tr>
        <th>Id</th>
        <th>Name</th>
    </tr>
";
while($data=mysqli_fetch_assoc($result))
{
    $output.='<tr>
<td>$data["id"];
</td>
<td>$data["name"];</td>
</tr>';
}
$output.="</table>";
echo $output;
?>

