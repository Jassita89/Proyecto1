<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Level[]|\Cake\Collection\CollectionInterface $levels
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Level'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Schools'), ['controller' => 'Schools', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New School'), ['controller' => 'Schools', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Schedules'), ['controller' => 'Schedules', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Schedule'), ['controller' => 'Schedules', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Scores'), ['controller' => 'Scores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Score'), ['controller' => 'Scores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Student Levels'), ['controller' => 'StudentLevels', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Student Level'), ['controller' => 'StudentLevels', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tutors'), ['controller' => 'Tutors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tutor'), ['controller' => 'Tutors', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="levels index large-9 medium-8 columns content">
    <h3><?= __('Levels') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('school_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($levels as $level): ?>
            <tr>
                <td><?= $this->Number->format($level->id) ?></td>
                <td><?= $level->has('school') ? $this->Html->link($level->school->id, ['controller' => 'Schools', 'action' => 'view', $level->school->id]) : '' ?></td>
                <td><?= h($level->nombre) ?></td>
                <td><?= $this->Number->format($level->estado) ?></td>
                <td><?= h($level->created) ?></td>
                <td><?= h($level->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $level->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $level->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $level->id], ['confirm' => __('Are you sure you want to delete # {0}?', $level->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
