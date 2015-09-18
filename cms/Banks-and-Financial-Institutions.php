<!DOCTYPE html>
<html lang="en">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta content="IE=edge" http-equiv="X-UA-Compatible" />
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>Page structure</title>
<meta content="" name="description" />
<meta content="" name="keywords" />
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="style.css" rel="stylesheet" />
<!--<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet"> -->
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<style type="text/css"></style>
<script type="text/javascript">


</script>
</head>
<body>


<div class="container">
 <div class="row">
  <div class="col-sm-8">
  <?php
		$connect = mysql_connect('localhost','root','');
		
		if(!$connect)
		{
		die('Could not connect!' . mysql_error);
		}
		
		mysql_select_db('test', $connect);
		?>
		<?php
		$sql = ("SELECT * FROM banks_and_financial_institutions");
		
		$result = mysql_query($sql);
		
		echo('<table class="table"> ');
		while($row = mysql_fetch_array($result))
		{
		echo('<tr>');
		//echo('<td><input class="form-control Banks_and_Financial_Institutions" type="text" value="'.$row['Banks and Financial Institutions'].'" /></td>');
		echo('<td class="Banks_and_Financial_Institutions">'.$row['Banks and Financial Institutions'].'</td>');
		echo('<td><input  class="btn btn-primary updateConfirmation" data-toggle="modal" data-target="#Update" type="button" id="'.$row['id'].'" value="Update"/></td>');
		echo('</tr>');
		}
		echo('</table>');
		?>
  </div>
 </div>
</div>


<!-- -->



<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="Update" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Update Banks and Financial Institutions</h4>
      </div>
      <div class="modal-body">
        <input type="text" class="form-control" value="" id="Banks_and_Financial_Institutions"/><br>
        <input type="text" class="form-control" value="" id="id" disabled />
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary update" data-dismiss="modal">Save changes</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript"  src="js/jquery.min.js"></script> 
<script type="text/javascript"  src="js/bootstrap.min.js"></script> 
<script type="text/javascript"  src="js/custom.js"></script>



<!-- --> 
<script type="text/javascript"  src="jquery.min.js"></script> 
<script>

$(document).ready(function(e) {
    
	
	function  example()
{
if(window.XMLHttpRequest)
{
aa = new XMLHttpRequest();
}	

aa.onreadystatechange = function()
{
if(aa.readyState==4 && aa.status==200)
{
document.getElementById('txthint').innerHTML=aa.responseText
}
}	


var id = document.getElementById('id').value
var Banks_and_Financial_Institutions = document.getElementById('Banks_and_Financial_Institutions').value



//alert(id + Banks_and_Financial_Institutions)

aa.open("GET","Banks-and-Financial-Institutions-display.php?id="+id+"&Banks_and_Financial_Institutions="+Banks_and_Financial_Institutions,true)  
aa.send()
}

	
	
	
	
	$('.updateConfirmation').click(function() {
    var id = $(this).attr('id')
	var Banks_and_Financial_Institutions = $(this).closest('tr').find('.Banks_and_Financial_Institutions').text()
	   $('#id').val(id)
		$('#Banks_and_Financial_Institutions').val(Banks_and_Financial_Institutions)
		 //alert(id)
	 
	});

$('.update').click(function() {
   example()
});
	
});

</script>
</body>
</html>
