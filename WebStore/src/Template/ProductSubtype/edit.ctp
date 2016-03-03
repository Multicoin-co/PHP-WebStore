<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $productSubtype->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $productSubtype->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Product Subtype'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="productSubtype form large-9 medium-8 columns content">
    <?= $this->Form->create($productSubtype) ?>
    <fieldset>
        <legend><?= __('Edit Product Subtype') ?></legend>
        <?php
            echo $this->Form->input('fkProductTypeID');
            echo $this->Form->input('name');
            echo $this->Form->input('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
