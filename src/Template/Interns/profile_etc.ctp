<div class = "container">
    <div class = "row">
        <div class = "col-md-3">
        <div class="list-group">
            <?php echo $this->Html->link('Detail','/users/profile',
                                         ['class'=>'list-group-item list-group-item-action']) ?>
            <?php echo $this->Html->link('Detail Information','/interns/profile',
                                         ['class'=>'list-group-item list-group-item-action ']) ?>
            <?php echo $this->Html->link('Achievements','/interns/profile_etc',
                                         ['class'=>'list-group-item list-group-item-action active']) ?>
            <a href="#!" class="list-group-item list-group-item-action">Reset Password</a>
            </div>
        </div>
        <div class = "col-md-9">
    
        <h2 style="margin-bottom:20px"><span class="badge badge-primary">Educations</span></h2>
            <div class="accordion md-accordion" id="accordionEdu" role="tablist" aria-multiselectable="true">
                <?php foreach($educations as $education){?>
                <div class = "card">
                    <div class = "card-header" role = "tab" id = "heading<?= $education->id ?>">
                        <a data-toggle="collapse" data-parent="#accordionEdu" href="#collapse<?= $education->id?>" aria-expanded="true"
                        aria-controls = "collapse<?=$education->id?>">
                            <h5 class = "mb-0">
                                <?= $education->type ?>
                            </h5>
                        </a>
                    </div>
                    <div id="collapse<?= $education->id ?>" class="collapse" role="tabpanel" aria-labelledby="heading<?= $education->id ?>" data-parent="#accordionEdu">
                        <div class = "card-body">   
                            <?= $education->institute ?>
                          
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
                <?= $this->Form->create(null,['url'=>['controller'=>'Interns','action'=>'addEdu'],'class'=>'']) ?>
                        <div class = "row">
                            <div class = "col-md-2">
                            <select name = "type" class="mdb-select md-form">
                                <option value="" disabled selected>Type</option>
                                <option value="SPM">SPM</option>
                                <option value="Diploma">Diploma</option>
                                <option value="Degree">Degree</option>
                            </select>
                            </div>
                            <div class = "col-md-5">
                                <div class = "md-form">
                                    <input id="institue" type="text" name="institute" class="form-control"/>
                                    <label for="institute">Institute</form>
                                </div>
                            </div>
                            <div class = "col-md-2">
                                <div class = "md-form">
                                    <input id="result" type="text" name="result" class="form-control"/>
                                    <label for="result">Result</form>
                                </div>
                            </div>
                            <div class = "col-md-2">
                                <select name="status" class="mdb-select md-form">
                                    <option value="" disabled selected>Status</option>
                                    <option value="ongoing">Ongoing</option>
                                    <option value="finish">Finish</option>
                                </select>
                                
                            </div>
                            <div class = "col-md-1">
                                <?= $this->Form->button('+',['class'=>'btn-floating btn-sm green-gradient']) ?>
                            </div>
                        </div>
                    
                <?= $this->Form->end() ?>
                <h2 style="margin-top:30px;margin-bottom:20px"><span class="badge badge-primary">Achievements</span></h2>
                <div class="accordion md-accordion" id="accordionAch" role="tablist" aria-multiselectable="true">   
                    
                    <?php foreach($achievements as $achievement){ ?>

                        <div class = "card">
                            <div class = "card-header" role = "tab" id = "heading2<?= $achievement->id ?>">
                                <a data-toggle="collapse" data-parent="#accordionAch" href="#collapse2<?= $achievement->id?>" aria-expanded="true"
                                aria-controls = "collapse2<?=$achievement->id?>">
                                    <h5 class = "mb-0">
                                        <?= $achievement->name ?>
                                    </h5>
                                </a>
                            </div>
                            <div id="collapse2<?= $achievement->id ?>" class="collapse" role="tabpanel" aria-labelledby="heading2<?= $achievement->id ?>" data-parent="#accordionAch">
                                <div class = "card-body">   
                                    <?= $achievement->level ?>
                                
                                </div>
                            </div>
                        </div>

                    <?php } ?>
                </div>
                    <?= $this->Form->create(null,['url'=>['controller'=>'Interns','action'=>'addAch'],'class'=>'']) ?>
                        <div class = "row">
                            <div class = "col-md-5">
                                <div class = "md-form">
                                    <input id="name" type="text" name="name" class="form-control"/>
                                    <label for="name">Name</form>
                                </div>
                            </div>
                            <div class = "col-md-3">
                                <div class = "md-form">
                                    <input id="level" type="text" name="level" class="form-control"/>
                                    <label for="level">Level</form>
                                </div>
                            </div>
                            <div class = "col-md-3">
                                <div class = "md-form">
                                    <input id="position" type="text" name="position" class="form-control"/>
                                    <label for="position">Position</form>
                                </div>
                            </div>
                           
                            <div class = "col-md-1">
                                <?= $this->Form->button('+',['class'=>'btn-floating btn-sm green-gradient']) ?>
                            </div>
                        </div>
                    
                <?= $this->Form->end() ?>
        </div>
    </div>
</div>
