{*
* BDVIET 2020
*}


<div id="shipping-text">
 <div class="shipping-text-inner container">
 <div class="row">
	{if isset($cms_shippinginfos) && $cms_shippinginfos}
	{$cms_shippinginfos.text nofilter}
	{else}
	<div class="shipping-outer">
	<div class="shipping-inner">
	<div class="subtitle-part subtitle-part1">
	<div class="subbanner-part-maininnner1">
	<div class="subicon"><span class="hide">icon</span></div>
	<div class="subtitle-part-inner">
	<div class="subtitile">
	<div class="subtitile1">Vận chuyển nhanh chóng</div>
	</div>
	</div>
	</div>
	</div>
	<div class="subtitle-part subtitle-part2">
	<div class="subbanner-part-maininnner2">
	<div class="subicon"><span class="hide">icon</span></div>
	<div class="subtitle-part-inner">
	<div class="subtitile">
	<div class="subtitile1">Luôn làm khách hàng hài lòng</div>
	</div>
	</div>
	</div>
	</div>
	<div class="subtitle-part subtitle-part3">
	<div class="subbanner-part-maininnner3">
	<div class="subicon"><span class="hide">icon</span></div>
	<div class="subtitle-part-inner">
	<div class="subtitile">
	<div class="subtitile1">Mở cửa cả tuần: 8:00 Sáng - 10:00 Tối</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	{/if}
	</div>
 </div>
</div>
