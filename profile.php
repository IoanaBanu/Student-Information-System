<div class="container" style="margin-top: 90px"> 
<div class="container">
	<?php
		check_message();
			
		?>
		<div class="wellss">
			<?php 

				$student = new Student();
				$cur = $student->single_student($_SESSION['IDNO']);
			?>
			  				
				 <fieldset>
						<legend>Informații student</legend>
					<table class="table table-bordered" cellspacing="0">
						<tr><td>ID:</td><td width="80%"><?php echo $cur->IDNO; ?></td></tr>	
							<td>Nume:</td><td><?php echo $cur->LNAME .', '. $cur->FNAME.', '. $cur->MNAME; ?></td>	</tr></tr>
							<td>Vârsta:</td><td><?php echo $cur->AGE; ?></td>	</tr>
							<td>Contact:</td><td><?php echo $cur->CONTACT_NO; ?></td>	</tr>
							<td>E-mail:</td><td><?php echo $cur->EMAIL; ?></td>	</tr>
							
						</tr>
					</table>	


				</fieldset>
				<?php
				$details = new Student_details();
				$det = $details->secondary_details($_SESSION['IDNO']);
				?>
				 <!--<fieldset>
						<legend>Secondary details</legend>
						<table class="table table-bordered" cellspacing="0" width="100%">
						<tbody>	
							<tr><td>Father :</td><td width="80%"><?php echo $det->FATHER; ?></td></tr>
							<tr><td>Occupation :</td><td><?php echo $det->FATHER_OCCU; ?></td></tr>
							<tr><td>Mother :</td><td><?php echo $det->MOTHER; ?></td></tr>
							<tr><td>Occupation :</td><td><?php echo $det->MOTHER_OCCU; ?></td></tr>
							<tr><td>Boarding :</td><td><?php echo $det->BOARDING; ?></td></tr>	
							<tr><td>With family :</td><td><?php echo $det->WITH_FAMILY; ?></td></tr>
							<tr><td>Guardian :</td><td><?php echo $det->GUARDIAN; ?></td></tr>
							<tr><td>Address :</td><td><?php echo $det->GUARDIAN_ADDRESS; ?></td></tr>
							<tr><td>Other Person Supporting :</td><td><?php echo $det->OTHER_PERSON_SUPPORT; ?></td></tr>
							<tr><td>Address :</td><td><?php echo $det->ADDRESS; ?></td></tr>
						</tbody>	
						</table>
						 


				</fieldset>	-->
				<?php
				$req = new Requirements();
				$res = $req->single_result($_SESSION['IDNO']);
				?>
				 <!--  <fieldset>
						<legend>Requirements</legend>
						<table class="table table-bordered" cellspacing="0">
							<tr><td>NSO :</td><td width="80%"><?php echo $res->NSO; ?></td></tr>
							<tr><td>Baptismal :</td><td><?php echo $res->BAPTISMAL; ?></td></tr>
							<tr><td>Entrance test Result :</td><td><?php echo $res->ENTRANCE_TEST_RESULT; ?></td></tr>
							<tr><td>Mirriage Contract :</td><td><?php echo $res->MARRIAGE_CONTRACT; ?></td></tr>
							<tr><td>Certificate Of Transfer :</td><td><?php echo $res->CERTIFICATE_OF_TRANSFER; ?></td></tr>	
						
						</table>
						
				</fieldset>	 -->				
			
	  	</div><!--End of well-->

</div><!--End of container-->