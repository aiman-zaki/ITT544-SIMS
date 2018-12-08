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
<?= $this->Form->create(null,['action'=>'search']) ?>
<div class="input-group md-form form-sm form-2 pl-0">
  <input name="search" class="form-control my-0 py-1 red-border" type="text" placeholder="Search" aria-label="Search">
  <div class="input-group-append">
    <span class="input-group-text red lighten-3" id="basic-text1"><i class="fa fa-search text-grey" aria-hidden="true"></i></span>
  </div>
</div>

<?= $this->Form->end() ?>

    <?php foreach($offers as $offer) {?>
        <div class="card card-cascade wider" style="margin-bottom:10px">
             <div class="view view-cascade gradient-card-header blue-gradient">
             <div class = "row">
                <div class ="col-md-10">
                    <h2 class="card-header-title mb-3"> <?= $this->Html->link(''. $offer['title'] .'', '/offers/view/'.$offer['id']) ?></h2>
                </div>
                <div class = "col-md-2">
                <?php if($offer['company_id'] == $session_user['id']){ ?> 
                    <?= $this->Html->link('Edit', ['action' => 'edit', $offer['id']],['class'=>'btn btn-block']) ?>
                    <?= $this->Html->link('Applicant', ['action' => 'applicant', $offer['id']],['class'=>'btn btn-block']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $offer['id']], ['class'=>'btn btn-block','confirm' => __('Are you sure you want to delete # {0}?', $offer['id'])]) ?>
                    <?php  } ?>
                </div>
              </div>
            </div>
        </div>
    <?php }?>
</div>