<?php /* Smarty version Smarty-3.1.13, created on 2013-11-25 16:54:46
         compiled from "skins/system/dtml/it/installer_admin.html" */ ?>
<?php /*%%SmartyHeaderCode:1912409999529372c6846527-55006164%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f3d47694eb62e1ae97fc8157ce8ecc7559ba40b' => 
    array (
      0 => 'skins/system/dtml/it/installer_admin.html',
      1 => 1385394717,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1912409999529372c6846527-55006164',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_529372c687f3c7_33744306',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529372c687f3c7_33744306')) {function content_529372c687f3c7_33744306($_smarty_tpl) {?><div class="installer-wrapper">
    <p>
        Benvenuti nella famosa procedura dei cinque minuti per l'installazione
        di beContent! Altrimenti, indicare le seguenti informazioni e sarete
        sulla strada per utilizzare la pi&ugrave; estensibile e potente piattaforma del mondo.
    </p>

    <h1>Servono delle informazioni</h1>

    <p>Prima di iniziare, abbiamo bisogno di alcune informazioni. Non
        preoccuparsi, si potrà sempre cambiarle in seguito.</p>

    <form action="installer.php" method="POST">

        <fieldset>
            <label >
                <strong>Nome applicazione</strong></label> <input  type="text" name="webApp"/>
        </fieldset>

        <fieldset>
            <label >
                <strong>Username Amministratore</strong></label> <input  type="text" name="usernameAdmin"/>
        </fieldset>
        <fieldset>
            <label >
                <strong>Password Amministratore</strong></label> <input  type="password"
                                                                        name="passwordAdmin"/>
        </fieldset>

        <fieldset>
            <label >
                <strong>Nome Amministratore</strong></label> <input  type="text" name="nameAdmin"/>
        </fieldset>
        <fieldset>
            <label >
                <strong>Cognome Amministratore</strong></label> <input  type="text" name="surnameAdmin"/>
        </fieldset>

        <fieldset>
            <label >
                <strong>Email Amministratore</strong></label> <input  type="text" name="emailAdmin"/>
        </fieldset>

        <!-- <fieldset >
            <label >
                <strong>Privacy</strong></label>
            <input class="w220 mt10" name="seo" value="1" checked="checked" type="checkbox">
            <small class="line_height30 w100_100 ml20 text">Permetti l'indicizzazione nei motori di ricerca</small>
        </fieldset> -->

        <div>
            <label >&nbsp;</label>
            <input type="hidden" name="installComplete" value="ok"/>
            <input  type="submit" value="Continua"/>
        </div>
    </form>
</div><?php }} ?>