<div class = "container">
    <div class = "row">
        <?php foreach($users as $user ){ ?>
        <div class = "col-md-3">
            <div class = "card-wrapper">
                <div id="card-<?= $user->id ?>" class="card testimonial-card card-rotating">
                    <div class = "face front">
                        <div class="card-up indigo lighten-1">
                            
                        </div>
                            <div class="avatar mx-auto white">
                            <?php 
                            
                                if(!file_exists(WWW_ROOT . 'img/users/profile/'.$user->id.'/profile.jpg'))
                                    { ?>
                                        <img width="100px" src="https://mdbootstrap.com/img/Photos/Others/placeholder-avatar.jpg" class="rounded-circle z-depth-1-half avatar-pic" alt="example placeholder avatar">
                                    <?php } 
                                        else { ?>
                                        <?php echo $this->Html->image('users/profile/'.$user->id.'/profile.jpg', ['class'=>'rounded-circle','alt' => 'image']); ?>
                                    <?php }?> 
                            </div>
                        <div class="card-body">
                            <h4 data-card="card-<?= $user->id?>" class="rotate-btn card-title"><?= $user->fname ?> <?= $user->lname ?></h4>
                            <hr>
                            <a href="../../interns/view/<?= $user->id?>" class="black-text d-flex justify-content-end"><h5>More <i class="fa fa-angle-double-right"></i></h5></a>
                        </div>
                    </div>
                    <!-- Back Side -->
                    <div class="face back card">
                        <div class = "card-body">
                                            

                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

