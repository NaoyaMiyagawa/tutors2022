const nicoGoodId = 1;
const nicoOkId = 2;
const nicoBadId = 3;
const nicoIcons = {
  [nicoGoodId]: '<span class="el_nicoGood iconify" data-icon="gg:smile-mouth-open"></span>',
  [nicoOkId]: '<span class="el_nicoOk iconify" data-icon="fluent:emoji-smile-slight-24-regular"></span>',
  [nicoBadId]: '<span class="el_nicoBad iconify" data-icon="gg:smile-sad"></span>',
};

const calendarCells = $('.bl_nicoCale td');

calendarCells.on('click', function (event) {
  const $cell = $(event.currentTarget);
  const $cellBody = $('.bl_nicoCale_cellBody', $cell);
  $cellBody.html(nicoIcons[getSelectedNicoId()]);
});

function getSelectedNicoId() {
  const nicos = $('.js_nicoSelect');
  let nicoId;

  nicos.each(function () {
    const $nico = $(this);
    if ($nico.prop('checked')) {
      nicoId = Number($nico.data('nicoId'));
    }
  });

  return nicoId;
}
