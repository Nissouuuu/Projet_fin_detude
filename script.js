document.addEventListener('DOMContentLoaded', function() {
    const casSelect = document.getElementById('cas');
    const champsBloques = document.getElementById('champs-bloques');
    const jourSelect = document.getElementById('dayp');
    const moisSelect = document.getElementById('monthp');
    const anneeSelect = document.getElementById('yearp');

    casSelect.addEventListener('change', function() {
        if (casSelect.value === 'x') {
            // Désactiver les champs et listes
            champsBloques.querySelectorAll('input').forEach(input => {
                input.disabled = true;
            });
            jourSelect.disabled = true;
            moisSelect.disabled = true;
            anneeSelect.disabled = true;
        } else {
            // Activer les champs et listes
            champsBloques.querySelectorAll('input').forEach(input => {
                input.disabled = false;
            });
            jourSelect.disabled = false;
            moisSelect.disabled = false;
            anneeSelect.disabled = false;
        }
    });
});
