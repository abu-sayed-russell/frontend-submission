<form id="applicantForm" class="applicantForm" method="post" action="<?php echo admin_url('admin-ajax.php'); ?>" data-url="<?php echo admin_url('admin-ajax.php'); ?>" enctype="multipart/form-data">
  <?php include ('message.php');?>
  <div class="contractfrom-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 application-form">
          <div class="application-form-group">
            <input type="text" name="post_applied" id="post_applied" placeholder="Post Applied For" class="inp-from" value="Post Applied For">
            <small class="text-danger form-control-error"><?php echo 'Please fill out this field.'; ?></small>
          </div>
          <div class="application-form-group">
            <input type="text" name="name" id="name" placeholder="Name" class="inp-from" value="RUSSELL">
            <small class="text-danger form-control-error"><?php echo 'Please fill out this field.'; ?></small>
          </div>
          <div class="application-form-group">
            <input type="text" name="dob" id="dob" placeholder="Date of birth:dd/mm/yyyy" value="21-03-1995" class="inp-from date" onkeydown="return false">
            <small class="text-danger form-control-error"><?php echo 'Please fill out this field.'; ?></small>
            <small class="text-danger form-age-error"><?php echo 'Please enter number only.'; ?></small>
          </div>
          <div class="application-form-group">
            <select class="inp-from" name="gender" id="gender">
              <option value="">Select Gender</option>
              <option selected="selected" value="Male">Male</option>
              <option value="Female">Female</option>
            </select>
            <small class="text-danger form-control-error"><?php echo 'Please select an item in this field.'; ?></small>
          </div>
          <div class="application-form-group">
            <input type="text" name="email" id="email" placeholder="Email Address" class="inp-from" value="srsohoj@gmail.com">
            <small class="text-danger form-control-error"><?php echo 'Please fill out this field.'; ?></small>
            <small class="text-danger form-valid-error"><?php echo 'Please enter a valid Email Address.'; ?></small>
          </div>
          <div class="application-form-group">
            <input type="tel" name="contactno" id="contactno" placeholder="Contact Number" value="(017) 111-21036" class="inp-from" onkeypress="return contactNumber(this,event);">
            <small class="text-danger form-control-error"><?php echo 'Please fill out this field.'; ?></small>
            <small class="text-danger form-tel-error"><?php echo 'Please enter number only.'; ?></small>
          </div>
          <div class="application-form-group">
            <select class="inp-from" name="nationality" id="nationality">
              <option value="">Select Your Nationality</option>
              <?php $i = 1; foreach (\Initial\Controller\Application::get_all_nationalities() as $key => $val):
                $selected = $i == 17 ? 'selected' : ''
                ?>
                <option value="<?php echo $key; ?>" <?php echo $selected; ?>> <?php echo $val; ?></option>
              <?php $i++; endforeach ?>
            </select>
            <small class="text-danger form-control-error"><?php echo 'Please fill out this field.'; ?></small>
          </div>
        </div><!-- colum end -->
        <div class="col-lg-6 application-form">
          <div class="application-form-group">
            <input type="text" name="passport" id="passport" placeholder="Passport Details" class="inp-from" value="Passport Details">
            <small class="text-danger form-control-error"><?php echo 'Please fill out this field.'; ?></small>
          </div>
          <div class="application-form-group">
            <input type="text" name="iqamadetails" id="iqamadetails" placeholder="Iqama Details" class="inp-from" value="Iqama Details">
            <small class="text-danger form-control-error"><?php echo 'Please fill out this field.'; ?></small>
          </div>
          <div class="application-form-group">
            <select class="inp-from" name="iquamastatus" id="iquamastatus">
              <option value="" >Select Iqama Status</option>
              <option value="Transferable" selected="selected">Transferable</option>
              <option value="Non Transferable">Non Transferable</option>
              <option value="Not Applicable">Not Applicable</option>
            </select>
            <small class="text-danger form-control-error"><?php echo 'Please select an item in this field.'; ?></small>
          </div>
          <div class="application-form-group">
            <textarea class="inp-from txt-box" name="message" id="message" placeholder="Experience and Qualification in brief">Experience and Qualification in brief</textarea>
          </div>
          <div class="application-form-group">
            <input type="file" name="attachresume" id="attachresume" value="D:\Clipping\rs-online-chat\assets\images\rsrussell.pdf">
            <p class="help-block">Supports pdf,doc documents only.</p>
            <small class="text-danger form-control-error"><?php echo 'Please select a file.'; ?></small>
          </div>
          <div class="application-form-group">
            <button class="btn btn-danger float-right" id="submit-btn" type="submit"> Submit Application</button>
          </div>
        </div>
      </div><!-- end row-->
    </div>
  </div>
</form>