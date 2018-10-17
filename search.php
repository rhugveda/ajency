<?php
require 'connection.php';
 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
	$search = $_POST['search'];
    
    
	$sql = "select * from movies where (m_name like '%$search%' or m_des like '%$search%' or m_genre like '%$search%' or m_lang like'%$search%')  ";
	
	$stmt = $conn->prepare($sql); 
    $stmt->execute();
	
    
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
      foreach($stmt->fetchAll() as $k=>$v){
	
		 
        echo ' <table class="striped">
        <thead>			
          <tr>
              <th>Movie name</th>
              <th>Movie Description</th>             
			  <th>Movie Genre</th>
			  <th>Movie Lang</th>
			  <th>Movie Rating</th>
          </tr>
        </thead>
		
        <tbody>';
          echo '<tr>
            <td>'.$v['m_name'].'</td>
            <td>'.$v['m_des'].'</td>
            <td>'.$v['m_genre'].'</td>
            <td>'.$v['m_lang'].'</td>
            <td>'.$v['rating'].'</td>
			

          </tr>';

	  }
	  echo '          
        </tbody>
      </table>';
	  
	  ?>