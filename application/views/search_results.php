 <?php


//define index
isset( $_REQUEST['name'] ) ? $name=$_REQUEST['name'] : $name='';

// just to escape undesirable characters


if( empty( $name )){
	// this will be displayed if search value is blank
	//echo "Please enter the reciept no.!";
	echo "<div style='text-align: center; font-weight: bold; font-size:1.1em'>Enter the reciept no.</div>";
}else{
	// this part will perform our database query
	$values = array('123456', '120121', '987654', '654321','147258','777777');

// Check if the keywords are in our array
if(in_array($name, $values)) {
	//echo "<div style='margin: 0 0 10px 0; font-weight: bold;'>$name</div>";?>
	<div class="row" style="padding:10px; " id="fee_div">
		<div class="col-lg-8">
			<div class="col-xs-12" >
				<div id="divtoprint" class="panel panel-primary" style="border:1px outset #0088cc; box-shadow: 5px 5px 5px #888888">
					<div class="panel-heading" style="text-align:center" >
						<span >Fee Slip</span>
					</div>
					<div class="panel-body" style="line-height: 200%;">
                         <div style=" padding:5px 38px">
                         <div style="float:left; "> Enrollment Number: 1201210058<br>
                         							Cheque/DD no: 987654<br>
                         							Fee-Reciept No: <?php echo "$name"?><br>
                         							Amount: 95000
                         							
                         </div>
                         <div style="float:right;">Session:2015-2016<br>
                         							Issuing bank:State Bank of India<br>
                         							Issued Date: 01/05/15<br>
                         							Payment Date: 05/05/15
                         </div>
                         </div>
                         
                         <div style="clear: both; padding-top:15px"><hr></div>
                         
                         <div style=" padding:5px 38px">
	                         <div style="float:left; clear: left;"> Approved by: A.K.Mishra

	                         </div>
	                         <div style="float:right; clear: right;">Approved Date: 08/05/15 &emsp; &emsp; &ensp;
	                         </div>
                         </div>
					</div>
					
				</div>
			</div>
		
		<div class="panel-body" >
                              <div style="text-align:center">
                              <button type="submit" value="Print" id="clickMe" class="btn btn-warning" onclick="PrintContent();">
							    <span class="glyphicon glyphicon-download-alt"></span> Print
							   </button>
                              </div>
         </div>
		</div>
		
		<div class="col-lg-4">
		 
              <!-- page start-->
              <div class="row" style="margin-top:-20px">
                <div class="col-sm-12">
              <section class="panel">
              <header class="panel-heading">
                  Student Name: <b>John</b>
              </header>
              <div class="panel-body">
              <div class="adv-table">
              <table  class="display table table-bordered table-striped" id="dynamic-table">
              <thead>
              <tr>
                  <th>Date</th>
                  <th>Fee Reciept</th>
                  <th>Amount</th>
              </tr>
              </thead>
              <tbody>
              <tr >
                  <td>6/5/2015</td>
                  <td><a href="#" onClick = "_st_slip(this.innerHTML);">120121</a></td>
                  <td>95000</td>
              </tr>
              <tr>
                  <td>6/5/2015</td>
                  <td><a href="#" onClick = "_st_slip(this.innerHTML);">987654</a></td>
                  <td>35000</td>
              </tr>
              <tr>
                  <td>1/5/2015</td>
                  <td><a href="#" onClick = "_st_slip(this.innerHTML);">654321</a></td>
                  <td>75000</td>
              </tr>
              <tr>
                  <td>2/5/2015</td>
                  <td><a href="#" onClick = "_st_slip(this.innerHTML);">123456</a></td>
                  <td>50000</td>
              <tr>
                  <td>4/5/2015</td>
                  <td><a href="#" onClick = "_st_slip(this.innerHTML);">147258</a></td>
                  <td>30000</td>
              </tr>
              <tr>
                  <td>6/5/2015</td>
                  <td><a href="#" onClick = "_st_slip(this.innerHTML);">777777</a></td>
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
		</form>
	</div>
	
<?php
	}else{
		// if no records found
		//echo "<b>Record not found!</b>";
		echo "<div style='text-align: center; font-weight: bold; font-size:1.5em'>Record not Found</div>";
	}
}
?>
    <script type="text/javascript" language="javascript" src="<?php echo base_url()?>assets/advanced-datatable/media/js/jquery.dataTables.js"  defer></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/data-tables/DT_bootstrap.js"  defer></script>
    <script src="<?php echo base_url()?>assets/js/dynamic_table_init.js" defer></script> 
    <script type="text/javascript">

    /*$('#sear').click(function(this.innerHTML){
		_st_slip();
	});*/
    function _st_slip(letter) {
		//loader will be show until result from
		//search_results.php is shown

		$('#s-results').html('<p><img src="<?php echo base_url()?>img/ajax-loader.gif" /></p>');  
		
		//this will pass the form input
		$.post('index.php/account/result', { name: letter },
		
		//then print the result
		function(result){
			$('#s-results').html(result).show();
		});
	}
	</script>