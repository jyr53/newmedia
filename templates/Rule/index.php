<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Rule> $rule
 */
?>
<div class="rule index content">
    <?= $this->Html->link(__('New Rule'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Rule') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rule as $rule): ?>
                <tr>
                    <td><?= $this->Number->format($rule->id) ?></td>
                    <td><?= h($rule->name) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $rule->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $rule->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $rule->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rule->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
