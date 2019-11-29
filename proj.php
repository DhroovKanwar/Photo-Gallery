<?php
error_reporting(0);
?>
<html>
    
<head>
    <title>Upload Page</title>
    
    </head>
    <body>
        <style>
            

            
            body{
                  background-image: url('bg.jpg');
  background-size: cover;
            }
        h1,h2,h3{
  color:blue;
            font-family:'Comic Sans MS';

   
}
select
{
    font-family:'Comic Sans MS';
   background-color:cyan;
    
}
       
            
    button
{
        position: sticky;
  
  top:15%;
    left:75%;
    padding:10px;
    outline:none;
    font-size:50px; 
    border-radius:20px;
    background-color:cyan;
    cursor:pointer;
}
button:hover{
    background-color:brown;
    
}
                button#submit
{
        position:absolute;
  
  top:30%;
    left:12%;
    padding:10px;
    outline:none;
    font-size:30px; 
    border-radius:10px;
    background-color:cyan;
    cursor:pointer;
}
button#submit:hover{
    background-color:brown;
   4
}
    
            
select,option:hover{
  background-color:skyblue;
}
input{
    font-family:'Comic Sans MS';
    background-color:#ede4a1;
}
input:hover{
    background-color:#cec582;
}

        
            div#tex{
                position: absolute;
                margin-left:14%;
                margin-top:1px; 
            }
        
         
         
            div#img{
                position: absolute;
                margin-left:0;
                margin-top:1px; 
            }
        
        
        </style>
        
       
         
    <form action="" method="post" enctype="multipart/form-data">
    
<h1>Image Type<br>(to upload..)</h1>
<select id="sel1" name="sel">
  <option value=""> Select the image type... </option>
<option value="Flowers"> Flowers </option>
<option value="Fruits"> Fruits </option>
<option value="Animals"> Animals </option>
<option value="Birds"> Birds </option>
<option value="Nature"> Nature </option>
<option value="Villages"> Villages </option>
  <option value="Cities"> Cities </option>
  <option value="Clothing"> Clothing </option>
  <option value="Food"> Food </option>
</select>
<input  type="textarea" id="ta" name="txt" placeholder="Enter your Caption Here"/>
<input type="file" name="ufile" value=""id="f">
        
<button type="submit" name="submit" id="submit">Upload</button>
<br><br><br><br><br><br><br><br><br><br>

    <button name="B" formaction="o.php">Retrieve Image</button>

           
            </form>
        
                <?php
$conn=new mysqli("localhost","root","","image");
    if($conn->connect_error)
    {
    die("connection failed".$conn->connect_error());    
        
        
    }
        mysqli_select_db($conn,"image");

$cp=$_POST['txt'];
$ct=$_POST['sel'];
        
extract($_POST);

$UploadedFileName=$_FILES['ufile']['name'];
if($UploadedFileName!='')
{
  $upload_directory = "category/".$UploadedFileName;//This is the folder which you created just now
  
    $TargetPath=time().$UploadedFileName;
    $t_name=$_FILES["ufile"]["tmp_name"];
  
    
    move_uploaded_file($_t_name,$upload_directory.$TargetPath);    
  
    $QueryInsertFile="INSERT INTO img values (null,'$upload_directory','$ct','$cp')"; 
      
    if(mysqli_query($conn,$QueryInsertFile))

    echo ""; }else echo ""; 
          
        move_uploaded_file($t_name,$upload_directory);
        echo"<br>";
         if(isset($_POST['submit']))
         { 
     
  echo"<div id='img'><img src=' $upload_directory'height='200' width='200'/></div>";
              echo "<div id='tex'><h3>Image has been uploaded Successfully....</h3></div>";
         }?>
        
    </body>
</html>



            
