document.addEventListener("DOMContentLoaded", function () {
  const customerForm = document.getElementById("customer-details-form");

  // const swissPhoneRegex = /^\+41[1-9][0-9]{8}$/;
  const swissPhoneRegex = /^[1-9]/;
  const emailRegex =
    /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  const nameRegex = /^[A-Za-zÀ-ÖØ-öø-ÿ' -]+$/;

  const inputs = {
    firstName: document.getElementById("first-name"),
    lastName: document.getElementById("last-name"),
    email: document.getElementById("email"),
    phone: document.getElementById("phone"),
  };

  function validateInput(input, regex) {
    const errorElement = input.nextElementSibling;
    if (!regex.test(input.value.trim())) {
      errorElement.innerHTML = "Entrée invalide.";
      input.classList.remove("valid-input");
      input.classList.add("invalid-input");
    } else {
      errorElement.innerHTML = "";
      input.classList.remove("invalid-input");
      input.classList.add("valid-input");
    }
  }

  function saveToLocalStorage(input) {
    localStorage.setItem(input.id, input.value);
  }

  function loadFromLocalStorage(input) {
    if (localStorage.getItem(input.id)) {
      input.value = localStorage.getItem(input.id);
      validateInput(input, eval(input.dataset.regex));
    }
  }

  Object.keys(inputs).forEach((key) => {
    const input = inputs[key];
    input.dataset.regex =
      key === "firstName" || key === "lastName"
        ? "nameRegex"
        : key === "email"
        ? "emailRegex"
        : "swissPhoneRegex";
    input.addEventListener("input", () => {
      validateInput(input, eval(input.dataset.regex));
      saveToLocalStorage(input);
    });
    loadFromLocalStorage(input);
  });

  customerForm.addEventListener("submit", function (e) {
    let isValid = true;
    Object.keys(inputs).forEach((key) => {
      const input = inputs[key];
      if (!eval(input.dataset.regex).test(input.value.trim())) {
        input.classList.add("invalid-input");
        isValid = false;
      } else {
        input.classList.remove("invalid-input");
        input.classList.add("valid-input");
      }
    });

    if (!isValid) {
      e.preventDefault();
    } else {
      Object.keys(inputs).forEach((key) => {
        localStorage.removeItem(inputs[key].id);
      });
    }
  });
});
