function SignupValidate()
{
    var SignupForm = document.getElementById('signup-form');
    
    var NameBlank = SignupForm.name.value == null ||SignupForm.name.value == "";
                        
    var GenderBlank = SignupForm.gender.value == null ||SignupForm.gender.value == "";
                         
    var LoginnameBlank = SignupForm.loginname.value == null ||SignupForm.loginname.value == "";

    var LoginpasswordBlank = SignupForm.loginpassword.value == null ||SignupForm.loginpassword.value == "";

    var PhoneBlank = SignupForm.phone.value == null ||SignupForm.phone.value == "";

    var EmailBlank = SignupForm.email.value == null ||SignupForm.email.value == "";

    var AddressBlank = SignupForm.address.value == null ||SignupForm.address.value == "";

    var PostalcodeBlank = SignupForm.postalcode.value == null ||SignupForm.postalcode.value == "";

    var AllBlank = NameBlank && GenderBlank && LoginnameBlank && LoginpasswordBlank && PhoneBlank && EmailBlank && AddressBlank && PostalcodeBlank;

    if (AllBlank)
        alert("Error: Form must be filled in before submitting.");
        
    return !AllBlank;
}
