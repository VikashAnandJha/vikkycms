/*
Template Name: AdminKit
Author: UXLiner
*/
$(function() {
    "use strict";

//world
	jQuery(document).ready(function () {
        jQuery('#vmap-world').vectorMap({
          map: 'world_en',
          backgroundColor: '#fff',
          color: '#ffffff',
          hoverOpacity: 0.7,
          selectedColor: '#666666',
          enableZoom: true,
          showTooltip: true,
          scaleColors: ['#0077d3'],
          values: sample_data,
          normalizeFunction: 'polynomial'
        });
      });
	  
//usa
jQuery(document).ready(function () {
        jQuery('#vmap-usa').vectorMap({
          map: 'usa_en',
          enableZoom: true,
          showTooltip: true,
          selectedColor: null,
		  backgroundColor: '#0077d3',
          hoverColor: null,
          colors: {
            mo: '#32dcd4',
            fl: '#32dcd4',
            or: '#32dcd4'
          },
          onRegionClick: function(event, code, region){
            event.preventDefault();
          }
        });
      });  
//usa lable
jQuery(document).ready(function () {
        jQuery('#vmap-usal').vectorMap({
          map: 'usa_en',
          borderWidth: 0.25,
          showLabels: true
        });
      });
	  
	  
})(jQuery);