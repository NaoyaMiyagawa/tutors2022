const nicoGoodId = 1;
const nicoOkId = 2;
const nicoBadId = 3;
const nicoIcons = {
  [nicoGoodId]: '<span class="el_nicoGood iconify" data-icon="gg:smile-mouth-open"></span>',
  [nicoOkId]: '<span class="el_nicoOk iconify" data-icon="fluent:emoji-smile-slight-24-regular"></span>',
  [nicoBadId]: '<span class="el_nicoBad iconify" data-icon="gg:smile-sad"></span>',
};

const calendarCells = document.querySelectorAll('.bl_nicoCale td');

calendarCells.forEach(function (cell) {
  cell.addEventListener('click', function (event) {
    const cell = event.currentTarget;
    const cellBody = cell.querySelector('.bl_nicoCale_cellBody');
    cellBody.innerHTML = nicoIcons[getSelectedNicoId()];
  });
});

function getSelectedNicoId() {
  const nicos = document.querySelectorAll('.js_nicoSelect');
  let nicoId;

  nicos.forEach(function (nico) {
    if (nico.checked) {
      nicoId = Number(nico.dataset.nicoId);
    }
  });

  return nicoId;
}
