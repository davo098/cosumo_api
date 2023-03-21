// seleccionar elementos del html
const contenerdor = document.getElementById('contenerdor')


// crear funciones 

const obtenerUrl = () => {
    // recoger la url que viene como parametro
    let url = window.location.search;
    const urlParametros = new URLSearchParams(url);

    let urlDetallePokemon = urlParametros.get('url')
    return urlDetallePokemon;
}

// realizar el llamado de la api 
const obtenerDetallePokemon = async (url) => {
    const respuestaApi = await axios.get(url);
    console.log(respuestaApi);
    mostrarDetallePokemosn(respuestaApi.data)
}
// mostrar los datos en pantalla
const mostrarDetallePokemosn = (datos) => {
    contenerdor.innerHTML = `<div class="pokemon-habilidades">
                                <p>${datos.name}</p>
                                <ul>
                                    <li>${datos.abilities[0].ability.name}</li>
                                    <li>${datos.abilities[1].ability.name}</li>
                                </ul>
                            </div>
                            <div class="pokemon-img">
                                <img src="${datos.sprites.front_default}" alt="${datos.name}">
                            </div>`;
}

// eventos de los elementos seleccionado


// ejecutar las funciones creadas
let urlPeticion = obtenerUrl();

obtenerDetallePokemon(urlPeticion);