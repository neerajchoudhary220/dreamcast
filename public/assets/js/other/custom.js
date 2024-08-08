

const constants = {
    jquery_validator:{
        image:{
            type:["jpg", "jpeg", "png"],
            max_size:2 //Maximum file size in MB,
        },
        description:{
            maxlength:300,
        },
        phone_number:{
            maxlength:10,
            minlength:10,

        },
        name:{
            maxlength:255,
            minlength:3
        },
      
        validationMsg:{
            required:(attr)=>`The ${attr} field is required`,
            invalidMail:(attr)=>`The ${attr} field must be a valid email address`,
            fileType:(attr)=>`The ${attr} field must be a valid image file`,
            maxFileSize:(attr, size)=>`The ${attr} field must be less than ${size} MB`,
            unique:(attr)=>`This ${attr} is already exists`
        }
    }

}

const convertArrayToJson=(formdata) =>{
    const data = {};
    $.each(formdata, function () {
      data[this.name] = this.value;
    });
    return data;
  }


  const submitPostFormHandler = () => {
    let formData = new FormData();
    const formElements = $("form").serializeArray();
    const formJsonData = convertArrayToJson(formElements);
    const file = $("#image")[0].files[0];
    $.each(formJsonData, function (key, value) {
      formData.append(key, value);
    });
    if (file != undefined) {
      formData.append("image", file);
    }
    const uRL = $("form").attr('action');
  
    $.ajax({
      url: uRL,
      enctype: "multipart/form-data",
      processData: false,
      contentType: false,
      type: "post",
      data: formData,
      success: function (res) {
        user_dt_tbl.destroy();
        dbTble();
        swal(`Created!`, res.message,`success`);
        document.getElementById("user_data_table").scrollIntoView({ behavior: 'smooth' });
        resetForm();
  
      },
      error: function (jqXHR, textStatus, errorThrown) {
        console.log(textStatus, errorThrown);
        if (jqXHR.responseJSON && jqXHR.responseJSON.errors) {
          handleServerErrors(jqXHR.responseJSON.errors);
        }
      },
    });
  };
  const handleServerErrors = (errors) => {
    $.each(errors, function (field, messages) {
      let $input = $('[name="' + field + '"]');
      $input.addClass("error text-danger");
      $input.after(
        '<label class="error text-danger">' + messages.join(", ") + "</label>"
      );
    });
  };


  