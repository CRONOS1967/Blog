<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<?php $this->load->view('templates/headers');
$this->load->view('templates/mainmenu'); ?>
<!-- BEGIN: Content-->
<!-- Blog Edit -->
<div class="blog-edit-wrapper">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <!-- Form -->
                    <?= form_open("", ["class" => "row mt-2 alert-validation"]); ?>
                    <div class="alert alert-body alert-danger">
                        <span> <?= validation_errors(); ?></span>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group mb-2">
                            <label for="blog-edit-title">Category</label>
                            <input type="text" id="blog-edit-title" class="form-control" name="name" placeholder="Name of Category" />
                        </div>
                    </div>
               
                    <div class="col-12 mt-50">
                        <button type="submit" class="btn btn-primary mr-1">Save</button>
                        <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                    </div>

                    </form>
                    <!--/ Form -->
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ Blog Edit -->

<!-- END: Content-->
<div class="justify-content-end">

    <?php $this->load->view('templates/footers'); ?>
</div>