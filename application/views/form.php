<!DOCTYPE html>
<html>
<head>
<?php $this->load->view('header'); ?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
</head>

  <body  style="background:#49c9af" > 


  <div style="padding-top:50px">
          <div class="title-two">Complete Your Registration</div>
          <div class="separator"><div class="line line-2"></div></div>
           <div class="data-content-two">
            Just one more step.
            </div>
<div class="col-md-4 col-md-offset-4 form-reg">
           <?php  $attributes = array('class' => 'form');
              echo form_open('register/post',$attributes);  ?>

  <input type="hidden" class="form-control" name="sid" value="<?php echo  $user_profile->identifier; ?>">
  <input type="hidden" class="form-control" name="network" value="<?php echo  $network; ?>">
  <input type="hidden" name="photo" value="<?php echo $user_profile->photoURL;?>">

    <div class="form-group">
  <input type="text" required class="form-control" name="name" placeholder="Your Name Name" value="<?php echo  $user_profile->firstName.' '.$user_profile->lastName; ?>" required>
</div>


  <div class="form-group">
<select name="gender" class="form-control">
  <option value="1">Male</option>
  <option value="0">Female</option>
</select>
</div>
  <div class="form-group">
<input type="text" required class="form-control" name="mobile" placeholder="Your Mobile Number" value="<?php echo  $user_profile->phone; ?>" required>
</div>
  <div class="form-group">

<input type="email" class="form-control" name="email" placeholder="Your Email" value="<?php echo  $user_profile->email; ?>" required>
</div>

  <div class="form-group">

<input type="text" class="form-control" name="college" placeholder="Your College" required >
</div>
  <div class="form-group">
<select class="form-control" name="department">
  <option value="0">Computer Science Engineering</option>
  <option value="1">Information Technology</option>
  <option value="2">Electrial and Communication Engineering</option>
  <option value="3">Electrical and Electronic Engineering</option>
  <option value="4">Mechanical Engineering</option>
  <option value="5">Civil Engineering</option>
  <option value="10">Others</option>
</select>  
</div>

  <div class="form-group">
<select class="form-control" name="year">
  <option value="1">1st year</option>
  <option value="2">2nd year</option>
    <option value="3">3rd year</option>

  <option value="4">4th year</option>

</select>  
</div>
  <div class="form-group" style="padding-bottom:20px">
<h3>Events</h3>
<div class="col-md-4">    
<input type="checkbox" value=1 name='web' id='web'>  <label for="web">Web Designing</label> <br>
<input type="checkbox" value=1 name='paper' id='paper'>  <label for="paper">Paper Presenation</label><br>

</div>

 <div class="col-md-4">
	 <input type="checkbox" value=1 name='code' id='code'>  <label for="code">Code Chef</label><br>
<input type="checkbox" value=1 name='debug' id='debug'>  <label for="debug">Debugging</label><br>

</div>

 <div class="col-md-4">
	<input type="checkbox" value=1 name='game' id='game'>  <label for="game">Gaming</label><br>
<input type="checkbox" value=1 name='quiz' id='quiz'>  <label for="quiz">Quiz</label><br> 
</div>
 <div class="col-md-4">
	<input type="checkbox" value=1 name='photo' id='photo'>  <label for="photo">Online Photography</label><br>

</div>
  
  </div>
  <br> 
  <br> 
  <div class="form-group pull-left"  >

<input type="submit" class="btn btn-success" value="Complete">
</div>
</div>
</form>
</div>

</div>
</div>



  </body>
</html>
