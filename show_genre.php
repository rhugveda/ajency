<?php
require 'connection.php';
 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $genre = $_POST['genre'];
    $lang=$_POST['lang'];
  

if($genre=='All' and $lang=='All')  
{
    $sql="SELECT * FROM movies; ";
}
else if($genre=='All' and $lang!='All')
{
    
    $sql="SELECT * FROM movies WHERE m_lang ='$lang'";
}
else if ($lang=='All' and $genre!='All')
{
  
    $sql="SELECT * FROM movies where m_genre='$genre'";
}
else
{
    $sql="select * from movies where (m_lang='$lang'and m_genre='$genre') ";
}
    
	$stmt = $conn->prepare($sql); 
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
   
    foreach($stmt->fetchAll() as $k2=>$v2){
        
        $movies[]=$v2;
        }
        ?>	
<?php
if(empty($movies))
    {
        echo "No results Found!";
    }
    else{  
        
        echo ' <table border="1">
        <thead>			
          <tr>
              <th>Movie Image</th>
              <th>Movie Name</th>
              <th>Description</th>             
			  
          </tr>
        </thead>
		
        <tbody>';

       foreach ($movies as $row){ ?>
          <tr>
          <?php $im=$row['m_image']; 
          $m_des=$row['m_des'];
          $m_name=$row['m_name'];
          
          ?>
         <table border="1">
         <td><img src="<?php echo $im; ?> " width="150"></td>
         <td><?php echo $m_name ?></td>
         <td><?php echo $m_des ?> </td>
         </tr>
         </tbody>
         </table>

               
                      
           </tr>
           <br	>
        <?php }?>
          <?php }?>
           
			
          
	  
	          
        
	
	 