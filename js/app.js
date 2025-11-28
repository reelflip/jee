// LOGIN
document.getElementById("loginForm")?.addEventListener("submit", async (e) => {
  e.preventDefault();

  const email = document.getElementById("email").value;
  const password = document.getElementById("password").value;

  const res = await fetch("php/login.php", {
    method: "POST",
    headers: { "Content-Type": "application/json" },
    body: JSON.stringify({ email, password }),
  });

  const data = await res.json();

  if (data.status === "success") {
    window.location.href = "dashboard.html";
  } else {
    document.getElementById("loginMsg").innerText = data.message;
  }
});

// REGISTER
document.getElementById("registerForm")?.addEventListener("submit", async (e) => {
  e.preventDefault();

  const name = document.getElementById("reg_name").value;
  const email = document.getElementById("reg_email").value;
  const password = document.getElementById("reg_password").value;

  const res = await fetch("php/register.php", {
    method: "POST",
    headers: { "Content-Type": "application/json" },
    body: JSON.stringify({ name, email, password }),
  });

  const data = await res.json();

  if (data.status === "success") {
    alert("Registration Successful! Please login.");
    window.location.href = "login.html";
  } else {
    document.getElementById("registerMsg").innerText = data.message;
  }
});
