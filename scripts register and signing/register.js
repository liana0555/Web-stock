const submit = document.getElementById("submit");

submit.addEventListener("click", async () => {
  const firstname = document.getElementById("firstName").value;
  const lastname = document.getElementById("lastName").value;
  const day = document.getElementById("day").value;
  const month = document.getElementById("month").value;
  const year = document.getElementById("year").value;
  const email = document.getElementById("email").value;
  const password = document.getElementById("password").value;
  const password_verify = document.getElementById("password1").value;

  if (password !== password_verify) {
    alert("Two passwords are different");
    document.getElementById("password").value = '';
    document.getElementById("password1").value = '';
    return;
  }

  const birthDate = `${year}-${month.padStart(2, '0')}-${day.padStart(2, '0')}`;

  try {
    const response = await fetch("http://localhost:8080/api/auth/register", {
      method: "POST",
      headers: {
        "Content-Type": "application/json"
      },
      body: JSON.stringify({
        firstName: firstname,
        lastName: lastname,
        birthDate: birthDate,
        email: email,
        password: password
      })
    });

    const data = await response.json();
    console.log("Server response:", data);

    if (response.ok) {
      alert("Registered successfully!");
      window.location.href = "signin.html";
    } else {
      alert("Registration failed: " + (data.message || "Unknown error"));
    }

  } catch (err) {
    console.error("Error", err);
    alert("An error occurred during registration");
  }
});
