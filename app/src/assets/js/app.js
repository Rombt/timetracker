import './modules/functions.js';
import './modules/dynamic_adapt.js';
import './modules/popup.js';
import './modules/spoiler.js';
import './modules/tabs.js';
import './modules/arrowsInputNumberStyle.js';
import './modules/HorizontalMenu.js';
// import './modules/sliders.js';

function displayErrors(parentBlock, data) {
  const errorBox = document.createElement('div');
  errorBox.classList.add('font-text', 'error-box');
  errorBox.id = 'error-box';
  parentBlock.append(errorBox);

  let htmlErrStr = '';

  Object.values(data).forEach(str => {
    htmlErrStr += `<p>${str}</p>`;
  });

  if (errorBox) {
    errorBox.innerHTML = htmlErrStr;
    errorBox.style.display = 'block';

    document.addEventListener('keydown', e => {
      if (e.key === 27 || e.keyCode === 27) {
        errorBox.remove();
      }
    });

    document.addEventListener('click', e => {
      if (!errorBox.contains(e.target)) {
        errorBox.remove();
      }
    });
  }
}
window.displayErrors = displayErrors;
