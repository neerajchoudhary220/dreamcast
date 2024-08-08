//Add New User Button Click Event
$("#userFormCollapseBtn").on("click", function () {
  const isFormCollapsed = !$("#userForm").hasClass("show");
  if (isFormCollapsed) {
    $(this).removeClass("btn-success").addClass("btn-warning").text("Cancel");
  } else {
    $(this)
      .removeClass("btn-warning")
      .addClass("btn-success")
      .text("Add New User");
  }
})
//form validation
$("form")
  .submit(function (e) {
    e.preventDefault();
  })
  .validate({
    rules: {
      name: {
        required: true,
        maxlength: constants.jquery_validator.name.maxlength,
        minlength: constants.jquery_validator.name.minlength,
      },
      email: {
        required: true,
        emailPattern: true,
        remote: {
          url: check_already_exists,
          type: "post",
          data: {
            email:()=>{
              return $("#email").val();
            },
            type:"email",
          },
        },
      },
      phone_number: {
        required: true,
        maxlength: constants.jquery_validator.phone_number.maxlength,
        minlength: constants.jquery_validator.phone_number.minlength,

        remote: {
          url: check_already_exists,
          type: "post",
          data: {
            email:()=>{
              return $("#phone_number").val();
            },
            type:"phone_number",
          },
        },
      }, 
      description: {
        maxlength: constants.jquery_validator.description.maxlength,
      },

      image: {
        fileType: constants.jquery_validator.image.type,
        maxFileSize: constants.jquery_validator.image.maxFileSize,
        required: false,
      },
    },
    messages: {
      name: {
        required: constants.jquery_validator.validationMsg.required("name"),

      },
      phone_number:{
        required: constants.jquery_validator.validationMsg.required("phone number"),
        remote: constants.jquery_validator.validationMsg.unique('phone number'),
      },
      email:{
        required: constants.jquery_validator.validationMsg.required("email"),
        remote: constants.jquery_validator.validationMsg.unique('email'),
        emailPattern: constants.jquery_validator.validationMsg.invalidMail(email),
      },
      description: {
        // required: "Description is required",
      },
    },
    highlight: function (element) {
      $(element).parents(".form-group").addClass("error text-danger");
    },
    unhighlight: function (element) {
      $(element).parents(".form-group").removeClass("error text-danger");
      $(element).parents(".form-group").addClass("success");
    },
    submitHandler: function (e) {
      $("form .error.text-danger").remove();
      submitPostFormHandler();
    },
  });


  //Reset Buton Clikc Event
  $(".rstBtn").on("click", function(){
    resetForm();
  })

  //Input Phone Number Filed Event
  $("#phone_number").on("input", function(e){
  let phone_number = e.target.value.replace(/[^0-9]/g, "");
  if (phone_number.length > 10) {
    phone_number = phone_number.substring(0, 10);
  }
  $(this).val(phone_number);
})


