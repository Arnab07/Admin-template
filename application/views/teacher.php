<html>
<head>
	<title>Teacher</title>
</head>
<body>

<div class="panel panel-default" style="height:100%; min-height:40em">
<div class="panel-heading"><div style=""><h3><b>Teacher's Record
	<div style="float:right"><?php echo date("d/m/Y");?></b></h3>
	</div>
</div>
	<div class="panel-body">
		<!-- 
			we will preload the loader image 
			to show it instantly on search 
			-->

			<div style='display:none;'>
					<img src="<?php echo base_url()?>img/ajax-loader.gif" />
			</div>

			<form name = "form" >
					
					<!-- where our search value will be entered -->
					
				<div class="col-md-4" ></div>
					<div class="col-md-4" >
					
				    <div class="input-group">
				    
				      <input type="search" class="form-control" name="name" id="fn"  placeholder="Teacher ID" style="box-shadow: inset 2px 2px 2px 0 #707070;">
				      <span class="input-group-btn">
				      <!-- This button will call our JavaScript Search functions -->
				        <!--<input type="submit" value="Search" id="search-btn" class="btn btn-info"/> -->
				        <button type="submit" value="Search" id="search-btn" class="btn btn-info">
						    <span class="glyphicon glyphicon-search"></span> Search
						</button>
				      </span>
				    </div><!-- /input-group -->			    
				  </div><!-- /.col-lg-6 -->
				</div>

			</form>
			<hr>
		<div id = "t-results" style="display:none">
				<!-- This is where our search results will be displayed -->

		</div>
		<div id = "rec-list" style=" display:block">
			 <div class="row" style="margin-top:-20px">
                <div class="col-sm-12">
              <section class="panel">
              
              <div class="panel-body">
              <div class="adv-table">
              <table  class="display table table-bordered table-striped" id="dynamic-table">
              <thead>
              <tr >
                  <th >Name</th>
                  <th >Position</th>
                  <th >ID</th>
                  
              </tr>
              </thead> 
              <tbody >
              <tr>
                  <td>John Doe</td>
                  <td>Headmaster</td>
                  <td><a href="#" onClick = "_rec_slip(this.innerHTML);">120121</a></td>
                  
              </tr>
              <tr>
                  <td>Rita Henriques</td>
                  <td>Coordinator</td>
                  <td><a href="#" onClick = "_rec_slip(this.innerHTML);">987654</a></td>
                  
              </tr>
              <tr>
                  <td>Gabriel</td>
                  <td>Professor</td>
                  <td><a href="#" onClick = "_rec_slip(this.innerHTML);">654321</a></td>
                  
              </tr>
              <tr>
                  <td>Chris Patrix</td>
                  <td>Professor</td>
                  <td><a href="#" onClick = "_rec_slip(this.innerHTML);">123456</a></td>
                  
              <tr >
                  <td>Robinson</td>
                  <td>Professor</td>
                  <td><a href="#" onClick = "_rec_slip(this.innerHTML);">147258</a></td>
                  
              </tr>
              <tr>
                  <td>Fredick</td>
                  <td>Asst. Professor</td>
                  <td><a href="#" onClick = "_rec_slip(this.innerHTML);">777777</a></td>
                  
              </tr>
              </tbody>
              <tfoot>
              <tr>
                  <th >Name</th>
                  <th>Position</th>
                  <th>ID</th>
                  
                  
              </tr>
              </tfoot>
              </table>
              
              </div>
              </section>
              </div>
              </div>
              
              <!-- page end-->

		</div>
	</div>
	
</div>

				




<!-- import jQuery file -->

<script type = "text/javascript">
$(document).ready(function(){
	//load the current contents of search result
	//which is "Please enter a name!"
	//$('#t-results').load('search_results.php').show();
	
	
	$('#search-btn').click(function(){
		_teac_rec();
	});
	
	$(function() {
		$('form').bind('submit',function(){
			_teac_rec(); 
			return false; 
		});
	});
		
	function _teac_rec() {
		//loader will be show until result from
		//search_results.php is shown
		$('#t-results').html('<p><img src="<?php echo base_url()?>img/ajax-loader.gif" /></p>');  
		
		//this will pass the form input
		$.post('index.php/account/t_result', { s_val: form.name.value },
		
		//then print the result
		function(result){
			document.getElementById('rec-list').style.display = "none";
			$('#t-results').html(result).show();
		});
	}
		
});
function _rec_slip(letter) {
		//loader will be show until result from
		//search_results.php is shown

		$('#t-results').html('<p><img src="<?php echo base_url()?>img/ajax-loader.gif" /></p>');  
		
		//this will pass the form input
		$.post('index.php/account/t_result', { s_val: letter },
		
		//then print the result
		function(result){
			document.getElementById('rec-list').style.display = "none";
			$('#t-results').html(result).show();
		});
		}
</script>
<script async type="text/javascript" language="javascript" src="<?php echo base_url()?>assets/advanced-datatable/media/js/jquery.dataTables.js"  defer></script>
    <script async type="text/javascript" src="<?php echo base_url()?>assets/data-tables/DT_bootstrap.js"  defer></script>
    <script async src="<?php echo base_url()?>assets/js/dynamic_table_init.js" defer></script> 


</body>
</html>