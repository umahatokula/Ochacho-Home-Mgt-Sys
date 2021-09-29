<template>
    <app-layout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <section id="extended">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                                <div class="card-title-wrap bar-success">
                            <h4 class="card-title">Action Buttons</h4>
                                </div>
                        </div>
                        <div class="card-body">
                            <div class="card-block">
                                <table class="table table-responsive-md text-center">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th class="text-left">Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="(client, index) in clients.data" :key="client.id">
                                            <td>{{ index + 1 }}</td>
                                            <td class="text-left">{{ client.name }}</td>
                                            <td>{{ client.email }}</td>
                                            <td>{{ client.phone }}</td>
                                            <td>
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

                                
                                <pagination class="mt-6" :links="clients.links" />

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import Pagination from '@/Components/Pagination'
    import { Link } from '@inertiajs/inertia-vue3';

    export default defineComponent({
        props: {
            clients: Object,
        },

        components: {
            AppLayout,
            Pagination,
            Link,
        },
    })
</script>
