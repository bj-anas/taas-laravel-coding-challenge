@extends('layouts.app')

@section('main')
<!--------- Main Page -------------->
<main class="mt-8 px-4 lg:px-8 xl:w-full relative">
    <span class="text-xl font-medium">Candidates</span>
    <section>
      <div class="mt-8 flex justify-between h-12 sm:h-10">
        <div class="main-list-style">
          <a class="main-page-menu" href="#"
            >Applied
            <span class="style-span">2</span>
          </a>
          <a class="main-page-menu" href="#"
            >Phone Screening
            <span class="style-span">4</span>
          </a>
          <a id="a" class="main-page-menu ts-w-max:hidden ts:inline-block" href="#"
            >Interview
            <span class="style-span">6</span>
          </a>
          <a id="b" class="main-page-menu tm-w-max:hidden tm:inline-block" href="#">Offer</a>
          <a id="c" href="#" class="main-page-menu space-x-2 tl-w-max:hidden tl:inline-block">Disqualified</a>
        </div>
        <div>
          <button id="menu-button" class="flex justify-center py-1" aria-label="Other menu items" type="button">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"
              />
            </svg>
          </button>
        </div>
      </div>
      <div id="menu-links" class="hidden absolute right-0 z-30">
        <ul class="arrowBox w-40 h-auto px-2 space-y-2 pt-1 pb-2 shadow-xl rounded-lg border border-gray-200 bg-white text-sm text-gray-500">
          <li>
            <a id="e" href="#" class="ts-w-max:block ts:hidden"
              >Interview
              <span class="bg-gray-200 rounded-full px-3 ml-1 text-gray-700">6</span>
            </a>
          </li>
          <li>
            <a id="f" href="#" class="tm-w-max:block tm:hidden">Offer</a>
          </li>
          <li>
            <a id="g" href="#" class="tl-w-max:block tl:hidden">Disqualified</a>
          </li>
        </ul>
      </div>
    </section>
    <!-- users section -->
    <section class="z-0 border-t">
      @foreach ($UserData as $item)
        <a href="#" class="users">
          <div class="first-column">
            <img class="w-12 h-12 rounded-full" src={{$item['image']}} alt="profile-picture" width="400" height="400" />
            <div>
              <span class="block">{{$item['firstname']}} {{$item['lastname']}}</span>
              <span class="text-sm block">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-5 w-5 inline-block mb-1 fill-current text-gray-400"
                  viewBox="0 0 20 20"
                  fill="currentColor"
                >
                  <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                  <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                </svg>
                {{$item['email']}}
              </span>
            </div>
          </div>
          <div class="second-column">
            <span class="text-sm block">{{$item['date']}}</span>
            <span class="text-sm block">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5 inline-block mb-1 fill-current text-green-300"
                viewBox="0 0 20 20"
                fill="currentColor"
              >
                <path
                  fill-rule="evenodd"
                  d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                  clip-rule="evenodd"
                />
              </svg>
              {{$item['task']}}
            </span>
          </div>
          <div class="third-column">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="#9a9999">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
          </div>
        </a>
      @endforeach
    </section>
  </main>

@endsection
