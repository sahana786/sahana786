<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?php echo __('Actions') ?></h4>
            <?php echo $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id], ['class' => 'side-nav-item']) ?>
            <?php echo $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'side-nav-item']) ?>
            <?php echo $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?php echo $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users view content">
            <h3><?php echo h($user->id) ?></h3>
            <table>
                <tr>
                    <th><?php echo __('Email') ?></th>
                    <td><?php echo h($user->email) ?></td>
                </tr>
                <tr>
                    <th><?php echo __('Password') ?></th>
                    <td><?php echo h($user->password) ?></td>
                </tr>
                <tr>
                    <th><?php echo __('Role') ?></th>
                    <td><?php echo h($user->role) ?></td>
                </tr>
                <tr>
                    <th><?php echo __('Id') ?></th>
                    <td><?php echo $this->Number->format($user->id) ?></td>
                </tr>
                <tr>
                    <th><?php echo __('Created') ?></th>
                    <td><?php echo h($user->created) ?></td>
                </tr>
                <tr>
                    <th><?php echo __('Modified') ?></th>
                    <td><?php echo h($user->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
