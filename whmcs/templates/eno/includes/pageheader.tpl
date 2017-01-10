

<div class="page-header title hidden-xs">
    <h1>{$title} <span class="sub-title">{if $desc}{$desc}{/if}</span></h1>
    {if $showbreadcrumb}{include file="$template/includes/breadcrumb.tpl"}{/if}
</div>
<div class="page-header title visible-xs">
    <h1>{$title} <span class="sub-title">{if $desc}<br />{$desc}{/if}</span></h1>
    {if $showbreadcrumb}{include file="$template/includes/breadcrumb.tpl"}{/if}
</div>