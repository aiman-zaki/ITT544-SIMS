<div class = "container">
    <?php foreach($users as $user ){ ?>

    <?= $user ?>
    <?= $this->Form->postButton('Accept',['controller'=>'Applications','action'=>'accept',$offer_id,$user->id]) ?>
    <?= $this->Form->postButton('Delete',['controller'=>'Applications','action'=>'deny',$offer_id,$user->id]) ?>
    <?php } ?>

</div>