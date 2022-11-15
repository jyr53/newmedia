<?php

/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Gender> $gender
 */
?>
<div class="gender index content">
    <?= $this->Html->link(__('Nouveau genre'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Genre') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('genre') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($gender as $gender) : ?>
                    <tr>
                        <td><?= h($gender->name) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('Voir'), ['action' => 'View', $gender->id]) ?>
                            <?= $this->Html->link(__('Editer'), ['action' => 'Edit', $gender->id]) ?>
                            <?= $this->Form->postLink(__('Supprimer'), ['action' => 'Delete', $gender->id], ['confirm' => __('êtes vous sur de vouloir supprimer  {0} ?', $gender->name)]) ?>
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