<template>
  <h6 :class="{ 'rojo': noHayStock, 'naranja': quedanPocas }">
  <i v-if="noHayStock || quedanPocas" class="bi bi-exclamation-triangle"></i>
      {{ stockMessage }}
  </h6>
</template>

<script>
export default {
  props: ['stock'],
  computed: {
      noHayStock() {
          return this.stock === 0;
      },
      quedanPocas() {
          return this.stock > 0 && this.stock < 5;
      },
      stockMessage() {
          if (this.noHayStock) {
              return "No hay stock";
          } else if (this.quedanPocas) {
              return "Quedan pocas unidades en stock";
          }
      }
  }
};
</script>

<style>
.rojo {
  color: red !important;
}

.naranja {
  color: orange !important;
}
</style>
