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

  //!! >>> MENGUBAH DATA LEWAT CARD<<<

  $("#update").click(function () {
    $id_fashion = $("#id_fashion_up").val();
    $nama_fashion = $("#nama_fashion_up").val();
    $harga = $("#harga_up").val();
    $id_categories = $("#id_categories_up").val();
    $id_size = $("#id_size_up").val();

    $.ajax({
      url: "update.php",
      method: "POST",
      data: {
        id_fashion: $id_fashion,
        nama_fashion: $nama_fashion,
        harga: $harga,
        id_categories: $id_categories,
        id_size: $id_size,
      },
      success: function (_) {
        $("#updatedata").modal("hide");
        $.ajax({
          url: "select.php",
          success: function (val) {
            $("#content").html(val);
          },
        });
        document.getElementById("id_fashion").value = "";
        document.getElementById("nama_fashion").value = "";
        document.getElementById("harga").value = "";
        document.getElementById("id_categories").value = "";
        document.getElementById("id_size").value = "";
      },
    });
  });

  load();

  $(document).on("click", "#editbutton", function () {
    var id_fashion = $(this).attr("id_fashion");
    var nama_fashion = $(this).attr("nama_fashion");
    var harga = $(this).attr("harga");
    var id_categories = $(this).attr("id_categories");
    var id_size = $(this).attr("id_size");
    $("#id_fashion_up").val(id_fashion);
    $("#nama_fashion_up").val(nama_fashion);
    $("#harga_up").val(harga);
    $(`#id_categories_up option[value=${id_categories}]`).attr("selected", "selected");
    $(`#id_size_up option[value=${id_size}]`).attr("selected", "selected");
  });

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
  var halaman = 6;
  $("#load-menu").click(function () {
    $.ajax({
      url: "select.php",
      method: "POST",
      data: { load: halaman },
      success: function (data) {
        $("#content").html(data);
        halaman += 6;
      },
    });
  });
});
