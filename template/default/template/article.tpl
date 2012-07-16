<style type="text/css">
	li {
	list-style:none;
	}
</style>

{section name=n loop=$list}
	<li>Database Name : {$list[n].Database}</li>
{/section}