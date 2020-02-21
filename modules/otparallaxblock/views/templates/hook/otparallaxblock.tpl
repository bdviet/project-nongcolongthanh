{*
* BDVIET 2020
*}


<div id="custom-parallaxblock" class="custom-parallaxblock parallaxblock-outer" data-source-url="{$module_dir}/views/img/parallax.jpg">
 <div class="parallaxblock-inner container"> 
 <div  class="row">
	{if isset($cms_parallaxinfos) && $cms_parallaxinfos}
	{$cms_parallaxinfos.text nofilter}
	{else}
	<div class="parallax-block">
	    <div class="parallax-left">
	        <div class="parallax-text">
	            <div class="parallax-text1">up to</div>
	            <div class="parallax-text2">50% off</div>
	        </div>
	        <div class="parallax-desc">Get high quality clearance women's handbags at exceptional values.</div>
	        <div class="parallax-btn"><a href="#">buy now</a></div>
	    </div>
	</div>
	{/if}
  </div>
 </div>
</div>
