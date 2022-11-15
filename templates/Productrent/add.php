<?php
/**
 * @var \App\View\AppView $this
 *
 * @var \App\Model\Entity\Productrent $productrent
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Liste Produit'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="productrent form content">
            <?= $this->Form->create($productrent) ?>
            <fieldset>
                <legend><?= __('Ajout Produit') ?></legend>
                <?php
                    echo $this->Form->control('barcode');
                echo  'Type';
                echo $this->Form->select('type_id',
                    [
                        '1' => 'Livre',
                        '2' => 'DVD',
                        '3' => 'jeux',
                        ' 4' => 'CD musique'
                    ]);
                echo  'Genre';
                echo $this->Form->select('gender_id',
                    [
                        '1' => 'BD',
                        '2' => 'Policier',
                        '3' => 'BD adulte',
                        ' 5' => 'Roman Historique',
                        '6'=>'Roman D\'amour',
                        '7'=>'roman de Guerre',
                        '8'=>'Enfance'
                    ]);
                 echo $this->Form->control('title', [
                    'label' => 'Titre']);
                    echo $this->Form->control('author' ,[
                    'label' => 'auteur']);
                echo $this->Form->control('abstract',[
                    'label' => 'Extrait']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Enregister')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
