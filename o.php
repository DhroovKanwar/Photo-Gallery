<html>
<body>
    <form action="#" method="get">
  
        
        <button id="su" input type="submit" formaction="proj.php">Home Page</button>
      


<style>
    input#query{
        width: 300px;
         font-family:'Comic Sans MS';
   background-color:cyan;
    }
    label#query{
         font-family:'Comic Sans MS';
   color:cyan;
        font-weight: bold;
        font-size:100px; 
    }
    body{margin:0;}
   
    th{
        background-color:white;
        
        border-collapse:collapse;
        border:1px solid black;
        position: sticky;
        top:0;
        
    
    }
    
    th:hover{
     opacity:0.3;
    }
    button#su
{
        position:sticky;
  
  top:15%;
    left:75%;
    padding:10px;
    outline:none;
    font-size:50px; 
    border-radius:20px;
    background-color:cyan;
    cursor:pointer;
}
button#su:hover{
    background-color:brown;
    
}
        button#delete
{
        position:sticky;
  
  top:65%;
    left:75%;
    padding:10px;
    outline:none;
    font-size:50px; 
    border-radius:20px;
    background-color:cyan;
    cursor:pointer;
}
    

button#delete:hover{
    background-color:brown;
    
}
               body{
                  background-image: url('l.jpg');
  background-size: cover;
                   
    }
    table{
        border-collapse: collapse;
        width:1 00%;
    }
    tr,td,th{
        
        padding:10px;
        border:none;
        width:100px;
    }

  
    
    div#box{
        height:200px;
        width:200px;
        background-size: contain;
        background-repeat: no-repeat;
       
    }
    h1,h2{
        font-family: 'Comic Sans MS';
        color: cyan;
    }
</style>


<?php
$conn=new mysqli("localhost","root","","image");
    if($conn->connect_error)
    {
    echo("connection failed".$conn->connect_error());    
        
    }

mysqli_select_db($conn,"image");

$query1="Select * from img ORDER BY category";
$result=mysqli_query($conn,$query1);
echo"<table><tr><th><h1>Images</h1></th><th><h1>Caption</h1></th><th><h1>Category</h1></th><th><h1>Path of the Image</h1></th></tr>";
if(mysqli_num_rows($result)>0)
{
while($row=mysqli_fetch_assoc($result)) 
{
    
    echo"<tr><td>"."<div id='box' style=background-image:url(".$row['path'].");' ></div>"."</td><td><h1>".$row['caption']."</h1></td><td><h1>".$row['category']."</h1></td><td><h1>".$row['path']."</h1></td></tr>";
}
    
    echo"</table>";
}
else{
    echo"";
}
        
       
?>
        
    </form>
            </body>
</html>