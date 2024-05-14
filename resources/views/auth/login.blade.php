@extends('layouts.app')

@section('content')


<div class="flex flex-col items-center justify-center min-h-screen bg-gray-300">
  <div class="flex flex-col w-full max-w-md px-4 py-8 bg-white rounded-md shadow-md sm:px-6 md:px-8 lg:px-10">

    <div class="relative h-px mt-10 bg-gray-300">

    </div>
    <div class="mt-10">
        <form method="POST" action="{{ route('login') }}">
            @csrf
        <div class="flex flex-col mb-6">
          <label for="username" class="mb-1 text-xs tracking-wide text-gray-600 sm:text-sm">Username:</label>
          <div class="relative">
            <div class="absolute top-0 left-0 inline-flex items-center justify-center w-10 h-full text-gray-400">
              <svg class="w-6 h-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
              </svg>
            </div>

            <input id="username" type="text" name="username" class="w-full py-2 pl-10 pr-4 text-sm placeholder-gray-500 border border-gray-400 rounded-lg sm:text-base focus:outline-none focus:border-blue-400" placeholder="Username: " />
          </div>
        </div>
        <div class="flex flex-col mb-6">
          <label for="password" class="mb-1 text-xs tracking-wide text-gray-600 sm:text-sm">Password:</label>
          <div class="relative">
            <div class="absolute top-0 left-0 inline-flex items-center justify-center w-10 h-full text-gray-400">
              <span>
                <svg class="w-6 h-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                  <path d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                </svg>
              </span>
            </div>

            <input id="password" type="password" name="password" class="w-full py-2 pl-10 pr-4 text-sm placeholder-gray-500 border border-gray-400 rounded-lg sm:text-base focus:outline-none focus:border-blue-400" placeholder="Password" />
          </div>
        </div>

        <div class="flex items-center mb-6 -mt-4">
          <div class="flex ml-auto">
            <a href="#" class="inline-flex text-xs text-blue-500 sm:text-sm hover:text-blue-700">Forgot Your Password?</a>
          </div>
        </div>

        <div class="flex w-full">
          <button type="submit" class="flex items-center justify-center w-full py-2 text-sm text-white transition duration-150 ease-in bg-blue-600 rounded focus:outline-none sm:text-base hover:bg-blue-700">
            <span class="mr-2 uppercase">Login</span>
            <span>
              <svg class="w-6 h-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
            </span>
          </button>
        </div>
      </form>
    </div>
    <div class="flex items-center justify-center mt-6">
      <a href="#" target="_blank" class="inline-flex items-center text-xs font-bold text-center text-blue-500 hover:text-blue-700">
        <span>
          <svg class="w-6 h-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
            <path d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
          </svg>
        </span>
        <span class="ml-2">You don't have an account?</span>
      </a>
    </div>
  </div>
</div>
@endsection