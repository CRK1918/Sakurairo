(globalThis.webpackChunksakurairo_scripts=globalThis.webpackChunksakurairo_scripts||[]).push([[3388],{630:function(t){var e,o,n,s;t.exports=(e=function(){return(e=Object.assign||function(t){for(var e,o=1,n=arguments.length;o<n;o++)for(var s in e=arguments[o])Object.prototype.hasOwnProperty.call(e,s)&&(t[s]=e[s]);return t}).apply(this,arguments)},o="lgBeforeSlide",n="lgAfterSlide",s={commentBox:!1,fbComments:!1,disqusComments:!1,disqusConfig:{title:void 0,language:"en"},commentsMarkup:'<div id="lg-comment-box" class="lg-comment-box lg-fb-comment-box"><div class="lg-comment-header"><h3 class="lg-comment-title">Leave a comment.</h3><span class="lg-comment-close lg-icon"></span></div><div class="lg-comment-body"></div></div>',commentPluginStrings:{toggleComments:"Toggle Comments"}},function(){function t(t,o){return this.core=t,this.$LG=o,this.settings=e(e({},s),this.core.settings),this}return t.prototype.init=function(){this.settings.commentBox&&(this.setMarkup(),this.toggleCommentBox(),this.settings.fbComments?this.addFbComments():this.settings.disqusComments&&this.addDisqusComments())},t.prototype.setMarkup=function(){this.core.outer.append(this.settings.commentsMarkup+'<div class="lg-comment-overlay"></div>');var t='<button type="button" aria-label="'+this.settings.commentPluginStrings.toggleComments+'" class="lg-comment-toggle lg-icon"></button>';this.core.$toolbar.append(t)},t.prototype.toggleCommentBox=function(){var t=this;this.core.outer.find(".lg-comment-toggle").first().on("click.lg.comment",(function(){t.core.outer.toggleClass("lg-comment-active")})),this.core.outer.find(".lg-comment-overlay").first().on("click.lg.comment",(function(){t.core.outer.removeClass("lg-comment-active")})),this.core.outer.find(".lg-comment-close").first().on("click.lg.comment",(function(){t.core.outer.removeClass("lg-comment-active")}))},t.prototype.addFbComments=function(){var t=this,e=this;this.core.LGel.on(o+".comment",(function(e){var o=t.core.galleryItems[e.detail.index].fbHtml;t.core.outer.find(".lg-comment-body").html(o)})),this.core.LGel.on(n+".comment",(function(){try{FB.XFBML.parse()}catch(t){e.$LG(window).on("fbAsyncInit",(function(){FB.XFBML.parse()}))}}))},t.prototype.addDisqusComments=function(){var t=this,e=this.$LG("#disqus_thread");e.remove(),this.core.outer.find(".lg-comment-body").append('<div id="disqus_thread"></div>'),this.core.LGel.on(o+".comment",(function(){e.html("")})),this.core.LGel.on(n+".comment",(function(e){var o=e.detail.index,n=t;setTimeout((function(){try{DISQUS.reset({reload:!0,config:function(){this.page.identifier=n.core.galleryItems[o].disqusIdentifier,this.page.url=n.core.galleryItems[o].disqusURL,this.page.title=n.settings.disqusConfig.title,this.language=n.settings.disqusConfig.language}})}catch(t){console.error("Make sure you have included disqus JavaScript code in your document. Ex - https://lg-disqus.disqus.com/admin/install/platforms/universalcode/")}}),n.core.lGalleryOn?0:1e3)}))},t.prototype.destroy=function(){this.core.LGel.off(".lg.comment"),this.core.LGel.off(".comment")},t}())}}]);
//# sourceMappingURL=lg-1.js.map