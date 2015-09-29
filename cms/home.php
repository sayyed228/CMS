<?php
session_start();
include_once 'dbconnect.php';

if(!isset($_SESSION['user']))
{
	header("Location: index.php");
}
$res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Welcome - <?php echo $userRow['email']; ?></title>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery-ui.js"></script>
<style>
ul {
	padding:0px;
	margin: 0px;
}
#response {
	padding:10px;
	background-color:#9F9;
	border:2px solid #396;
	margin-bottom:20px;
}
#list li {
	margin: 0 0 3px;
	padding:14px 8px;
	background-color:#fff;
	border:#ccc solid 1px;
	color:#333;
	list-style: none;
}
.pointer { cursor:move;}
.marginTop_6{margin-top:-6px;}
.marginLeft{margin-left:10px;}
</style>
<script type="text/javascript">
$(document).ready(function(){ 	
	  function slideout(){
  setTimeout(function(){
  $("#response").slideUp("slow", function () {
      });
    
}, 2000);}
	
    $("#response").hide();
	$(function() {
	$("#list ul").sortable({ opacity: 0.8, cursor: 'move', update: function() {
			
			var order = $(this).sortable("serialize") + '&update=update'; 
			$.post("updateList.php", order, function(theResponse){
				$("#response").html(theResponse);
				$("#response").slideDown('slow');
				slideout();
			}); 															 
		}								  
		});
	});

});	
</script>
</head>
<body>
<?php  require_once('navbar.php');?>
<!-- -->
<div id="container" class="container">
<h2>Banks and Financial Institutions</h2>

 <button type="button" class="btn btn-primary pull-left" data-toggle="modal" data-target="#AddPopUp" style="margin-bottom:15px;">Add New</button>
 hi' <?php echo $userRow['username']; ?>&nbsp;<a href="logout.php?logout">Sign Out</a>
 <div class="clearfix"></div>
  <div id="list">

    <div id="response"> </div>
    <ul>
      <?php
                include("dbconnect.php");
				$query  = "SELECT id, Name FROM banks_and_financial_institutions ORDER BY listorder ASC";
				$result = mysql_query($query);
				while($row = mysql_fetch_array($result, MYSQL_ASSOC))
				{
					
				$id = stripslashes($row['id']);
				$text = stripslashes($row['Name']);
				
				?>
                
                
              
                
      <li id="arrayorder_<?php echo $id ?>">
	  
	     <i class="fa fa-arrows pointer"></i>&nbsp; <span class="Banks_and_Financial_Institutions"><?php echo $text; ?></span> 
         <input  class="btn btn-primary updateConfirmation pull-right marginTop_6 marginLeft" data-toggle="modal" data-target="#Update" type="button" id="<?php echo $id ?>" value="Update <?php echo $id ?>"/>         &nbsp;&nbsp;
		<input  class="btn btn-danger deleteConfirmation pull-right marginTop_6" data-toggle="modal" data-target="#Delete" type="button" id="<?php echo $id ?>" value="Delete <?php echo $id ?>"/>
        <div class="clear"></div>
      </li>
      <?php } ?>
    </ul>
  </div>
</div>


<!--  


<!-- Button trigger modal -->



<!-- --> 

<!-- Button trigger modal --> 

<!-- Update Modal -->
<div class="modal fade" id="Update" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Update Banks and Financial Institutions</h4>
      </div>
      <div class="modal-body">
        <input type="text" class="form-control" value="" id="Banks_and_Financial_Institutions"/>
        <br>
        <input type="text" class="form-control" value="" id="id" disabled />
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary update" data-dismiss="modal">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Delete Modal  -->
<div class="modal fade" id="Delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Update Banks and Financial Institutions</h4>
      </div>
      <div class="modal-body">
        <h2 class="text-center">Are you sure you want to delete this ?</h2>
        <input type="text" class="form-control" value="" id="Banks_and_Financial_Institutions_delete"/>
        <br>
        <input type="text" class="form-control" value="" id="id_delete" disabled />
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
        <button type="button" class="btn btn-primary delete" data-dismiss="modal">Yes</button>
      </div>
    </div>
  </div>
</div>

