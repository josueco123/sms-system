$(document).ready(function () {

$("body").on("click", ".evt-edit-client", function (e) {  

    const clientId = $(this).attr("data-modal-id");
    const phone = $(this).attr("data-modal-phone");
    
    $( ".bg-gray-900" ).addClass("bg-gray-200")
    $( ".bg-gray-900" ).removeClass("bg-gray-900");
    $('.id-input').val(clientId);
    $('.phone-input').val(phone);

  });

  $("body").on("click", ".evt-delete-client", function (e) {  

    const clientId = $(this).attr("data-modal-id");
    const urlDelete = $(this).attr("data-modal-url");
    
    $( ".bg-gray-900" ).addClass("bg-gray-200")
    $( ".bg-gray-900" ).removeClass("bg-gray-900");

    
    $('.url-delete').attr('href', urlDelete+ "/"+ clientId);

  });
});