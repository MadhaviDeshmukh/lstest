<?php
/**
 * List of favorite jobs
 * 
 */

?>	
<div class="table-scrollable">
    <table class="table table-hover dataTable dataTables">
        <thead>
            <tr>
                <th><?php echo __('Job Title'); ?></th>
                <th><?php echo __('Application Stage'); ?></th>
                <th><?php echo __('Reason for favoriting'); ?></th>
                <th><?php echo __('Unfavorite'); ?></th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (!empty($deals)) :
                foreach ($deals as $row) :

                    ?>
                    <tr  id="<?php echo 'row' . h($row['History']['id']); ?>">
                        <td><?= h($row['History']['deal_name']); ?></td>
                        <td> <?= h($row['History']['stage']); ?> </td>
                        <td> <?= h($row['History']['reason']); ?> </td>
                        <td> <?php echo $this->Html->link('Unfavorite', array('controller' => 'jobs', 'action' => 'active', h($row['History']['id'])), array('escape' => false, 'class' => 'btn btn-primary btn-xs')); ?> </td>
                    </tr>
                    <?php
                endforeach;
            endif;

            ?>
        </tbody>
    </table>
</div>
