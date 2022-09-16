$("#facultad").on('change', function(event){
    $.get(`carreras/${event.target.value}`, function(res, sta){
        $("#carrera").empty();
        res.forEach(element => {
            $("#carrera").append(`<option value=${element.id}>${element.name}</option>`);
        });
    });
});

$("#carrera").on('click', function(event){
    $.get(`cursos/${event.target.value}`, function(res, sta){
        $("#curso").empty();
        res.forEach(element => {
            $("#curso").append(`<option value=${element.id}>${element.name}</option>`);
        });
    });
});