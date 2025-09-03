const menuItems = document.querySelectorAll('#menu-left li');
const renderTemplate = document.getElementById('render-template');

let vistaActual = null;

menuItems.forEach(item => {
  item.addEventListener('click', () => {
    const pageId = item.getAttribute('data-page');
    const template = document.getElementById(pageId);

    if (!template) return;

    // Eliminar vista anterior
    if (vistaActual) {
      renderTemplate.removeChild(vistaActual);
    }

    const clone = template.content.cloneNode(true);
    renderTemplate.appendChild(clone);
    vistaActual = renderTemplate.lastElementChild;

    menuItems.forEach(el => el.classList.remove('active'));
    item.classList.add('active');

  });
});

// Mostrar vista por defecto al cargar
const defaultTemplate = document.getElementById('eeg');
if (defaultTemplate) {
  const clone = defaultTemplate.content.cloneNode(true);
  renderTemplate.appendChild(clone);
  vistaActual = renderTemplate.lastElementChild;
}
