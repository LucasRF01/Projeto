<?php $this->Html->css('pg', ['block'=>true]);
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contato $contato
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Ações') ?></h4>
            <?= $this->Html->link(__('Lista Contatos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="contatos form content">
            <?= $this->Form->create($contato) ?>
            <fieldset>
                <legend><?= __('Adicionar Contato') ?></legend>
                <?php
                    echo $this->Form->control('nome_contato');
                    echo $this->Form->control('telefone_contato');
                    echo $this->Form->control('email_contato');
                ?>
            </fieldset>
            <?= $this->Form->button(__('adicionar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>