<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $planFeature->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $planFeature->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Plan Features'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Plans'), ['controller' => 'Plans', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Plan'), ['controller' => 'Plans', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Features'), ['controller' => 'Features', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Feature'), ['controller' => 'Features', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="planFeatures form large-9 medium-8 columns content">
    <?= $this->Form->create($planFeature) ?>
    <fieldset>
        <legend><?= __('Edit Plan Feature') ?></legend>
        <?php
            echo $this->Form->input('plan_id', ['options' => $plans]);
            echo $this->Form->input('feature_id', ['options' => $features]);
            echo $this->Form->input('value');
            echo $this->Form->input('is_active');
            echo $this->Form->input('show_on_page');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
