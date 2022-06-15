$(document).ready(function () {
  //!! >>> MENAMBAHKAN DATA KE DB <<<
  $("#save").click(function () {
    $nama_fashion = $("#nama_fashion").val();
    $harga = $("#harga").val();
    $id_categories = $("#id_categories").val();
    $id_size = $("#id_size").val();

    $.ajax({
      url: "insert.php",
      method: "POST",
      data: {
        nama_fashion: $nama_fashion,
        harga: $harga,
        id_categories: $id_categories,
        id_size: $id_size,
      },
      success: function (_) {
        $("#insertModal").modal("hide");
        console.log("Data berhasil ditambah");
        $.ajax({
          url: "select.php",
          success: function (val) {
            $("#content").html(val);
          },
        });
        document.getElementById("nama_fashion").value = "";
        document.getElementById("harga").value = "";
        document.getElementById("id_categories").value = "";
        document.getElementById("id_size").value = "";
      },
    });
  });

  load();
  //!! >>> MENGAMBIL DATA DARI DB <<<
  function load(query) {
    $.ajax({
      url: "select.php",
      method: "POST",
      data: { query: query },
      success: function (data) {
        $("#content").html(data);
      },
    });
  }
  $("#search_text").keyup(function () {
    var search = $(this).val();
    if (search != "") {
      load(search);
    } else {
      load();
    }
  });

  //!! >>> SORT A - Z <<<
  $("#AZ").click(function () {
    $.ajax({
      url: "select.php",
      method: "POST",
      data: { sort: "asc" },
      success: function (data) {
        $("#content").html(data);
      },
    });
  });
  //!! >>> SORT Z - A <<<
  $("#ZA").click(function () {
    $.ajax({
      url: "select.php",
      method: "POST",
      data: { sort: "dsc" },
      success: function (data) {
        $("#content").html(data);
      },
    });
  });

  //!! >>> UKURAN S<<<
  $("#S").click(function () {
    $.ajax({
      url: "select.php",
      method: "POST",
      data: { ukuran: "S" },
      success: function (data) {
        $("#content").html(data);
      },
    });
  });
  //!! >>> UKURAN M<<<
  $("#M").click(function () {
    $.ajax({
      url: "select.php",
      method: "POST",
      data: { ukuran: "M" },
      success: function (data) {
        $("#content").html(data);
      },
    });
  });
  //!! >>> UKURAN L<<<
  $("#L").click(function () {
    $.ajax({
      url: "select.php",
      method: "POST",
      data: { ukuran: "L" },
      success: function (data) {
        $("#content").html(data);
      },
    });
  });
  //!! >>> UKURAN S<<<
  $("#XL").click(function () {
    $.ajax({
      url: "select.php",
      method: "POST",
      data: { ukuran: "XL" },
      success: function (data) {
        $("#content").html(data);
      },
    });
  });
  //!! >>> UKURAN S<<<
  $("#XXL").click(function () {
    $.ajax({
      url: "select.php",
      method: "POST",
      data: { ukuran: "XXL" },
      success: function (data) {
        $("#content").html(data);
      },
    });
  });

  //!! >>> hoddie<<<
  $("#HODDIE").click(function () {
    $.ajax({
      url: "select.php",
      method: "POST",
      data: { jenis_categories: "hoddie" },
      success: function (data) {
        $("#content").html(data);
      },
    });
  });
  //!! >>> SHIRT<<<
  $("#SHIRT").click(function () {
    $.ajax({
      url: "select.php",
      method: "POST",
      data: { jenis_categories: "shirt" },
      success: function (data) {
        $("#content").html(data);
      },
    });
  });
  //!! >>> FLANEL<<<
  $("#FLANEL").click(function () {
    $.ajax({
      url: "select.php",
      method: "POST",
      data: { jenis_categories: "flanel" },
      success: function (data) {
        $("#content").html(data);
      },
    });
  });
  //!! >>> CREWNECK<<<
  $("#CREWNECK").click(function () {
    $.ajax({
      url: "select.php",
      method: "POST",
      data: { jenis_categories: "crewneck" },
      success: function (data) {
        $("#content").html(data);
      },
    });
  });

  //!! >>> PAGINATION LOAD MORE <<<
  var halaman = 8;
  $("#load-menu").click(function () {
    $.ajax({
      url: "select.php",
      method: "POST",
      data: { load: halaman },
      success: function (data) {
        $("#content").html(data);
        halaman += 8;
      },
    });
  });
});
