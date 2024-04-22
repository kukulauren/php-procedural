<?php template("header") ?>

<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="xl:w-1/2 lg:w-3/4 w-full mx-auto text-center">
      
      <p class="leading-relaxed font-bold text-6xl">404 Not Found</p>
      <span class="inline-block h-1 w-10 rounded bg-indigo-500 mt-8 mb-6"></span>
      <div class="">
        <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0" href=<?= url('/')?>>Back To Home
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
          <path d="M5 12h14M12 5l7 7-7 7"></path>
        </svg>
      </a>
      </div>
    </div>
  </div>
</section>

<?php template("footer") ?>
