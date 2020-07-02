$(document).ready( function(){
    //cerrar las alertas automaticamente
    $('.alert[data-auto-dismiss]').each( function(index,element){
        const $element = $(element),
            timeout = $element.data('auto-dismis') || 5000;
        setTimeout( function(){
            $element.alert('close');
        },timeout);

    });

    //TOOLTIPS
    $('body').tooltip({
        trigger: 'hover',
        selector: '.tooltipsC',
        placement: 'top',
        html: true,
        container: 'body'
    });
});