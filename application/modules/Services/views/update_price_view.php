<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    <?php echo $page_title; ?>
                </h2>         
            </div>
            <?php if (isset($_SESSION['failed'])) {?>
                <div class="alert alert-warning">
                  <?php  echo $_SESSION['failed'];?>
                </div>
                <?php } ?>

                <?php if (isset($_SESSION['success'])) {?>
                <div class="alert alert-success">
                  <?php  echo $_SESSION['success'];?>
                </div>
                <?php } ?>

                <?php if (validation_errors() !="") {?>
                <div class="alert alert-danger">
                  <?php echo validation_errors(); ?>
                </div>
              <?php } ?>
            <div class="body">
                  <form method="POST" class="form_vertical" action = "<?php echo base_url(); ?>Services/updateServicesPrice" enctype="multipart/form-data">
                    <div class="row clearfix">
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                            <div class="form-group">
                            <div class="form-line">
                              <label><?php echo $stname; ?> Price in <?php echo $naira; ?></label><input type="number" class="form-control" name="amount" value="<?php echo $amount; ?>">
                              <input type="hidden" class="form-control" name="prid" value="<?php echo $prid; ?>">
                            </div>
                          </div>
                        </div>
                        
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <button type="submit" class="btn btn-primary btn-lg m-l-15 waves-effect">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>