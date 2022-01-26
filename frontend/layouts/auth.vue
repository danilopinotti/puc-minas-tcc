<template>
  <div>
    <div class="bg-white">
      <div class="max-w-screen-2xl px-4 md:px-8 mx-auto">
        <header class="flex justify-between items-center py-4 md:py-8">
          <a href="/" class="inline-flex items-center text-black-800 text-2xl md:text-3xl font-bold gap-2.5"
             aria-label="logo">
            <SharedBoaEntregaLogo width="70px" class="pr-2"></SharedBoaEntregaLogo>
            Boa Entrega
          </a>

          <nav class="hidden lg:flex gap-12">
            <NuxtLink to="/"
                      class="text-gray-600 hover:text-indigo-500 active:text-indigo-700 text-lg font-semibold transition duration-100">
              Página Inicial
            </NuxtLink>
            <NuxtLink to="/package-track"
                      class="text-gray-600 hover:text-indigo-500 active:text-indigo-700 text-lg font-semibold transition duration-100">
              Rastrear Pacotes
            </NuxtLink>
            <NuxtLink to="/simulate"
                      class="text-gray-600 hover:text-indigo-500 active:text-indigo-700 text-lg font-semibold transition duration-100">
              Calcular Frete
            </NuxtLink>
          </nav>

          <button type="button"
                  class="inline-flex items-center lg:hidden bg-gray-200 hover:bg-gray-300 focus-visible:ring ring-indigo-300 text-gray-500 active:text-gray-700 text-sm md:text-base font-semibold rounded-lg gap-2 px-2.5 py-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd"
                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                    clip-rule="evenodd"/>
            </svg>
            Menu
          </button>
        </header>
      </div>
    </div>
    <div class="min-h-screen flex flex-col items-center bg-gray-100 pt-10 md:pt-24">
      <div class="flex flex-col bg-white shadow-md px-4 sm:px-6 md:px-8 lg:px-10 py-8 rounded-3xl w-50 max-w-md">
        <Nuxt></Nuxt>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "auth"
}
</script>

<style scoped>

</style>
