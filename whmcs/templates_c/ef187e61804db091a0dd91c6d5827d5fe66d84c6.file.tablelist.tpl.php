<?php /* Smarty version Smarty-3.1.21, created on 2016-12-29 11:40:13
         compiled from "/home/wwwroot/default/whmcs/templates/eno/includes/tablelist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6051564035864859dbe7e68-63559273%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef187e61804db091a0dd91c6d5827d5fe66d84c6' => 
    array (
      0 => '/home/wwwroot/default/whmcs/templates/eno/includes/tablelist.tpl',
      1 => 1449775852,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6051564035864859dbe7e68-63559273',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'WEB_ROOT' => 0,
    'template' => 0,
    'filterColumn' => 0,
    'tableName' => 0,
    'dontControlActiveClass' => 0,
    'noPagination' => 0,
    'noInfo' => 0,
    'noSearch' => 0,
    'LANG' => 0,
    'startOrderCol' => 0,
    'noSortColumns' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5864859dc518d1_40849021',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5864859dc518d1_40849021')) {function content_5864859dc518d1_40849021($_smarty_tpl) {?><?php echo '<script'; ?>
 type="text/javascript" charset="utf8" src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/js/plugins/datatables/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" charset="utf8" src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/js/plugins/datatables/datatables.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" charset="utf8" src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/js/plugins/datatables/dataTables.responsive.js"><?php echo '</script'; ?>
>


<?php if (isset($_smarty_tpl->tpl_vars['filterColumn']->value)&&$_smarty_tpl->tpl_vars['filterColumn']->value) {?>
<?php echo '<script'; ?>
 type="text/javascript">
jQuery(".view-filter-btns a").click(function(e) {
    var filterValue = jQuery(this).find("span").html().trim();
    var dataTable = jQuery('#table<?php echo $_smarty_tpl->tpl_vars['tableName']->value;?>
').DataTable();
    var filterValueRegex;
    if (jQuery(this).hasClass('active')) {
        <?php if (!isset($_smarty_tpl->tpl_vars['dontControlActiveClass']->value)||!$_smarty_tpl->tpl_vars['dontControlActiveClass']->value) {?>
            jQuery(this).removeClass('active');
            jQuery(this).find(jQuery("i.fa.fa-dot-circle-o")).switchClass('fa-dot-circle-o', 'fa-circle-o', 0);
        <?php }?>
        dataTable.column(<?php echo $_smarty_tpl->tpl_vars['filterColumn']->value;?>
).search('').draw();
    } else {
        <?php if (!isset($_smarty_tpl->tpl_vars['dontControlActiveClass']->value)||!$_smarty_tpl->tpl_vars['dontControlActiveClass']->value) {?>
            jQuery('.view-filter-btns .list-group-item').removeClass('active');
            jQuery('i.fa.fa-dot-circle-o').switchClass('fa-dot-circle-o', 'fa-circle-o', 0);
            jQuery(this).addClass('active');
            jQuery(this).find(jQuery("i.fa.fa-circle-o")).switchClass('fa-circle-o', 'fa-dot-circle-o', 0);
        <?php }?>
        filterValueRegex = "\\s*" + jQuery.fn.dataTable.util.escapeRegex(filterValue) + "\\s*";
        dataTable.column(<?php echo $_smarty_tpl->tpl_vars['filterColumn']->value;?>
)
            .search(filterValueRegex, true, false, false)
            .draw();
    }

    // Prevent jumping to the top of the page 
    // when no matching tag is found.
    e.preventDefault();
});
<?php echo '</script'; ?>
>
<?php }?>

<?php echo '<script'; ?>
 type="text/javascript">
var alreadyReady = false; // The ready function is being called twice on page load.
jQuery(document).ready( function () {

	
	var responsiveHelper = undefined;
		{var breakpointDefinition = {
			tablet: 1024,
			phone : 480
		};}
	
	var tableElement = jQuery("#table<?php echo $_smarty_tpl->tpl_vars['tableName']->value;?>
");
	
    tableElement.dataTable ({
        //"dom": '<"listtable"fit>pl',<?php if (isset($_smarty_tpl->tpl_vars['noPagination']->value)&&$_smarty_tpl->tpl_vars['noPagination']->value) {?>
        //"paging": false,<?php }
if (isset($_smarty_tpl->tpl_vars['noInfo']->value)&&$_smarty_tpl->tpl_vars['noInfo']->value) {?>
        //"info": false,<?php }
if (isset($_smarty_tpl->tpl_vars['noSearch']->value)&&$_smarty_tpl->tpl_vars['noSearch']->value) {?>
        //"filter": false,<?php }?>
        //"responsive": true,
		"autoWidth": false,
        "oLanguage": {
            "sEmptyTable":     "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['norecordsfound'];?>
",
            "sInfo":           "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['tableshowing'];?>
",
            "sInfoEmpty":      "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['tableempty'];?>
",
            "sInfoFiltered":   "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['tablefiltered'];?>
",
            "sInfoPostFix":    "",
            "sInfoThousands":  ",",
            "sLengthMenu":     "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['tablelength'];?>
",
            "sLoadingRecords": "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['tableloading'];?>
",
            "sProcessing":     "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['tableprocessing'];?>
",
            "sSearch":         "",
            "sZeroRecords":    "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['norecordsfound'];?>
",
            "oPaginate": {
                "sFirst":    "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['tablepagesfirst'];?>
",
                "sLast":     "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['tablepageslast'];?>
",
                "sNext":     "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['tablepagesnext'];?>
",
                "sPrevious": "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['tablepagesprevious'];?>
"
            }
        },
        "pageLength": 10,
        "order": [
            [ <?php if (isset($_smarty_tpl->tpl_vars['startOrderCol']->value)&&$_smarty_tpl->tpl_vars['startOrderCol']->value) {
echo $_smarty_tpl->tpl_vars['startOrderCol']->value;
} else { ?>0<?php }?>, "asc" ]
        ],
        "lengthMenu": [
            [10, 25, 50, -1],
            [10, 25, 50, "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['tableviewall'];?>
"]
        ],<?php if (isset($_smarty_tpl->tpl_vars['noSortColumns']->value)&&$_smarty_tpl->tpl_vars['noSortColumns']->value!=='') {?>
        "aoColumnDefs": [{
            "bSortable": false,
            "aTargets": [ <?php echo $_smarty_tpl->tpl_vars['noSortColumns']->value;?>
 ]
        }],<?php }?>
		
		preDrawCallback: function () {
            // Initialize the responsive datatables helper once.
            if (!responsiveHelper) {
                responsiveHelper = new ResponsiveDatatablesHelper(tableElement, breakpointDefinition);
            }
        },
        rowCallback    : function (nRow) {
            responsiveHelper.createExpandIcon(nRow);
        },
        drawCallback   : function (oSettings) {
            responsiveHelper.respond();
        },
		
		
        "stateSave": true
    });
    jQuery(".dataTables_filter input").attr("placeholder", "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['tableentersearchterm'];?>
");

    <?php if (isset($_smarty_tpl->tpl_vars['filterColumn']->value)&&$_smarty_tpl->tpl_vars['filterColumn']->value) {?>
    // highlight remembered filter on page re-load
	
	var table = jQuery('#table<?php echo $_smarty_tpl->tpl_vars['tableName']->value;?>
').DataTable();
    var rememberedFilterTerm = table.state().columns[<?php echo $_smarty_tpl->tpl_vars['filterColumn']->value;?>
].search.search;
    if (rememberedFilterTerm && !alreadyReady) {
        // This should only run on the first "ready" event.
        jQuery(".view-filter-btns a span").each(function(index) {
            if (jQuery(this).text().trim() == rememberedFilterTerm.replace(/\\|s\*/g,'')) {
                jQuery(this).parent('a').addClass('active');
                jQuery(this).parent('a').find('i').switchClass('fa-circle-o', 'fa-dot-circle-o', 0);
            }
        });
    }
    <?php }?>
alreadyReady = true;
} );
<?php echo '</script'; ?>
>
<?php }} ?>
