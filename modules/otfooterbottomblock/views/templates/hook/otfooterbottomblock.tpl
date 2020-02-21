{*
* BDVIET 2020
*}


<div id="footerbottom-text">
 <div class="footerbottom-text-inner container">
 <div class="row">
	{if isset($cms_footerbottominfos) && $cms_footerbottominfos}
	{$cms_footerbottominfos.text nofilter}
	{else}

	<div class="bottom-link bottom-left">
	<ul class="link-inner">
	<li><a href="#">FAQ</a></li>
	<li><a href="#">Orders & Return </a></li>
	<li><a href="#">Shipping Rates & Policie</a></li>
	<li><a href="#">International Shipping</a></li>
	<li><a href="#">Contact Us</a></li>
	</ul>
	</div>
	{/if}
	</div>
 </div>
</div>
