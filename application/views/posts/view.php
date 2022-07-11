<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
   <?php $this->load->view('templates/headers');
        $this->load->view('templates/mainmenu'); ?>
<div class="content-detached content-left">
    <div class="content-body">
        <!-- Blog Detail -->
        <div class="blog-detail-wrapper">
            <div class="row">
                <!-- Blog -->
                <div class="col-12">
                    <div class="card">
                        <img src="<?= base_url(); ?>app-assets/images/banner/banner-<?= $post['id']; ?>.jpg" class="img-fluid card-img-top" alt="Blog Detail Pic" />
                        <div class="card-body ">
                            <h4 class="card-title"><?= $post['title']; ?></h4>

                            <div class="media">
                                <div class="avatar mr-50">
                                    <img src="<?= base_url(); ?>app-assets/images/portrait/small/avatar-s-7.jpg" alt="Avatar" width="24" height="24" />
                                </div>
                                <div class="media-body">
                                    <small class="text-muted mr-25">by</small>
                                    <small><a href="javascript:void(0);" class="text-body">Ghani Pradita</a></small>
                                    <span class="text-muted ml-50 mr-25">|</span>
                                    <small class="text-muted"><?= $post['created_at']; ?></small>
                                </div>
                            </div>
                            <div class="my-1 py-25">
                                            <a href="javascript:void(0);">
                                                <div class="badge badge-pill badge-light-danger mr-50"><?= $post['category_id']; ?></div>
                                            </a>
                                            
                                        </div>
                            <p class="card-text mb-2">
                                <?= $post['body']; ?>
                            </p>
                            <div class="d-flex justify-content-between">
                                <a class="btn btn-outline-warning" href="<?= base_url(); ?>posts/edit/<?= $post['id'] ;?> " >Edit</a>
                               
                                <?= form_open('/posts/delete/' . $post['id']) ?>
                                <input type="submit" value="Delete" class="ml-auto btn btn-danger">
                                </form>
                            </div>
                            <?php       $this->load->view('templates/footers');?>