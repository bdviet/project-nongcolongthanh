{*
* BDVIET 2020
*}


<div id="header-right-text">
 <div class="header-right">
	{if isset($cms_headerrightinfos) && $cms_headerrightinfos}
	{$cms_headerrightinfos.text nofilter}
	{else}
		<div class="header-call">
			<ul class="header-link-inner">
				<li class="phone-icon">
				<a class="call-dial" href="#">+ 91 0123 456 789</a>
				</li>
			</ul>
		</div>
	{/if}
 </div>
</div>
