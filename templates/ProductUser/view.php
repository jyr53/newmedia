<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductUser $productUser
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Editer'), ['action' => 'edit', $productUser->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $productUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productUser->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Liste'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Nouveau'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="productUser view content">

            <table>
                <tr>
                    <th><?= __('utilisateur') ?></th>
                    <td><?= $productUser->has('user') ? $this->Html->link($productUser->user->nom, ['controller' => 'Users', 'action' => 'view', $productUser->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('produit') ?></th>
                    <td><?= $productUser->has('productrent') ? $this->Html->link($productUser->productrent->title, ['controller' => 'Productrent', 'action' => 'view', $productUser->productrent->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('auteur') ?></th>
                    <td><?= $productUser->has('productrent') ? $this->Html->link($productUser->productrent->author, ['controller' => 'Productrent', 'action' => 'view', $productUser->productrent->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Date Dep') ?></th>
                    <td><?= h($productUser->date_dep) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date Ret') ?></th>
                    <td><?= h($productUser->date_ret) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
