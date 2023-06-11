$(() => {
  $("#signup").hide();
  $("form").submit((event) => {
    //Esto hace que se detenga el comportamiento por default del elemento, en este caso el submit
    event.preventDefault();

    setTimeout(() => {
      const formContainer = document.getElementsByClassName('form-container')[0];
      $("form").fadeOut(400);
      formContainer.classList.add('expand');

    }, 100);


    setTimeout(() => {
      event.target.submit();
    }, 1300);
  });

  $("#btnsignup").on("click", () => {
    $(".form-container").fadeOut(() => {
      $("#login").remove();
      $("#signup").fadeIn(500);
      $(".form-container").css("background-image", "url(../img/bg3su.svg)");;

    });



  });

});
