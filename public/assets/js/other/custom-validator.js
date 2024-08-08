  //File Type Validation with Jquery validator
  $.validator.addMethod("fileType", function (value, element, param) {
    const extension = value.split('.').pop().toLowerCase();
    return this.optional(element) || $.inArray(extension, param) !== -1;
}, "Please choose a valid file type.");

//File Maximum Size Validation with jquery Validator
$.validator.addMethod("maxFileSize", function (value, element, param) {
const maxSize = param * 1024 * 1024; // Convert MB to bytes
if (element.files.length > 0) {
    const fileSize = element.files[0].size; // Size in bytes
    return fileSize <= maxSize;
}
return true;
}, "File size must be less than {0} MB.");


$.validator.addMethod("emailPattern", function(value, element, param) {
    // Define the email pattern
    const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

    // Test the value against the pattern
    return this.optional(element) || emailPattern.test(value);

}, "Invalid email address.");