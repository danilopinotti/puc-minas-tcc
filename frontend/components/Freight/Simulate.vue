<template>
  <div class="bg-white py-6 sm:py-8 lg:py-12">
    <div class="max-w-screen-lg px-4 md:px-2 mx-auto">
      <div class="grid md:grid-cols-3 gap-5">
        <div class="flex items-center justify-center">
          <div class="rounded-lg overflow-hidden relative">
            <img
              src="/package.png"
              loading="lazy" alt="Simulação de frete"
              class="w-full h-full object-cover object-center p-14"/>
          </div>
        </div>
        <div>
          <div class="mb-2 md:mb-3">
            <span class="inline-block text-gray-500 mb-0.5">Calcule o valor e o tempo estimado do frete</span>
            <h2 class="text-gray-800 text-2xl lg:text-3xl font-bold">Simulação de frete</h2>
          </div>

          <div class="mb-4 md:mb-6 flex flex-wrap">
            <div class="form-control w-full px-1">
              <label class="label">
                <span class="label-text text-lg">Endereço de Origem*</span>
              </label>
              <input type="text"
                     v-model="simulationData.origin"
                     :disabled="isLoading"
                     class="input input-bordered input-md w-full">
            </div>
            <div class="form-control w-full pt-2 px-1">
              <label class="label">
                <span class="label-text text-lg">Endereço de Destino*</span>
              </label>
              <input type="text"
                     v-model="simulationData.destination"
                     :disabled="isLoading"
                     class="input input-bordered input-md w-full">
            </div>
          </div>
          <div class="divider">Pacote</div>
          <div class="mb-4 md:mb-6 flex flex-wrap">
            <div class="form-control w-1/2 px-1">
              <label class="label">
                <span class="label-text text-lg">Altura*</span>
              </label>
              <label class="input-group input-group-md">
                <input type="number"
                       v-model="simulationData.heightCm"
                       :disabled="isLoading"
                       class="input input-bordered input-md w-full">
                <span>cm</span>
              </label>
            </div>
            <div class="form-control w-1/2 px-1">
              <label class="label">
                <span class="label-text text-lg">Largura*</span>
              </label>
              <label class="input-group input-group-md">
                <input type="number"
                       v-model="simulationData.widthCm"
                       :disabled="isLoading"
                       class="input input-bordered input-md w-full">
                <span>cm</span>
              </label>
            </div>
            <div class="form-control pt-2 w-1/2 px-1">
              <label class="label">
                <span class="label-text text-lg">Comprimento*</span>
              </label>
              <label class="input-group input-group-md">
                <input type="number"
                       v-model="simulationData.lengthCm"
                       :disabled="isLoading"
                       class="input input-bordered input-md w-full">
                <span>cm</span>
              </label>
            </div>
            <div class="form-control pt-2 w-1/2 px-1">
              <label class="label">
                <span class="label-text text-lg">Peso*</span>
              </label>
              <label class="input-group input-group-md">
                <input type="number"
                       v-model="simulationData.weightG"
                       :disabled="isLoading"
                       class="input input-bordered input-md w-full">
                <span>g</span>
              </label>
            </div>
          </div>

          <div class="flex gap-2.5 justify-center">
            <button
              @click.prevent="simulate"
              :disabled="isLoading || !isValidData"
              class="btn btn-primary">
              Calcular Frete
            </button>
          </div>
        </div>
        <div class="flex items-center justify-center">
          <div v-if="simulation.price != undefined">
            <div class="mt-5">
              <div class="flex items-end gap-2">
                <span class="text-gray-800 text-xl md:text-2xl font-bold">Valor: {{
                    simulation.price.toLocaleString('pt-br', {
                      style: 'currency',
                      currency: 'BRL'
                    })
                  }}</span>
              </div>
            </div>
            <div class="flex items-center text-gray-500 gap-2 mb-6">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                   stroke="currentColor">
                <path d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z"/>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0"/>
              </svg>

              <span class="text-sm">Estimado {{ simulation.days }} dias para entrega</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Calculate",
  computed: {
    isValidData() {
      return parseFloat(this.simulationData.widthCm) &&
        parseFloat(this.simulationData.heightCm) &&
        parseFloat(this.simulationData.lengthCm) &&
        parseFloat(this.simulationData.weightG) &&
        this.simulationData.origin.length >= 3 &&
        this.simulationData.destination.length >= 3 ;
    },
  },
  data() {
    return {
      isLoading: false,
      simulationResponse: undefined,
      simulationData: {
        origin: '',
        destination: '',
        widthCm: 0,
        heightCm: 0,
        lengthCm: 0,
        weightG: 0,
      },
      simulation: {
        price: undefined,
        days: '4-5',
      }
    }
  },

  methods: {
    simulate() {
      this.$axios.post('/client/freight/calculate', this.simulationData)
        .then((response) => {
          if (response && response.data)
            this.simulation = Object.assign(this.simulation, response.data)
        });
    }
  }
}
</script>

<style scoped>

</style>
