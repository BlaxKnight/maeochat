<main id="app" class="flex justify-center items-center h-screen">
  <div class="flex flex-col justify-between w-96 h-[90vh] border rounded-2xl">
    @include('partials.app.header')
    <section class="grow flex flex-col justify-between">
      <div class="relative grow shadow-inner bg-slate-100 before:content-[' '] before:bg-[url('/public/images/chat-bg.svg')] before:w-full before:h-full before:bg-no-repeat before:bg-center before:bg-cover before:absolute before:opacity-60"></div>
      <div class="flex justify-between items-center pe-3 hover:shadow transition-all">
        <input type="text"
          class="grow border-0 border-transparent focus:border-transparent focus:ring-0 caret-orange-700">
        <i class="fa-duotone fa-solid fa-paper-plane-top fa-xl"
          style="--fa-primary-color: rgba(0, 0, 0, 0); --fa-secondary-color: #ea580c; --fa-secondary-opacity: 0.9"></i>
      </div>
    </section>
    @include('partials.app.footer')
  </div>
</main>
