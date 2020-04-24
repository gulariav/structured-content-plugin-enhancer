jQuery(document).ready(function(){
    jQuery(".collapsible-faq > div > div ").hide();
    
    jQuery(".collapsible-faq > div > h2 ").click(function(){
        jQuery(this).toggleClass("toggle_active").next().slideToggle("fast");
        return false
    });

    
    $(".faq-data").hide();
    
    $(".faq-btn").click(function() {
        $(this).toggleClass("toggle_active").next().slideToggle("fast");
        return false
    })
    
});
