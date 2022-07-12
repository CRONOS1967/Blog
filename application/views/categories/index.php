<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<?php $this->load->view('templates/headers');
$this->load->view('templates/mainmenu'); ?>
<!-- BEGIN: Content-->

<div class="row" id="table-hover-animation">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"><?=$title?></h4>
                <a href="<?= site_url('/categories/create') ;?>" class="card-title btn btn-primary">Create</a>
            </div>
            
            <div class="table-responsive">
                <table class="table table-hover-animation">
                    <thead>
                        <tr>
                            <th>Category</th>
                            <th>Created</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($categories as $category) : ?>
                            
                            <tr>
                            <td><a href="<?= site_url("/categories/post/".$category["id"])?>"> <span class="font-weight-bold"><?= $category['category'] ?></span></a></td>
                                <td><span class="font-weight-bold"><?= $category['created_at'] ?></span></td>
                                </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- END: Content-->
<div class="justify-content-end">

    <?php $this->load->view('templates/footers'); ?>
</div>