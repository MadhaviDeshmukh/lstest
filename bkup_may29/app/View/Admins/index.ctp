<?php
/**
 * View for Dashboard or application home page
 */

?>
<!--Add Job Modal --> 
<div class="modal fade" id="dealM">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><?php echo __('Add a Job'); ?></h4>
            </div>
            <?php echo $this->Form->create('Deal', array('url' => array('controller' => 'Jobs', 'action' => 'add'), 'inputDefaults' => array('label' => false, 'div' => false), 'class' => 'vForm')); ?>
	    <div class="modal-body tab-modal" style="clear: both"> &nbsp;
            </div>
            <div class="modal-footer">			
                <button class="btn btn-primary blue btn-sm" type="submit"><i class="fa fa-check"></i> <?php echo __('Add'); ?></button>
                <button class="btn default btn-sm" data-dismiss="modal" type="button"><i class="fa fa-times"></i> <?php echo __('Cancel'); ?></button>
            </div>
            <?php echo $this->Form->end(); ?>	
            <?php echo $this->Js->writeBuffer(); ?>
        </div>
    </div>
</div>
<!--End Add Deal Modal -->
<!-- View contact,task modal -->
<div class="modal fade" id="uDealM" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">&times;</button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">
                <div class="row job-popup" id="mBody">                    
                </div>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
<!--End View contact,task modal -->
<!-- View label modal -->
<div class="modal fade" id="uDealSM" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">&times;</button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">
                <div class="row" id="mBody">
                </div>
            </div>
        </div>
    </div>
</div>
<!--End View label modal -->
<!-- Delete modal -->
<div class="modal fade" id="delM">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">&times;</button>
                <h4 class="modal-title"><?php echo __('Confirmation'); ?></h4>
            </div>
            <?php echo $this->Form->create('Deal', array('url' => array('action' => 'delete'), 'id' => 'confirm-form')); ?>
            <?php echo $this->Form->input('id', array('type' => 'hidden', 'value' => h($deal['Deal']['id']))); ?>
            <?php echo $this->Form->input('Item.id', array('type' => 'hidden')); ?>
            <?php echo $this->Form->input('Deal.action', array('type' => 'hidden')); ?>
            <div class="modal-body">						
                <p> <?php echo __('Are you sure?'); ?></p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary delSubmit"  type="button"><?php echo __('Yes'); ?></button>
                <button class="btn default" data-dismiss="modal" type="button"><?php echo __('No'); ?></button>
            </div>
            <?php echo $this->Form->end(); ?>
            <?php echo $this->Js->writeBuffer(); ?>
        </div>
    </div>
</div>
<!-- /Delete modal -->
<!-- Star Job modal -->
<div class="modal fade" id="starJob">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">&times;</button>
                <h4 class="modal-title"><?php echo __('&nbsp;'); ?></h4>
            </div>
            <?php echo $this->Form->create('Job', array('url' => array('action' => 'favorite'), 'class' => 'vForm1')); ?>
            <?php echo $this->Form->input('id', array('type' => 'hidden', 'value' => h($deal['Deal']['id']))); ?>
            <div class="modal-body">						
                <p><strong> <?php echo __('Why do you like this job?'); ?></strong></p>
                <div class="form-group">
                    <label></label>
                    <?php echo $this->Form->input('History.reason', array('type' => 'textarea', 'class' => 'form-control input-inline input-medium', 'Placeholder' => __(''), 'div' => false, 'label' => false, 'rows' => '4')); ?>	
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary blue btn-sm" type="submit"><i class="fa fa-star"></i> <?php echo __('Favorite'); ?></button>
                <button class="btn default btn-sm" data-dismiss="modal" type="button"><i class="fa fa-times"></i> <?php echo __('Cancel'); ?></button>
            </div>
            <?php echo $this->Form->end(); ?>
            <?php echo $this->Js->writeBuffer(); ?>
        </div>
    </div>
