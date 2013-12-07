<?php 
$menu = array(
    /**
    * Clientes
    */
    array(
        'label' => '<span>Clientes</span>', 
        'url' => array('controller' => 'clients')
        ),

    /**
    * Produtos
    */
    array(
        'label' => '<span>Colaboradores</span>', 
        'url' => array('controller' => 'partners')
        ),

    /**
    * Produtos
    */
    array(
        'label' => '<span>Projetos</span>', 
        'url' => array('controller' => 'projects')
        ),

    /**
    * Seguranca
    */
    array(
        'label' => '<span>Segurança</span>',
        'params' => array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown'),
        'icon_right' => '<span class="caret"></span>',
        'children' => array(
            /**
            * Seguranca/Usuarios
            */
            array('label' => 'Usuários', 'controller' => 'users'),
            /**
            * Seguranca/Grupos
            */
            array('label' => 'Grupos', 'controller' => 'groups'),
            )
        ),


    /**
    * Configuracoes
    */
    array(
        'label' => '<span>Configurações</span>',
        'params' => array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown'),
        'icon_right' => '<span class="caret"></span>',
        'children' => array(
            /**
            * Países
            */
            array('label' => 'Países', 'controller' => 'countries', 'plugin' => false),
            /**
            * Estados
            */
            array('label' => 'Estados', 'controller' => 'states', 'plugin' => false),
            /**
            * Cidades
            */
            array('label' => 'Cidades', 'controller' => 'cities', 'plugin' => false),
            /**
            * Cidades
            */
            array('label' => 'Traduções', 'controller' => 'translations', 'plugin' => false),
            )
        ),

    );

/**
* Libera somente o menu de consultas para os usuarios que nao forem do grupo admin
*/
if($userLogged['group_id'] != ADMIN_GROUP){
    $menu = array_slice($menu, 0, 1);
}

echo $this->AppUtils->buildMenu($menu, array('classActive' => 'page-active'));