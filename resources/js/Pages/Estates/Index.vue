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
                            <h4 class="card-title">Estates</h4>
                                </div>
                        </div>
                        <div class="card-body">
                            <div class="card-block">
                                
                                <div class="d-flex justify-content-end mb-4">
                                    <Link :href="route('estates.create')"  class="btn btn-primary" data-original-title="" title="">
                                        <i class="fa fa-plus font-medium-3 mr-2"></i> Add Estate
                                    </Link>
                                </div>
                                <table class="table table-responsive-md text-center">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th class="text-left">Name</th>
                                            <th>Address</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="(estate, index) in estates" :key="index">
                                            <td>{{ index + 1 }}</td>
                                            <td class="text-left">{{ estate.name }}</td>
                                            <td>{{ estate.address }}</td>
                                            <td>
                                                <Link :href="route('estates.show', estate)"  class="success p-0" data-original-title="" title="">
                                                    <i class="fa fa-eye font-medium-3 mr-2"></i>
                                                </Link>
                                                <Link :href="route('estates.edit', estate)"  class="primary p-0" data-original-title="" title="">
                                                    <i class="fa fa-pencil font-medium-3 mr-2"></i>
                                                </Link>
                                                <Link :href="route('estates.destroy', estate)"  class="danger p-0" data-original-title="" title="">
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
        </section>

    </app-layout>
</template>

<script>
    import {
        defineComponent
    } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import {
        Link
    } from '@inertiajs/inertia-vue3';

    export default defineComponent({
        props: {
            estates: Object,
        },

        components: {
            AppLayout,
            Link,
        },

        data() {
            return {
            }
        },

        methods: {
        },

        created() {
        }

    })

</script>
