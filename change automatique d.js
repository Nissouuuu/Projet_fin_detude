document.addEventListener("DOMContentLoaded", function() {
    const today = new Date();
    const currentDay = today.getDate();
    const currentMonth = today.getMonth() + 1; // Les mois sont de 0 à 11, donc ajouter 1
    const currentYear = today.getFullYear();

    const daySelect = document.getElementById("dday");
    const monthSelect = document.getElementById("dmonth");
    const yearSelect = document.getElementById("dyear");

    // Remplir les jours
    for (let day = 1; day <= 31; day++) {
        const option = document.createElement("option");
        option.value = day;
        option.textContent = day;
        if (day === currentDay) {
            option.selected = true;
        }
        daySelect.appendChild(option);
    }

    // Remplir les mois
    const monthNames = ["jan", "fév", "mar", "avr", "mai", "jun", "juil", "août", "sep", "oct", "nov", "déc"];
    for (let month = 1; month <= 12; month++) {
        const option = document.createElement("option");
        option.value = month;
        option.textContent = monthNames[month - 1];
        if (month === currentMonth) {
            option.selected = true;
        }
        monthSelect.appendChild(option);
    }

    // Remplir les années
    const startYear = 2024;
    const endYear = currentYear; // Vous pouvez ajuster cela pour les années futures si nécessaire
    for (let year = endYear; year >= startYear; year--) {
        const option = document.createElement("option");
        option.value = year;
        option.textContent = year;
        if (year === currentYear) {
            option.selected = true;
        }
        yearSelect.appendChild(option);
    }
});
