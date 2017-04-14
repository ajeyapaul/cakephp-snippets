<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Plans'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Plan Features'), ['controller' => 'PlanFeatures', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Plan Feature'), ['controller' => 'PlanFeatures', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List User Plans'), ['controller' => 'UserPlans', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User Plan'), ['controller' => 'UserPlans', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="plans form large-9 medium-8 columns content">
    <?= $this->Form->create($plan) ?>
    <fieldset>
        <legend><?= __('Add Plan') ?></legend>
        <?php
            echo $this->Form->input('name');
			


			$i=0;
			
			
			
			
			
			foreach($features as $k=>$v):			
				//var_dump($k);
				echo $this->Form->hidden("plan_features.$i.feature_id", ['default' => $k]);
				echo $this->Form->input("plan_features.$i.value");
				echo $this->Form->input("plan_features.$i.is_active");
				echo $this->Form->input("plan_features.$i.show_on_page");
				$i++;
			endforeach;
			
			
			
			
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
