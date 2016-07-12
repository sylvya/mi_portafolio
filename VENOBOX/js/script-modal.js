$(document).ready(function(){

    /* default settings */
    $('.venobox').venobox(); 


    /* custom settings */
    $('.venobox_custom').venobox({
        framewidth: '50px',        // default: ''
        frameheight: '50px',       // default: ''
        border: '1000px',             // default: '0'
        bgcolor: '#5dff5e',         // default: '#fff'
        titleattr: 'ventana-modal',    // default: 'title'
        numeratio: true,            // default: false
        infinigall: true,            // default: false
    });

    /* auto-open #firstlink on page load */
    //$("#firstlink").venobox().trigger('click');
});

/*
    $(document).on("ready",function(){
    $("#firstlink").on("click",function(){

        $('.venobox').venobox({
            framewidth: '100px',        // default: ''
            frameheight: '50px',       // default: ''
            border: '20px',             // default: '0'
            bgcolor: '#5dff5e',         // default: '#fff'
            titleattr: 'ventana-modal',    // default: 'title'
            numeratio: true,            // default: false
            infinigall: true,            // default: false
   // });
    });
});
*/