<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\ProductUser> $productUser
 */
?>
<div class="productUser index content">
    <?= $this->Html->link(__('Nouvelle enregistrement'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Produit louer') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('nom') ?></th>
                    <th><?= $this->Paginator->sort('prenom') ?></th>
                    <th><?= $this->Paginator->sort('produit louer') ?></th>
                    <th><?= $this->Paginator->sort('auteur') ?></th>
                    <th><?= $this->Paginator->sort('date_depart') ?></th>
                    <th><?= $this->Paginator->sort('date_retour') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productUser as $productUser): ?>
                <tr>

                    <td><?= $productUser->has('user') ? $this->Html->link($productUser->user->nom, ['controller' => 'Users', 'action' => 'view', $productUser->user->id]) : '' ?></td>
                    <td><?= $productUser->has('user') ? $this->Html->link($productUser->user->prenom, ['controller' => 'Users', 'action' => 'view', $productUser->user->id]) : '' ?></td>
                    <td><?= $productUser->has('productrent') ? $this->Html->link($productUser->productrent->title, ['controller' => 'Productrent', 'action' => 'view', $productUser->productrent->id]) : '' ?></td>
                    <td><?= $productUser->has('productrent') ? $this->Html->link($productUser->productrent->author, ['controller' => 'Productrent', 'action' => 'view', $productUser->productrent->id]) : '' ?></td>
                    <td><?= h($productUser->date_dep) ?></td>
                    <td><?= h($productUser->date_ret) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Voir'), ['action' => 'view', $productUser->id]) ?>
                        <?= $this->Html->link(__('Editer'), ['action' => 'edit', $productUser->id]) ?>
                        <?= $this->Form->postLink(__('supprimer'), ['action' => 'delete', $productUser->id], ['confirm' => __('êtes vous sur de vouloir supprimer cet enregistrement?')]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('premier')) ?>
            <?= $this->Paginator->prev('< ' . __('precedent')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('suivant') . ' >') ?>
            <?= $this->Paginator->last(__('dernier') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, regarder {{current}} enregistrement {{count}} total')) ?></p>
    </div>
</div>
