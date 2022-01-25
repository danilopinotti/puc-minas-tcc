<template>
  <div>
    <div class="bg-white py-4">
      <div class="max-w-screen-2xl px-4 md:px-8 mx-auto">
        <p class="text-indigo-500 lg:text-lg font-semibold mb-2 md:mb-3">Rastreamento de pacote</p>

        <h2 class="text-gray-800 text-2xl lg:text-3xl font-bold mb-4 md:mb-6">Pacote: {{ packageCode }}</h2>

        <p v-if="!isDelivered" class="max-w-screen-md text-gray-500 md:text-lg">
          Este pacote ainda está em processo de entrega. Por favor, aguarde!
        </p>
        <p v-else class="max-w-screen-md text-gray-500 md:text-lg">
          Este pacote já foi entregue ao destinatário. Obrigado pela preferência!
        </p>
      </div>
    </div>
    <div class="w-full flex justify-center">
      <div>
        <ul class="steps steps-vertical text-xl">
          <li class="step step-primary" data-content="✓" v-for="step in tracks">
            {{ step.status }}
          </li>
          <li class="step" data-content="●" v-if="!isDelivered">
            Aguardando encaminhamento.
          </li>
        </ul>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Track",
  props: ['packageCode', 'tracks', 'isDelivered'],
}
</script>

<style scoped>

</style>
