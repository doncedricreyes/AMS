@extends('layouts.app')

@section('content')
<!-- component -->


<!-- component -->
<div class="flex flex-col px-8 pt-6 pb-8 my-2 mb-4 bg-white rounded shadow-md">
    <div class="mb-6 -mx-3 md:flex">
      <div class="px-3 mb-6 md:w-1/2 md:mb-0">
        <label class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker" for="grid-first-name">
          First Name
        </label>
        <input class="block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red" id="grid-first-name" type="text" placeholder="Jane">
        <p class="text-xs italic text-red">Please fill out this field.</p>
      </div>
      <div class="px-3 mb-6 md:w-1/2 md:mb-0">
        <label class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker" for="grid-first-name">
          Middle Name
        </label>
        <input class="block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red" id="grid-first-name" type="text" placeholder="Jane">
      </div>
      <div class="px-3 md:w-1/2">
        <label class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker" for="grid-last-name">
          Last Name
        </label>
        <input class="block w-full px-4 py-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-grey-lighter" id="grid-last-name" type="text" placeholder="Doe">
      </div>
    </div>

    <div class="mb-2 -mx-3 md:flex">
      <div class="px-3 mb-6 md:w-1/2 md:mb-0">
        <label class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker" for="grid-city">
          Contact Person
        </label>
        <input class="block w-full px-4 py-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-grey-lighter" id="grid-city" type="text" placeholder="Albuquerque">
      </div>

      <div class="px-3 md:w-1/2">
        <label class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker" for="grid-zip">
          Contact Number
        </label>
        <input class="block w-full px-4 py-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-grey-lighter" id="grid-zip" type="text" placeholder="90210">
      </div>
    </div>

    <div class="mb-6 -mx-3 md:flex">
    <div class="px-3 md:w-full">
        <label class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker" for="grid-state">
          User Type
        </label>
        <div class="relative">
          <select class="block w-full px-4 py-3 pr-8 border rounded appearance-none bg-grey-lighter border-grey-lighter text-grey-darker" id="grid-state">
            <option>Student</option>
            <option>Employee</option>
            <option>Admin</option>
          </select>
        </div>
      </div>
    </div>
  </div>
    @endsection