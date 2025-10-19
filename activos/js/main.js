document.getElementById("contactForm")?.addEventListener("submit", async (e) => {
  e.preventDefault();
  const formData = new FormData(e.target);

  const response = await fetch("api/save_contact.php", {
    method: "POST",
    body: formData,
  });

  const text = await response.text();
  alert(text);
  e.target.reset();
});
