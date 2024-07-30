//tree view 
jQuery.cookie=function(e,a,l){if("undefined"==typeof a){var t=null;if(document.cookie&&""!=document.cookie)for(var s=document.cookie.split(";"),i=0;i<s.length;i++){var n=jQuery.trim(s[i]);if(n.substring(0,e.length+1)==e+"="){t=decodeURIComponent(n.substring(e.length+1));break}}return t}l=l||{},null===a&&(a="",l.expires=-1);var r="";if(l.expires&&("number"==typeof l.expires||l.expires.toUTCString)){var o;"number"==typeof l.expires?(o=new Date,o.setTime(o.getTime()+24*l.expires*60*60*1e3)):o=l.expires,r="; expires="+o.toUTCString()}var d=l.path?"; path="+l.path:"",p=l.domain?"; domain="+l.domain:"",h=l.secure?"; secure":"";document.cookie=[e,"=",encodeURIComponent(a),r,d,p,h].join("")},function(e){e.extend(e.fn,{swapClass:function(e,a){var l=this.filter("."+e);return this.filter("."+a).removeClass(a).addClass(e),l.removeClass(e).addClass(a),this},replaceClass:function(e,a){return this.filter("."+e).removeClass(e).addClass(a).end()},hoverClass:function(a){return a=a||"hover",this.hover(function(){e(this).addClass(a)},function(){e(this).removeClass(a)})},heightToggle:function(e,a){e?this.animate({height:"toggle"},e,a):this.each(function(){jQuery(this)[jQuery(this).is(":hidden")?"show":"hide"](),a&&a.apply(this,arguments)})},heightHide:function(e,a){e?this.animate({height:"hide"},e,a):(this.hide(),a&&this.each(a))},prepareBranches:function(e){return e.prerendered||(this.filter(":last-child:not(ul)").addClass(a.last),this.filter((e.collapsed?"":"."+a.closed)+":not(."+a.open+")").find(">ul").hide()),this.filter(":has(>ul)")},applyClasses:function(l,t){this.filter(":has(>ul):not(:has(>a))").find(">span").click(function(a){t.apply(e(this).next())}).add(e("a",this)).hoverClass(),l.prerendered||(this.filter(":has(>ul:hidden)").addClass(a.expandable).replaceClass(a.last,a.lastExpandable),this.not(":has(>ul:hidden)").addClass(a.collapsable).replaceClass(a.last,a.lastCollapsable),this.prepend('<div class="'+a.hitarea+'"/>').find("div."+a.hitarea).each(function(){var a="";e.each(e(this).parent().attr("class").split(" "),function(){a+=this+"-hitarea "}),e(this).addClass(a)})),this.find("div."+a.hitarea).click(t)},treeview:function(l){function t(l,t){function i(t){return function(){return s.apply(e("div."+a.hitarea,l).filter(function(){return t?e(this).parent("."+t).length:!0})),!1}}e("a:eq(0)",t).click(i(a.collapsable)),e("a:eq(1)",t).click(i(a.expandable)),e("a:eq(2)",t).click(i())}function s(){e(this).parent().find(">.hitarea").swapClass(a.collapsableHitarea,a.expandableHitarea).swapClass(a.lastCollapsableHitarea,a.lastExpandableHitarea).end().swapClass(a.collapsable,a.expandable).swapClass(a.lastCollapsable,a.lastExpandable).find(">ul").heightToggle(l.animated,l.toggle),l.unique&&e(this).parent().siblings().find(">.hitarea").replaceClass(a.collapsableHitarea,a.expandableHitarea).replaceClass(a.lastCollapsableHitarea,a.lastExpandableHitarea).end().replaceClass(a.collapsable,a.expandable).replaceClass(a.lastCollapsable,a.lastExpandable).find(">ul").heightHide(l.animated,l.toggle)}function i(){var a=[];o.each(function(l,t){a[l]=e(t).is(":has(>ul:visible)")?1:0}),e.cookie(l.cookieId,a.join(""))}function n(){var a=e.cookie(l.cookieId);if(a){var t=a.split("");o.each(function(a,l){e(l).find(">ul")[parseInt(t[a])?"show":"hide"]()})}}if(l=e.extend({cookieId:"treeview"},l),l.add)return this.trigger("add",[l.add]);if(l.toggle){var r=l.toggle;l.toggle=function(){return r.apply(e(this).parent()[0],arguments)}}this.addClass("treeview");var o=this.find("li").prepareBranches(l);switch(l.persist){case"cookie":var d=l.toggle;l.toggle=function(){i(),d&&d.apply(this,arguments)},n();break;case"location":var p=this.find("a").filter(function(){return this.href.toLowerCase()==location.href.toLowerCase()});p.length&&p.addClass("selected").parents("ul, li").add(p.next()).show()}return o.applyClasses(l,s),l.control&&(t(this,l.control),e(l.control).show()),this.bind("add",function(t,i){e(i).prev().removeClass(a.last).removeClass(a.lastCollapsable).removeClass(a.lastExpandable).find(">.hitarea").removeClass(a.lastCollapsableHitarea).removeClass(a.lastExpandableHitarea),e(i).find("li").andSelf().prepareBranches(l).applyClasses(l,s)})}});var a=e.fn.treeview.classes={open:"open",closed:"closed",expandable:"expandable",expandableHitarea:"expandable-hitarea",lastExpandableHitarea:"lastExpandable-hitarea",collapsable:"collapsable",collapsableHitarea:"collapsable-hitarea",lastCollapsableHitarea:"lastCollapsable-hitarea",lastCollapsable:"lastCollapsable",lastExpandable:"lastExpandable",last:"last",hitarea:"hitarea"};e.fn.Treeview=e.fn.treeview}(jQuery);


/**** treview ****/
 $(function() {
			$("#tree").treeview({
				collapsed: true,
				animated: "medium",
				control:"#sidetreecontrol",
				persist: "location"
			});
		})


 
 
