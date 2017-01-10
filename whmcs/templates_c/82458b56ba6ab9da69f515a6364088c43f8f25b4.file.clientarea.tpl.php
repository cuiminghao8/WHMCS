<?php /* Smarty version Smarty-3.1.21, created on 2016-12-29 11:49:56
         compiled from "/home/wwwroot/default/whmcs/modules/servers/shadowsocks/clientarea.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1634396543586487e494c2f7-66231786%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82458b56ba6ab9da69f515a6364088c43f8f25b4' => 
    array (
      0 => '/home/wwwroot/default/whmcs/modules/servers/shadowsocks/clientarea.tpl',
      1 => 1465824500,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1634396543586487e494c2f7-66231786',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'port' => 0,
    'traffic_upload' => 0,
    'traffic_download' => 0,
    'traffic' => 0,
    'traffic_free' => 0,
    'last_year' => 0,
    'last_month' => 0,
    'last_day' => 0,
    'times' => 0,
    'last_time' => 0,
    'node_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_586487e49816b3_90390952',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586487e49816b3_90390952')) {function content_586487e49816b3_90390952($_smarty_tpl) {?><?php echo '<script'; ?>
 src="https://www.gourdata.com/theme/javascript/layer/layer.js"><?php echo '</script'; ?>
>
<div style="font-size:12px;text-align:center">
  <div style="position: relative; overflow: auto; text-align: right; margin:-10px 0 15px 0; font-size: 10px; color: #999;">
    * 刷新页面可以获取最新的数据，但并非必要的情况下请勿频繁刷新
  </div>
  <?php echo '<script'; ?>
>
  jQuery(document).ready(function($) {
      $("a[name='qrcode']").on('click',function() {
        str = $(this).attr('data-qrcode');
        str = 'ss://' + str;
        layer.open({
          type: 1,
          title: $(this).attr('data-title'),
          shade: [0.8, '#000'],
          skin: 'layui-layer-demo',
          closeBtn: 1,
          shift: 2,
          shadeClose: true,
          content: '<img style="width: 100%; height: 100%;" src="https://www.gourdata.com/qr?' + str + '"/><div style="position: relative; overflow: auto; text-align: center; margin-bottom: 10px; font-size: 12px;">请使用 Shadowsocks 客户端进行扫描</div>'
        });
      });
  });
  <?php echo '</script'; ?>
>

  <table style="width:100%;border:1px solid #e9e9e9;border-bottom:0;border-collapse:separate;border-spacing:0;border-radius:5px;color:#999;font-size:12px;margin-bottom:5px;">
  <tbody>
  <tr>
  	<td style="text-align:center;padding:8px 10px;background-color:#fcfcfc;border-bottom:1px solid #e9e9e9">
  		端口
  	</td>
  	<td style="text-align:center;padding:8px 10px;background-color:#fcfcfc;border-bottom:1px solid #e9e9e9">
  		已消耗的上传流量
  	</td>
  	<td style="text-align:center;padding:8px 10px;background-color:#fcfcfc;border-bottom:1px solid #e9e9e9">
  		已消耗的下载流量
  	</td>
  </tr>
  <tr>
  	<td style="text-align:center;padding:10px 15px;border-right:1px solid #e9e9e9;border-bottom:1px solid #e9e9e9">
  		<?php echo $_smarty_tpl->tpl_vars['port']->value;?>

  	</td>
  	<td style="text-align:center;padding:10px 15px;border-right:1px solid #e9e9e9;border-bottom:1px solid #e9e9e9">
  		<?php echo $_smarty_tpl->tpl_vars['traffic_upload']->value;?>
 <span style="color:#BBB;">Kilobyte (KB)</span>
  	</td>
  	<td style="text-align:center;padding:10px 15px;border-bottom:1px solid #e9e9e9">
  		<?php echo $_smarty_tpl->tpl_vars['traffic_download']->value;?>
 <span style="color:#BBB;">Kilobyte (KB)</span>
  	</td>
  </tr>
  </tbody>
  </table>

  <table style="width:100%;border:1px solid #e9e9e9;border-bottom:0;border-collapse:separate;border-spacing:0;border-radius:5px;color:#999;font-size:12px;margin-bottom:5px;">
  <tbody>
  <tr>
    <td style="text-align:center;padding:8px 10px;background-color:#fcfcfc;border-bottom:1px solid #e9e9e9">
      每月流量
    </td>
  	<td style="text-align:center;padding:8px 10px;background-color:#fcfcfc;border-bottom:1px solid #e9e9e9">
  		剩余流量
  	</td>
  	<td style="text-align:center;padding:8px 10px;background-color:#fcfcfc;border-bottom:1px solid #e9e9e9">
  		最后连接
  	</td>
  </tr>
  <tr>
    <td style="text-align:center;padding:10px 15px;border-right:1px solid #e9e9e9;border-bottom:1px solid #e9e9e9">
      <?php echo $_smarty_tpl->tpl_vars['traffic']->value;?>
 <span style="color:#BBB;">Megabyte (MB)</span>
    </td>
  	<td style="text-align:center;padding:10px 15px;border-right:1px solid #e9e9e9;border-bottom:1px solid #e9e9e9">
  		<?php echo $_smarty_tpl->tpl_vars['traffic_free']->value;?>
 <span style="color:#BBB;">Megabyte (MB)</span>
  	</td>
  	<td style="text-align:center;padding:10px 15px;border-bottom:1px solid #e9e9e9">
  		<?php echo $_smarty_tpl->tpl_vars['last_year']->value;?>
 <span style="color:#BBB;">年</span> <?php echo $_smarty_tpl->tpl_vars['last_month']->value;?>
 <span style="color:#BBB;">月</span> <?php echo $_smarty_tpl->tpl_vars['last_day']->value;?>
 <span style="color:#BBB;">日</span>, <span style="color:#BBB;"><?php echo $_smarty_tpl->tpl_vars['times']->value;?>
</span> <?php echo $_smarty_tpl->tpl_vars['last_time']->value;?>
 <span style="color:#BBB;">分</span>
  	</td>
  </tr>
  </tbody>
  </table>

	<table style="width:100%;border:1px solid #e9e9e9;border-bottom:0;border-collapse:separate;border-spacing:0;border-radius:5px;color:#999">
	<tbody>
	<tr>
		<td style="padding:8px 10px;background-color:#fcfcfc;border-bottom:1px solid #e9e9e9">
			物理地域
		</td>
		<td style="padding:8px 10px;background-color:#fcfcfc;border-bottom:1px solid #e9e9e9">
			网协地址
		</td>
		<td style="padding:8px 10px;background-color:#fcfcfc;border-bottom:1px solid #e9e9e9">
			别名地址
		</td>
		<td style="padding:8px 10px;background-color:#fcfcfc;border-bottom:1px solid #e9e9e9">
			加密方式
		</td>
		<td style="padding:8px 10px;background-color:#fcfcfc;border-bottom:1px solid #e9e9e9">
			扫一扫 <span style="color:red">( New )</span>
		</td>
	</tr>
<?php echo $_smarty_tpl->tpl_vars['node_list']->value;?>

	</tbody>
	</table>
	<p style="color:#999;border-color:#E9E9E9;padding:10px;border-radius:4px;margin:5px 0;border:1px solid #eee;font-size:12px">
		注意：由于网协地址可能会发生变化，在无 DNS 污染的环境下建议使用别名地址连接。
	</p>
</div>
<?php }} ?>
