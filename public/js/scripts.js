var selecciones = [];
var cantidadTotal = 0;

// Función para agregar una selección
/**
* Adds a selection to the user's list.
* Validates that key is a string and price is a number.
* Updates the selected options, total amount, and total input.
* @param {string} key - The key of the selection.
* @param {number} price - The price of the selection.
*/
function addSelection(key, price) {
 // Validar que los parámetros sean válidos
 if (typeof key !== 'string' || isNaN(price)) {
   console.error("Parámetros inválidos para addSelection: key debe ser una cadena y price debe ser un número.");
   return;
 }

 // Crear una nueva selección y agregarla a la lista
 var seleccion = {
   key: key,
   price: price
 };
 selecciones.push(seleccion);

 // Actualizar las opciones seleccionadas y la cantidad total
 updateSelectedOptions();
 updateTotalAmount();
 updateTotalInput(); // Actualizar el valor oculto del formulario
}

// Función para alternar la selección de una opción
/**
* Toggles the selection of an option.
* Determines the current page, deselecting all options if on page 2 or 4.
* Updates the selected class, price, and total amount.
* @param {string} key - The key of the option.
* @param {number} price - The price of the option.
*/
function toggleSelected(key, price) {
    var buttonElement = document.getElementById("myButton" + key);

    // Determinar la página actual
    var currentPage = getCurrentPage();

    // Si la página actual es la primera o la cuarta, deseleccionar todas las opciones antes de seleccionar la nueva
    if (currentPage === 2 || currentPage === 4) {
      // Deseleccionar todas las opciones
      selecciones.forEach(function(seleccion) {
        var oldButtonElement = document.getElementById("myButton" + seleccion.key);
        oldButtonElement.classList.remove("selected");
        cantidadTotal -= seleccion.price;
      });

      // Limpiar la lista de selecciones
      selecciones = [];
    }

    // Alternar la clase selected
    var isSelected = buttonElement.classList.toggle("selected");

    // Obtener el precio
    var price = parseFloat(price);

    if (isSelected) {
      // Si la opción se selecciona, agregar el precio al total
      cantidadTotal += price;

      // Limpiar la lista de selecciones y agregar la nueva selección
      selecciones = [{ key: key, price: price }];

      // Actualizar las opciones seleccionadas
      updateSelectedOptions();

      // Actualizar el total
      updateTotalAmount();
    } else {
      // Si la opción se deselecciona, restar el precio del total
      cantidadTotal -= price;

      // Eliminar la selección
      removeSelection(key);
    }

    // Actualizar la cantidad total en el DOM
    updateTotalAmount();
  }

// Función para actualizar las opciones seleccionadas
/**
* Updates the selected options in the DOM.
*/
function updateSelectedOptions() {
    const selectedOptionsElement = document.getElementById("selectedOptions");
    if (selectedOptionsElement) {
      selectedOptionsElement.innerHTML = "Selected options: " + selecciones.join(", ");
    }
  }

// Función para calcular y mostrar el total
/**
* Updates and displays the total amount.
*/
function updateTotalAmount() {
    var totalAmountElements = [document.getElementById("totalAmountValue"), document.getElementById("headerTotalAmount")];

    totalAmountElements.forEach(function(element) {
      element.innerText = formatPrice(cantidadTotal) + " MXN";
    });
  }

// Función para formatear el precio
function formatPrice(price) {
    return price.toFixed(2).replace(/\B(?=(\d{3})+(?!\d))/g, ",");
  }

// Función para eliminar una selección
function removeSelection(key) {
  selecciones = selecciones.filter(function(seleccion) {
    return seleccion.key !== key;
  });
  updateSelectedOptions();
  updateTotalInput(); // Actualizar el valor oculto del formulario
}

// Función para actualizar el valor de las selecciones en el campo oculto del formulario
function updateTotalInput() {
  var selections = selecciones.map(function(selection) {
    return selection.key;
  });
  var selectionsString = selections.join(',');
  document.getElementById("totalInput").value = selectionsString;
}

