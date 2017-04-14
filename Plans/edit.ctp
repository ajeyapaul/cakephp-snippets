<div class="plans form large-9 medium-8 columns content">
    <?= $this->Form->create($plan) ?>
    <fieldset>
        <legend><?= __('Edit Plan') ?></legend>
        <?php
            echo $this->Form->input('name');
			$i=0;
			foreach($plan['plan_features'] as $plans):
			//foreach($features as $k=>$v):			
				echo $this->Form->hidden("plan_features.$i.id", ['default' => $plans->id]);
				echo $this->Form->hidden("plan_features.$i.plan_id", ['default' => $plans->plan_id]);
				echo $this->Form->hidden("plan_features.$i.feature_id", ['default' => $plans->feature_id]);
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
