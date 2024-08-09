<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  @vite('resources/assets/fonts/sharp-regular.css')
</head>

<body>
  <main id="app" class="flex justify-center items-center h-screen">
    <div class="flex flex-col justify-between w-96 h-[90vh] border rounded-2xl">
      <header id="header" class="text-center border-b p-2">
        <h1 class="text-lg leading-4 font-medium text-orange-500">Meowchat</h1>
        <div class="text-slate-800 text-3xl font-medium">This is a <span class="text-orange-700">test</span> build!</div>
        <div class="text-slate-600 text-sm">Some features are placeholders.</div>
      </header>
      <section id="chat" class="grow shadow-inner bg-slate-100"></section>
      <section id="send-message">
        <div class="flex justify-between">
          <input type="text" class="grow">

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
  </main>
</body>

</html>
