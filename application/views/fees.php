<html>
<head>
	<title>Fees Slip</title>
</head>
<body>

<div class="panel panel-default" style="height:100%; min-height:40em">
<div class="panel-heading"><div style=""><h3><b>Fee Slip
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
				    
				      <input type="search" class="form-control" name="name" id="fn"  placeholder="Reciept no." style="box-shadow: inset 2px 2px 2px 0 #707070;">
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
		<div id = "s-results" style="display:none">
				<!-- This is where our search results will be displayed -->

		</div>
		<div id = "rec-list" style=" display:block">
			<div class="row" style="margin:0 auto">
                <div class="col-sm-12">
              <section class="panel" >
              <header class="panel-heading">
                 Recent fees list
              </header>
              <div class="panel-body col-lg-10" style="margin:0 auto; width:100%;">
              <div >
              <table  class="display table table-bordered table-striped" style="display: block;max-height: 400px; width:100%; overflow-y: scroll;">
              <thead>
              <tr>
                  <th style="width:50%">Date</th>
                  <th style="width:50%">Fee Reciept</th>
                  <th style="width:50%">Amount</th>
              </tr>
              </thead>
              <tbody >
              <tr>
                  <td>6/5/2015</td>
                  <td><a href="#" onClick = "_rec_slip(this.innerHTML);">120121</a></td>
                  <td>95000</td>
              </tr>
              <tr>
                  <td>6/5/2015</td>
                  <td><a href="#" onClick = "_rec_slip(this.innerHTML);">987654</a></td>
                  <td>35000</td>
              </tr>
              <tr>
                  <td>1/5/2015</td>
                  <td><a href="#" onClick = "_rec_slip(this.innerHTML);">654321</a></td>
                  <td>75000</td>
              </tr>
              <tr>
                  <td>2/5/2015</td>
                  <td><a href="#" onClick = "_rec_slip(this.innerHTML);">123456</a></td>
                  <td>50000</td>
              <tr >
                  <td>4/5/2015</td>
                  <td><a href="#" onClick = "_rec_slip(this.innerHTML);">147258</a></td>
                  <td>30000</td>
              </tr>
              <tr>
                  <td>6/5/2015</td>
                  <td><a href="#" onClick = "_rec_slip(this.innerHTML);">777777</a></td>
                  <td>40000</td>
              </tr>
             
              </tbody>
              <tfoot>
              <tr>
                  <th>Date</th>
                  <th>Fee reciept</th>
                  <th>Amount</th>
                  
              </tr>
              </tfoot>
              </table>
              </div>
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
	//$('#s-results').load('search_results.php').show();
	
	
	$('#search-btn').click(function(){
		showValues();
	});
	
	$(function() {
		$('form').bind('submit',function(){
			showValues(); 
			return false; 
		});
	});
		
	function showValues() {
		//loader will be show until result from
		//search_results.php is shown
		$('#s-results').html('<p><img src="<?php echo base_url()?>img/ajax-loader.gif" /></p>');  
		
		//this will pass the form input
		$.post('index.php/account/result', { name: form.name.value },
		
		//then print the result
		function(result){
			document.getElementById('rec-list').style.display = "none";
			$('#s-results').html(result).show();
		});
	}
		
});
function _rec_slip(letter) {
		//loader will be show until result from
		//search_results.php is shown

		$('#s-results').html('<p><img src="<?php echo base_url()?>img/ajax-loader.gif" /></p>');  
		
		//this will pass the form input
		$.post('index.php/account/result', { name: letter },
		
		//then print the result
		function(result){
			document.getElementById('rec-list').style.display = "none";
			$('#s-results').html(result).show();
		});
		}
</script>
<script type="text/javascript">
	function PrintContent()
{
var DocumentContainer = document.getElementById('divtoprint');
var WindowObject = window.open("", "PrintWindow",
"width=750,height=650,top=50,left=50,toolbars=no,scrollbars=yes,status=no,resizable=yes");
WindowObject.document.writeln(DocumentContainer.innerHTML);
WindowObject.document.close();
WindowObject.focus();
WindowObject.print();
WindowObject.close();
}
</script>

</body>
</html>