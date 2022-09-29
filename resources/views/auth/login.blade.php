<x-layouts.app>

    <section class="h-screen">
        <div class="container h-full px-6 py-12">
            <div class="flex flex-wrap items-center justify-center h-full text-gray-800 g-6">
                <div class="mb-12 md:mb-0 md:w-8/12 lg:w-6/12">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
                        class="w-full" alt="Phone image" />
                </div>
                <div class="md:w-8/12 lg:ml-20 lg:w-5/12">
                    <form method="POST" action="{{ route('home')}}">
                        @csrf
                        <!-- Email input -->
                        <div class="mb-6">
                            <input type="text"
                            name="email"
                                class="block w-full px-4 py-2 m-0 text-xl font-normal text-gray-700 transition ease-in-out bg-white border border-gray-300 border-solid rounded form-control bg-clip-padding focus:border-blue-600 focus:bg-white focus:text-gray-700 focus:outline-none"
                                placeholder="Email address" />
                        </div>

                        <!-- Password input -->
                        <div class="mb-6">
                            <input type="password" name="password"
                                class="block w-full px-4 py-2 m-0 text-xl font-normal text-gray-700 transition ease-in-out bg-white border border-gray-300 border-solid rounded form-control bg-clip-padding focus:border-blue-600 focus:bg-white focus:text-gray-700 focus:outline-none"
                                placeholder="Password" />
                        </div>

                        <div class="flex items-center justify-between mb-6">
                            <div class="form-group form-check">
                                <input type="checkbox"
                                    class="float-left w-4 h-4 mt-1 mr-2 align-top transition duration-200 bg-white bg-center bg-no-repeat bg-contain border border-gray-300 rounded-sm appearance-none cursor-pointer form-check-input checked:border-blue-600 checked:bg-blue-600 focus:outline-none"
                                    id="exampleCheck3" checked />
                                <label class="inline-block text-gray-800 form-check-label" for="exampleCheck2">Remember
                                    me</label>
                            </div>
                            <a href="#!"
                                class="text-blue-600 transition duration-200 ease-in-out hover:text-blue-700 focus:text-blue-700 active:text-blue-800">Forgot
                                password?</a>
                        </div>

                        <!-- Submit button -->
                        <button type="submit"
                            class="inline-block w-full py-3 text-sm font-medium leading-snug text-white uppercase transition duration-150 ease-in-out bg-blue-600 rounded shadow-md px-7 hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg"
                            data-mdb-ripple="true" data-mdb-ripple-color="light">
                            Sign in
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

</x-layouts.app>
