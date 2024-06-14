document
  .getElementById("addNewsForm")
  .addEventListener("submit", function (event) {
    event.preventDefault();

    const newsTitle = document.getElementById("newsTitle").value;

    const formData = new FormData();
    formData.append("news_title", newsTitle);

    fetch("addnews.php", {
      method: "POST",
      body: formData,
    })
      .then((response) => response.json())
      .then((data) => {
        if (data.error) {
          console.error("Error:", data.error);
        } else {
          // Add new option to the dropdown
          const newsSelect = document.getElementById("newsSelect");
          const newOption = document.createElement("option");
          newOption.value = data.id;
          newOption.text = data.title;
          newsSelect.appendChild(newOption);

          // Close the modal
          const addNewsModal = bootstrap.Modal.getInstance(
            document.getElementById("addNewsModal")
          );
          addNewsModal.hide();

          // Reset form
          document.getElementById("addNewsForm").reset();
        }
      })
      .catch((error) => console.error("Error:", error));
  });
