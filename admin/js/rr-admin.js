 
jQuery(document).ready(function($){
    console.log('URL: ' + ajax_object.ajax_url);
    
    $.ajax({
        url: ajax_object.ajax_url,
        type: "POST",
        dataType: "json",
        data: {
            'action': 'rr_select_tab',
            'data': 'teste'
        },
        success: function(resp){
            console.log(resp);
        },
        error: function(error){
            console.log(error);
        }
    });

    
});
    
 
    
 