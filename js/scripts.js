$("document").ready(function () {
    $("form[name=cadastro]").submit(function (e) {
        e.preventDefault();
        url = $("form[name=cadastro]").attr("action");
        $.ajax({
            type: "POST",
            headers: {"cache-control": "no-cache"},
            url: url,
            async: true,
            dataType: "json",
            data: $(this).serialize(),
            success: function (jsonData) {
            	console.log(jsonData);
                alert(jsonData.message);
                if (jsonData.redirect != null) {
                    document.location.href = jsonData.redirect;
                }
           },
            error: function () {
                alert("Ocorreu um erro na requisição");
            }
        });

    });

    $(".js_ajax_excluir").on('click', function (e) {
    	e.preventDefault();
    	url = $(this).attr('href');
    	$.ajax({
    		type: "POST",
    		headers: {"cache-control": "no-cache"},
    		url: url,
    		async: true,
    		dataType: "json",
    		data: $(this).serialize(),
    		success: function (jsonData) {
    			alert(jsonData.message);
    			document.location.reload();
    		},
    		error: function () {
    			alert("Ocorreu um erro na requisição");
    		}
    	});

    });
});

