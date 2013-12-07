<div class="row-fluid">
    <div class="box box-bordered">
        <div style="border-top: 2px solid #E5E5E5;" class="box-content nopadding">
            <?php echo $this->AppForm->create($modelClass, array('class' => $requestHandler, 'classForm' => 'form-horizontal form-bordered'));?>
                <?php echo $this->form->hidden('q', array('value' => $requestHandler));?>
                <div class="row-fluid">
                    <div class="span9">
                        <div class="control-group">
                            <label for="textfield" class="control-label">Servidor</label>
                            <div class="controls">
                            <?php 
                            echo $this->Html->link('<i class="icon-copy"></i>', array('action' => 'buildFTP'), array('escape' => false, 'class' => 'btn btn-default', 'rel' => 'tooltip', 'data-original-title' => 'Gerar FTP')) . '&nbsp;';
                            echo $this->Html->link('<i class="glyphicon-database_plus"></i>', array('action' => 'buildDB'), array('escape' => false, 'class' => 'btn btn-default', 'rel' => 'tooltip', 'data-original-title' => 'Gerar Banco de Dados')) . '&nbsp;';
                            echo $this->Html->link('<i class="glyphicon-cloud-upload"></i>', array('action' => 'turn_prod'), array('escape' => false, 'class' => 'btn btn-default', 'rel' => 'tooltip', 'data-original-title' => 'Virar o projeto para produção')) . '&nbsp;';
                            ?>                                    
                            </div>
                        </div>
                    </div>
                </div>
            <?php echo $this->AppForm->end(); ?>
        </div>
    </div>
</div>