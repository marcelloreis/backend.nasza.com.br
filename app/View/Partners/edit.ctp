<?php 
/**
* Adiciona os CSSs e Scripts de acordo com as views invocadas
*/
$this->append('css-on-demand');
echo $this->Html->css(array('plugins/chosen/chosen'));
$this->end();

echo $this->Html->script(array('plugins/chosen/chosen.jquery.min'), array('defer' => true));
?>
<div class="box box-bordered">
    <?php echo $this->element('Edit/panel')?>
    <div class="box-content nopadding">
        <?php echo $this->AppForm->create($modelClass, array('defaultSize' => 'input-xlarge', 'classForm' => 'form-horizontal form-bordered form-striped'))?>
            <?php echo $this->Form->input('id')?>
            <?php echo $this->AppForm->input('state_id', array('class' => 'chosen-select'))?>
            <?php echo $this->AppForm->input('name')?>
            <?php echo $this->AppForm->input('email')?>
            <?php echo $this->AppForm->input('tel1', array('class' => 'msk-phone-ddd'))?>
            <?php echo $this->AppForm->input('tel2', array('class' => 'msk-phone-ddd'))?>
            <?php echo $this->AppForm->input('tel3', array('class' => 'msk-phone-ddd'))?>
            <?php echo $this->AppForm->input('gtalk')?>
            <?php echo $this->AppForm->input('facebook')?>
            <?php echo $this->AppForm->input('skype')?>
            <?php echo $this->AppForm->input('skills')?>
            <?php echo $this->AppForm->input('experience_level', array('type' => 'select', 'empty' => 'Selecione', 'options' => array('Baixo', 'Médio', 'Alto'), 'class' => 'chosen-select'))?>
            
            <?php echo $this->AppForm->btn('Salvar Alterações');?>
        <?php echo $this->AppForm->end()?>
    </div>
</div>
