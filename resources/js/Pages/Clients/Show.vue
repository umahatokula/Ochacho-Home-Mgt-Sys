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
                                    <div role="tabpanel" class="tab-pane active" id="tab1" aria-expanded="true"
                                        aria-labelledby="base-tabX1">
                                    </div>

                                    <div class="tab-pane" id="tab2" aria-labelledby="base-tabX2">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <div class="card-title-wrap bar-primary">
                                                            <h4 class="card-title">Payment History</h4>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="card-block">
                                                            <table class="table table-sm table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="text-center">#</th>
                                                                        <th class="text-right">Amount</th>
                                                                        <th class="text-center">Dr/Cr</th>
                                                                        <th class="text-center">Date</th>
                                                                        <th class="text-center">Action(s)</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <th scope="row" class="text-center">1</th>
                                                                        <td class="text-right">3,000, 000.00</td>
                                                                        <td class="text-center"><span class="badge badge-danger">dr</span></td>
                                                                        <td class="text-center">07 Jun, 2021</td>
                                                                        <td class="text-center">
                                                                            <Link :href="client.show_url"  class="success p-0" data-original-title="" title="">
                                                                                <i class="fa fa-eye font-medium-3 mr-2"></i>
                                                                            </Link>
                                                                            <Link :href="client.edit_url"  class="primary p-0" data-original-title="" title="">
                                                                                <i class="fa fa-pencil font-medium-3 mr-2"></i>
                                                                            </Link>
                                                                            <Link :href="client.destroy_url"  class="danger p-0" data-original-title="" title="">
                                                                                <i class="fa fa-trash-o font-medium-3 mr-2"></i>
                                                                            </Link>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row" class="text-center">1</th>
                                                                        <td class="text-right">150, 000.00</td>
                                                                        <td class="text-center"><span class="badge badge-success">cr</span></td>
                                                                        <td class="text-center">07 Jul, 2021</td>
                                                                        <td class="text-center">
                                                                            <Link :href="client.show_url"  class="success p-0" data-original-title="" title="">
                                                                                <i class="fa fa-eye font-medium-3 mr-2"></i>
                                                                            </Link>
                                                                            <Link :href="client.edit_url"  class="primary p-0" data-original-title="" title="">
                                                                                <i class="fa fa-pencil font-medium-3 mr-2"></i>
                                                                            </Link>
                                                                            <Link :href="client.destroy_url"  class="danger p-0" data-original-title="" title="">
                                                                                <i class="fa fa-trash-o font-medium-3 mr-2"></i>
                                                                            </Link>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row" class="text-center">2</th>
                                                                        <td class="text-right">150, 000.00</td>
                                                                        <td class="text-center"><span class="badge badge-success">cr</span></td>
                                                                        <td class="text-center">07 Aug, 2021</td>
                                                                        <td class="text-center">
                                                                            <Link :href="client.show_url"  class="success p-0" data-original-title="" title="">
                                                                                <i class="fa fa-eye font-medium-3 mr-2"></i>
                                                                            </Link>
                                                                            <Link :href="client.edit_url"  class="primary p-0" data-original-title="" title="">
                                                                                <i class="fa fa-pencil font-medium-3 mr-2"></i>
                                                                            </Link>
                                                                            <Link :href="client.destroy_url"  class="danger p-0" data-original-title="" title="">
                                                                                <i class="fa fa-trash-o font-medium-3 mr-2"></i>
                                                                            </Link>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row" class="text-center">3</th>
                                                                        <td class="text-right">150, 000.00</td>
                                                                        <td class="text-center"><span class="badge badge-success">cr</span></td>
                                                                        <td class="text-center">07 Sep, 2021</td>
                                                                        <td class="text-center">
                                                                            <Link :href="client.show_url"  class="success p-0" data-original-title="" title="">
                                                                                <i class="fa fa-eye font-medium-3 mr-2"></i>
                                                                            </Link>
                                                                            <Link :href="client.edit_url"  class="primary p-0" data-original-title="" title="">
                                                                                <i class="fa fa-pencil font-medium-3 mr-2"></i>
                                                                            </Link>
                                                                            <Link :href="client.destroy_url"  class="danger p-0" data-original-title="" title="">
                                                                                <i class="fa fa-trash-o font-medium-3 mr-2"></i>
                                                                            </Link>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
                                                                        <img src="" class="rounded-circle img-border gradient-summer width-100" alt="Card image">
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

    export default defineComponent({
        props: {
            client: Object,
        },

        components: {
            AppLayout,
            Pagination,
            Link,
        },
    })

</script>
