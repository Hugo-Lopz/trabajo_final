import { createApp, h } from 'vue'; // Importa la función h
import ProductosStock from '../ficheros_vue/ProductosStock.vue';
import EstrellasValoracion from '../ficheros_vue/EstrellasValoracion.vue';
import ContadorUnidadesVendidas from '../ficheros_vue/ContadorUnidadesVendidas.vue'

if(document.getElementById('stock') != null) {
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
}

const estrellas = createApp({});
estrellas.component('estrellas-valoracion', EstrellasValoracion);
estrellas.mount('#estrellas');

const unidadesVendidas = createApp({});
unidadesVendidas.component('counter', ContadorUnidadesVendidas);
unidadesVendidas.mount('#unidadesVendidas');
