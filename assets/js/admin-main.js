let index = 1;

const modalBlock = $(".showHide");
let parent = '';
let clone = '';
let inputs

function addMore() {
  parent = document.getElementById("inputsParent");
  inputss = document.getElementsByClassName("inputss")[0];
  clone = inputss.cloneNode(true);
  inputs = clone.getElementsByTagName("input");
  for (var i = 0; i < inputs.length; i++) {
    inputs[i].value = "";
  }
  var textareas = clone.getElementsByTagName("textarea");
  for (var i = 0; i < textareas.length; i++) {
    textareas[i].value = "";
  }
  var index = document.getElementsByClassName("index")[document.getElementsByClassName("index").length - 1].innerHTML;
  index++;
  clone.getElementsByClassName("index")[0].innerHTML = index;

  parent.appendChild(clone);
  let counter = 0
  document.querySelectorAll('.inputss').forEach((input) => {
    input.id = `inputss_${counter}`
    input.querySelector('.artist').id
    counter++
  })
}

function senddata() {
  var data = [];
  $('.inputss').each(function () {
    var name = $(this).find("input[name='name']").val();
    var description = $(this).find("textarea[name='description']").val();
    var lyrics = $(this).find("textarea[name='lyrics']").val();
    var category = $(this).find("select[name='category']").val();
    var album = $(this).find("select[name='album']").val();
    var picture = $(this).find("input[name='picture']")[0].files[0];
    var obj = {
      name: name,
      description: description,
      lyrics: lyrics,
      category: category,
      album: album,
      picture: picture
    };
    data.push(obj);
  });
  var jsonData = JSON.stringify(data);
  console.log(data);
  $.ajax({
    url: "controller/songController.php",
    type: "POST",
    data: jsonData,
    contentType: "application/json",
    success: function (response) {
      console.log(response);
    }
  });

}

$(document).on('click', (e) => {
  if ($(e.target).hasClass('bg-black')) {
    closeModal()
  }
});



function openModal() {
  document.getElementById("type").setAttribute("name", 'add');
  $("#update").removeClass("bloc").addClass("hidden");
  $("#delete").removeClass("bloc").addClass("hidden");
  $("#add").removeClass("hidden").addClass("bloc");
  $("#modal").removeClass("hidden").addClass("flex");
  $("#picture").removeClass("flex").addClass("hidden");
  modalBlock.focus();
}

function closeModal() {
  $("#modal").removeClass("flex").addClass("hidden");
}

