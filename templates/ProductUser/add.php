<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductUser $productUser
 * @var \Cake\Collection\CollectionInterface|string[] $users
 * @var \Cake\Collection\CollectionInterface|string[] $productrent
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Product User'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="gauche" >
            <fieldset>
            <legend><?= __('utilisateur') ?></legend>
            <?php
            echo $this->Form->create($user);
            // Va générer un input type="text"
            echo $this->Form->control('nom');
            // Va générer un input type="password"
            echo $this->Form->control('carte');


            echo $this->Form->button('Ajouter');
            echo $this->Form->end();
            echo $this->Form->control('user_carte', ['options' => $users, 'empty' => true]);
            echo $this->Form->control('user_nom', ['options' => $users, 'empty' => true]);
            echo $this->Form->control('user_prenom', ['options' => $users, 'empty' => true]);
            ?>
            </fieldset>



        </div>








        <div class="productUser form content">
            <?= $this->Form->create($productUser) ?>
            <fieldset>
                <legend><?= __('Add Product User') ?></legend>
                <?php

                    echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
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
