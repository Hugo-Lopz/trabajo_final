<template>
    <div> <i class="bi bi-box-seam-fill"></i> <span>Total vendido: </span>{{ cuentaActual }} </div>
</template>
<script>
export default {
  props: {
    unidadesVendidas: {
      type: Number,
      required: true
    }
  },
  data() {
    return {
      cuentaActual: 0
    };
  },
  mounted() {
    this.animacionContador();
  },
  methods: {
    animacionContador() {
      const duration = 8000; // Duración de la animación en milisegundos
      const start = performance.now()+1; // Devuelve un timestamp de alta resolución en milisegundos
      const endValue = this.unidadesVendidas;

      const updateCounter = (timestamp) => {
        const progress = Math.min((timestamp - start) / duration, 1);
        this.cuentaActual = Math.floor(progress * endValue);
        if (progress < 1) {
          requestAnimationFrame(updateCounter);
        }
      };

      requestAnimationFrame(updateCounter);
    }
  }
};
</script>