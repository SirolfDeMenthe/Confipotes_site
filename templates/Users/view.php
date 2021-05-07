<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users view content">
            <h3><?= h($user->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nom') ?></th>
                    <td><?= h($user->nom) ?></td>
                </tr>
                <tr>
                    <th><?= __('Adresse') ?></th>
                    <td><?= h($user->adresse) ?></td>
                </tr>
                <tr>
                    <th><?= __('Twitter') ?></th>
                    <td><?= h($user->twitter) ?></td>
                </tr>
                <tr>
                    <th><?= __('Instagram') ?></th>
                    <td><?= h($user->instagram) ?></td>
                </tr>
                <tr>
                    <th><?= __('Boutique') ?></th>
                    <td><?= h($user->boutique) ?></td>
                </tr>
                <tr>
                    <th><?= __('Musique') ?></th>
                    <td><?= h($user->musique) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($user->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Latitude') ?></th>
                    <td><?= $this->Number->format($user->latitude) ?></td>
                </tr>
                <tr>
                    <th><?= __('Longitude') ?></th>
                    <td><?= $this->Number->format($user->longitude) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
