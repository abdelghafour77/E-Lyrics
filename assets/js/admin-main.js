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
  var i = 0;
  $('.inputss').each(function () {

    var name = $(this).find("input[name='name']").val();
    var description = $(this).find("textarea[name='description']").val();
    var lyrics = $(this).find("textarea[name='lyrics']").val();
    var category = $(this).find("select[name='category']").val();
    var album = $(this).find("select[name='album']").val();
    var picture = $(this).find("input[name='picture']")[0].files[0];
    let obj = {}
    obj['name' + i] = name;
    obj['description' + i] = description;
    obj['lyrics' + i] = lyrics;
    obj['category' + i] = category;
    obj['album' + i] = album;
    obj['picture' + i] = picture;
    data.push(obj);
    i++
  });

  var formData = new FormData();
  for (let i = 0; i < data.length; i++) {
    for (key in data[i]) {
      if (key !== 'picture') {
        formData.append(key, data[i][key])
      }

    }
  }
  for (key in picture) {
    formData.append(key, picture[key])
  }


  for (var i = 0; i < data.length; i++) {
    var picture = data[i].picture;
    formData.append("picture[]", picture);
  }
  console.log(data);
  $.ajax({
    url: "controller/songController.php",
    type: "POST",
    data: formData,
    contentType: false,
    processData: false,
    success: function (response) {
      console.log(response);
      window.location.href = "songs.php";
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

