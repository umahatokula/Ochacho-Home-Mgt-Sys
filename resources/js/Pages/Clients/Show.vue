<template>
    <app-layout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <section id="basic-tabs-components">
            <div class="row">
                <div class="col-sm-12 mt-2">
                    <h2 class="content-header">Client Details</h2>
                </div>
            </div>
            <div class="row match-height">
                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-block">
                                <Link :href="route('transactions.create', client)" class="btn btn-success ma-4 float-right">
                                    Make Payment
                                </Link>
                                <button @click="$inertia.visitInModal('/user/create')">Load in modal</button>
                            </div>
                            <div class="card-block">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="base-tabX1" data-toggle="tab"
                                            aria-controls="tab1" href="#tab1" aria-expanded="true">Properties</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="base-tabX2" data-toggle="tab" aria-controls="tab2"
                                            href="#tab2" aria-expanded="false">Payment History</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="base-tabX3" data-toggle="tab" aria-controls="tab3"
                                            href="#tab3" aria-expanded="false">Bio</a>
                                    </li>
                                </ul>
                                <div class="tab-content px-1 pt-1">
                                    <div role="tabpanel" class="tab-pane active" id="tab1" aria-expanded="true" aria-labelledby="base-tabX1">
                                                
                                        <ClientProperties :client="client"></ClientProperties>

                                    </div>

                                    <div class="tab-pane" id="tab2" aria-labelledby="base-tabX2">
                                        
                                        <ClientPayments :client="client"></ClientPayments>

                                    </div>

                                    <div class="tab-pane" id="tab3" aria-labelledby="base-tabX3">
                                        <section id="user-area">
                                            <div class="row">
                                                <div class="col-xl-3 col-lg-12">
                                                    <div class="card mb-4">
                                                        <div class="card-header">
                                                            <div class="card-title-wrap bar-primary">
                                                                <h4 class="card-title" id="basic-layout-form">Personal Details</h4>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="card-block">
                                                                <div class="align-self-center halfway-fab text-center">
                                                                    <a class="profile-image">
                                                                        <img src="/app-assets/img/portrait/medium/avatar-m-9.jpg" class="rounded-circle img-border gradient-summer width-100" alt="Card image">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-9 col-lg-12">
                                                    <!--About div starts-->
                                                    <div id="about">

                                                        <section id="basic-form-layouts">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="card">
                                                                        <div class="card-header">
                                                                            <div class="card-title-wrap bar-success">
                                                                                
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-body">
                                                                            <div class="px-3">
                                                                                <form class="form">
                                                                                    <div class="form-body">
                                                                                        <div class="row">
                                                                                            <div class="col-md-6">
                                                                                                <div class="form-group">
                                                                                                    <label for="projectinput1"><b>Name</b></label>
                                                                                                    <p>{{ client.name }}</p>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-6">
                                                                                                <div class="form-group">
                                                                                                    <label for="projectinput2"><b>Phone Number</b></label>
                                                                                                    <p>{{ client.phone }}</p>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="col-md-6">
                                                                                                <div class="form-group">
                                                                                                    <label for="projectinput3"><b>E-mail</b></label>
                                                                                                    <p>{{ client.email }}</p>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-6">
                                                                                                <div class="form-group">
                                                                                                    <label for="projectinput4"><b>Contact Address</b></label>
                                                                                                    <p>{{ client.address }}</p>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </section>
                                                    </div>
                                                    <!--About div ends-->
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </app-layout>
</template>

<script>
    import {
        defineComponent
    } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import Pagination from '@/Components/Pagination'
    import {
        Link
    } from '@inertiajs/inertia-vue3';
    import ClientPayments from "@/Pages/Payments/ClientPayments"
    import ClientProperties from "@/Pages/Clients/ClientProperties"

    export default defineComponent({
        props: {
            client: Object,
        },

        components: {
            AppLayout,
            Pagination,
            Link,
            ClientPayments,
            ClientProperties,
        },
    })

</script>
