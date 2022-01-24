<template>
  <div>
    <div class="bg-white py-6 sm:py-8 lg:py-12">
      <div class="max-w-screen-2xl px-4 md:px-8 mx-auto">

        <h2 class="text-gray-800 text-2xl lg:text-3xl font-bold text-center mb-4 md:mb-6">Rastreio de pacotes</h2>

        <p class="max-w-screen-md text-gray-500 md:text-lg text-center mx-auto">Para obter informações sobre o seu
          pacote, digite o código dele abaixo e, em seguida, clique em "Rastrear Pacote"</p>

        <div class="bg-white py-6 sm:py-8 lg:py-12">
          <div class="max-w-screen-2xl px-4 md:px-8 mx-auto">
            <form class="max-w-screen-md grid sm:grid-cols-2 gap-4 mx-auto">
              <div class="sm:col-span-2">
                <label for="track-code" class="inline-block text-gray-800 text-sm sm:text-base mb-2">
                  Código de Rastreio*
                </label>
                <input type="text"
                       placeholder="Exemplo: SQ5LA2-VR"
                       v-model="packageCode"
                       :disabled="isLoading"
                       class="input input-bordered w-full rounded outline-none">
              </div>

              <div class="sm:col-span-2 flex justify-between items-center">
                <button class="btn btn-primary"
                        @click.prevent="trackPackage"
                        :disabled="isLoading"
                >
                  Rastrear Pacote
                </button>
                <span class="text-gray-500 text-sm">* Campo obrigatório</span>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "package-track",
  layout: 'app',

  data() {
    return {
      isLoading: false,
      packageCode: undefined,
      packageResponse: undefined,
    }
  },

  methods: {
    trackPackage() {
      this.isLoading = true;

      let url = 'client/packages/' + this.packageCode + '/track';
      this.$axios.get(url)
      .finally(() => {
        this.isLoading = false;
      })
    }
  }
}
</script>

<style scoped>

</style>
