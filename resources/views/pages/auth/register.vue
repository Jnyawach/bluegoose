<template layout>
<Head>
    <title>Register</title>
</Head>
    <div class="h-screen">
        <div class="grid h-screen lg:grid-cols-5">
            <div class="bg-sky-900 col-span-2 place-content-center">
                <div class="self-center">
                    <h1>Register here</h1>
                </div>

            </div>
            <div class="flex  w-full col-span-3 bg-gray-50">
                <div class="self-center px-14 py-5 w-full">
                    <h1 class="text-sky-900 font-semibold text-lg">Register here</h1>
                    <p class="mt-3">Manage all your rental unit in one place</p>
                    <form>
                    <div class="grid lg:grid-cols-2 mt-8 gap-3">
                        <div class="col-span-1">
                           <div>
                               <label for="first_name" class="cerve-label">First Name:</label>
                           </div>
                            <div>
                                <input id="first_name" type="text" class="cerve-input">
                            </div>

                        </div>
                        <div class="col-span-1">
                            <div>
                                <label for="last_name" class="cerve-label">Last Name:</label>
                            </div>
                            <div>
                                <input id="last_name" type="text" class="cerve-input">
                            </div>

                        </div>
                    </div>
                    <div class="grid lg:grid-cols-2 mt-8 gap-3">
                        <div>
                            <div>
                                <label for="email" class="cerve-label">Email:</label>
                            </div>
                            <div>
                                <input id="email" type="email" class="cerve-input">
                            </div>

                        </div>
                        <div>
                            <div>
                                <label for="cellphone" class="cerve-label">Cellphone:</label>
                            </div>
                            <div>
                                <input id="cellphone" type="text" class="cerve-input">
                            </div>

                        </div>
                    </div>

                    <div class="grid lg:grid-cols-2 mt-8 gap-3">
                        <div>
                            <div>
                                <label for="password" class="cerve-label">Password:</label>
                            </div>
                            <div>
                                <input id="password" type="email" class="cerve-input">
                            </div>

                        </div>
                        <div>
                            <div>
                                <label for="password_confirmation" class="cerve-label">Confirm Password:</label>
                            </div>
                            <div>
                                <input id="password_confirmation" type="text" class="cerve-input">
                            </div>

                        </div>
                    </div>
                        <div class="mt-5 flex gap-2 text-sm">
                            <Link href="#" class="hover:text-sky-600">Terms and conditions</Link>
                            <Link href="#" class="hover:text-sky-600">Privacy policy</Link>
                        </div>
                        <div class="mt-8">
                            <button type="submit" class="bg-sky-800 text-white py-2 px-8 rounded-md border
                            border-sky-900 hover:bg-sky-900">
                                Register
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup lang="ts">
import {Head} from "@inertiajs/inertia-vue3";
import {Link} from "@inertiajs/inertia-vue3";
</script>

<style scoped>

</style>
