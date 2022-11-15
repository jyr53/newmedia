<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 * @var \Cake\Collection\CollectionInterface|string[] $rule
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users form content">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('Add User') ?></legend>
                <?php
                    echo $this->Form->control('carte');
                    echo $this->Form->control('nom');
                    echo $this->Form->control('prenom');
                    echo $this->Form->control('mail');
                    echo $this->Form->control('tel');
                    echo $this->Form->control('role_id', ['options' => $rule]);
                    echo $this->Form->control('pasword');
                    echo $this->Form->control('username');
                echo $this->Form->control('role', [
                             'options' => ['admin' => 'Admin', 'author' => 'Author']
                         ])

                ?>
            </fieldset>
            <?= $this->Form->button(__('Ajouter')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
