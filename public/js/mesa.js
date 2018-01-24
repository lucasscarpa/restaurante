

var mesaApp = new Vue ({

    el: '#mesas',
    data: {
        mesas: []
    }

});

for(var i = 1; i < 31; i++){

    mesaApp.mesas.push({
        numero: i
    });

}