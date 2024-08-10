const signUpButton = document.getElementById('signUpButton');
const signInButton = document.getElementById('signInButton');
const singUpForm = document.getElementById('signUp');
const signInForm = document.getElementById('signIn');

signUpButton.addEventListener('click', function(){
    singUpForm.style.display="block";
    signInForm.style.display="none";
});
signInButton.addEventListener('click', function(){
    singUpForm.style.display="none";
    signInForm.style.display="block";
}); 