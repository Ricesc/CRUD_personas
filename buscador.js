const searchInput = document.getElementById('searchInput');
const filterSelect = document.getElementById('filterSelect');
const table = document.querySelector('.table');

searchInput.addEventListener('keyup', function(event) {
  applyFilter();
});

filterSelect.addEventListener('change', function(event) {
  applyFilter();
});

function applyFilter() {
  const searchTerm = searchInput.value.toLowerCase();
  const selectedColumn = filterSelect.value.toLowerCase();
  const rows = table.querySelectorAll('tbody tr');

  Array.from(rows).forEach(function(row) {
    const cells = row.getElementsByTagName('td');
    let found = false;

    Array.from(cells).forEach(function(cell, index) {
      if (index !== cells.length - 2 && index !== cells.length - 1) { // Excluimos las últimas dos columnas (EDT y DEL)
        if ((selectedColumn === '' || selectedColumn === `columna ${index + 1}`) && cell.innerText.toLowerCase().includes(searchTerm)) {
          found = true;
        }
      }
    });

    if (found) {
      row.style.display = 'table-row';
    } else {
      row.style.display = 'none';
    }
  });
}
