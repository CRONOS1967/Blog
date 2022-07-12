   <!-- BEGIN: Content-->
   <?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>   <?php $this->load->view('templates/headers');
$this->load->view('templates/mainmenu'); ?>
   <h1><?= $title; ?></h1>

   <div class="blog-list-wrapper">
       <!-- Blog List Items -->
       <div class="row">
           <?php foreach ($posts as $post) : ?>
               <div class="col-md-6 col-12">
                   <div class="card">
                       <a href="<?= site_url('/posts/view/'.$post['id']) ;?>">
                           <img class="card-img-top img-fluid" src="<?= base_url()?>app-assets/images/slider/0<?= $post['id']; ?>.jpg" alt="Blog Post pic" />
                       </a>
                       <div class="card-body">
                           <h4 class="card-title">
                               <a href="<?= site_url('/posts/view/'.$post['id']) ;?>" class="blog-title-truncate text-body-heading"><?= $post['title']; ?></a>
                           </h4>
                           <div class="media">
                               <div class="avatar mr-50">
                                   <img src="<?= base_url()?>app-assets/images/portrait/small/avatar-s-7.jpg" alt="Avatar" width="24" height="24" />
                               </div>
                               <div class="media-body">
                                   <small class="text-muted mr-25">by</small>
                                   <small><a href="javascript:void(0);" class="text-body">Ghani Pradita</a></small>
                                   <span class="text-muted ml-50 mr-25">|</span>
                                   <small class="text-muted"><?= $post['created_at']; ?></small>
                               </div>
                           </div>
                           <div class="my-1 py-25">
                                            <a href="<?= site_url("/categories/post/".$post["category_id"])?>">
                                                <div class="badge badge-pill badge-light-danger mr-50"><?= $post['category']; ?></div>
                                            </a>
                                            
                                        </div>
                           <p class="card-text blog-content-truncate">
                               <?= str_split($post['body'], 90)[0]; ?> ...
                           </p>
                           <hr />
                           <div class="d-flex justify-content-between align-items-center">
                               <a href="<?= site_url('/posts/view/'.$post['id']) ;?>" class="font-weight-bold">Read More</a>
                           </div>
                       </div>
                   </div>
               </div>
           <?php endforeach; ?>
       </div>
       <!--/ Blog List Items -->


       <!-- 
       <p></p>
       <?php       $this->load->view('templates/footers');?>