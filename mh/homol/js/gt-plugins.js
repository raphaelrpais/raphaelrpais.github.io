// Plugin FullPage
$(document).ready(function () {
    "use strict";
	$('#fullpage').fullpage({
        menu: '#menu-gt',
		scrollOverflow: true,
        scrollOverflowOptions: null,
        responsiveHeight: 768
    });
});

// TABS da HOME
$('#myTabs a').click(function (e) {
    "use strict";
    e.preventDefault();
    $(this).tab('show');
});

// Material Form
$('.form-group').ready(function () {
    "use strict";
	$.material.init();
});