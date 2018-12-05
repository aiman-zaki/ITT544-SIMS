<div class = "container">
    <div class = "row">
        <div class = "col-md-3">
        <div class="list-group">
            <div class="list-group-item list-group-item-action active">
                Details
            </div>
            <?php if($session_user['role_id'] == 2) {
                         echo $this->Html->link('Detail Information','/interns/profile',
                            ['class'=>'list-group-item list-group-item-action']);
             } else if($session_user['role_id'] == 1) {
                echo $this->Html->link('Detail Information','/advisors/profile',
                ['class'=>'list-group-item list-group-item-action']);
                 
             } else if ($session_user['role_id'] == 3){
                echo $this->Html->link('Detail Information','/companies/profile',
                ['class'=>'list-group-item list-group-item-action']); 

             }?>
            <a href="#!" class="list-group-item list-group-item-action">Reset Password</a>
            </div>
        </div>
        <div class = "col-md-9">
            <div class = "card">
                
            </div>    
                <?= $this->Form->create($user,array('type' => 'file','class' => 'text-center border border-light p-5'))?>
                <fieldset>
                    <h2 style="margin-bottom:20px"><span class="badge badge-primary">Profiles</span></h2>
                    <div class="file-field">
                    <div class="mb-4">
                        <?php $text = null; 
                            if(!file_exists(WWW_ROOT . 'img/users/profile/'.$session_user['id'].'/profile.jpg'))
                        { ?>
                            <img width="100px" src="https://mdbootstrap.com/img/Photos/Others/placeholder-avatar.jpg" class="rounded-circle z-depth-1-half avatar-pic" alt="example placeholder avatar">
                        <?php $text = "Add Photo";
                        } 
                        else { ?>
                            <img width="150px" src="<?php echo '../img/users/profile/'.$user['id'].'/profile.jpg?'. $dm ?>"/>

                        <?php $text = "Update Photo";
                        }?>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="btn waves-effect btn-outline-primary btn-sm btn-rounded">
                            <?php echo $this->Form->input('upload', array('type'=>'file','class'=>'','label'=> $text)); ?>
                        </div>
                    </div>
                    <div class = "md-form">    
                    <?= $this->Form->control(('email'),[
                        'class' => ['form-control']
                        ])?>
                </div>
                </div>
                </fieldset>               
                <?= $this->Form->button(__('Update'),['class'=>'btn btn-block btn-success']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