// Función para obtener la página actual
function getCurrentPage() {
  // Lógica para determinar la página actual (puedes ajustar según tu estructura de URL o lógica de navegación)
  var path = document.location.pathname;
  switch (path) {
    case "/home":
        return 1;
    case "/page-web/panel2":
      return 2;
    case "/page-web/panel3":
      return 3;
    case "/page-web/panel4":
      return 4;
    case "/page-web/panel5":
      return 5;
    default:
      return -1; // Página no reconocida
  }
}

document.addEventListener('DOMContentLoaded', function () {
    const helpSelects = document.querySelectorAll('.help-select');

    helpSelects.forEach((helpSelect, index) => {
      const detailsContainer = helpSelect.querySelector('.details-container');

      helpSelect.addEventListener('click', function () {
        // Ocultar todas las secciones de detalles
        helpSelects.forEach((select) => {
          const container = select.querySelector('.details-container');
          container.style.display = 'none';
        });

        // Mostrar o ocultar la sección de detalles actual
        if (detailsContainer.style.display === 'flex') {
          detailsContainer.style.display = 'none';
        } else {
          detailsContainer.style.display = 'flex';
        }
      });
    });
  }); // Added semicolon here

function expandirColumna(columna) {
    var tabla = document.getElementById("servicios");
    for (var i = 0; i < tabla.rows.length; i++) {
      var celda = tabla.rows[i].cells[columna];
      // Aquí puedes agregar lógica para expandir o contraer la celda
      // por ejemplo, mostrar u ocultar contenido.
    }
  }

  window.addEventListener("load", function() {
    // Define el mapeo de rutas a pasos
    const routeToStep = {
        "/home": 'Paso 1',
        "/page-web/panel2": '2/6',
        "/page-web/panel3": '3/6',
        "/page-web/panel4": '4/6',
        "/page-web/panel5": '5/6',
        "/page-web/panel6": '6/6'
    };

    // Obtiene la ruta actual
    var currentPage = window.location.pathname;

    // Determina el paso actual basado en la ruta actual
    var currentStep = routeToStep[currentPage] || 'Paso 1'; // Asegúrate de que currentStep sea una cadena en todos los casos

    // Actualiza la visualización del paso actual y la barra de progreso
    actualizarPasoActual(currentStep);
    actualizarBarraDeProgreso(currentStep);
});

function actualizarPasoActual(currentStep) {
    var pasoActual = document.getElementById("current-step");
    if (pasoActual) {
        pasoActual.textContent = currentStep + "";
    }
}

const progressBar = document.getElementById("progress-bar");

function actualizarBarraDeProgreso(currentStep) {
    const pasoNumerico = parseInt(currentStep.split('/')[0]);
    const maxSteps = 6; // Número total de pasos
    progressBar.value = (pasoNumerico / maxSteps) * 100;
}


document.querySelectorAll(".toggle-button.helpme-choose").forEach(function(button) {
  button.addEventListener("click", function() {
      var targetId = this.getAttribute("data-target");
      var acordeon = document.getElementById("acordeon" + targetId);

      if (acordeon.style.display === "none") {
          acordeon.style.display = "block";
      } else {
          acordeon.style.display = "none";
      }
  });
});


function enviarFormulario() {
    var form = document.querySelector('form');
    var checkboxes = document.querySelectorAll('input[name="selectedOptions[]"]:checked');

    checkboxes.forEach(function(checkbox) {
        var hiddenInput = document.createElement('input');
        hiddenInput.type = 'hidden';
        hiddenInput.name = 'selectedOptions[]';
        hiddenInput.value = checkbox.value;
        form.appendChild(hiddenInput);
    });

    form.submit();
}



// Script para e header
function saveAndCloseQuotation() {
    // Obtener los datos del formulario
    var formData = $('#quoteForm').serialize();

    // Realizar la solicitud AJAX
    $.ajax({
        url: '/save-quotes', // URL de la acción del controlador Laravel
        type: 'POST',
        data: formData,
        success: function(response) {
            // Manejar la respuesta del servidor si es necesario
            console.log(response);
        },
        error: function(xhr, status, error) {
            // Manejar errores de la solicitud AJAX si es necesario
            console.error(error);
        }
    });
}




