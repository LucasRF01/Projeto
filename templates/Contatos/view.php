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
            <?= $this->Html->link(__('Lista de Contatos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Editar Contato'), ['action' => 'edit', $contato->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Deletar Contato'), ['action' => 'delete', $contato->id], ['confirm' => __('Deseja mesmo deletar {0}?', $contato->nome_contato), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Novo Contato'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="contatos view content">
            <h3><?= h($contato->nome_contato) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome Contato') ?></th>
                    <td><?= h($contato->nome_contato) ?></td>
                </tr>
                <tr>
                    <th><?= __('Telefone') ?></th>
                    <td><?= h($contato->telefone_contato) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($contato->email_contato) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($contato->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Criação') ?></th>
                    <td><?= h($contato->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ultima modificação') ?></th>
                    <td><?= h($contato->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
