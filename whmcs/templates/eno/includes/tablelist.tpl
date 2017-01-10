<script type="text/javascript" charset="utf8" src="{$WEB_ROOT}/templates/{$template}/assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="{$WEB_ROOT}/templates/{$template}/assets/js/plugins/datatables/datatables.js"></script>
<script type="text/javascript" charset="utf8" src="{$WEB_ROOT}/templates/{$template}/assets/js/plugins/datatables/dataTables.responsive.js"></script>


{if isset($filterColumn) && $filterColumn}
<script type="text/javascript">
jQuery(".view-filter-btns a").click(function(e) {ldelim}
    var filterValue = jQuery(this).find("span").html().trim();
    var dataTable = jQuery('#table{$tableName}').DataTable();
    var filterValueRegex;
    if (jQuery(this).hasClass('active')) {ldelim}
        {if !isset($dontControlActiveClass) || !$dontControlActiveClass}
            jQuery(this).removeClass('active');
            jQuery(this).find(jQuery("i.fa.fa-dot-circle-o")).switchClass('fa-dot-circle-o', 'fa-circle-o', 0);
        {/if}
        dataTable.column({$filterColumn}).search('').draw();
    {rdelim} else {ldelim}
        {if !isset($dontControlActiveClass) || !$dontControlActiveClass}
            jQuery('.view-filter-btns .list-group-item').removeClass('active');
            jQuery('i.fa.fa-dot-circle-o').switchClass('fa-dot-circle-o', 'fa-circle-o', 0);
            jQuery(this).addClass('active');
            jQuery(this).find(jQuery("i.fa.fa-circle-o")).switchClass('fa-circle-o', 'fa-dot-circle-o', 0);
        {/if}
        filterValueRegex = "\\s*" + jQuery.fn.dataTable.util.escapeRegex(filterValue) + "\\s*";
        dataTable.column({$filterColumn})
            .search(filterValueRegex, true, false, false)
            .draw();
    {rdelim}

    // Prevent jumping to the top of the page 
    // when no matching tag is found.
    e.preventDefault();
{rdelim});
</script>
{/if}

<script type="text/javascript">
var alreadyReady = false; // The ready function is being called twice on page load.
jQuery(document).ready( function () {ldelim}

	
	var responsiveHelper = undefined;
		{ldelim}var breakpointDefinition = {
			tablet: 1024,
			phone : 480
		};{rdelim}
	
	var tableElement = jQuery("#table{$tableName}");
	
    tableElement.dataTable ({ldelim}
        //"dom": '<"listtable"fit>pl',{if isset($noPagination) && $noPagination}
        //"paging": false,{/if}{if isset($noInfo) && $noInfo}
        //"info": false,{/if}{if isset($noSearch) && $noSearch}
        //"filter": false,{/if}
        //"responsive": true,
		"autoWidth": false,
        "oLanguage": {ldelim}
            "sEmptyTable":     "{$LANG.norecordsfound}",
            "sInfo":           "{$LANG.tableshowing}",
            "sInfoEmpty":      "{$LANG.tableempty}",
            "sInfoFiltered":   "{$LANG.tablefiltered}",
            "sInfoPostFix":    "",
            "sInfoThousands":  ",",
            "sLengthMenu":     "{$LANG.tablelength}",
            "sLoadingRecords": "{$LANG.tableloading}",
            "sProcessing":     "{$LANG.tableprocessing}",
            "sSearch":         "",
            "sZeroRecords":    "{$LANG.norecordsfound}",
            "oPaginate": {ldelim}
                "sFirst":    "{$LANG.tablepagesfirst}",
                "sLast":     "{$LANG.tablepageslast}",
                "sNext":     "{$LANG.tablepagesnext}",
                "sPrevious": "{$LANG.tablepagesprevious}"
            {rdelim}
        {rdelim},
        "pageLength": 10,
        "order": [
            [ {if isset($startOrderCol) && $startOrderCol}{$startOrderCol}{else}0{/if}, "asc" ]
        ],
        "lengthMenu": [
            [10, 25, 50, -1],
            [10, 25, 50, "{$LANG.tableviewall}"]
        ],{if isset($noSortColumns) && $noSortColumns !== ''}
        "aoColumnDefs": [{ldelim}
            "bSortable": false,
            "aTargets": [ {$noSortColumns} ]
        {rdelim}],{/if}
		
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
    {rdelim});
    jQuery(".dataTables_filter input").attr("placeholder", "{$LANG.tableentersearchterm}");

    {if isset($filterColumn) && $filterColumn}
    // highlight remembered filter on page re-load
	
	var table = jQuery('#table{$tableName}').DataTable();
    var rememberedFilterTerm = table.state().columns[{$filterColumn}].search.search;
    if (rememberedFilterTerm && !alreadyReady) {
        // This should only run on the first "ready" event.
        jQuery(".view-filter-btns a span").each(function(index) {
            if (jQuery(this).text().trim() == rememberedFilterTerm.replace(/\\|s\*/g,'')) {
                jQuery(this).parent('a').addClass('active');
                jQuery(this).parent('a').find('i').switchClass('fa-circle-o', 'fa-dot-circle-o', 0);
            }
        });
    }
    {/if}
alreadyReady = true;
{rdelim} );
</script>
