<template>
  <div class="container">
    <section class="flex flex-col lg:flex-row justify-between px-8 gap-6 sm:gap-10 md:gap-16">
      <div class="xl:w-5/12 flex flex-col justify-center sm:text-center lg:text-left lg:py-12 xl:py-24">
        <p class="text-indigo-500 md:text-lg xl:text-xl font-semibold mb-4 md:mb-6">Nós estamos</p>

        <h1 class="text-black-800 text-4xl sm:text-5xl md:text-6xl font-bold mb-8 md:mb-12">
          Revolucionando a forma de fazer entregas
        </h1>

        <p class="lg:w-4/5 text-gray-500 xl:text-lg leading-relaxed mb-8 md:mb-12">

        </p>

        <div class="flex flex-col sm:flex-row sm:justify-center lg:justify-start gap-2.5">
          <NuxtLink to="/simulate"
                    class="inline-block bg-indigo-500 hover:bg-indigo-600 active:bg-indigo-700 focus-visible:ring ring-indigo-300 text-white text-sm md:text-base font-semibold text-center rounded-lg outline-none transition duration-100 px-8 py-3">
            Simular frete
          </NuxtLink>

          <a href="#"
             class="inline-block bg-gray-200 hover:bg-gray-300 focus-visible:ring ring-indigo-300 text-gray-500 active:text-gray-700 text-sm md:text-base font-semibold text-center rounded-lg outline-none transition duration-100 px-8 py-3">
            Seja um parceiro
          </a>
        </div>
      </div>

      <div class="xl:w-5/12 h-48 lg:h-auto bg-gray-100 overflow-hidden shadow-lg rounded-lg">
        <img src="https://images.unsplash.com/photo-1618004912476-29818d81ae2e?auto=format&q=75&fit=crop&w=1000"
             loading="lazy" alt="Photo by Fakurian Design" class="w-full h-full object-cover object-center"/>
      </div>
    </section>
    <div class="bg-white py-6 sm:py-8 lg:py-12">
      <div class="max-w-screen-2xl px-4 md:px-8 mx-auto">
        <div class="mb-10 md:mb-16">
          <h2 class="text-gray-800 text-2xl lg:text-3xl font-bold text-center mb-4 md:mb-6">
            Vantagens
          </h2>

          <p class="max-w-screen-md text-gray-500 md:text-lg text-center mx-auto">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut cursus dictum quam sit amet sagittis. Praesent
            feugiat scelerisque est. Nunc dui purus, bibendum quis nibh non, elementum commodo quam.
          </p>
        </div>

        <div class="grid sm:grid-cols-2 xl:grid-cols-3 gap-8 md:gap-12 xl:gap-16">
          <div class="flex gap-4 md:gap-6">
            <div
              class="w-12 md:w-14 h-12 md:h-14 flex justify-center items-center shrink-0 bg-indigo-500 text-white rounded-lg md:rounded-xl shadow-lg">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                   stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
              </svg>
            </div>

            <div>
              <h3 class="text-lg md:text-xl font-semibold mb-2">Crescimento</h3>
              <p class="text-gray-500 mb-2">Nulla sit amet dui in erat ultrices ornare vel eget metus.</p>
              <a href="#"
                 class="text-indigo-500 hover:text-indigo-600 active:text-indigo-700 font-bold transition duration-100">Veja mais</a>
            </div>
          </div>

          <div class="flex gap-4 md:gap-6">
            <div
              class="w-12 md:w-14 h-12 md:h-14 flex justify-center items-center shrink-0 bg-indigo-500 text-white rounded-lg md:rounded-xl shadow-lg">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                   stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
              </svg>
            </div>

            <div>
              <h3 class="text-lg md:text-xl font-semibold mb-2">Segurança</h3>
              <p class="text-gray-500 mb-2">Nulla sit amet dui in erat ultrices ornare vel eget metus.</p>
              <a href="#"
                 class="text-indigo-500 hover:text-indigo-600 active:text-indigo-700 font-bold transition duration-100">Veja mais</a>
            </div>
          </div>
          <div class="flex gap-4 md:gap-6">
            <div
              class="w-12 md:w-14 h-12 md:h-14 flex justify-center items-center shrink-0 bg-indigo-500 text-white rounded-lg md:rounded-xl shadow-lg">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                   stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"/>
              </svg>
            </div>

            <div>
              <h3 class="text-lg md:text-xl font-semibold mb-2">Cloud</h3>
              <p class="text-gray-500 mb-2">Nulla sit amet dui in erat ultrices ornare vel eget metus.</p>
              <a href="#"
                 class="text-indigo-500 hover:text-indigo-600 active:text-indigo-700 font-bold transition duration-100">Veja mais</a>
            </div>
          </div>
          <div class="flex gap-4 md:gap-6">
            <div
              class="w-12 md:w-14 h-12 md:h-14 flex justify-center items-center shrink-0 bg-indigo-500 text-white rounded-lg md:rounded-xl shadow-lg">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                   stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
              </svg>
            </div>

            <div>
              <h3 class="text-lg md:text-xl font-semibold mb-2">Velocidade</h3>
              <p class="text-gray-500 mb-2">Nulla sit amet dui in erat ultrices ornare vel eget metus.</p>
              <a href="#"
                 class="text-indigo-500 hover:text-indigo-600 active:text-indigo-700 font-bold transition duration-100">Veja mais</a>
            </div>
          </div>

          <div class="flex gap-4 md:gap-6">
            <div
              class="w-12 md:w-14 h-12 md:h-14 flex justify-center items-center shrink-0 bg-indigo-500 text-white rounded-lg md:rounded-xl shadow-lg">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                   stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"/>
              </svg>
            </div>

            <div>
              <h3 class="text-lg md:text-xl font-semibold mb-2">Parceiros</h3>
              <p class="text-gray-500 mb-2">Nulla sit amet dui in erat ultrices ornare vel eget metus.</p>
              <a href="#"
                 class="text-indigo-500 hover:text-indigo-600 active:text-indigo-700 font-bold transition duration-100">Veja mais</a>
            </div>
          </div>

          <div class="flex gap-4 md:gap-6">
            <div
              class="w-12 md:w-14 h-12 md:h-14 flex justify-center items-center shrink-0 bg-indigo-500 text-white rounded-lg md:rounded-xl shadow-lg">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                   stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"/>
              </svg>
            </div>

            <div>
              <h3 class="text-lg md:text-xl font-semibold mb-2">Suporte 24/7</h3>
              <p class="text-gray-500 mb-2">Nulla sit amet dui in erat ultrices ornare vel eget metus.</p>
              <a href="#"
                 class="text-indigo-500 hover:text-indigo-600 active:text-indigo-700 font-bold transition duration-100">Veja mais</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'IndexPage',
  layout: 'app'
}
</script>
