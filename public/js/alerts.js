// alerts.js
var al = null;   

function alert_success(txt) {
 	$.alert({
        title: '¡Exelente!',
        content: txt,
        type: 'green',
        typeAnimated: true,
    });
}
 

function  alert_beforeSend(txt){
	al = $.alert({ 
		icon: 'fa fa-spinner fa-spin',
		title: txt,
		content: 'Espere hasta que esta ventana se cierre automaticamente'
	});
}

function alert_error(txt){
	$.alert({ 
		title: '¡Oh oh!',
        content: txt,
        type: 'red',
        typeAnimated: true
    });
}