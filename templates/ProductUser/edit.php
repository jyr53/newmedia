<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductUser $productUser
 * @var string[]|\Cake\Collection\CollectionInterface $users
 * @var string[]|\Cake\Collection\CollectionInterface $productrent
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('supprimer'),
                ['action' => 'delete', $productUser->id],
                ['confirm' => __('êtes vous sur de vouloir supprimer cet enregistrement?'), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Liste'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="productUser form content">
            <?= $this->Form->create($productUser) ?>
            <fieldset>
                <legend><?= __('Edit Product User') ?></legend>
                <?php

                    echo $this->Form->control('user_id', ['options' => $users, 'empty' => true,'label' => 'Nom',]);
                 echo $this->Form->control('user_id', ['options' => $users, 'empty' => true,'label' => 'Prenom',]);
                    echo $this->Form->control('product_id', ['options' => $productrent, 'empty' => true]);
                    echo $this->Form->control('date_dep', ['empty' => true]);
                    echo $this->Form->control('date_ret', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
