
/* Prevent links with href="#" to append a '#' to the URL
 * ====================================================== */
$(document).on("click", "a[href='#']", function(e) {
    e.preventDefault();
});

/* Initialize Placeholder.js plugin
 * ================================ */
Placeholder.init();

$(document).ready(function(){
    
    
});

/* === Bootstrap Tooltip initialisation === */
$("[data-toggle='tooltip']").tooltip();

/* === Bootstrap Popover initialisation === */
$("[data-toggle='popover']").popover({});

/* === Full number pagination classes === */
$.fn.dataTableExt.oStdClasses.sPageButton = "paginate_button btn plt-peter-river round-mini btn-mini";
$.fn.dataTableExt.oStdClasses.sPageButtonActive = "paginate_button btn plt-peter-river round-mini btn-mini disabled";
$.fn.dataTableExt.oStdClasses.sPageButtonStaticDisabled = 'paginate_button btn plt-peter-river round-mini btn-mini disabled';

/* === Two button pagination classes === */
$.fn.dataTableExt.oStdClasses.sPagePrevEnabled = 'paginate_enabled_previous btn plt-peter-river round-mini btn-mini';
$.fn.dataTableExt.oStdClasses.sPagePrevDisabled = 'paginate_disabled_previous btn plt-peter-river round-mini btn-mini disabled';
$.fn.dataTableExt.oStdClasses.sPageNextEnabled = 'paginate_enabled_next btn plt-peter-river round-mini btn-mini';
$.fn.dataTableExt.oStdClasses.sPageNextDisabled = 'paginate_disabled_next btn plt-peter-river round-mini btn-mini disabled';
