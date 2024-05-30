import { createApp, h } from 'vue'; // Importa la función h
import ProductosStock from '../ficheros_vue/ProductosStock.vue';
import EstrellasValoracion from '../ficheros_vue/EstrellasValoracion';

const stock = document.getElementById('stock').getAttribute('data-stock');

createApp({
    data() {
        return {
            stock: parseInt(stock)
        }
    },
    render() {
        return h(ProductosStock, {
            stock: this.stock
        });
    }
}).mount('#stock');

const estrellas = createApp({});
estrellas.component('estrellas-valoracion', EstrellasValoracion);
estrellas.mount('#estrellas');
