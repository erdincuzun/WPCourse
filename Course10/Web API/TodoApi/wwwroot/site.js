const uri = "api/todo";//URL adresi
let todos = null;
function getCount(data) { //öğe sayısını bulur
  const el = $("#counter");
  let name = "to-do";
  if (data) {
    if (data > 1) {
      name = "to-dos";
    }
    el.text(data + " " + name);
  } else {
    el.text("No " + name);
  }
}

//doküman yüklendiğinde getdata() metodu çağrılır
$(document).ready(function() { 
  getData();
});

//veriler GET ile ister
//tablo üzerine satır satır eklemesini yapar
function getData() {
  $.ajax({
    type: "GET",
    url: uri,
    cache: false,
    success: function(data) {
      const tBody = $("#todos");

      $(tBody).empty();

      getCount(data.length);

      $.each(data, function(key, item) {
        const tr = $("<tr></tr>")
          .append(
            $("<td></td>").append(
              $("<input/>", {
                type: "checkbox",
                disabled: true,
                checked: item.isComplete
              })
            )
          )
          .append($("<td></td>").text(item.name))
          .append(
            $("<td></td>").append(
              $("<button>Edit</button>").on("click", function() {
                editItem(item.id);
              })
            )
          )
          .append(
            $("<td></td>").append(
              $("<button>Delete</button>").on("click", function() {
                deleteItem(item.id);
              })
            )
          );

        tr.appendTo(tBody);
      });

      todos = data;
    }
  });
}

//Bir veri, id="aa-name" input'undan veriyi alır
function addItem() {
  const item = {
    name: $("#add-name").val(),
    isComplete: false
  };

  // JSON.stringify veriyi JSON formatına çevirir
  // POST, ekleme işlemi çalıştır
  $.ajax({
    type: "POST",
    accepts: "application/json",
    url: uri,
    contentType: "application/json",
    data: JSON.stringify(item),
    error: function(jqXHR, textStatus, errorThrown) {
      alert("Something went wrong!");
    },
    success: function(result) {
      getData();
      $("#add-name").val("");
    }
  });
}

//id si verilen kaydı silme API'sini çalıştırır
function deleteItem(id) {
  $.ajax({
    url: uri + "/" + id,
    type: "DELETE",
    success: function(result) {
      getData();
    }
  });
}

//id'si belli olan bir kaydı API üzerinden değiştirir
function editItem(id) {
  $.each(todos, function(key, item) {
    if (item.id === id) {
      $("#edit-name").val(item.name);
      $("#edit-id").val(item.id);
      $("#edit-isComplete")[0].checked = item.isComplete;
    }
  });
  $("#spoiler").css({ display: "block" });
}

//Form submit işlemi yapılınca çalışacak metotlar
$(".my-form").on("submit", function() {
  const item = {
    name: $("#edit-name").val(),
    isComplete: $("#edit-isComplete").is(":checked"),
    id: $("#edit-id").val()
  };

  $.ajax({
    url: uri + "/" + $("#edit-id").val(),
    type: "PUT",
    accepts: "application/json",
    contentType: "application/json",
    data: JSON.stringify(item),
    success: function(result) {
      getData();
    }
  });

  closeInput();
  return false;
});

function closeInput() {
  $("#spoiler").css({ display: "none" });
}