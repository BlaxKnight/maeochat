<main id="app" class="flex justify-center items-center h-screen">
  <div class="flex flex-col justify-between w-96 h-[90vh] border rounded-2xl">
    @include('partials.app.header')
    <section class="grow flex flex-col justify-between">
      <div
        class="flex flex-col justify-end relative grow shadow-inner bg-orange-50 before:content-[' '] before:bg-[url('/public/images/chat-bg.svg')] before:w-full before:h-full before:bg-no-repeat before:bg-center before:bg-cover before:absolute before:opacity-50 z-0 before:z-10">
        <ul class="relative z-20 p-3 flex flex-col gap-3">
          <li>
            <div class="bg-white border border-slate-400 p-3 rounded-full inline-block max-w-[75%]">
              Hello! How are you?
            </div>
          </li>
          <li>
            <div class="bg-white border border-slate-400 p-3 rounded-full inline-block max-w-[75%]">
              Can you meow?
            </div>
          </li>
          <li>
            <div class="bg-orange-500 text-white p-3 rounded-full inline-block max-w-[75%] float-end">
              maeo
            </div>
          </li>
          <li>
            <div class="bg-white border border-slate-400 p-3 rounded-full inline-block max-w-[75%]">
              Hello! How are you?
            </div>
          </li>
        </ul>
      </div>
      <div class="flex justify-between items-center pe-3 hover:shadow transition-all">
        <input type="text"
          class="grow border-0 border-transparent focus:border-transparent focus:ring-0 caret-orange-700">
        <i class="fa-duotone fa-solid fa-paper-plane-top fa-xl cursor-pointer"
          style="--fa-primary-color: rgba(0, 0, 0, 0); --fa-secondary-color: #ea580c; --fa-secondary-opacity: 0.9"></i>
      </div>
    </section>
    @include('partials.app.footer')
  </div>
</main>
