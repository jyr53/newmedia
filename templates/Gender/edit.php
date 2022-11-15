<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Gender $gender
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Supprimer'),
                ['action' => 'delete', $gender->id],
                ['confirm' => __('êtes vous sur de vouloir supprimer  {0} ?', $gender->name), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Liste Genre'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="gender form content">
            <?= $this->Form->create($gender) ?>
            <fieldset>
                <legend><?= __('Editer Genre') ?></legend>
                <?php
                echo $this->Form->control('name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Enregistrer')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>