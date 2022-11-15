<?php

/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Productrent> $productrents
 * @var iterable<\App\Model\Entity\Gender> $genders
 */
?>
<div class="productrent index content">
    <?= $this->Html->link(__('Nouveau Produit a louer'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Produit') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('barcode') ?></th>
                    <th><?= $this->Paginator->sort('genre') ?></th>
                    <th><?= $this->Paginator->sort('type') ?></th>
                    <th><?= $this->Paginator->sort('titre') ?></th>
                    <th><?= $this->Paginator->sort('auteur') ?></th>
                    <th><?= $this->Paginator->sort('résumé') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productrents as $productrent) : ?>
                    <tr>
                        <td><?= h($productrent->barcode) ?></td>
                        <td><?= h($productrent->gender->name) ?></td>
                        <td><?= h($productrent->type->name) ?></td>
                        <td><?= h($productrent->title) ?></td>
                        <td><?= h($productrent->author) ?></td>
                        <td><?= h($productrent->abstract) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('Voir'), ['action' => 'view', $productrent->id]) ?>
                            <?= $this->Html->link(__('Editer'), ['action' => 'edit', $productrent->id]) ?>
                            <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $productrent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productrent->id)]) ?>
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
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, montrant {{current}} enregistrements sur  {{count}} au  total')) ?></p>
    </div>
</div>
