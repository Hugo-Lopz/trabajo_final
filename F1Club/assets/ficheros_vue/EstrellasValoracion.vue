<template>
    <div class="estrellas-valoracion">
      <i v-for="n in 5" :key="n" class="bi" :class="starClass(n)"></i>
    </div>
</template>
  
  <script>
  export default {
    props: {
      rating: {
        type: Number,
        required: true
      }
    },
    methods: {
      starClass(n) {
        return n <= Math.round(this.rating) ? 'bi-star-fill' : 'bi-star';
      }
    }
  };
  </script>