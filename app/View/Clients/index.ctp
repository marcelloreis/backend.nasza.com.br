<?php 
/**
* Insere o sidebar especifico de usuarios
*/
$this->start('sidebar');
echo $this->element('Components/sidebar');
$this->end();

/**
* Adiciona o painel de funcoes da grid
*/
echo $this->element('Index/panel');

/**
* Inicia a montagem da grid
*/
echo $this->AppGrid->create($modelClass, array('id' => $modelClass, 'tableClass' => 'index-table table table-hover table-nomargin'));

/**
* Monta o cabeçalho
*/
$columns['id'] = $this->AppForm->input("", array('id' => 'check-all', 'type' => 'checkbox', 'template' => 'form-input-clean'));
$columns['action'] = 'Ações';
$columns['contact_name'] = 'Contrato';
$columns['fancy_name'] = 'Nome';
$columns['tel1'] = 'Telefone';
$columns['state_id'] = 'UF';
unset($columns['cnpj']);
unset($columns['corporate_name']);
unset($columns['zipcode']);
unset($columns['street']);
unset($columns['complement']);
unset($columns['number']);
unset($columns['neighborhood']);
unset($columns['city_id']);
unset($columns['tel2']);
unset($columns['tel3']);
unset($columns['prospect']);
unset($columns['contract_id']);

echo $this->Html->tag('thead', $this->AppGrid->tr($columns));

/**
* Monta o body
*/
$map = strtolower($modelClass);
if(count($$map)){
    $body = '';
    foreach($$map as $k => $v){
        $v[$modelClass]['action'] = $this->element('Index/action', array('id' => $v[$modelClass]['id']));
        $v[$modelClass]['id'] = $this->AppForm->input("{$modelClass}.id.{$k}", array('type' => 'checkbox', 'template' => 'form-input-clean', 'value' => $v[$modelClass]['id']));
        $v[$modelClass]['state_id'] = $v['State']['uf'];
        $v[$modelClass]['tel1'] = $this->AppUtils->tel($v[$modelClass]['tel1']);
        $body .= $this->AppGrid->tr($v[$modelClass]);
    }
    echo $this->Html->tag('tbody', $body);
}

/**
* Fecha a montagem da grid
*/                
echo $this->AppGrid->end();

/**
* Adiciona o rodapé da grid
*/
echo $this->element('Index/footer');