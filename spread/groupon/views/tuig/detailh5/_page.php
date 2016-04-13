{if $page.count > 1}
<div class="block-page cDGray">
	{if $page.currentPage <= 1}
	<span class="disabled" ><a href="javascript:void(0);" >上一页</a></span>
	{else}
	<span><a href="{$page.url}-p{$page.currentPage-1}/" >上一页</a></span>
	{/if}
	<span><select class="cDGray" name="" id="">
		{section name=loop loop=$page.count}
		<option value="{$page.url}-p{$smarty.section.loop.index + 1}/" {if $page.currentPage - $smarty.section.loop.index == 1}selected="selected"{/if}>第{$smarty.section.loop.index + 1}页</option>
		{/section}
	</select></span>
	{if $page.currentPage >= $page.count}
	<span class="disabled"><a href="javascript:void(0);">下一页</a></span>
	{else}
	<span><a href="{$page.url}-p{$page.currentPage+1}/">下一页</a></span>
	{/if}
	<div class="hide">
		{section name=loop loop=$page.count}
		<a href="{$page.url}-p{$smarty.section.loop.index + 1}/">第{$smarty.section.loop.index + 1}页</a>
		{/section}
	</div>
</div>
{/if}
