<div class = "container">
    <div class = "row">
        <div class = "col-md-3">
        <div class="list-group">
            <?php echo $this->Html->link('Detail Information','/users/profile',
                                         ['class'=>'list-group-item list-group-item-action']) ?>
            <?php echo $this->Html->link('Detail Information','/companies/profile',
                                         ['class'=>'list-group-item list-group-item-action active']) ?>
            <a href="#!" class="list-group-item list-group-item-action">Reset Password</a>
            </div>
        </div>
        <div class = "col-md-9">
        <h2 style="margin-bottom:20px"><span class="badge badge-primary">Company's Profile</span></h2>
            <div class = "card">    
            
            <?= $this->Form->create(($company),['class' => 'border border-light p-5'])?>
                <div class = "row">
                    <div class = "col-md-12">
                        <div class = "md-form">    
                            <?= $this->Form->control(('name'),[
                                'class' => ['form-control']
                                ])?>
                        </div>
                        <div class = "md-form">
                        <?= $this->Form->textarea(('address'),[
                                'class' => ['md-textarea form-control'],
                                'value' => $address['address'],
                                'label' => 'Address',
                                'id' => 'form',
                                'row' => 2
                                ])?>
                                <label for="form">Address</label>
                        </div>
                    </div>
                </div>
                <div class = "row">
                    <div class = "col-md-6">
                        <div class = "md-form">    
                            <?= $this->Form->control(('poscode'),[
                                'class' => ['form-control'],
                                'value' => $address['poscode']
                                ])?>
                        </div>
                    </div>
                    <div class = "col-md-6">
                        <div class = "md-form">    
                            <?= $this->Form->control(('state'),[
                                'class' => ['form-control'],
                                'value' => $address['state']
                                ])?>
                        </div>
                    </div>
                    <div class = "col-md-12">
                        <h2 style="margin-bottom:20px"><span class="badge badge-primary">Google's Map</span></h2>
                    </div>
                    <div class = "col-md-6">
                        <div class = "md-form">    
                            <?= $this->Form->control(('lat'),[
                                'class' => ['form-control'],
                                'value' => $address['lat']
                                ])?>
                        </div>
                    </div> 
                    <div class = "col-md-6">
                        <div class = "md-form">    
                            <?= $this->Form->control(('lng'),[
                                'class' => ['form-control'],
                                'value' => $address['lng']
                                ])?>
                        </div>
                    </div>
            </div>
             <center><?= $this->Form->button(__('Update'),['class'=>'btn btn-success']) ?></center>
            <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
