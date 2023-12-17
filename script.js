// script.js
$(document).ready(function () {
    // Panggil fungsi untuk menampilkan data
    fetchData();

    // Tangani submit formulir tambah data
    $("#add-form").submit(function (event) {
        event.preventDefault();
        addData();
    });
});

// Fungsi untuk menampilkan data
function fetchData() {
    $.ajax({
        url: "read.php",
        type: "GET",
        success: function (data) {
            $("#data-list").html(data);
        }
    });
}

// Fungsi untuk menambah data
function addData() {
    var Name = $("#Name").val();
    var Email = $("#Email").val();

    $.ajax({
        url: "create.php",
        type: "POST",
        data: { Name: Name, Email: Email },
        success: function () {
            fetchData();
            // Kosongkan formulir setelah menambah data
            $("#Name").val("");
            $("#Email").val("");
        }
    });
}
