<div class="container">
<h2><span class="badge badge-primary">List of Applicants</span></h2>
    <div class="row">
        <?php foreach($users as $user ){ ?>

            <?php $color = null;
                    if($user->a['status'] == 'Pending'){
                        $color = 'yellow';
                    }else if($user->a['status'] == 'Denied'){
                        $color = 'red';
                    }else if($user->a['status'] == 'Approved'){
                        $color = 'green';
                    } ?>
        <div class="col-md-3">
            <div class="card-wrapper">
                <div id="card-<?= $user->id ?>" class="card testimonial-card card-rotating">
                    <div class="face front">
                        <div class="card-up <?= $color ?> lighten-1">

                        </div>
                        <div class="avatar mx-auto white">
                            <?php 
                            
                                if(!file_exists(WWW_ROOT . 'img/users/profile/'.$user->id.'/profile.jpg'))
                                    { ?>
                            <img width="100px" src="https://mdbootstrap.com/img/Photos/Others/placeholder-avatar.jpg"
                                class="rounded-circle z-depth-1-half avatar-pic" alt="example placeholder avatar">
                            <?php } 
                                        else { ?>
                            <?php echo $this->Html->image('users/profile/'.$user->id.'/profile.jpg', ['class'=>'rounded-circle','alt' => 'image','height'=>'100px']); ?>
                            <?php }?>
                        </div>
                        <div class="card-body" style="height:100%">
                            <h4 data-card="card-<?= $user->id?>" class="rotate-btn card-title">
                                <?= $user->fname ?>
                                <?= $user->lname ?>
                            </h4>
                            <hr>
                            <a href="../../interns/view/<?= $user->id?>" class="black-text d-flex justify-content-end">
                                <h5>More <i class="fa fa-angle-double-right"></i></h5>
                            </a>
                        </div>
                        <div data-card="card-<?= $user->id?>" class="rotate-btn rounded-bottom mdb-color lighten-3 text-center pt-3">
                        </div>
                    </div>
                    <!-- Back Side -->
                    <div class="face back card">
                        <div class="card-body">
                            
                                <?= $this->Form->postButton('Accept',['controller'=>'Applications','action'=>'accept',$offer_id,$user->id],['class'=>'btn btn-block btn-outline btn-success'])  ?>
                                <?= $this->Form->postButton('Pending',['controller'=>'Applications','action'=>'pending',$offer_id,$user->id],['class'=>'btn btn-block  btn-outline btn-yellow'])  ?>
                                <?= $this->Form->postButton('Deny',['controller'=>'Applications','action'=>'deny',$offer_id,$user->id],['class'=>'btn btn-block  btn-outline btn-danger'])  ?>
                        </div>
                        <div data-card="card-<?= $user->id?>" class="rotate-btn rounded-bottom mdb-color lighten-3 text-center pt-3">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
