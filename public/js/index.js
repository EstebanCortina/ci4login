$(() => {
  $("form").submit((event) => {
    //Esto hace que se detenga el comportamiento por default del elemento, en este caso el submit
    event.preventDefault();

    setTimeout(() => {
      const formContainer = document.getElementsByClassName('form-container')[0];
      formContainer.classList.add('expand');
      $(".form-control").fadeOut(400);
      $(".form-control").hide();
    }, 100);


    setTimeout(() => {
      //event.target.submit();
    }, 1300);
  });

});
