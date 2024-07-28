function setupCalendar() {
  const today = new Date();
  const calendarDays = Array.from(
    { length: 6 },
    (v, i) =>
      new Date(today.getFullYear(), today.getMonth(), today.getDate() + i)
  );

  const calendarElement = document.querySelector("#calendar");
  calendarElement.innerHTML = "";

  const options = { weekday: "long", day: "numeric", month: "long" };

  calendarDays.forEach((day) => {
    const card = document.createElement("label");
    card.className = "date-card";

    const input = document.createElement("input");
    input.type = "radio";
    input.name = "calendarDate";
    input.id = `date-${day.toDateString()}`;
    input.value = day.toDateString();
    input.className = "card-input-element";
    input.style.display = "none";
    input.setAttribute("readonly", "readonly");

    card.appendChild(input);

    const formattedDate = day.toLocaleDateString("fr-FR", options);
    const parts = formattedDate.split(" ");
    const customFormattedDate = `${parts[2]} ${parts[0]} ${parts[1]}`;
    card.append(customFormattedDate);

    if (day.toDateString() === today.toDateString()) {
      const textNode = document.createTextNode(" Aujourd'hui");
      const span = document.createElement("span");
      span.classList.add("today");
      span.appendChild(textNode);
      card.appendChild(span);
    }

    card.setAttribute("for", input.id);
    calendarElement.appendChild(card);

    input.addEventListener("change", function () {
      document.querySelectorAll(".date-card").forEach(function (card) {
        card.style.border = "1px solid #ccc";
      });
      if (this.checked) {
        card.style.border = "2px solid #86198f";
      }
    });
  });
}

document.addEventListener("DOMContentLoaded", setupCalendar);
setInterval(setupCalendar, 60000);

// function setupTime() {
//   const currentDate = new Date();
//   const startHour = 11; // Start at 11 AM
//   const endHour = 21; // End at 9 PM (21 in 24-hour format)
//   const hoursRange = endHour - startHour;

//   const appointmentTimes = Array.from(
//     { length: hoursRange + 1 },
//     (_, i) =>
//       new Date(
//         currentDate.getFullYear(),
//         currentDate.getMonth(),
//         currentDate.getDate(),
//         startHour + i
//       )
//   );

//   const timeElement = document.querySelector("#timeAppointment");
//   timeElement.innerHTML = ""; // Clear previous entries

//   appointmentTimes.forEach((time) => {
//     const card = document.createElement("label");
//     card.className = "date-card";

//     const input = document.createElement("input");
//     input.type = "radio";
//     input.name = "calendarTime";
//     input.id = `time-${time.getHours()}`;
//     input.value = time.toISOString(); // Storing ISO string as value, useful for submission
//     input.className = "card-input-element";
//     input.style.display = "none"; // Keeping input hidden as per original design

//     card.appendChild(input);
//     // Display hour in 12-hour format with AM/PM
//     card.append(
//       time.toLocaleTimeString("en-US", { hour: "numeric", hour12: true })
//     );

//     // Set 'for' attribute for label to work properly with the hidden input
//     card.setAttribute("for", input.id);

//     input.addEventListener("change", function () {
//       document.querySelectorAll(".date-card").forEach(function (card) {
//         card.style.border = "1px solid #ccc"; // Reset borders for all cards
//       });
//       card.style.border = "2px solid #86198f"; // Highlight selected card
//     });

//     timeElement.appendChild(card);
//   });
// }
