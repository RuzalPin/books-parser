<?php
/* Smarty version 3.1.33, created on 2019-06-15 19:44:41
  from '/var/www/books.site/books/smarty/templates/books_dynamic.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d05207939c715_91421219',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20b86fa4dc03fa9afd95425c88425ba5d9f78668' => 
    array (
      0 => '/var/www/books.site/books/smarty/templates/books_dynamic.tpl',
      1 => 1560617053,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d05207939c715_91421219 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['res']->value, 'book');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['book']->value) {
?>
<div style="margin-left: auto;margin-right: auto; width: 50%; color:gray; margin-bottom: 10px; margin-top: 10px;">
<?php if ($_smarty_tpl->tpl_vars['book']->value['image'] != '') {?><center><img src='https://www.litmir.me<?php echo $_smarty_tpl->tpl_vars['book']->value['image'];?>
' max-width='216' max-height='335'></center><?php }
if ($_smarty_tpl->tpl_vars['book']->value['title'] != '') {?><center><h2>-- <?php echo $_smarty_tpl->tpl_vars['book']->value['title'];?>
 --</h2></center><?php }
if ($_smarty_tpl->tpl_vars['book']->value['description'] == '') {?>
<br/> <br/> <br/>
<?php }
if ($_smarty_tpl->tpl_vars['book']->value['description'] != '') {?>
<div style='text-align:center;'><?php echo $_smarty_tpl->tpl_vars['book']->value['description'];?>
</div>
<center><h2>-- -- -- -- -- --</h2></center>
<br/> <br/> <br/>
<?php }?>
</div>
<?php
}
} else {
?>
<center>Not found</center>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
