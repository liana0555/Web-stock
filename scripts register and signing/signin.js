const submit = document.getElementById("submit")


async function loginUser() {
const Email = document.getElementById("Email").value
const Password = document.getElementById("Password").value
const form = document.querySelector(".form");
const error_msg = "Password or Email wrong"
const oldMessage = form.querySelector(".error");
if (oldMessage) oldMessage.remove();

try {
    const response = await fetch("http://localhost:8080/api/auth/login", {
    method: "POST",
    headers: {
      "Content-Type": "application/json"
    },
    body: JSON.stringify({
      email: Email,
      password: Password
    })
  });

  const data = await response.json();
  if(data.token != null){
    alert("Login sucessfully")
    localStorage.setItem("token",data.token);
    window.location.href = '../homepage.html';

  }
  else{
    form.innerHTML += `<p class = "error" style='color:red'>${error_msg}</p>`;

  }
  document.getElementById("Email").value = '';
  document.getElementById("Password").value = '';

  
} catch (error) {

    console.error("Error", error);

    
}
  
}
