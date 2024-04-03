function store() {
    $('#adaugaPers').click(function (e) {
        e.preventDefault();
        let formData = new FormData(document.getElementById('form'));
        $.ajax({
            type: "POST",
            url: "api/store",
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
                console.log(response);
                setTimeout(() => {
                    window.location.href = 'http://127.0.0.1:8000/persons';
                  }, "1000");

            },
            error: function(error) {
                console.log(error);
            }
        });
    })
}


store()