<!-- Add Modal  -->
<div class="modal fade" id="AddPopUp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Banks and Financial Institutions</h4>
      </div>
      <div class="modal-body">
        <input type="text" value="" class="form-control" id="Add" placeholder="Add Banks and Financial Institutions"/>
         <input type="text" value="" class="form-control" id="listorder" placeholder=""/>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
        <button type="button" class="btn btn-primary" id="Add_Banks_and_Financial_Institutions" data-dismiss="modal">Add</button>
      </div>
    </div>
  </div>
</div>

  <?php $highest_listorder = mysql_result(mysql_query("SELECT MAX(listorder)FROM banks_and_financial_institutions"), 0); 
                 
           
				 echo('<input type="hidden" id="highest_listorder" value="'.$highest_listorder.'"/>')  
				 ?>
<!-- --> 
<script type="text/javascript"  src="jquery.min.js"></script> 
<script>
$(document).ready(function (e) {






    function example() {
        if (window.XMLHttpRequest) {
            aa = new XMLHttpRequest();
        }

        aa.onreadystatechange = function () {
            if (aa.readyState == 4 && aa.status == 200) {
                document.getElementById('txthint').innerHTML = aa.responseText
            }
        }


        var id = document.getElementById('id').value
        var Banks_and_Financial_Institutions = document.getElementById('Banks_and_Financial_Institutions').value
        aa.open("GET", "Banks-and-Financial-Institutions-update.php?id=" + id + "&Banks_and_Financial_Institutions=" + Banks_and_Financial_Institutions, true)
        aa.send()
    }


    /**  Delete query excute here! **/

    function Delete_Banksand_Financial_Institutions() {
        if (window.XMLHttpRequest) {
            aa = new XMLHttpRequest();
        }

        aa.onreadystatechange = function () {
            if (aa.readyState == 4 && aa.status == 200) {
                document.getElementById('txthint').innerHTML = aa.responseText
            }
        }

        var id = document.getElementById('id').value
        var Banks_and_Financial_Institutions = document.getElementById('Banks_and_Financial_Institutions').value

        aa.open("GET", "Banks-and-Financial-Institutions-delete.php?id=" + id, true)
        aa.send()
		
			
		// 
		 
	setTimeout(function(){
  	  location.reload();
	 }, 800);
		
    }



    /**  Add query excute here! **/

    function Add_Banks_and_Financial_Institutions() {

        //alert('Add');
        if (window.XMLHttpRequest) {
            aa = new XMLHttpRequest();
        }

        aa.onreadystatechange = function () {
            if (aa.readyState == 4 && aa.status == 200) {
                document.getElementById('txthint').innerHTML = aa.responseText
            }
        }

        var Add = document.getElementById('Add').value
		var highest_listorder = document.getElementById('highest_listorder').value;
		var plusOne  = 1 ;
		var highest_listorder_plus = (+highest_listorder + +plusOne);
 		
        
		
		var listorder = document.getElementById('listorder').value= highest_listorder_plus
		alert(listorder)
        aa.open("GET", "Banks-and-Financial-Institutions-add.php?Add=" + Add + "&listorder=" + listorder, true)
        aa.send()
		 setTimeout(function(){
  	  location.reload();
	 }, 800);
	
	
    }




    $('.updateConfirmation , .deleteConfirmation').click(function () {
        var id = $(this).attr('id')
        var Banks_and_Financial_Institutions = $(this).prevAll('span').text();
        $('#id').val(id)
        $('#Banks_and_Financial_Institutions').val(Banks_and_Financial_Institutions)
        $('#id_delete').val(id)
        $('#Banks_and_Financial_Institutions_delete').val(Banks_and_Financial_Institutions)
        //alert(id)
    });

    $('.update').click(function () {
        example()
    });


    $('.delete').click(function () {
        Delete_Banksand_Financial_Institutions()
    });



    $('#Add_Banks_and_Financial_Institutions').click(function () {
        Add_Banks_and_Financial_Institutions();

    });
	
	


  var tables = $('#Banks_and_Financial_Institutions_table') 
    var table = tables[tables.length - 1];
    var rows = table.rows;
    for(var i = 0, td; i < rows.length; i++){
        td = document.createElement('td');
        td.appendChild(document.createTextNode(i + 1));
        rows[i].insertBefore(td, rows[i].firstChild);
    }


});
</script>

<!-- -->
</body>
</html>


