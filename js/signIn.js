//Create HTML References.
var textEmail = document.getElementById("textEmail");
var textPassword = document.getElementById("textPassword");
var signInButton = document.getElementById("signIn");
var contact = document.getElementById("contact");

var provider = new firebase.auth.GoogleAuthProvider();
signInButton.addEventListener("click", function(){
firebase.auth().signInWithPopup(provider).then(function(result) {
  var user = result.user.displayName;
}).catch(function(error) {
  // Handle Errors here.
  var errorCode = error.code;
  var errorMessage = error.message;
  // The email of the user's account used.
  var email = error.email;
  var credential = error.credential;

  console.log(error);
  console.log(errorCode);
  console.log(errorMessage);
  console.log(credential);
  });
});

firebase.auth().onAuthStateChanged(user => {
      // If a user is logged in, display logout button.
    if (user) {
        signInButton.innerText = 'Log Out';
        signInButton.removeAttribute('href');
        signInButton.addEventListener('click', signOut);
        contact.style.display = 'block';
    }
    else{
      signInButton.innerText = 'Sign In';
      signInButton.removeEventListener('click',signOut);
      contact.style.display = 'none';

    }
});

// Sign out function for event listeners
function signOut() {
    firebase.auth().signOut().then(() => {
        console.log('Successfully signed out user');
    }).catch(error => {
        console.log('Error signing out user: ' + error);
    });
}
