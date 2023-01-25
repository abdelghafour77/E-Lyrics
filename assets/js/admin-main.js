let index = 1;

const modalBlock = $(".showHide");
let parent = '';
let clone = '';
let inputs
function cloneInputs() {
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
}
function addMore() {
  cloneInputs()
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
  $("#picture").removeClass("hidden").addClass("bloc");
  $("#addmore").removeClass("hidden").addClass("bloc");
  modalBlock.focus();
}

function closeModal() {
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
  document.getElementById("inputsParent").innerHTML = "";
  $("#modal").removeClass("flex").addClass("hidden");
  parent.appendChild(clone);
}
function setType(type) {
  document.getElementById("type").setAttribute("value", type)
}

function getSong(id) {
  let song = $('#' + id);


  $('#id_song').val(id);
  $('#name').val(song.find(".name").attr("song"));
  $('#category').val(song.find(".category").attr("song"));

  $('#artist').val(song.find(".artist").attr("song"));
  $('#description').val(song.find(".description").attr("song"));
  $('#lyrics').val(song.find(".lyrics").attr("song"));
  $("#artist").trigger("change");
  setTimeout(function () {
    $('#album').val(song.find(".album").attr("song"));
    $("#picture").removeClass("flex").addClass("hidden");
  }, 30);


  $("#update").removeClass("hidden").addClass("bloc");
  $("#delete").removeClass("hidden").addClass("bloc");
  $("#add").removeClass("bloc").addClass("hidden");
  $("#addmore").removeClass("bloc").addClass("hidden");
  $("#modal").removeClass("hidden").addClass("flex");
  $("#picture").removeClass("hidden").addClass("flex");
}

