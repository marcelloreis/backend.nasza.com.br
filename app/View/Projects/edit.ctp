<?php 
/**
* Adiciona os CSSs e Scripts de acordo com as views invocadas
*/
$this->append('css-on-demand');
echo $this->Html->css(array('plugins/chosen/chosen'));
echo $this->Html->css(array('plugins/multiselect/multi-select'));
$this->end();

echo $this->Html->script(array('plugins/chosen/chosen.jquery.min'), array('defer' => true));
echo $this->Html->script(array('plugins/multiselect/jquery.multi-select'), array('defer' => true));
?>

<div class="box box-bordered">
    <?php //echo $this->element('Edit/Projects/panel')?>
    <?php echo $this->element('Edit/panel')?>
    <div class="box-content nopadding">
        <?php echo $this->AppForm->create($modelClass, array('defaultSize' => 'input-xlarge', 'classForm' => 'form-horizontal form-bordered form-striped'))?>
            <?php echo $this->Form->input('id')?>
            <?php echo $this->Form->hidden('Partner.Partner.0', array('value' => null))?>
            <?php echo $this->AppForm->input('client_id', array('class' => 'chosen-select'))?>
            <?php echo $this->AppForm->input('name')?>
            <?php echo $this->AppForm->input('Partner.Partner', array('selected' => $partners_active, 'data-selectableheader' => 'Disponiveis', 'data-selectionheader' => 'Alocados', 'class' => 'multiselect', 'multiple' => 'multiple', 'type' => 'select', 'label' => 'Colaboradores', 'empty' => ''))?>
            <?php echo $this->AppForm->btn('Salvar Alterações');?>
        <?php echo $this->AppForm->end()?>
    </div>
</div>
