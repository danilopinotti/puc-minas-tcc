<template>
  <div class="px-8">
    <div class="bg-white pb-6 sm:pb-8 lg:pb-12">
      <div class="max-w-screen-2xl mx-auto">
        <h1 class="text-gray-800 text-2xl lg:text-3xl font-bold mb-4 md:mb-6">Nossos fornecedores</h1>

        <p class="max-w-screen-md text-gray-500 md:text-lg">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque malesuada consequat sem vel bibendum.
          Phasellus vulputate lacinia libero ut rutrum.
        </p>
      </div>
    </div>
    <div class="overflow-x-auto shadow">
      <table class="table w-full">
        <thead>
        <tr>
          <th>CNPJ</th>
          <th>Razão Social</th>
          <th>Nome Fantasia</th>
          <th>Email para contato</th>
          <th>Telefone para contato</th>
          <th></th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="supplier in suppliers.data">
          <th class="!whitespace-normal">{{ supplier.cnpj }}</th>
          <td class="!whitespace-normal">{{ supplier.companyName }}</td>
          <td class="!whitespace-normal">{{ supplier.tradingName }}</td>
          <td class="!whitespace-normal">{{ supplier.contactEmail || '-' }}</td>
          <td class="!whitespace-normal">{{ supplier.contactPhone || '-' }}</td>
          <td class="!whitespace-normal">
            <div>
              <button class="btn btn-primary btn-sm tooltip" data-tip="Ver">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                </svg>
              </button>
              <button class="btn btn-info btn-sm tooltip" data-tip="Editar">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>
                </svg>
              </button>
              <button class="btn btn-error btn-sm tooltip" data-tip="Apagar">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                </svg>
              </button>
            </div>
          </td>
        </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>

<script>
export default {
  name: "suppliers",
  layout: 'app',
  middleware: ['auth'],

  async asyncData({params, $axios}) {
    let suppliers = await $axios.get('/registration-information/suppliers')
    return {suppliers: suppliers.data}
  }
}
</script>

<style scoped>

</style>
