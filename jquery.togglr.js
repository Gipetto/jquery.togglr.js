/**
 * jQuery Quick Toggler Plugin
 * version .9
 * @requires jQuery v1.3 or later (might work on earlier versions, I didn't bother to test)
 * @author Shawn Parker (shawn at topfroggraphics dot com)
 */
// Copyright (c) 2009 Shawn Parker. All rights reserved.
//
// Released under the GPL license
// http://www.opensource.org/licenses/gpl-license.php
//
// **********************************************************************
// This program is distributed in the hope that it will be useful, but
// WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. 
// **********************************************************************
;(function($){
	/**
	 * togglr is a quick function to take an array of links and tranform
	 * them in to toggle switches for the div that is targeted in the
	 * link's href attribute.
	 *
	 * Options are:
	 * 	type: 			slide/show, defaults to slide
	 * 	speed: 			slow/normal/fast, defaults to normal
	 *	callback: 		function to be passed to the toggle function as a callback
	 * 	showtext: 		"show" text, prepended to link HTML when target is closed
	 *	hidetext: 		"hide" text, prepended to link HTML when target is open
	 *	openclass: 		class to identify targets with when they are open
	 * 	closedclass:  	class to identify targets with when they are closed
	 *
	 *
	 * @example - JavaScript
	 * 	// to use with the default configuration
	 * 	jQuery('.target-elements').togglr();
	 * 
	 *	// to change the toggle speed
	 *	jQuery('.target-elements').togglr({speed:'fast'});
	 *
	 *	// to change the toggle text
	 * 	jQuery('.target-elements').togglr({showtext:'Open ',hidetext:'Close '});
	 *
	 *
	 * @example - HTML
	 *	// to default the target div open
	 *	<a href="#tgt-div" class="target-elements">MyTitle</a>
	 *
	 *	// to default the target div closed
	 *	<a href="#tgt-div" class="target-elements closed">MyTitle</a>
	 *
	 *
	 * @param object opts - array of options
	 */
	$.fn.togglr = function(opts) {
		var defaults = {
			type:'slide',
			speed:'normal',
			callback:function(){ return; },
			showtext:'Show ',
			hidetext:'Hide ',
			openclass:'open',
			closedclass:'closed'
		};
		var options = $.extend(defaults,opts);

		// build a callback function that bitch slaps IE's opacity issues in to line		
		var ieFixCallback = function(_t,_c) {
			return function() {
				if(jQuery.browser.msie) {
					// remove the filter attribute so that cleartype font smoothing can be applied
					try { _t.get(0).style.removeAttribute('filter'); }
					catch(durr) {} // satisfy older opera versions
				}
				// do custom callback
				_c.call(this);
			};
		};
		
		return this.each(function() {			
			// don't bother if its not an anchor
			if(this.tagName != 'A') { return; }
			
			var toglr = $(this);
			toglr.attr('togl',toglr.html());
			var trgt = $(toglr.attr('href'));
			
			// don't bother if the target div doesn't exist
			if (trgt.length < 1) { return; }
						
			// attach click handler
			toglr.click(function(){
				var _this = $(this);
				var _tgt = $(_this.attr('href'));
				
				if(_tgt.is(':visible')) {
					_this.html(options.showtext+_this.attr('togl'));
					_tgt.addClass(options.closedclass).removeClass(options.openclass);
				}
				else {
					_this.html(options.hidetext+_this.attr('togl'));
					_tgt.addClass(options.openclass).removeClass(options.closedclass);
				}
				
				if (options.type == 'show') {
					_tgt.toggle(options.speed,ieFixCallback(_tgt,options.callback));					
				}
				else {
					_tgt.slideToggle(options.speed,ieFixCallback(_tgt,options.callback));
				}
								
				return false;
			});
						
			// set the show/hide text
			if(toglr.hasClass('closed')) {
				toglr.html(options.showtext+toglr.attr('togl'));
				trgt.addClass(options.closedclass).hide();
			}
			else {
				toglr.html(options.hidetext+toglr.attr('togl'));
				trgt.addClass(options.openclass);
			}
		});
	};	
})(jQuery);