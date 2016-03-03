<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Admin Actions') ?></li>
        <li><?= $this->Html->link(__('All Product Types'), ['controller' => 'ProductType', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('All Product SubTypes'), ['controller' => 'ProductsubType', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('All Products'), ['controller' => 'Product', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('All Customers'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li class="heading"><?= __('Admin Reports') ?></li>
        <li><?= $this->Html->link(__('Recent Orders'), ['controller' => 'Admin', 'action' => 'recentOrders']) ?></li>
        <li><?= $this->Html->link(__('Recent Users'), ['controller' => 'Admin', 'action' => 'recentUsers']) ?></li>
    </ul>
</nav>
