<main id="app" class="flex justify-center items-center h-screen">
  <div class="flex flex-col justify-between w-96 h-[90vh] border rounded-2xl">
    <header id="header" class="text-center border-b p-2">
      <h1 class="text-lg leading-4 font-medium text-orange-500">Meowchat</h1>
      <div class="text-slate-800 text-3xl font-medium">This is a <span class="text-orange-700">test</span> build!
      </div>
      <div class="text-slate-600 text-sm">Some features are placeholders.</div>
    </header>
    <section id="chat" class="grow shadow-inner bg-slate-100"></section>
    <section id="send-message">
      <div class="flex justify-between items-center pe-3">
        <input type="text" class="grow border-0 outline-none">
        <i class="fa-duotone fa-solid fa-paper-plane-top fa-2xl"
          style="--fa-primary-color: rgb(241 245 249); --fa-secondary-color: rgb(249 115 22); --fa-secondary-opacity: 0.9"></i>
      </div>
    </section>
    <footer id="version" class="p-2 text-center border-t text-slate-700">
      <a href="https://github.com/BlaxKnight/maeochat" class=" font-bold hover:text-orange-700 transition-colors">
        <div class="flex justify-center gap-2">
          <img class="w-5 h-5" src={{ asset('/images/github.png') }} alt="Github ">
          <span>0.0.1a</span>
        </div>
      </a>
    </footer>
  </div>
  <button wire:click='click'>click me</button>
</main>
