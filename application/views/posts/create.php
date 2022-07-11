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
                    <?= form_open('posts/create'); ?>
                    <div class="alert alert-body alert-danger">
                        <span> <?= validation_errors(); ?></span>
                    </div>


                    <div class="row mt-2 alert-validation">
                        <div class="col-md-6 col-12">
                            <div class="form-group mb-2">
                                <label for="blog-edit-title">Title</label>
                                <input type="text" id="blog-edit-title" class="form-control" name="title" placeholder="title of blog" />
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group mb-2">
                                <label for="blog-edit-category">Category</label>
                                <div class="position-relative"><select name="catagory_id" id="blog-edit-category" class="select2 form-control select2-hidden-accessible" multiple="" data-select2-id="blog-edit-category" tabindex="-1" aria-hidden="true">
                                        <?php foreach ($categories as $category) : ?>
                                            <option value="<?= $category['id']; ?>" ><?= $category['category']; ?></option>

                                        <?php endforeach; ?>
                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="1" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false">
                                                <ul class="select2-selection__rendered">
                                                <?php foreach ($categories as $category) : ?>
                                                    <li class="select2-selection__choice" title="<?= $category['category']; ?>" data-select2-id="<?= $category['id']; ?>"><span class="select2-selection__choice__remove" role="presentation">×</span><?= $category['category']; ?></li>
                                                
                                                    <li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li>

                                        <?php endforeach; ?>
                                                </ul>
                                            </span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group mb-2">
                                <label>Content</label>
                                <div id="blog-editor-wrapper">
                                    <div id="blog-editor-container">
                                        <textarea name="body" class="editor" id="editor" style="width: 100%;height:15rem ;"></textarea>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-12 mt-50">
                            <button type="submit" class="btn btn-primary mr-1">Save</button>
                            <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                        </div>
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
   <?php       $this->load->view('templates/footers');?>