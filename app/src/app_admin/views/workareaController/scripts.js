document.addEventListener('DOMContentLoaded', function () {
  let workAreaTable = document.querySelector('#work_area_table');
  let nl_iconEditEntries;

  const editWin = document.querySelector('#editEntry');
  const editWinTitle = editWin.querySelector('.popup__title');

  const fieldHours = editWin.querySelector('#hours');
  const fieldComment = editWin.querySelector('#comment');
  const editEntryForm = editWin.querySelector('#editEntryForm');

  const iconAddEntry = document.querySelector('#iconAddEntry');
  const addEntryForm = document.querySelector('#addEntryForm');
  const addWin = document.querySelector('#addEntry');

  let idEntry;
  let formFieldHours;
  let formFieldComment;
  let entryData;

  addEntryForm.addEventListener('submit', function (e) {
    e.preventDefault();

    const formData = new FormData(addEntryForm);
    const data = Object.fromEntries(formData.entries());

    addWin.classList.remove('open');
    document.querySelector('body').classList.remove('lock');

    const arr_fields = Object.entries(data)
      .filter(([key, value]) => key !== 'user_name')
      .map(([key, value]) => value);

    fetch(addEntryForm.action, {
      method: addEntryForm.method,
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded',
      },
      body: new URLSearchParams(data).toString(),
    })
      .then(response => {
        if (!response.ok) {
          return response.json().then(errorData => {
            displayErrors(workAreaTable, errorData);
            throw new Error('Server responded with an error');
          });
        }
        return response.json();
      })
      .then(data => {
        if (!workAreaTable) {
          location.reload(true);
        }

        const tr = document.createElement('tr');

        arr_fields.push(iconAddEntry.cloneNode(true));
        arr_fields.forEach(field => {
          const td = document.createElement('td');

          if (typeof field === 'string') {
            td.appendChild(document.createTextNode(field));
          } else {
            td.appendChild(field);
          }

          tr.append(td);
        });
        workAreaTable.querySelector('tbody').append(tr);
      })
      .catch(error => {});
  });

  if (workAreaTable) {
    nl_iconEditEntries = workAreaTable.querySelectorAll('.icon-edit-entry');
    nl_iconEditEntries.forEach(iconEditEntry => {
      iconEditEntry.addEventListener('click', e => {
        e.preventDefault();

        const entryRow = e.target.closest('tr');
        formFieldHours = entryRow.querySelector('.hours-field');
        formFieldComment = entryRow.querySelector('.comment-field');

        idEntry = e.target.dataset.entry_id;
        const data = {
          action: 'getEntry',
          entry_id: idEntry,
        };

        fetch(`${window.location.pathname}/editentry`, {
          method: 'POST',
          headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
          },
          body: new URLSearchParams(data).toString(),
        })
          .then(response => {
            if (!response.ok) {
              return response.json().then(errorData => {
                displayErrors(workAreaTable, errorData);
                throw new Error('Server responded with an error');
              });
            }
            return response.json();
          })
          .then(data => {
            entryData = data[0];
            editWinTitle.innerText = `Editing entry ID:  ${entryData.id}`;
            fieldHours.value = entryData.hours;
            fieldComment.value = entryData.comment;
          })
          .catch(error => {});
      });
    });
  }

  editEntryForm.addEventListener('submit', function (e) {
    e.preventDefault();

    const formData = new FormData(editEntryForm);
    const data = Object.fromEntries(formData.entries());
    data.action = 'updateEntry';
    data.entry_id = idEntry;

    formFieldHours.innerText = data.hours;
    formFieldComment.innerText = data.comment;
    editWin.classList.remove('open');
    document.querySelector('body').classList.remove('lock');

    fetch(editEntryForm.action, {
      method: editEntryForm.method,
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded',
      },
      body: new URLSearchParams(data).toString(),
    })
      .then(response => {
        if (!response.ok) {
          return response.json().then(errorData => {
            displayErrors(workAreaTable, errorData);
            throw new Error('Server responded with an error');
          });
        }
        return response.json();
      })
      .then(data => {
        entryData = data[0];
        editWinTitle.innerText = `Editing entry ID:  ${entryData.id}`;
        fieldHours.value = entryData.hours;
        fieldComments.value = entryData.comment;
      })
      .catch(error => {});
  });
});
