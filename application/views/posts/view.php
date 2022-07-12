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
                                <a href="<?= site_url("/categories/post/" . $post["category_id"]) ?>">
                                    <div class="badge badge-pill badge-light-danger mr-50"><?= $post['category']; ?></div>
                                </a>

                            </div>
                            <p class="card-text mb-2">
                                <?= $post['body']; ?>
                            </p>
                            <div class="d-flex justify-content-between">
                                <a class="btn btn-outline-warning" href="<?= base_url(); ?>posts/edit/<?= $post['id']; ?> ">Edit</a>

                                <?= form_open('/posts/delete/' . $post['id']) ?>
                                <input type="submit" value="Delete" class="ml-auto btn btn-danger">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Blog Comment -->
                <div class="col-12 mt-1" id="blogComment">
                    <h6 class="section-label mt-25">Comment</h6>
                    <?php if (!empty($comments)) : ?><?php foreach ($comments as $comment) : ?>
                    <div class="card">
                        <div class="card-body">
                            <div class="media">
                                <div class="avatar mr-75">
                                    <img src="<?= base_url(); ?>app-assets/images/portrait/small/avatar-s-9.jpg" width="38" height="38" alt="Avatar">
                                </div>
                                <div class="media-body">
                                    <h6 class="font-weight-bolder mb-25"><?= $comment['name']; ?></h6>
                                    <p class="card-text"><?= $comment['created_at']; ?></p>
                                    <p class="card-text">
                                        <?= $comment['body']; ?>
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- TRUE -->
                <?php endforeach;
                                            else : ?>
                <div class="card">
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body">
                                <p class="card-text">
                                    No Comments
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif ?>
                </div>
                <!-- Leave a Blog Comment -->
                <div class="col-12 mt-1">
                    <h6 class="section-label mt-25">Leave a Comment</h6>
                    <div class="card">
                        <div class="card-body">
                            <?= form_open("comments/create/" . $post['id'], ["class" => "form"]); ?>
                            <div class="alert alert-body alert-danger">
                                <span> <?= validation_errors(); ?></span>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-12">
                                    <div class="form-group mb-2">
                                        <input type="text" class="form-control" placeholder="Name" name="name">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <div class="form-group mb-2">
                                        <input type="email" class="form-control" placeholder="Email" name="email">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control mb-2" rows="4" placeholder="Comment" name="comment"></textarea>
                                </div>

                                <input type="hidden" name="id" value="<?= $post['id']; ?>">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary waves-effect waves-float waves-light">Post Comment</button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php $this->load->view('templates/footers'); ?>