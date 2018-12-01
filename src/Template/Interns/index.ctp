<div class = "container">
    <h4>List of all Interns</h4>
    <div class = "row" style="margin-top:10px">
    <?php foreach($interns as $intern){?>
        <div class = "col-md-3">
            <div class = "card card-cascade narrower">
                <div class = "view view-cascade overlay">
                <?php 
                    if(!file_exists(WWW_ROOT . 'img/users/profile/'.$intern['id'].'/profile.jpg'))
                        { ?>
                            <img width="100px" src="https://mdbootstrap.com/img/Photos/Others/placeholder-avatar.jpg" class="card-img-top z-depth-1-half avatar-pic" alt="example placeholder avatar">
                    
                    <?php } else {?>        
                            <img width="100px" src="<?php echo 'http://localhost/cakeitt544/' . 'img/users/profile/'.$intern['id'].'/profile.jpg' ?>" class = "card-img-top"/>
                <?php } ?>
                </div>
                <div class = "card-body card-body-cascade text-center">
                <h4 class="card-title"><strong><?php echo $intern['fname']?>
                    <?php echo $intern['lname']?></strong></h4>
                    <h6><?php echo $intern['email']?></h6>
                    <?php echo $this->Html->link(
                        'view',
                            ['controller' => 'Interns', 'action' => 'view', $intern['id']])?>
                </div>
            </div>
        </div>
    <?php } ?>
    </div>
</div>