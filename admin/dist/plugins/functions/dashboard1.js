/*
Template Name: AdminKit
Author: UXLiner
*/
(function ($) {
	"use strict";
// Use Morris.Area instead of Morris.Line

// ======
// Yearly Earning Starts
// ======

var day_data = [
  {"elapsed": "2012", "Sales": 60, "Earning": 80},
  {"elapsed": "2013", "Sales": 120, "Earning": 130},
  {"elapsed": "2014", "Sales": 70, "Earning": 50},
  {"elapsed": "2015", "Sales": 200, "Earning": 155},
  {"elapsed": "2016", "Sales": 60, "Earning": 105},
  {"elapsed": "2018", "Sales": 180, "Earning": 80},
  {"elapsed": "2018", "Sales": 100, "Earning": 180}
];
Morris.Line({
  element: 'earning',
  data: day_data,
  xkey: 'elapsed',
  ykeys: ['Sales', 'Earning'],
  labels: ['Sales', 'Earning'],
  fillOpacity: 0,
  pointStrokeColors: ['#1976d2', '#00a65a'],
  behaveLikeLine: true,
  gridLineColor: '#e0e0e0',
  lineWidth: 3,
  hideHover: 'auto',
  lineColors: ['#0077d3', '#00a65a'],
  parseTime: false,
  resize: true
});

// ======
// Yearly Earning Ending
// ======

// ======
// Donut Chart Starts
// ======

Morris.Donut({
      element: 'donut',
      data: [
        {value: 40, label: 'In-Store Sales'},
        {value: 25, label: 'Mail-Order Sales'},
        {value: 15, label: 'New Order'}
      ],
      backgroundColor: '#fff',
      labelColor: '#404e67',
      colors: [
        '#ff4558',
        '#ff7d4d',
        '#00a5a8'
      ],
      formatter: function (x) { return x + "%"}
    });

// ======
// Donut chart End
// ======

})(jQuery);