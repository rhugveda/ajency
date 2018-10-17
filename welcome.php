<?php
	 
	 
 $movies=array();
session_start();

require 'connection.php';
?>

<div>
<label > Filter By Genre: </label>
  <select name="filterG" id="filterG" onchange="loadtableG();"  >
  <option value="All"> All</option>
  <option value="Indian"> Indian </option>
  <option value="Sci-fi"> Sci-fi </option>
  <option value="Thriller"> Thriller </option>
  <option value="Horror"> Horror </option>
  <option value="Fantasy"> fantasy </option>
  <option value="Dark"> Dark </option>
  <option value="Drama"> Drama </option>
  <option value="Family"> Family </option>
</select>
</div>

<div>
<label > Filter By Language : </label>
  <select name="filterL" id="filterL" onchange="loadtableG();"  >
  <option value="All"> All</option>
  <option value="Konkani"> Konkani </option>
  <option value="Marathi"> Marathi </option>
  <option value="English"> English </option>
  <option value="Hindi"> Hindi </option>
  <option value="Malayalam"> Malayalam </option>
  <option value="Telgu"> Telgu </option>
  <option value="Bhati"> Bhati </option>
  <option value="Tulu"> Tulu </option>
</select>
</div>

<div>
<label > Sort By  : </label>
  <select name="sort" id="sort" onchange="loadtableSort();"  >
  <option value="Freshness"> Freshness</option>
  <option value="Popularity"> Popularity </option>
  <option value="length"> length </option>
  </select>
</div>

    
<div class="input-field">
			<label for ="search">Search</label>
          <input placeholder="" onkeyup="loadtableSearch();" type="text" class="validate" id="search" name="search">
          
        </div>

	<div id="vac">

<?php $stmt2 = $conn->prepare("SELECT *  FROM  movies ");
 
  $stmt2->execute();
	
  if ($stmt2->rowCount()>0){	  
  
  foreach($stmt2->fetchAll() as $k2=>$v2){
	  
	  $movies[]=$v2;
	  }
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
</div>
  
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script>
	 
	  function loadtableG(){
	  $("#vac").load('show_genre.php',{genre:$('#filterG').val(),lang:$('#filterL').val()}) //filter is called in POST in movies_details.php
	  
	  }

    function loadtableSort(){
      $("#vac").load('sort.php',{sort:$('#sort').val(),genre:$('#filterG').val(),lang:$('#filterL').val()})
    }
	      
    function loadtableSearch(){
	  $("#vac").load('search.php',{search:$('#search').val(),view:$('#view').val()})
    }
	  
	   </script>