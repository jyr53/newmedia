<?php

/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Type> $type
 */
?>
<div class="type index content">
    <?= $this->Html->link(__('Nouveau Type'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Type') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('') ?>Nom</th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($type as $type) : ?>
                    <tr>
                        <td><?= h($type->name) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('Voir'), ['action' => 'view', $type->id]) ?>
                            <?= $this->Html->link(__('Editer'), ['action' => 'edit', $type->id]) ?>
                            <?= $this->Form->postLink(__('supprimer'), ['action' => 'delete', $type->id], ['confirm' => __('êtes vous sur de vouloir supprimer {0}?', $type->name)]) ?>
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