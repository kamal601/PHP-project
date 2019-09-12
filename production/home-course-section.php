<?php include('form-header.php'); ?>
<div class="x_content">
  <br />
  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="action/course-save.php" method="post" enctype="multipart/form-data">

    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Section Header Title <span class="required">*</span>
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="heading" name="heading" required="required" class="form-control col-md-7 col-xs-12">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Section Header Small Title <span class="required">*</span>
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="last-name" name="small_text" required="required" class="form-control col-md-7 col-xs-12">
      </div>
    </div>
    <div class="form-group">
      <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Title</label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="title">
      </div>
    </div> 
    <div class="form-group">
      <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Description</label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="des">
      </div>
    </div>
    <div class="form-group">
      <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">first field</label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="firsttext">
      </div>
    </div>
    <div class="form-group">
      <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Second field</label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="secondtext">
      </div>
    </div>
    <div class="form-group">
      <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Third field</label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="thirdtext">
      </div>
    </div>

    <div class="form-group">
      <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Button text</label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="btntext">
      </div>
    </div> 
    <div class="form-group">
      <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Button link</label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="btn_link">
      </div>
    </div>
    <div class="form-group">
      <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Upload image OR File</label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input id="middle-name" class="form-control col-md-7 col-xs-12" type="file" name="photo">
      </div>
    </div>

    
    <div class="ln_solid"></div>
    <div class="form-group">
      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
        <button class="btn btn-primary" type="button">Cancel</button>
        <button class="btn btn-primary" type="reset">Reset</button>
        <button type="submit" class="btn btn-success">Submit</button>
      </div>
    </div>

  </form>
</div>
<?php include('form-footer.php'); ?>