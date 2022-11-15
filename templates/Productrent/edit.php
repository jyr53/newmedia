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
            <?= $this->Form->postLink(
                __('supprimer'),
                ['action' => 'delete', $productrent->id],
                ['confirm' => __('êtes vous sur de vouloir supprimer  {0}?', $productrent->title), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Liste Produit'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="productrent form content">
            <?= $this->Form->create($productrent) ?>
            <fieldset>
                <legend><?= __('Editer Produit') ?></legend>
                <?php
                    echo $this->Form->control('barcode');
                    echo $this->Form->control('gender.name', [
                        'label' => 'genre',
                    ]);
                    echo $this->Form->control('type.name', [
                        'label' => 'Type'
                    ]);
                    echo $this->Form->control('title', [
                        'label' => 'Titre'
                    ]);
                    echo $this->Form->control('author', [
                        'label' => 'Auteur'
                    ]);
                    echo $this->Form->control('abstract', [
                        'label' => 'Extrait'
                    ]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('enregistrer')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
