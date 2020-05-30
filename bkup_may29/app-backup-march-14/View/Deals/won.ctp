<?php
/**
 * View for favorite jobs
 * 
 */

?>
<div class="row">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-12">
                <div class="clearfix">
                    <h1 class="pull-left"><?php echo __('Favorite Jobs'); ?></h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="main-box no-header clearfix">					  
                    <div class="main-box-body clearfix">
                        <!--Won deal list -->
                        <div class="table-responsive">
                            <?php echo $this->element('favorite'); ?>		
                        </div>
                        <!--End Won deal list -->
                    </div>
                </div>
            </div>
        </div>						
    </div>
</div>
