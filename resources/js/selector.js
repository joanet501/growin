var data = {
    "1" : { img: "assets/Tomate.jpg", label: "Tomate" },
    "2" : { img: "assets/Patata.jpg", label: "Patata" },
    "3" : { img: "assets/Cebolla.jpg", label: "Cebolla" },
};

$('#selector').change(function() {
    var value = $(this).val();
    if (data[value] != undefined)
    {
        $('#prod-image').attr('src', data[value].img);
        $('#prod-title').text(data[value].label);
    }
});