function edit() {
    document.querySelectorAll('input, select').forEach(el => el.disabled = false);
    document.getElementById('saveBtn').disabled = false;
}

function saveChanges() {
    document.querySelectorAll('input, select').forEach(el => el.disabled = true);
    document.getElementById('saveBtn').disabled = true;
    alert("Changes saved");
}

function previousPage() {
  window.location.href = '../View/adminDashboard.php';
}
