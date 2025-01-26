//alert("JS du fichier script.js général");

$("#Search").autocomplete({
    source: function (request, response){
        $.ajax({
            url: "http://hobbymatch.localhost/ApiHobby/search",
            dataType: "json",
            data: JSON.stringify({"keyword": request.term}),
            type: "POST",
            beforeSend: function () {
                console.log("Waiting ....");
            },
            success: function (data){
                console.log(data);
                var transformed = $.map(data, function (el){
                    return {
                        label: el.Titre,
                        id: el.Id
                    }
                });
                response(transformed);
            },
            error: function (){
                console.error("Erreur appel API");
                response([]);
            }
        })
    },
    select: function(event, ui) {
        window.location.href = "/AdminHobby/show/" + ui.item.id;
    }
});