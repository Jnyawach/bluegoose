<template layout>
<Head>
    <title>Register</title>
</Head>
    <div class="h-screen">
        <div class="grid h-screen lg:grid-cols-5 md:grid-cols-5">
            <div class="bg-sky-900 col-span-2  hidden md:block ">
                <div class="self-center w-full mt-16">
                    <div class="flex justify-center mb-8">
                        <img :src="'/images/bluegoose-white-logo.png'" alt="Bluegoose Logo" class="w-48">
                    </div>
                    <div class="text-white px-5 mt-5 flex justify-center">
                       <div class="self-center px-5">
                           <div class="flex gap-3">
                               <div class=""><span class="text-xl text-sky-500"><i class="fa-solid fa-check"></i></span></div>
                               <div>
                                   <h6 class="font-semibold">Core Rental Management System</h6>
                                   <p class="mt-3 text-sm">Create landlords, properties, units and tenants. Invoice for rent, service charge, utility bills and repairs.</p>
                               </div>
                           </div>

                           <div class="flex gap-3 mt-8">
                               <div class=""><span class="text-xl text-sky-500"><i class="fa-solid fa-check"></i></span></div>
                               <div>
                                   <h6 class="font-semibold">Accounting System</h6>
                                   <p class="mt-3 text-sm">Your accounting transactions are recorded in real time as you transact. Manage company expenses, suppliers and other transactions.</p>
                               </div>
                           </div>

                           <div class="flex gap-3 mt-8">
                               <div class=""><span class="text-xl text-sky-500"><i class="fa-solid fa-check"></i></span></div>
                               <div>
                                   <h6 class="font-semibold">All in one portal</h6>
                                   <p class="mt-3 text-sm">Landlords and tenants self service portal, Bulk payments for landlords and tenants through b2b and b2c disbursements,
                                       schedule repetitive tasks, system logs and advanced security.</p>
                               </div>
                           </div>
                       </div>
                    </div>
                </div>

            </div>
            <div class="flex  w-full col-span-3 bg-sky-700  md:bg-gray-50">
                <div class="self-center px-14 py-5 w-full border md:border-none m-5 bg-white md:bg-transparent rounded-xl shadow-md md:shadow-none">
                    <div class="flex justify-center mb-8 md:hidden">
                        <img :src="'/images/bluegoose-logo.png'" alt="Bluegoose Logo" class="w-48">
                    </div>
                    <h1 class="text-sky-900 font-semibold text-lg text-center md:text-left">Register here</h1>
                    <p class="mt-3 text-center md:text-left">Manage all your rental units in one place</p>
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
                            <button type="submit" class="bg-sky-700 text-white py-2 px-8 rounded-md border
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
