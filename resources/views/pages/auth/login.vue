<template layout>
    <Head>
        <title>Login</title>
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
                                    <h6 class="font-semibold text-lg">Core Rental Management System</h6>
                                    <p class="mt-3 ">Create landlords, properties, units and tenants. Invoice for rent, service charge, utility bills and repairs.</p>
                                </div>
                            </div>

                            <div class="flex gap-3 mt-8">
                                <div class=""><span class="text-xl text-sky-500"><i class="fa-solid fa-check"></i></span></div>
                                <div>
                                    <h6 class="font-semibold text-lg">Accounting System</h6>
                                    <p class="mt-3 ">Your accounting transactions are recorded in real time as you transact. Manage company expenses, suppliers and other transactions.</p>
                                </div>
                            </div>

                            <div class="flex gap-3 mt-8">
                                <div class=""><span class="text-xl text-sky-500"><i class="fa-solid fa-check"></i></span></div>
                                <div>
                                    <h6 class="font-semibold text-lg">All in one portal</h6>
                                    <p class="mt-3 ">Landlords and tenants self service portal, Bulk payments for landlords and tenants through b2b and b2c disbursements,
                                        schedule repetitive tasks, system logs and advanced security.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="flex  w-full col-span-3 bg-sky-900  md:bg-gray-50 justify-center">
                <div class="self-center px-14 py-5 w-6/2 md:w-full border md:border-none m-5 bg-white md:bg-transparent rounded-xl shadow-md md:shadow-none">
                    <div class="flex justify-center mb-8 md:hidden">
                        <img :src="'/images/bluegoose-logo.png'" alt="Bluegoose Logo" class="w-48">
                    </div>
                    <h1 class="text-sky-900 font-semibold text-lg text-center md:text-left">Login here</h1>
                    <p class="mt-3 text-center md:text-left font-semibold">Manage all your rental units in one place</p>
                    <form>
                        <div class="flex mt-8  w-full justify-center md:justify-start">
                            <div class="self-center w-full sm:w-96">
                                <div>
                                    <div>
                                        <label for="email" class="cerve-label">Email:</label>
                                    </div>
                                    <div>
                                        <input id="email" type="email" class="cerve-input">
                                    </div>

                                </div>
                                <div class="mt-5">
                                    <div>
                                        <label for="password" class="cerve-label">Password:</label>
                                    </div>
                                    <div>
                                        <input id="password" type="email" class="cerve-input">
                                    </div>

                                </div>
                                <div class="mt-5 flex gap-2">
                                    <Link href="#" class="hover:text-sky-600" title="Forgot Password">Forgot Password</Link>
                                    <Link href="#" class="hover:text-sky-600" title="Register">Register</Link>
                                </div>
                                <div class="mt-8">
                                    <button type="submit" class="btn-primary">
                                        Login
                                    </button>
                                </div>
                            </div>

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
