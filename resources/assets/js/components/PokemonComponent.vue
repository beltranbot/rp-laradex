<template>
	<div class="row">
        <spinner v-show="loading"/>
		<div class="col-sm" v-for="pokemon in pokemons" v-bind:key="pokemon.id">
			<div class="card text-center" style="width: 18rem; margin-top: 70px;">
                <img style="height: 100px; width: 100px; background-color: #EFEFEF; margin: 20px;"
                    class="card-img-top rounded-circle mx-auto d-block"
                    v-bind:src="pokemon.picture"
                    alt="">
                <div class="card-body">
                    <h5 class="card-title">{{ pokemon.name }}</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="/trainers/" class="btn btn-primary">Ver más...</a>
                </div>
			</div>
		</div>
	</div>
</template>

<script>
import EventBus from '../event-bus'
export default {
    data() {
        return {
            pokemons: [],
            loading: true
        };
    },
    created () {
        EventBus.$on('pokemon-added', data => {
            this.pokemons.push(data)
        })
    }, 
    async mounted() {
        try {
            let response = await axios.get('/pokemon')
            this.pokemons = response.data
            this.loading = false
        } catch (error) {
            this.loading = false
            console.log('error', error)
            
        }
    }
};
</script>