<?php $this->Html->css('pg', ['block'=>true]);
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contato[]|\Cake\Collection\CollectionInterface $contatos
 */
?>
<div class="contatos index">
    <?= $this->Html->link(__('novo'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3 class="textos"><?= __('Contatos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th class="textos"><?= $this->Paginator->sort('nome_contato') ?></th>
                    <th class="textos"><?= $this->Paginator->sort('telefone_contato') ?></th>
                    <th class="textos"><?= $this->Paginator->sort('email_contato') ?></th>
                    <th class="textos"><?= $this->Paginator->sort('created') ?></th>
                    <th class="textos"><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Ações') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($contatos as $contato): ?>
                <tr>
                    <td><?= h($contato->nome_contato) ?></td>
                    <td><?= h($contato->telefone_contato) ?></td>
                    <td><?= h($contato->email_contato) ?></td>
                    <td><?= h($contato->created) ?></td>
                    <td><?= h($contato->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Detalhes'), ['action' => 'view', $contato->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $contato->id]) ?>
                        <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $contato->id], ['confirm' => __('Deseja mesmo deletar {0}?', $contato->nome_contato)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <!-- <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('primeiro')) ?>
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('proximo') . ' >') ?>
            <?= $this->Paginator->last(__('ultimo') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('pagina {{page}} de {{pages}}, mostrando {{current}} registro(s) de {{count}} no total')) ?></p>
    </div> -->
    
</div>

