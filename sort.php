<?php
require 'connection.php';
 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
 //getting values from user welcome page
    $sort = $_POST['sort'];
    $genre=$_POST['genre'];
    $lang=$_POST['lang'];
    
    
if($lang=='All' and $genre=='All'){

	if($sort == 'Popularity'){
		$sql="SELECT * FROM movies  order by rating desc; ";
	}
	else if($sort == 'length'){
		$sql="SELECT * FROM movies   order by length desc;";
	}
	
	else{
		$sql="SELECT * FROM movies  order by rel_date desc;";
    }
}
else if ($lang=='All' and $genre!='All'){

    if($sort == 'Popularity'){
		$sql="SELECT * FROM movies where(m_genre='$genre' ) order by rating desc; ";
	}
	else if($sort == 'length'){
		$sql="SELECT * FROM movies where(m_genre='$genre' )  order by length desc;";
	}
	
	else{
		$sql="SELECT * FROM movies where (m_genre='$genre' ) order by rel_date desc;";
    }
}
else if($lang!='All' and $genre=='All')
{
    if($sort == 'Popularity'){
		$sql="SELECT * FROM movies where(m_lang='$lang' ) order by rating desc; ";
	}
	else if($sort == 'length'){
		$sql="SELECT * FROM movies where(m_lang='$lang' )  order by length desc;";
	}
	
	else{
		$sql="SELECT * FROM movies where (m_lang='$lang' ) order by rel_date desc;";
    }
}

else{
    if($sort == 'Popularity'){
		$sql="SELECT * FROM movies where(m_lang='$lang' and m_genre='$genre' ) order by rating desc; ";
	}
	else if($sort == 'length'){
		$sql="SELECT * FROM movies where(m_lang='$lang' and m_genre='$genre')  order by length desc;";
	}
	
	else{
		$sql="SELECT * FROM movies where (m_lang='$lang' and m_genre='$genre' ) order by rel_date desc;";
    }

}

	$stmt = $conn->prepare($sql); 
    $stmt->execute();

   
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach($stmt->fetchAll() as $k2=>$v2){
        
        $movies[]=$v2;
        }
        	
        if(empty($movies))
        {
            echo "No results Found!";
        }
        else{  

            echo ' <table class="striped">
            <thead>			
              <tr>
                  <th>Movie Image</th>
                  <th>Movie Name</th>
                  <th>Description</th>             
                  <th>Rating</th>
                  <th>Length</th> 
                  <th>Date</th>
              </tr>
            </thead>
            
            <tbody>';
        

        foreach ($movies as $row){ ?>
          <tr>
          <?php $im=$row['m_image']; 
          $name=$row['m_name'];
          $m_des=$row['m_des'];
          $rating=$row['rating'];
          $length=$row['length'];
          $date=$row['rel_date'];
          
          ?>
          
         <td><img src="<?php echo $im; ?> " width="100"></td>
         <td><?php echo $name?> </td>
         <td><?php echo $m_des ?> </td>
         <td><?php echo $rating ?> </td>
         <td><?php echo $length ?> </td>
         <td><?php echo $date ?> </td>
                    </tr>
           <br	>
           
          <?php }}?>
           
			
          
	  
	          
        
	
	 