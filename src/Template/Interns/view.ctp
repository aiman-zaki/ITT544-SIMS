<div class = "container">
    <h2><span class="badge badge-primary">Intern's Profiles</span></h2>
    <div class = "row">
        <div class = "col-md-3">
            <div class = "card card-cascade wider">
                <div class = "view view-cascade overlay">
                    <?php 
                        if(!file_exists(WWW_ROOT . 'img/users/profile/'.$user['id'].'/profile.jpg'))
                            { ?>
                                <img width="100px" src="https://mdbootstrap.com/img/Photos/Others/placeholder-avatar.jpg" class="card-img-top" alt="example placeholder avatar">
                        
                        <?php } else {?>        
                            <img src="<?php echo '../../img/users/profile/'.$user['id'].'/profile.jpg?' ?>"  alt="wider" class = "card-img-top"  width="150px" />
                        <?php } ?>
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                </div>
         
            </div>
        </div>
        <div class = "col-md-9">
            <div class = "card">
                <div class = "card-body">
                <h1><span style="margin-bottom:10px"class="badge badge-success">Biodata</span ></h1>
                <div class = "row">
                    <div class = "col-md-3">
                        <h4><span style="margin-right:10px"class="">Name : </span></h4>
                    </div>
                    <div class = "col-md-9">
                        <h4><?= $intern->fname ?> <?= $intern->lname ?></h4>
                    </div>
                </div>
                <div class = "row">
                    <div class = "col-md-3">
                        <h4><span style="margin-right:10px"class="">Email : </span></h4>
                    </div>
                    <div class = "col-md-9">
                        <h4><?= $user->email ?></h4>
                    </div>
                </div>
                <div class = "row">
                    <div class = "col-md-3">
                    <h4><span  style="margin-right:10px"class="">Phone : </span></h4>
                    </div>
                    <div class = "col-md-9">
                        <h4><?= $intern->phone ?></h4>
                    </div>
                </div>
                <div class = "row">
                    <div class = "col-md-3">
                    <h4><span  style="margin-right:10px"class="">Advisor : </span></h4>
                    </div>
                    <div class = "col-md-9">
                        <h4><?php if(!empty($intern->advisor->fname)){
                                        echo $intern->advisor->fname;
                        } ?></h4>
                    </div>
                </div>
                <div class = "row">
                    <div class = "col-md-3">
                    <h4><span  style="margin-right:10px"class="">Address : </span></h4>
                    </div>
                    <div class = "col-md-9">
                        <h4><?= $address->address ?></h4>
                    </div>
                </div>
                </div>
            </div>
            <div style="margin-top:10px" class = "card">
                <div class = "card-body">
                    <h1><span style="margin-bottom:10px"class="badge badge-danger">Education</span ></h1> 
                    <ol>
                        <?php foreach($intern->educations as $education){?>    
                            <li><?= $education->type?></li>
                        <?php } ?>
                    </ol>
                </div>
            </div>
            <div style="margin-top:10px" class = "card">
                <div class = "card-body">
                    <h1><span style="margin-bottom:10px"class="badge badge-info">Achievement</span ></h1>         
                    <ol>
                    <?php foreach($intern->achievements as $achievement){?>
                        <li><?= $achievement->name?></li>
                    <?php } ?>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
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