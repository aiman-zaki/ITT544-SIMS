<div class = "container">
    <div class = "card text-center">
    <nav class="nav nav-pills nav-fill">
        <?= $this->Html->link('Biodata','/interns/view/'.$intern['id'],['class'=>'nav-item nav-link active'])?>
        <?= $this->Html->link('Awards','/interns/view_award/'.$intern['id'],['class'=>'nav-item nav-link'])?>
        <?= $this->Html->link('Experience','/interns/view_exp/'.$intern['id'],['class'=>'nav-item nav-link'])?>
    </nav>
        <div class = "card-body">
        <?php 
            if(!file_exists(WWW_ROOT . 'img/users/profile/'.$user['id'].'/profile.jpg'))
                { ?>
                    <img width="100px" src="https://mdbootstrap.com/img/Photos/Others/placeholder-avatar.jpg" class="rounded-circle z-depth-1-half avatar-pic" alt="example placeholder avatar">
              
            <?php } else {?>        
                    <img width="150px" src="<?php echo '../../img/users/profile/'.$user['id'].'/profile.jpg?' ?>"/>
                <?php } ?>
        </div>
        <form class="text-center border border-light p-5">
        <div class = "row">
            <div class = "col-md-3">
            
            </div>
            <div class = "col-md-6">   
                Email :<input type="email" id="" class="form-control" value="<?= $user['email']?>"disabled>
            </div>
        </div>
        <div class = "row" style="margin-top:10px">
            <div class = "col-md-3">
            
            </div>
            <div class = "col-md-3">   
                First Name : <input type="email" id="" class="form-control" value="<?= $intern['fname']?>"disabled>
            </div>
            <div class = "col-md-3">   
                Last Name :<input type="email" id="" class="form-control" value="<?= $intern['lname']?>"disabled>
            </div>
        </div>
        </form>
        <?php if($session_user['role_id'] == 1){ 
                if($session_user['id'] == $intern['advisor_id']) {?>
                 <?= $this->Form->create(null,['class'=>'text-center p-5','url'=>['controller'=>'Interns','action'=>'deleteAdvisor']]) ?>
                 <?= $this->Form->hidden('intern_id',['value'=> $intern['id']]) ?>
                    <?= $this->Form->button(__('delete this shit?'),['class'=>'btn btn-block btn-danger']) ?>
                <?= $this->Form->end()?>
                <?php } else {?>
                <?= $this->Form->create(($data),['class' => 'text-center border border-light p-5'])?>
                    <?= $this->Form->button(__('Take this shit?'),['class'=>'btn btn-info']) ?>
                <?= $this->Form->end()?>
                    <?php } ?>
        <?php } ?>
        
    </div>
</div>