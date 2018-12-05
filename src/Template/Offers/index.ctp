<style>
    a:link {
    color: white;
    }

    /* visited link */
    a:visited {
        color: white;
    }

</style>

<div class = "container">
    <?php foreach($offers as $offer) {?>
        <div class="card card-cascade wider" style="margin-bottom:10px">
             <div class="view view-cascade gradient-card-header blue-gradient">
             <h2 class="card-header-title mb-3"> <?= $this->Html->link(''. $offer['title'] .'', '/offers/view/'.$offer['id']) ?></h2>
             <?php if($offer['company_id'] == $session_user['id']){ ?> 
                <?= $this->Html->link('Applicant', ['action' => 'applicant', $offer['id']]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $offer['id']], ['confirm' => __('Are you sure you want to delete # {0}?', $offer['id'])]) ?>
                <?php  } ?>
            </div>
        </div>
    <?php }?>
</div>