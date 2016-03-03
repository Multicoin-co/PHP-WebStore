<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Product Subtype'), ['action' => 'edit', $productSubtype->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Product Subtype'), ['action' => 'delete', $productSubtype->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productSubtype->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Product Subtype'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product Subtype'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="productSubtype view large-9 medium-8 columns content">
    <h3><?= h($productSubtype->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($productSubtype->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Description') ?></th>
            <td><?= h($productSubtype->description) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($productSubtype->id) ?></td>
        </tr>
        <tr>
            <th><?= __('FkProductTypeID') ?></th>
            <td><?= $this->Number->format($productSubtype->fkProductTypeID) ?></td>
        </tr>
    </table>
</div>
