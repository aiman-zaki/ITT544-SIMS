<style>
    a:link {
    color: white;
    }

    /* visited link */
    a:visited {
        color: white;
    }

</style>
<?= $this->Form->create(null) ?>
<div class="input-group md-form form-sm form-2 pl-0">
  <input name="search" class="form-control my-0 py-1 red-border" type="text" placeholder="Search" aria-label="Search">
  <div class="input-group-append">
    <span class="input-group-text red lighten-3" id="basic-text1"><i class="fa fa-search text-grey" aria-hidden="true"></i></span>
  </div>
</div>

<?= $this->Form->end() ?>
<div class = "container">
    <?php if(!empty($offers)){
        foreach($offers as $offer) {?>
        <div class="card card-cascade wider" style="margin-bottom:10px">
             <div class="view view-cascade gradient-card-header blue-gradient">
             <h2 class="card-header-title mb-3"> <?= $this->Html->link(''. $offer['title'] .'', '/offers/view/'.$offer['id']) ?></h2>
             <?php if($offer['company_id'] == $session_user['id']){ ?> 
                <?= $this->Html->link('Edit', ['action' => 'edit', $offer['id']]) ?>
                <?= $this->Html->link('Applicant', ['action' => 'applicant', $offer['id']]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $offer['id']], ['confirm' => __('Are you sure you want to delete # {0}?', $offer['id'])]) ?>
                <?php  } ?>
            </div>
        </div>
    <?php }
    }?>
</div>