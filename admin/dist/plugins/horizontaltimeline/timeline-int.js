/*
Template Name: AdminKit
Author: UXLiner
*/
$(function() {
    "use strict";
	
	$(document).ready(function () {
            var contentText = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.';
            var myjSonObject = {
                "args": {

                },
                "dataArray": [
                  {
                      "isSelected": "true",
                      "title": "Horizontal Timeline",
                      "subTitle": "November 5th, 2018",
                      "dateValue": "10:12", // 10:12
                      "pointCnt": "5 Nov",
                      "bodyCnt": 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus eaque hic repellendus sit dicta quia pariatur consequatur.<br><br> <button type="button" class="btn btn-primary">Primary</button>'
                  },
                  {
                      "isSelected": "",
                      "title": "Horizontal Timeline",
                      "subTitle": "November 15th, 2018",
                      "dateValue": "15:12", // 12:11
                      "pointCnt": "15 Nov",
                      "bodyCnt": 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus eaque hic repellendus sit dicta quia pariatur consequatur.<br><br> <button type="button" class="btn btn-primary">Primary</button>'
                  },
                  {
                      "isSelected": "",
                      "title": "Horizontal Timeline",
                      "subTitle": "November 26th, 2018",
                      "dateValue": "35:12", // 12:11
                      "pointCnt": "26 Nov",
                      "bodyCnt": 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus eaque hic repellendus sit dicta quia pariatur consequatur.<br><br> <button type="button" class="btn btn-primary">Primary</button>'
                  },
				  {
                      "title": "Horizontal Timeline",
                      "subTitle": "December 5th, 2018",
                      "dateValue": "60:12", // 12:11
                      "pointCnt": "1 Dec",
                      "bodyCnt": 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus eaque hic repellendus sit dicta quia pariatur consequatur.<br><br> <button type="button" class="btn btn-primary">Primary</button>'
                  },
                  {
                      "title": "Horizontal Timeline",
                      "subTitle": "December 14th, 2018",
                      "dateValue": "89:12", // 12:11
                      "pointCnt": "14 Dec",
                      "bodyCnt": 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus eaque hic repellendus sit dicta quia pariatur consequatur.<br><br> <button type="button" class="btn btn-primary">Primary</button>'
                  }
                ]
            }

            var jtLine = $('.myjtline').jTLine({
                callType: 'jsonObject',
                structureObj: myjSonObject
            });
        });
})(jQuery);