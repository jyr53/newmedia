<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Productrent $productrent
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Editer '), ['action' => 'edit', $productrent->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('suprimer '), ['action' => 'delete', $productrent->id], ['confirm' => __('êtes vous sur de vouloir supprimer {0}?', $productrent->title), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Liste produit'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Nouveau '), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="productrent view content">
            <h3><?= h($productrent->title) ?></h3>
            <table>
                <tr>
                    <th><?= __('Code bar') ?></th>
                    <td><?= h($productrent->barcode) ?></td>
                </tr>
                <tr>
                    <th><?= __('Titre') ?></th>
                    <td><?= h($productrent->title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Auteur') ?></th>
                    <td><?= h($productrent->author) ?></td>
                </tr>
                <tr>
                    <th><?= __('description') ?></th>
                    <td><?= h($productrent->abstract) ?></td>
                </tr>

                <tr>
                    <th><?= __('Genre') ?></th>
                    <td><?= h($productrent->gender->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Type') ?></th>
                    <td><?= h($productrent->type->name) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
