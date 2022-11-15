<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Type $type
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Supprimer'),
                ['action' => 'delete', $type->id],
                ['confirm' => __('êtes vous sur de vouloir supprimer {0} ?', $type->name), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Liste Type'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="type form content">
            <?= $this->Form->create($type) ?>
            <fieldset>
                <legend><?= __('Editer Type') ?></legend>
                <?php
                echo $this->Form->control('name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Sauvegarder')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>