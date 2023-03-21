const contenedor = document.getElementById('contenedor');
const botones = document.getElementById('botones');

const URL_BASE = 'https://pokeapi.co/api/v2/pokemon';

const obtenerPokemonApi = async (url) => {
    try {
        const response = await axios.get(url);
        mostrarPokemon(response.data.results)
        funcionalidadBotones(response)
    } catch (error) {
        console.log(error);
    }
}

const mostrarPokemon = (pokemons) => {
    contenedor.innerHTML = "";
    for (const pokemon of pokemons) {
        contenedor.innerHTML += `<div class="card-pokemon">
                            <h3 class="name-pokemon" url="${pokemon.url}">${pokemon.name}</h3>
                        </div>`;
    }
}

const funcionalidadBotones = (resp) => {
    botones.innerHTML = "";
    if (resp.data.previous === undefined || resp.data.previous === null) {
        botones.innerHTML = `<button value="${resp.data.next}">Siguiente</button>`;
    } else if (resp.data.next === undefined || resp.data.next === null) {
        botones.innerHTML = `<button value="${resp.data.previous}">Atras</button>`;
    } else {
        botones.innerHTML = `<button value="${resp.data.previous}">Atras</button>
                            <button value="${resp.data.next}">Siguiente</button>`;
    }
}

// llamado de eventos
contenedor.addEventListener('click', (e) => {
    let elemento = e.target.children[0];
    let url = elemento.getAttribute('url');
    window.location.href = `detallePokemon.html?url=${url}`;
    console.log(elemento.getAttribute('url'))
})

botones.addEventListener('click', (e) => {
    console.log(e)
    let url = e.target.value;

    obtenerPokemonApi(url)

})

// llamado de funciones
obtenerPokemonApi(URL_BASE);