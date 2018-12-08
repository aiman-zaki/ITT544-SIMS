<div class = "container">
    <div class = "row">
        <?php foreach($applications as $application){ ?>
            <div class = "col-md-3" style="margin-top:30px">
                <div class = "card-wrapper">
                    <div id = "card-<?=  $application->id?>" class = "card card-rotating text-center" style="min-height:300px">
                        <div class = "face-front">
                             <div class = "card-body">
                                <div class="avatar mx-auto">
                                <?php 
                                    if(!file_exists(WWW_ROOT . 'img/users/profile/'.$application->offer->company_id.'/profile.jpg'))
                                    { ?>
                                        <img width="100px" src="https://mdbootstrap.com/img/Photos/Others/placeholder-avatar.jpg" class="rounded-circle z-depth-1-half avatar-pic" alt="example placeholder avatar">
                                    <?php } 
                                    else { ?>
                                <?php echo $this->Html->image('users/profile/'.$application->offer->company_id.'/profile.jpg', ['class'=>'rounded-circle','alt' => 'image']); ?>
                                <?php }?> 
                                </div>
                                <h4 class=""><?= $application->offer->title?></h4>
                                <?= $this->Html->link('More Info','/applications/view/'.$application->id,['class'=>'btn btn-outline-secondary btn-rounded waves-effect']) ?>
                                <a class="rotate-btn btn btn-outline-success btn-rounded waves-effect" data-card="card-<?= $application->id ?>">Result</a>
                            </div>
                        </div>
                        <div class = "face back card">
                        <?php $color = null; 
                              $text = null;
                            if($application->status == 'Approved'){
                                $color = 'green';
                                $text = 'Congratulations!';
                            } elseif ($application->status == 'Denied') {
                                $color = 'red';
                                $text = 'Sorry';
                            }else{
                                $color = 'yellow';
                                $text = "Waiting for company response";
                            }?>
                            <div class = "card-body white-text <?= $color ?>" style="min-height:300px">
                                <h3><?= $text ?></h3>
                                <h4><?= $application->status ?></h4>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
           
    </div>
</div>