</div>
<!-- Archive Job modal -->
<div class="modal fade" id="archiveJob">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">&times;</button>
                <h4 class="modal-title"><?php echo __('Confirmation'); ?></h4>
            </div>
            <?php echo $this->Form->create('Job', array('url' => array('action' => 'archive'), 'class' => 'vForm1')); ?>
            <?php echo $this->Form->input('id', array('type' => 'hidden', 'value' => h($deal['Deal']['id']))); ?>
            <div class="modal-body">						
                <p><strong> <?php echo __('Do you want to provide a reason for archiving this job?'); ?></strong></p>
                <div class="form-group">
                    <label></label>
                    <?php echo $this->Form->input('History.reason', array('type' => 'textarea', 'class' => 'form-control input-inline input-medium', 'Placeholder' => __('Reason for archiving'), 'div' => false, 'label' => false, 'rows' => '4')); ?>	
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary blue btn-sm" type="submit"><i class="fa fa-check"></i> <?php echo __('Archive'); ?></button>
                <button class="btn default btn-sm" data-dismiss="modal" type="button"><i class="fa fa-times"></i> <?php echo __('Cancel'); ?></button>
            </div>
            <?php echo $this->Form->end(); ?>
            <?php echo $this->Js->writeBuffer(); ?>
        </div>
    </div>
</div>
<!-- Delete Job modal -->
<div class="modal fade" id="deleteJob">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">&times;</button>
                <h4 class="modal-title"><?php echo __('Are you sure?'); ?></h4>
            </div>
            <?php echo $this->Form->create('Job', array('url' => array('action' => 'delete'), 'class' => 'vForm1')); ?>
            <?php echo $this->Form->input('id', array('type' => 'hidden', 'value' => h($deal['Deal']['id']))); ?>
            <div class="modal-body">						
                <p> <?php echo __('Deleting the job will completely remove all its associated data and tasks as well.'); ?></p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary"  type="submit"><?php echo __('Yes'); ?></button>
                <button class="btn default" data-dismiss="modal" type="button"><?php echo __('No'); ?></button>
            </div>
            <?php echo $this->Form->end(); ?>
            <?php echo $this->Js->writeBuffer(); ?>
        </div>
    </div>
