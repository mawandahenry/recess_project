
<!DOCTYPE html>
<html>
<head>
  <title> Statistical page!</title>
  <link rel="stylesheet" href="<?php echo base_url(); ?>files/css/bootstrap.css">

</head>
<body>
<div class="jumbotron">
<div class="container">
<a href="<?php echo base_url() ;?>"> <button class="glyphicon glyphicon-home btn btn-primary">Back</button></a>
<h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Statistcs</h1>
<em> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; As Ranked by UNEB</em>
</div>
</div>
   
  
		
    <table border=1 class="table">
     <tr> 
	
	 <th>Fname</th>
	 <th>Sname</th>
   <th>IndexNo</th>
   <th>School</th>
	 <th>District</th>
   <th>points</th>

	 
	 
	 </tr> 
     <?php foreach($points as $post){?>
	 
     <tr>
         
         <td><?php echo $post->fname;?></td>
		 <td><?php echo $post->sname;?></td>
     <td><?php echo $post->IndexNo;?></td>
		 <td><?php echo $post->name;?></td>
     <td><?php echo $post->region; ?></td>
     <td><?php echo $post->total; ?></td>
         
		 
		 
		 
      </tr>    
        <?php }?>  
   </table>
   

 
  </body>
</html>