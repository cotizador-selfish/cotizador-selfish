import './bootstrap';

// Lista para almacenar las selecciones del usuario
var selecciones = [];
var cantidadTotal = 0;

// Función para agregar una selección
function addSelection(key, price) {
  // Validar que los parámetros sean válidos
  if (typeof key !== 'string' || isNaN(price)) {
    console.error("Parámetros inválidos para addSelection: key debe ser una cadena y price debe ser un número.");
    return;
  }
  var seleccion = {
    key: key,
    price: price
  };
  selecciones.push(seleccion);
  updateSelectedOptions();
  updateTotalAmount();
  updateTotalInput(); // Actualizar el valor oculto del formulario
}

// Función para alternar la selección de una opción
function toggleSelected(key, price) {
  var buttonElement = document.getElementById("myButton" + key);

  // Determinar la página actual
  var currentPage = getCurrentPage();

  // Si la página actual es la primera o la cuarta, deseleccionar todas las opciones antes de seleccionar la nueva
  if (currentPage === 1 || currentPage === 3) {
    // Deseleccionar todas las opciones
    selecciones.forEach(function(seleccion) {
      var oldButtonElement = document.getElementById("myButton" + seleccion.key);
      oldButtonElement.classList.remove("selected");
      cantidadTotal -= seleccion.price;
    });

    // Validar que el botón existe
    if (!buttonElement) {
      console.error("Botón no encontrado para la clave:", key);
      return;
    }
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
    updateSelectedOptions();
  } else {
    // Si la opción se deselecciona, restar el precio del total
    cantidadTotal -= price;
    removeSelection(key);
  }

  // Actualizar la cantidad total en el DOM
  updateTotalAmount();
}

// Función para actualizar las opciones seleccionadas
function updateSelectedOptions() {
  var selectedOptionsElement = document.getElementById("selectedOptions");
  selectedOptionsElement.innerHTML = "";

  selecciones.forEach(function(seleccion) {
    var optionElement = document.createElement("div");
    optionElement.textContent = "Producto " + seleccion.key + " - " + formatPrice(seleccion.price) + " MXN";
    selectedOptionsElement.appendChild(optionElement);
  });
}

// Función para calcular y mostrar el total
function updateTotalAmount() {
  var totalAmountElements = document.querySelectorAll("#totalAmountValue, #headerTotalAmount");

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
    case "/panel2/index":
      return 1;
    case "/panel3/index":
      return 2;
    case "/panel4/index":
      return 3;
    case "/panel5/index":
      return 4;
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
  });

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
        "/panel2/index": 2,
        "/panel3/index": 3,
        "/panel4/index": 4,
        "/panel5/index": 5,
        "/panel6/index": 6
    };

    // Obtiene la ruta actual
    var currentPage = window.location.pathname;

    // Determina el paso actual basado en la ruta actual
    var currentStep = routeToStep[currentPage] || 1;

    // Actualiza la visualización del paso actual y la barra de progreso
    actualizarPasoActual(currentStep);
    actualizarBarraDeProgreso(currentStep);
});

function actualizarPasoActual(currentStep) {
    var pasoActual = document.getElementById("current-step");
    if (pasoActual) {
        pasoActual.textContent = currentStep + "/6";
    }
}

function actualizarBarraDeProgreso(currentStep) {
    var totalSteps = 6;
    var porcentajeCompletado = (currentStep / totalSteps) * 100;
    var progressBar = document.getElementById("progress-bar");
    if (progressBar) {
        progressBar.value = porcentajeCompletado;
    }
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

// Script para e header