</div>
<!--Content Section -->
<div class="row" >
    <div class="col-lg-12">
        <!-- Top section-->
        <div class="row">
            <div class="clearfix">  
                <?php foreach ($announcements as $row): ?>
                    <div class="alert alert-success fade in  an-alert">
                        <button aria-hidden="true" data-dismiss="alert" class="close" type="button" data-id="<?php echo h($row['Announcement']['id']); ?>">×</button>
                        <i class="fa fa-bullhorn fa-fw fa-lg"></i>
                        <a href="<?php echo $this->Html->url(array("controller" => "Announcements", "action" => "view", h($row['Announcement']['id']))); ?>"> <?php echo h($row['Announcement']['title']); ?></a>
                    </div>
                <?php endforeach; ?>
                <div class="col-lg-2">
                    <!--<h1 class="pull-left"><?= h($pipeline['Pipeline']['name']); ?></h1>-->
                </div>
                <div class="col-lg-5">
		    <?php echo $this->Form->create('Admin', array('url' => array('controller' => 'admins', 'action' => 'index'), 'inputDefaults' => array('label' => false, 'div' => false), 'class' => '')); ?>
		<?php /* disabling pipeline selection and labels
                    <div class="col-lg-4 form-group">                                                      
                        <?php echo $this->Form->input('pipeline_id', array('type' => 'select', 'class' => 'select-box-search full-width', 'options' => array($this->Common->getPipelineList()), 'default' => h($pipeline['Pipeline']['id']), 'onchange' => "this.form.submit()")); ?>
                    </div>
                    <div class="col-lg-4 form-group">
                        <select id="AdminLabelId" class="select-box-label full-width" name="data[Admin][label_id]" onchange="this.form.submit()">
                            <option value="0"><?php echo __('All Labels'); ?></option>
                            <?php foreach ($labels as $label): ?> 
                                <option value="<?= h($label['Label']['id']); ?>" <?php
                                if ($label['Label']['id'] == $this->Session->read('Label.id')) {
                                    echo 'selected="selected"';
                                }

                                ?> data-color="<?= h($label['Label']['color']); ?>"><?= h($label['Label']['name']); ?></option>
                                    <?php endforeach; ?>
                        </select>
				</div>
		*/ ?>
                    <?php if ($this->Common->isAdmin() || $this->Common->isManager()): ?>
                        <div class="col-lg-4 form-group">
                            <?php echo $this->Form->input('user_id', array('type' => 'select', 'class' => 'select-box-search full-width', 'options' => array($this->Common->getUserList()), 'empty' => __('All Users'), 'onchange' => "this.form.submit()")); ?>
                        </div>
                    <?php endif; ?>
                    <?php echo $this->Form->end(); ?>
                    <?php echo $this->Js->writeBuffer(); ?>
                </div>
                <div class="col-lg-2 form-group">
                    <?php echo $this->Form->input('deal_id', array('type' => 'text', 'class' => 'form-control search-data', 'placeholder' => __('Search Jobs'), 'data-name' => 'jobs')); ?>
                </div>
                <div class="col-lg-2 col-sm-6 col-xs-6 btn-group">
                    <button type="button" class="btn btn-primary btn-sm active mr-1" ref='popover' data-content="Pipeline View"><i class="fa fa-th-large"></i></button>
                    <a href="<?php echo $this->Html->url(array("controller" => "jobs", "action" => "index")); ?>" class="btn btn-white btn-sm" ref='popover' data-content="List View"><i class="fa fa-bars"></i></a>                
                </div>
                <div class="col-lg-1 col-sm-6 col-xs-6 form-group">
                    <div class="pull-right top-page-ui">
                        <?php if ($this->Common->isAdmin() || $this->Common->isStaff()): ?>
                            <a class="btn btn-primary pull-right" href="#" data-toggle="modal" data-target="#dealM" >
                                <i class="fa fa-plus-circle fa-lg"></i>  <?php echo __('Add A Job'); ?>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <!--End Top section-->
        <!-- content box -->
        <div class="row">
            <div class="col-lg-12">
                <div class="main-box no-header clearfix">
                    <div class="main-box-body clearfix stage-<?php echo count($stages); ?>">
                             <?php foreach ($stages as $stage): ?> 
                            <!--Stage Box-->
                            <div class="stage-div">
                                <!--Stage Box Title-->
                                <div class="stage-name">
                                    <h2><?= h($stage['Stage']['name']); ?></h2>
                                </div>
                                <!--End Stage Box Title-->
                                <!--Stage Box Content-->
                                <div class="stage-inner" data-id="<?= h($stage['Stage']['id']); ?>">
                                    <ul id="<?= h($stage['Stage']['id']); ?>" class="droppable sortable stage-ul"> 
                                        <?php $dealCount = count($stage['Deal']); ?>
					<?php foreach ($stage['Deal'] as $row): ?>
						<?php //print_r($row); ?>
                                            <!--Deal Box-->
                                            <li class="ui-state-default" id="<?= h($row['Deal']['id']); ?>">
                                                <!--<div class="job-labels">
                                                    <?php foreach ($row['Labels'] as $label): ?>
                                                        <div class="job-label <?= h($label['Label']['color']); ?>"  ref='popover' data-content='<?= h($label['Label']['name']); ?>'></div>
                                                    <?php endforeach; ?>
                                                </div>-->
                                                <div class="job-name ellipsis">
                                                    <!--<i class="fa fa-eye hidden"></i> <?php echo $this->Html->link(h(substr($row['Deal']['name'],0,28).' ...'), array('controller' => 'jobs', 'action' => 'view', h($row['Deal']['id'])), array('escape' => false, 'ref' => 'popover', 'data-content' => h($row['Deal']['name']))); ?>-->
                                                    <i class="fa fa-eye hidden"></i> <?php echo $this->Html->link(h($row['Deal']['name']), array('controller' => 'jobs', 'action' => 'view', h($row['Deal']['id'])), array('escape' => false, 'ref' => 'popover', 'data-content' => h($row['Deal']['name']))); ?>
                                                    <!--<span class="pull-right dv-label" data-target="#uDealSM" data-toggle="modal" data-id="<?= h($row['Deal']['id']); ?>" data-name="Labels" ref = 'popover' data-content ='Labels'>
                                                        <i class="fa fa-tag hidden"></i>
                                                    </span>-->
                                                </div>                                            
                                                <div class="job-company">
						    <span> <?= h($row['Company']['name']); ?>&nbsp;</span>
                                                </div>
                                                <div class="job-module">
                                                    <span> <?= h($row['files']); ?> <i class="fa fa-paperclip"></i></span>
                                                    <!--<span class="text-center"><?= h($row['tasks_u']) . '/' . h($row['tasks']); ?> <?php echo __('Tasks'); ?></span> -->
                                                    <span class="text-left"><?= h($row['tasks_u']); ?> <i class="fa fa-check"></i></span> 
                                                    <span class="text-left"><?= h($row['contacts']); ?> <i class="fa fa-user-md"></i></span>
                                                    <!--<span class="text-right view-modal" data-target="#uDealM" data-toggle="modal" data-id="<?= h($row['Deal']['id']); ?>" data-name="view" data-deal="<?= h($row['Deal']['name']); ?>" ref = 'popover' data-content ='Edit Job'>
                                                        <i class="fa fa-edit"></i>
                                                    </span>                                                                                           -->
                                                </div>
                                                <div class="job-links">
                                                    <span class="text-right">
						    <?php if($row['Deal']['status'] == 1) { ?>
							<a class="star-job" href="<?= '/jobs/active/' . h($row['Deal']['id']); ?>" data-name="view" ref = 'popover' data-content ='Unfavorite Job'>
                                                                <i class="fa fa-star yellow"></i>
                                                        </a>&nbsp;
						    <?php } else { ?>
							<a class="star-job view-modal" href="#" data-toggle="modal" data-target="#starJob" data-id="<?= h($row['Deal']['id']); ?>" data-name="view" data-deal="<?= h($row['Deal']['name']); ?>" ref = 'popover' data-content ='Favorite Job'>
                                                                <i class="fa fa-star-o"></i>
                                                        </a>&nbsp;
						    <?php } ?>
                                                        <a class="archive-job view-modal" href="#" data-toggle="modal" data-target="#archiveJob" data-id="<?= h($row['Deal']['id']); ?>" data-name="view" data-deal="<?= h($row['Deal']['name']); ?>" ref = 'popover' data-content ='Hide Job'>
                                                            <i class="fa fa-eye-slash"></i>
                                                        </a>&nbsp;
                                                        <a class="view-modal" href="#" data-toggle="modal" data-target="#uDealM" data-id="<?= h($row['Deal']['id']); ?>" data-name="view" data-deal="<?= h($row['Deal']['name']); ?>" ref = 'popover' data-content ='Edit Job'>
                                                            <i class="fa fa-edit"></i>
                                                        </a>&nbsp;
                                                        <a class="delete-job view-modal" href="#" data-toggle="modal" data-target="#deleteJob" data-id="<?= h($row['Deal']['id']); ?>" data-name="view" data-deal="<?= h($row['Deal']['name']); ?>" ref = 'popover' data-content ='Delete Job'>
                                                            <i class="fa fa-trash-o"></i>
                                                        </a>
                                                    </span>
                                                </div>
						<div class="job-footer">
                                                    <span>&nbsp;</span>
                                                    <?php /* disabling user avatar
                                                    if (!empty($row['Users'])) :
                                                        foreach ($row['Users'] as $user):
                                                            echo $this->Html->image('avatar/thumb/' . h($user['User']['picture']), array('class' => 'img-circle', 'ref' => 'popover', 'data-content' => h($user['User']['first_name']) . ' ' . h($user['User']['last_name'])));
                                                        endforeach;
                                                    endif;

						     */ ?>
							<?php /* Disabling price
                                                    <span class="pull-right">
                                                        <?= $this->Session->read('Auth.User.currency_symbol'); ?><?= ($row['Deal']['price']) ? h($row['Deal']['price']) : '0'; ?>
				</span>
							 */ ?>
                                                </div>                                              
                                            </li>
                                            <!--End Deal Box-->
                                        <?php endforeach; ?>
                                        <?php if ($dealCount == 10): ?>
                                            <li class="load-li"><button class="load_more label label-primary" data-id="<?= h($stage['Stage']['id']); ?>"><?php echo __('Load More'); ?></button>
                                                <div class="animation_image"><?php echo $this->Html->image('ajax-loader.gif'); ?><?php echo __('Loading'); ?>...</div></li>
                                        <?php endif; ?>
                                    </ul>
                                    <input type="hidden" id="stage_<?= h($stage['Stage']['id']); ?>" value="1">                                  
                                </div>
                                <!--End Stage Box Content-->
                            </div>
                            <!--End Stage Box-->
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <!--End content box -->
    </div>
</div>
<!--End Content Section -->
<script>
$(document).on("click", ".star-job", function () {
     var myJobId = $(this).data('id');
     //$(".modal-content #JobId").val( myJobId );
     $("#starJob #JobId").val( myJobId );
     // As pointed out in comments, 
     // it is unnecessary to have to manually call the modal.
     // $('#addBookDialog').modal('show');
});
$(document).on("click", ".archive-job", function () {
     var myJobId = $(this).data('id');
     //$(".modal-content #JobId").val( myJobId );
     $("#archiveJob #JobId").val( myJobId );
     // As pointed out in comments, 
     // it is unnecessary to have to manually call the modal.
     // $('#addBookDialog').modal('show');
});
$(document).on("click", ".delete-job", function () {
     var myJobId = $(this).data('id');
     //$(".modal-content #JobId").val( myJobId );
     $("#deleteJob #JobId").val( myJobId );
     // As pointed out in comments, 
     // it is unnecessary to have to manually call the modal.
     // $('#addBookDialog').modal('show');
});
</script>
