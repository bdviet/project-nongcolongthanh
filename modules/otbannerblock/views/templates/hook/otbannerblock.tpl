{*
* BDVIET 2020
*}

  
{if isset($cms_bannerinfos) && $cms_bannerinfos}
{$cms_bannerinfos.text nofilter}
{else}
<div class="subbannercms-outer container">
<div class="row">
<div class="subbannercms-inner">
<div class="subbanner-common subbannerpart1">
<div class="subbanner1 subbanner-inner"><a href="#"><img src="img/cms/banner1.jpg" alt="" /></a></div>
</div>
<div class="subbanner-common subbannerpart2">
<div class="subbanner2 subbanner-inner"><a href="#"><img src="img/cms/banner2.jpg" alt="" /></a></div>
</div>
</div>
</div>
</div>

{/if}
 