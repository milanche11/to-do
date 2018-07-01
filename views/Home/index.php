<div class="container"><br>

<form action="<?php echo ROOT_URL; ?>" method="post">

	<div class="row justify-content-md-center">
	    <div class="col-lg-8">
	      <h1>TO DO - LIST</h1>
	    </div>
	    <div class="col-lg-1">
	      <button type="csv" class="btn btn-primary" name="csv" value="csv" id="csv"> Export CSV </button>
	    </div>
	 </div>

<?php foreach ($viewmodel as $key => $value) {	?>

<div class="row justify-content-md-center">
    <div class="col-lg-8">
    	<textarea disabled rows="3" type="text" class="form-control" placeholder="<?php echo $value['valuee']; ?>" name="text" value=" "></textarea>
    </div>
    <div class="col-lg-1">
    	<button type="dell" class="btn btn-danger" name="dell" value="<?php echo $value['id']; ?>" id="dell"> - </button>
    </div>
 </div>
<br>

<?php } ?>

<div class="row justify-content-md-center">
	
	    <div class="col-lg-8">
	    	<textarea rows="3" type="text" class="form-control" placeholder="Insert tex" name="text" value=""></textarea>
	    </div>
	    <div class="col-lg-1">
	    	<button type="submit" class="btn btn-success btn-rounded" name="submit" value="submit" id="submit"> + </button>
	    </div>
	
 </div>
</form>


</div>