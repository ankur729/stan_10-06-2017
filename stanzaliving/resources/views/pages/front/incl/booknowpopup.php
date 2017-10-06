<link href="plugin/calendar/css/1.css" rel="stylesheet">
<?php
$display=0;
$mandatory_error='';
$valid_email='';
if(isset($_POST['booknow'])){
$display=1;
extract($_POST);
if($house_name=='' || $applicant_name=='' || $home_city=='' || $phone=='' || $email=="" || $room_choice=='' || $message=='' || $dateofjoin==''){

		$mandatory_error="Field is required";
}elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
		$valid_email="Please enter a valid email";
}else{
			
			require_once './phpmailer/class.phpmailer.php';

				$mail = new PHPMailer(true); //defaults to using php "mail()"; the true param means it will throw exceptions on errors, which we need to catch
				
				try {
				$body="<div>
					<p>Hello ,</p>
					<p>Please find the detials below:-</p>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<table>
						<tr>
							<td>House Name</td>
							<td>$house_name</td>
						</tr>
						<tr>
							<td>Applicant Name</td>
							<td>$applicant_name</td>
						</tr>
						<tr>
							<td>Home City</td>
							<td>$home_city</td>
						</tr>
						<tr>
							<td>Phone</td>
							<td>$phone</td>
						</tr>
						<tr>
							<td>Email</td>
							<td>$email</td>
						</tr>
						<tr>
							<td>Room Choice</td>
							<td>$room_choice</td>
						</tr>
						<tr>
							<td>Message</td>
							<td>$message</td>
						</tr>
						<tr>
							<td>Date of visit</td>
							<td>$dateofjoin</td>
						</tr>
					</table>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<p>Kind Regards<br />
					Stanza Living
					</p>
					</div>";
					
				$body_customer="<div>
					<p>Hello $applicant_name,</p>
					<p>Thank you for contacting us. The Stanza team will get back to you shortly.</p>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<p>Kind Regards<br />
					Stanza Living
					</p>
					</div>";
				
				
				///////////Email 1////////////////
				  	$mail->AddAddress('stanzaliving@gmail.com', 'Stanza Living');
				  //$mail->AddAddress('vishalgarg.love@gmail.com', 'Stanza Living');
					$mail->AddAddress('ping@stanzaliving.com', 'Stanza Living');
				  $mail->SetFrom('donotreply@stanzaliving.com', 'Stanza Living');
				  $mail->Subject = 'One enquiry received';
				  $mail->MsgHTML($body);
				  $mail->Send();
				  
				  
				  $mail2 = new PHPMailer(true);
				  ///////////Email 2////////////////
				  $mail2->AddAddress($email);
				  $mail2->SetFrom('donotreply@stanzaliving.com', 'Stanza Living');
				  $mail2->Subject = 'Thank you for contacting us';
				  $mail2->MsgHTML($body_customer);
				  $mail2->Send();
				  
				  header('Location:thankyou.php');
				} catch (phpmailerException $e) {
				  echo $e->errorMessage(); //Pretty error messages from PHPMailer
				} catch (Exception $e) {
				  echo $e->getMessage(); //Boring error messages from anything else!
				}
						
		
		}

}
?>
<style>
.booknow_error{
color:red;
font-size:14px;
}
</style>
<div class="book-now-popup" <?php if($display==0){?>style="display:none"<?php }?>>
<form method="post" action="">
	<div class="design-box">
		<span class="close-popup"><i class="fa fa-close"></i></span>
		<div class="inner-data">
			<div class="head-data">
				<span class="logo"><img src="images/logo-2.png"></span>
				<span class="title">arrange viewing</span>
				<span class="data-capture">please select a <span class="arr-view-title">hostel</span></span>
			</div>

			<ul class="hostel-list">
				<li class="list">
					<div class="style">
						<span class="thumb"><img src="images/assets/residences/location.jpg"></span>
						<span class="title">london house<!-- <span class="f-16 row color-green">(girls only)</span> --></span>
						<span class="address">C-19, single storey, vijay nagar</span>
						<label class="view-more <?php if($_POST['house_name']=='London House'){echo "active";}?>">select <input type="radio" name="house_name" class="house_name" value="London House" <?php if($_POST['house_name']=='London House'){echo "checked='checked'";}?>> </label>
					</div>
				</li>
				<li class="list">
					<div class="style">
						<span class="thumb"><img src="images/assets/residences/location1.jpg"></span>
						<span class="title">new york house<!-- <span class="f-16 row color-green">(girls only)</span> --></span>
						<span class="address">124, old gupta colony</span>
						<label class="view-more <?php if($_POST['house_name']=='Newyork House'){echo "active";}?>">select <input type="radio" name="house_name" class="house_name" value="Newyork House" <?php if($_POST['house_name']=='Newyork House'){echo "checked='checked'";}?>> </label>
					</div>
				</li>
				<li class="list">
					<div class="style">
						<span class="thumb"><img src="images/assets/residences/location2.jpg"></span>
						<span class="title">los angeles house  <!-- <span class="f-16 row color-green">(girls only)</span> --></span>
						<span class="address">F-1, single storey, vijay nagar</span>
						<label class="view-more <?php if($_POST['house_name']=='Los Angeles House'){echo "active";}?>">select <input type="radio" name="house_name" class="house_name" value="Los Angeles House" <?php if($_POST['house_name']=='Los Angeles House'){echo "checked='checked'";}?>> </label>
					</div>
				</li>
			</ul>
			<div class="booknow_error"><?php echo @$_POST['home_city']==''?$mandatory_error:'';?></div>
			<div class="form-part">
				<span class="instruction">Please fill the information to send us your interest.</span>
				<div class="row">
					<div class="col-md-50  padding-right-10px  left">
						<div class="input-div">
							<input type="text" name="applicant_name" class="input-box" placeholder="applicant name" value="<?php echo $_POST['applicant_name']?>">
							<div class="booknow_error"><?php echo @$_POST['applicant_name']==''?$mandatory_error:'';?></div>
						</div>
					</div>
					<div class="col-md-50 padding-left-10px left">
						<div class="input-div">
							<input type="text" name="home_city" class="input-box" placeholder="Home City" value="<?php echo $_POST['home_city']?>">
							<div class="booknow_error"><?php echo @$_POST['home_city']==''?$mandatory_error:'';?></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-50 left  padding-right-10px  ">
						<div class="input-div">
							<input type="text" name="phone" class="input-box" placeholder="phone" value="<?php echo $_POST['phone']?>">
							<div class="booknow_error"><?php echo @$_POST['phone']==''?$mandatory_error:'';?></div>
						</div>
					</div>
					<div class="col-md-50 left padding-left-10px ">
						<div class="input-div">
							<input type="text" name="email" class="input-box" placeholder="email" value="<?php echo $_POST['email']?>">
							<div class="booknow_error"><?php echo @$_POST['email']==''?$mandatory_error:'';?><?php echo $valid_email;?></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-50 left padding-right-10px  ">
						<div class="input-div">
							<select class="select-option room_choice" name="room_choice">
								<option value="single sharing" <?php if($_POST['room_choice']=='single sharing'){echo "selected='selected'";}?>>single sharing</option>
							<?php 
								if(in_array($_POST['house_name'],array('Newyork House','London House'))){
							?>
								<option value="twin sharing" <?php if($_POST['room_choice']=='twin sharing'){echo "selected='selected'";}?>>twin sharing</option>
							<?php 
							}elseif($_POST['house_name']=='Los Angeles House'){
							?>
								<option value="triple sharing" <?php if($_POST['room_choice']=='triple sharing'){echo "selected='selected'";}?>>triple sharing</option>
							<?php
							}else{
							?>
							<option value="twin sharing" <?php if($_POST['room_choice']=='twin sharing'){echo "selected='selected'";}?>>twin sharing</option>
							<?php
							}
							?>
								
								
							</select>
							<div class="booknow_error"><?php echo @$_POST['room_choice']==''?$mandatory_error:'';?></div>
						</div>
					</div>
					<div class="col-md-50 left padding-left-10px ">
						<div class="input-div">
							<input type="text" name="dateofjoin" class="input-box" placeholder="Select Date" value="<?php echo $_POST['dateofjoin']?>" data-date-format="dd/mm/yy hh:ii" id="booknowdate">
							<div class="booknow_error"><?php echo @$_POST['dateofjoin']==''?$mandatory_error:'';?></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-100 left">
						<div class="input-div">
							<textarea class="textarea" placeholder="leave a message" name="message"><?php echo $_POST['message']?></textarea>
							<div class="booknow_error"><?php echo @$_POST['message']==''?$mandatory_error:'';?></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="input-div center">
						<input type="submit" name="booknow" class="submit-btn">
					</div>
				</div>
			</div>

			<p class="alert-note">Please note that this enquiry does not guarantee you a seat in the residences. You may, however, choose to “Book Now" with us by paying a token fee (INR 5,000/- Non-refundable)* online for initiating a faster admission process.<a href="<?php echo $base_url;?>pre-register.php" class="link">pay here</a></p>
		</div>
	</div>
	</form>
</div>
<script src="plugin/calendar/js/1.js"></script> 
<script>
$('.house_name').click(function(){
	var house_name=$(this).val();
	$('.arr-view-title').text(house_name);
	if(house_name=='Newyork House' || house_name=='London House'){
		$('.room_choice').html("<option val='single sharing'>single sharing</option><option val='twin sharing'>twin sharing</option>");
	}else if(house_name=='Los Angeles House'){
		$('.room_choice').html("<option val='single sharing'>single sharing</option><option val='triple sharing'>triple sharing</option>");
	}
});

$('#booknowdate').fdatepicker({
	closeButton: false,
	pickTime:true
});
</script>