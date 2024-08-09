<main id="app" class="flex justify-center items-center h-screen">
  <div class="flex flex-col justify-between w-96 border rounded-2xl">
    @include('partials.app.header')
    <section class="grow flex flex-col justify-between">
      <div
        class="flex flex-col justify-end relative grow shadow-inner bg-orange-50 before:content-[' '] before:bg-[url('/public/images/chat-bg.svg')] before:w-full before:h-full before:bg-no-repeat before:bg-center before:bg-cover before:absolute before:opacity-30 z-0 before:z-10">
        <ul class="relative z-20 p-3 flex flex-col gap-4 font-medium scroll-smooth snap-y overflow-y-auto h-[calc(80vh)]">
          <li class="flex items-end gap-1 snap-center">
            <div
              class="bg-white border border-slate-300 py-3 px-4 rounded-ss-2xl rounded-e-2xl inline-block max-w-[65%]">
              This is a normal message, which is limited to 70% of the device's width.
            </div>
            <div class="text-slate-800">
              <span class="relative">
                <i class="fa-solid fa-check"></i>
              </span>
              <span class="m-1">12:15 pm</span>
            </div>
          </li>
          <li class="flex items-end flex-row-reverse gap-1 snap-center">
            <div class="bg-orange-600 text-white py-3 px-4 rounded-se-2xl rounded-s-2xl inline-block max-w-[65%]">
              This is your message. It's background color is set to tailwind's custom color format.
            </div>
            <div class="text-slate-700">
              <span class="relative">
                <i class="fa-solid fa-check"></i>
              </span>
              <span class="m-1">12:17 pm</span>
            </div>
          </li>
          <li class="flex items-end gap-1 snap-center">
            <div
              class="bg-white border border-slate-300 py-3 px-4 rounded-ss-2xl rounded-e-2xl inline-block max-w-[65%]">
              This message has not been sent yet...
            </div>
            <div class="text-slate-800">
              <span class="relative">
                <i class="fa-solid fa-timer"></i>
              </span>
              <span class="m-1">12:19 pm</span>
            </div>
          </li>
          <li class="flex items-end gap-1 snap-center">
            <div
              class="bg-white border border-slate-300 py-3 px-4 rounded-ss-2xl rounded-e-2xl inline-block max-w-[65%]">
              This message is sent and seen.
            </div>
            <div class="text-slate-800">
              <span class="relative">
                <i class="absolute fa-solid fa-check left-1 top-[1px]"></i>
                <i class="fa-solid fa-check"></i>
              </span>
              <span class="m-1">12:22 pm</span>
            </div>
          </li>
          <li class="flex items-end flex-row-reverse gap-1 snap-center">
            <div class="bg-orange-600 text-white py-3 px-4 rounded-se-2xl rounded-s-2xl inline-block max-w-[65%]">
              An error occurred while sending this message.
            </div>
            <div class="text-slate-700">
              <span class="relative">
                <i class="fa-solid fa-brake-warning text-red-600"></i>
              </span>
              <span class="m-1">12:28 pm</span>
            </div>
          </li>
          <li class="flex items-end gap-1 snap-center">
            <div
              class="bg-white border border-slate-300 py-3 px-4 rounded-ss-2xl rounded-e-2xl inline-block max-w-[65%]">
              <div class="text-sm text-slate-600 bg-orange-100 border-s-4 border-orange-300 mb-1 py-1 px-2">
                This message is sent and seen.
              </div>
              This is a reply to another message
            </div>
            <div class="text-slate-800">
              <span class="relative">
                <i class="absolute fa-solid fa-check left-1 top-[1px]"></i>
                <i class="fa-solid fa-check"></i>
              </span>
              <span class="m-1">12:31 pm</span>
            </div>
          </li>
          <li class="flex items-end flex-row-reverse gap-1 snap-center">
            <div class="bg-orange-600 text-white py-3 px-4 rounded-se-2xl rounded-s-2xl inline-block max-w-[65%]">
              An error occurred while sending this message.
            </div>
            <div class="text-slate-700">
              <span class="relative">
                <i class="fa-solid fa-brake-warning text-red-600"></i>
              </span>
              <span class="m-1">12:28 pm</span>
            </div>
          </li>
        </ul>
      </div>
      <div class="flex justify-between items-center pe-3 hover:shadow transition-all">
        <input type="text"
          class="grow border-0 border-transparent focus:border-transparent focus:ring-0 caret-orange-700"
          placeholder="Send message...">
        <i class="fa-solid fa-paper-plane-top fa-xl cursor-pointer text-orange-600"></i>
      </div>
    </section>
    @include('partials.app.footer')
  </div>
</main>
