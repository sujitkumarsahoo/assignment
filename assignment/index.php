<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.css">
		<style>
			
.sidebar {
  margin: 0;
  padding: 0;
     width: 257px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #04AA6D;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #1f75c9;
  color: white;
}
#para
{
	margin: 0 0 10px;
    font-weight: bold;
    color: white;
    padding: 20px;
    font-size: 24px;

}
		</style>
	</head>
<body>
	<div class="row">
		<div class="col-lg-2" style="background-color: #f1f1f1;height: 74px;">
			<form class="form-inline" style="padding: 19px;">
			<div class="form-group">
			<input type="file" name="uploadfile" id="file" style="display:none;"  accept="application/pdf" />
		   <label for="file"> FILES    &nbsp;&nbsp;&nbsp;&nbsp; Upload </label>
            
	    	</div>
		    <div class="form-group">
		      <i class="fa fa-upload" style="font-size:24px;margin-left: 18px; " id="upload"></i>
		    </div>
		</form>
		</div>
		<div class="col-lg-10" style="background-color: #1f75c9; height: 74px;">
			<p id="para">DOCUMENT</p>
		</div>
	</div>
		
	<div class="sidebar" id="dynamic_menu"> 
	</div>
	<div class="col-md-2"></div>
	<div class="col-md-10 " >
	<iframe id="doc_link"width="1500" height="600"></iframe>
	</div>
	
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/script.js"></script>
<script src="https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.min.js"></script>
</body>
</html>