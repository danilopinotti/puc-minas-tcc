<template>
  <div>
    <div class="font-medium self-center text-xl sm:text-3xl text-gray-800">
      Bem Vindo
    </div>
    <div class="mt-4 self-center text-xl sm:text-sm text-gray-800">
      Entre com suas credenciais para ter acesso à sua conta
    </div>

    <div class="mt-4">
      <form action="#">
        <div class="form-control mb-6">
          <label class="label">
            <span class="label-text">Email</span>
          </label>
          <input type="email" placeholder="usuario@boaentrega.com.br" class="input input-bordered">
        </div>

        <div class="form-control mb-6">
          <label class="label">
            <span class="label-text">Senha</span>
          </label>
          <input type="password" placeholder="entre com sua senha" class="input input-bordered">
        </div>

        <div class="flex w-full">
          <button
            type="submit"
            class="btn btn-primary btn-block"
          >
            <span class="mr-2 uppercase">Entrar</span>
            <span>
                  <svg
                    class="h-6 w-6"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
                  </svg>
                </span>
          </button>
        </div>
      </form>
      <div class="flex justify-center items-center mt-6">
        <span class="inline-flex items-center text-gray-700 font-medium text-xs text-center">
          <span class="ml-2">
            Ainda não tem uma conta?
            <a href="#" class="text-xs ml-2 text-blue-500 font-semibold">
              Cadastre-se
            </a>
          </span>
        </span>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "login",
  layout: "auth"
}
</script>

<style scoped>

</style>
