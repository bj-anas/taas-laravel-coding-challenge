<header class="p-4 lg:px-8 xl:w-full">
  <!-- logo & hamberger button & navigation -->
  <nav class="border-b-2 pb-3">
    <div class="flex justify-between items-center w-full">
      <div class="flex justify-between items-center w-1/2 md:w-max lg:justify-start md:space-x-1 lg:space-x-3 xl:space-x-12">
        <!-- logo -->
        <a href="#" class="flex-shrink-0" title="Go to home page">
          <img class="w-10 h-10" src="./images/my-logo.jpg" alt="Site logo" height="400" width="400" />
        </a>
        <!-- hamberger button -->
        <div class="order-first md:hidden pt-2 text-gray-700">
          <button id="toggle-button" type="button">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
              <path
                fill-rule="evenodd"
                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                clip-rule="evenodd"
              />
            </svg>
          </button>
        </div>
        <!-- navigation -->
        <div class="hidden md:block">
          <ul class="md:flex items-center lg:space-x-6 xl:space-x-8">
            <li><a class="hover:bg-gray-100 p-3 rounded-md" href="#">Dashboard</a></li>
            <li><a class="hover:bg-gray-100 p-3 rounded-md" href="#">Jobs</a></li>
            <li><a class="hover:bg-gray-100 p-3 rounded-md" href="#">Applicants</a></li>
            <li><a class="hover:bg-gray-100 p-3 rounded-md" href="#">Company</a></li>
          </ul>
        </div>
      </div>
      <!---------- search box & bell icon & profile ----------------->
      <div class="flex items-center justify-end space-x-2 sm:w-1/2 md:w-max lg:space-x-5">
        <!-- search box -->
        <div class="h-10 w-3/5 xl:w-max border-2 rounded-md p-2 space-x-2 bg-white border-gray-300 hidden md:flex">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="#a4b0be">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
          </svg>
          <form role="search" aria-label="Site">
            <input class="focus:outline-none w-full" type="search" placeholder="Search" />
          </form>
        </div>
        <!-- bell icon -->
        <button class="text-gray-500 hover:text-yellow-400" aria-label="Notifications" type="button">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"
            />
          </svg>
        </button>
        <!-- profile -->
        <button aria-label="Profile" type="button">
          <img class="rounded-full w-10 h-10" src="./images/profil.jpg" alt="profil" height="400" width="400" />
        </button>
      </div>
    </div>
    <!---------- hamberger menu ------------>
    <div id="navbar-links" class="hidden px-5 pt-4 md:hidden space-y-2">
      <div class="flex flex-grow h-10 border-2 rounded-md p-2 space-x-2 bg-white border-gray-300">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="#a4b0be">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
        </svg>
        <form class="w-full" role="search" aria-label="Site">
          <input class="focus:outline-none w-full" type="search" placeholder="Search" />
        </form>
      </div>
      <ul class="pt-1 border-t-2 border-gray-200">
        <li>
          <a href="#">Dashboard</a>
        </li>
        <li>
          <a href="#">Jobs</a>
        </li>
        <li>
          <a href="#">Applicants</a>
        </li>
        <li>
          <a href="#">Company</a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- second part of header -->
  <section class="mt-4">
    <div class="flex items-center space-x-6 py-2 text-gray-500">
      <span>Jobs</span>
      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
      </svg>
      <span>Engineering</span>
    </div>
  </section>
  <section class="lg:flex lg:justify-between">
    <div>
      <h1 class="text-2xl sm:text-3xl lg:text-4xl font-bold">Back End Developer</h1>
      <ul class="header-data-info">
        <li>
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block pb-1" viewBox="0 0 20 20" fill="currentColor">
            <path
              fill-rule="evenodd"
              d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z"
              clip-rule="evenodd"
            />
            <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z" />
          </svg>
          Full-time
        </li>
        <li>
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block pb-1" viewBox="0 0 20 20" fill="currentColor">
            <path
              fill-rule="evenodd"
              d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
              clip-rule="evenodd"
            />
          </svg>
          Remote
        </li>
        <li>
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block pb-1" viewBox="0 0 20 20" fill="currentColor">
            <path
              d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z"
            />
            <path
              fill-rule="evenodd"
              d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z"
              clip-rule="evenodd"
            />
          </svg>
          $120k - $140k
        </li>
        <li>
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block pb-1" viewBox="0 0 20 20" fill="currentColor">
            <path
              fill-rule="evenodd"
              d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
              clip-rule="evenodd"
            />
          </svg>
          Closing in January 9, 2020
        </li>
      </ul>
    </div>
    <!-- triple buttons -->
    <div class="triple-buttons">
      <button class="button-edit" aria-label="Edit button" type="button">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-5 inline-block pb-1 mr-1" viewBox="0 0 20 20" fill="#78787a">
          <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
        </svg>
        Edit
      </button>
      <button class="button-view" aria-label="View Button" type="button">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block pb-1 mr-1" fill="none" viewBox="0 0 24 24" stroke="#78787a">
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"
          />
        </svg>
        View
      </button>
      <details class="published-button w-44 items-center h-10 border-1 text-white rounded-md">
        <summary class="flex items-center justify-around" role="button">
          <span class="pl-1 py-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
              <path
                fill-rule="evenodd"
                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                clip-rule="evenodd"
              />
            </svg>
          </span>
          <span class="py-2 px-1">Published</span>
          <span id="span-hover" class="border-l border-purple-600 px-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </span>
        </summary>
      </details>
    </div>
  </section>
</header>
