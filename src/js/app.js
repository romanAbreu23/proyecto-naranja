let paso = 1;

document.addEventListener('DOMContentLoaded', function() {
    iniciarApp();
});

function iniciarApp() {
    mostrarSeccion(); // Muestra y oculta las secciones
    tabs(); // Cambia la sección cuando se presionen los tabs

    consultarAPIPromotores(); // Consulta la API de los promotores en el backend
    consultarAPIAfiliados(); // Consulta la API de los afiliados en el backend

    buscador();
}

function mostrarSeccion() {

    // Ocultar la sección anterior
    const seccionAnterior = document.querySelector('.mostrar');
    if (seccionAnterior) {
        seccionAnterior.classList.remove('mostrar');
    }

    // Seleccionar la sección con el paso...
    const pasoSelector = `#paso-${paso}`;
    const seccion = document.querySelector(pasoSelector);
    seccion.classList.add('mostrar');

    // Quita la clase 'actual' al tab anterior
    const tabAnterior = document.querySelector('.actual');
    if (tabAnterior) {
        tabAnterior.classList.remove('actual');
    }

    // Resalta el tab actual
    const tab = document.querySelector(`[data-paso="${paso}"]`);
    tab.classList.add('actual');
}

function tabs() {
    const botones = document.querySelectorAll('.tabs button');

    botones.forEach( boton => {
        boton.addEventListener('click', function(e) {
            paso = parseInt(e.target.dataset.paso);

            mostrarSeccion();
        });
    });
}

function buscador() {

    document.addEventListener('keyup', (e) => {
    
        if (e.target.matches('#buscador')) {
            document.querySelectorAll(".resultado").forEach(promotor => {
                promotor.textContent.toLowerCase().includes(e.target.value.toLowerCase()) ? 
                promotor.classList.remove("filter") : 
                promotor.classList.add("filter")
            })
        } else if(e.target.matches('#buscador-tabla')) {
            document.querySelectorAll(".resultado-tabla").forEach(promotor => {
                promotor.textContent.toLowerCase().includes(e.target.value.toLowerCase()) ? 
                promotor.classList.remove("filter") : 
                promotor.classList.add("filter")
            })
        }
    });
}

async function consultarAPIPromotores() {
    try {
        const url = `${location.origin}/api/promotores`;
        const resultado = await fetch(url);
        const promotores = await resultado.json();
        
        mostrarPromotores(promotores);

    } catch (error) {
        console.log(error);
    }
}
async function consultarAPIAfiliados() {
    try {
        const url = `${location.origin}/api/afiliados`;
        const resultado = await fetch(url);
        const afiliados = await resultado.json();
        
        mostrarAfiliados(afiliados);

    } catch (error) {
        console.log(error);
    }
}

function mostrarPromotores(promotores) {
    promotores.forEach( promotor => {
        const { id_promotor, nombre } = promotor;

        const nombrePromotor = document.createElement('P');
        nombrePromotor.classList.add('nombre-promotor');
        nombrePromotor.textContent = nombre;

        const promotorA = document.createElement('A');
        promotorA.classList.add('promotor');
        promotorA.classList.add('resultado');
        promotorA.href = `${location.origin}/afiliados?promotor=${nombre}`;
        promotorA.dataset.idPromotor = id_promotor;

        promotorA.appendChild(nombrePromotor);

        document.querySelector('#promotores').appendChild(promotorA);
    });
}

function mostrarAfiliados(afiliados) {
    afiliados.forEach( afiliado => {
        const { 
            id_afiliado, estatus, nombres, ap, am, calle, numext, numint, localidad,
            telefono, fuente, promotor, seccional, coordz, seccion, ruta, padrino
        } = afiliado;

        const estatusAfiliado = document.createElement('TD');
        estatusAfiliado.classList.add('afiliado');
        estatusAfiliado.textContent = estatus ? estatus : '//';
        const nombreAfiliado = document.createElement('TD');
        nombreAfiliado.classList.add('afiliado');
        nombreAfiliado.textContent = nombres ? nombres : '//';
        const apAfiliado = document.createElement('TD');
        apAfiliado.classList.add('afiliado');
        apAfiliado.textContent = ap ? ap : '//';
        const amAfiliado = document.createElement('TD');
        amAfiliado.classList.add('afiliado');
        amAfiliado.textContent = am ? am : '//';
        const calleAfiliado = document.createElement('TD');
        calleAfiliado.classList.add('afiliado');
        calleAfiliado.textContent = calle ? calle : '//';
        const numextAfiliado = document.createElement('TD');
        numextAfiliado.classList.add('afiliado');
        numextAfiliado.textContent = numext ? numext : '//';
        const numintAfiliado = document.createElement('TD');
        numintAfiliado.classList.add('afiliado');
        numintAfiliado.textContent = numint ? numint : '//';
        const localidadAfiliado = document.createElement('TD');
        localidadAfiliado.classList.add('afiliado');
        localidadAfiliado.textContent = localidad ? localidad : '//';
        const telefonoAfiliado = document.createElement('TD');
        telefonoAfiliado.classList.add('afiliado');
        telefonoAfiliado.textContent = telefono ? telefono : '//';
        const fuenteAfiliado = document.createElement('TD');
        fuenteAfiliado.classList.add('afiliado');
        fuenteAfiliado.textContent = fuente ? fuente : '//';
        const promotorAfiliado = document.createElement('TD');
        promotorAfiliado.classList.add('afiliado');
        promotorAfiliado.textContent = promotor ? promotor : '//';
        const seccionalAfiliado = document.createElement('TD');
        seccionalAfiliado.classList.add('afiliado');
        seccionalAfiliado.textContent = seccional ? seccional : '//';
        const coordzAfiliado = document.createElement('TD');
        coordzAfiliado.classList.add('afiliado');
        coordzAfiliado.textContent = coordz ? coordz : '//';
        const seccionAfiliado = document.createElement('TD');
        seccionAfiliado.classList.add('afiliado');
        seccionAfiliado.textContent = seccion ? seccion : '//';
        const rutaAfiliado = document.createElement('TD');
        rutaAfiliado.classList.add('afiliado');
        rutaAfiliado.textContent = ruta ? ruta : '//';
        const padrinoAfiliado = document.createElement('TD');
        padrinoAfiliado.classList.add('afiliado');
        padrinoAfiliado.textContent = padrino ? padrino : '//';

        const afiliadoTR = document.createElement('TR');
        afiliadoTR.classList.add('resultado-tabla');
        afiliadoTR.dataset.idPromotor = id_afiliado;

        afiliadoTR.appendChild(estatusAfiliado);
        afiliadoTR.appendChild(nombreAfiliado);
        afiliadoTR.appendChild(apAfiliado);
        afiliadoTR.appendChild(amAfiliado);
        afiliadoTR.appendChild(calleAfiliado);
        afiliadoTR.appendChild(numextAfiliado);
        afiliadoTR.appendChild(numintAfiliado);
        afiliadoTR.appendChild(localidadAfiliado);
        afiliadoTR.appendChild(telefonoAfiliado);
        afiliadoTR.appendChild(fuenteAfiliado);
        afiliadoTR.appendChild(promotorAfiliado);
        afiliadoTR.appendChild(seccionalAfiliado);
        afiliadoTR.appendChild(coordzAfiliado);
        afiliadoTR.appendChild(seccionAfiliado);
        afiliadoTR.appendChild(rutaAfiliado);
        afiliadoTR.appendChild(padrinoAfiliado);

        document.querySelector('#afiliados').appendChild(afiliadoTR);
    });
}