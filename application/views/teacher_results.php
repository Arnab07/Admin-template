 <?php


//define index
isset( $_REQUEST['s_val'] ) ? $s_val=$_REQUEST['s_val'] : $s_val='';

// just to escape undesirable characters


if( empty( $s_val )){
	// this will be displayed if search value is blank
	//echo "Please enter the reciept no.!";
	echo "<div style='text-align: center; font-weight: bold; font-size:1.1em'>Enter the reciept no.</div>";
}else{
	// this part will perform our database query
	$values = array('123456', '120121', '987654', '654321','147258','777777');

  //to be replaced by database value
  if($s_val=='120121')
  {
    $t_name='John Doe';
    $t_pos='Headmaster';
  }
  else if($s_val=='123456')
  {
    $t_name='Chris Patrix';
    $t_pos='Professor';
  }
   else if($s_val=='987654')
  {
    $t_name='Rita Henriques';
    $t_pos='Coordinator';
  }
   else if($s_val=='654321')
  {
    $t_name='Gabriel';
    $t_pos='Professor';
  }
   else if($s_val=='7777777')
  {
    $t_name='Fedrick';
    $t_pos='Asst. Professor';
  }
   else if($s_val=='147258')
  {
    $t_name='Robinson';
    $t_pos='Professor';
  }

// Check if the keywords are in our array
if(in_array($s_val, $values)) {
	//echo "<div style='margin: 0 0 10px 0; font-weight: bold;'>$s_val</div>";?>
	<div class="row" style="padding:10px; margin:20px" id="fee_div">
		
			<div class="col-xs-12" >
				<div id="divtoprint" class="panel panel-primary" style="border:1px outset #0088cc; box-shadow: 5px 5px 5px #888888">
					<div class="panel-heading">
						<span ><b><?php echo $t_name ?></b></span>
					</div>
					<div class="panel-body" style="line-height: 200%;">
                         <div style=" padding:5px 38px">
                         <div class="col-lg-6 col-md-5 col-sm-6" style="float:right; text-align:center">
                           <img src="<?php echo base_url()?>img/profile-avatar.jpg" width="140" height="140"> 
                         </div>

                         <div class="col-lg-6 col-md-5 col-sm-6" style="float:left;"> 
                              <table style="width:100%">
                                <tbody>
                                  <tr>
                                    <td style="width:50%">Teacher ID</td>
                                    <td><?php echo $s_val ?></td>
                                  </tr>
                                  <tr>
                                    <td>Position</td>
                                    <td><?php echo $t_pos ?></td>
                                  </tr>
                                  <tr>
                                    <td style="vertical-align: top;">Qualification</td>
                                    <td>B.tech(IIT Madras)<br>
                                        M.tech(IIT Madras)
                                    </td>
                                  </tr>
                                  <tr>
                                    <td style="vertical-align: top;">Area of Interest</td>
                                    <td>Cloud Computing, Soft Computing, Database Management, image processing
                                    </td>
                                  </tr>
                                   <tr>
                                    <td style="vertical-align: top;">Work Experience</td>
                                    <td>14 ys in teaching
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                         							
                         </div>
                         <div class="col-lg-6 col-md-5 col-sm-6" style="clear:right">
                            <table style="width:100%; text-align:left">
                                <tbody>
                                  <tr>
                                    <td style="width:50%">Salary</td>
                                    <td>Rs. 1,50,000</td>
                                  </tr>
                                  <tr>
                                    <td>Position</td>
                                    <td><?php echo $t_pos ?></td>
                                  </tr>
                                </tbody>
                              </table>
                         </div>
                         
                         </div>
                         
                        
					</div>
					
				</div>
			</div>
		
		
		
	</div>
	
<?php
	}else{
		// if no records found
		//echo "<b>Record not found!</b>";
		echo "<div style='text-align: center; font-weight: bold; font-size:1.5em'>Record not Found</div>";
	}
}
?>
    
    <script type="text/javascript">

    /*$('#sear').click(function(this.innerHTML){
		_st_slip();
	});*/
    function _st_slip(letter) {
		//loader will be show until result from
		//search_results.php is shown

		$('#t-results').html('<p><img src="<?php echo base_url()?>img/ajax-loader.gif" /></p>');  
		
		//this will pass the form input
		$.post('index.php/account/t_result', { s_val: letter },
		
		//then print the result
		function(result){
			$('#t-results').html(result).show();
		});
	}
	</script>