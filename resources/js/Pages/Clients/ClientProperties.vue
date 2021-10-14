<template>
    <div>
        
        <section id="card-deck">
            <div class="row">
                <div class="col-12 mt-3 mb-1">
                    <h2 class="content-header">Client's Properties</h2>
                    <p class="content-sub-header">A list of all a client's properties with
                        Ochacho Homes.</p>
                </div>

            </div>
            
            <div class="row">
                <div v-for="property in client.properties" :key="property.id" class="col-4">
                    <div class="card-deck">
                        <div class="card">
                            <img class="card-img-top" src="/app-assets/img/photos/3.jpg" alt="Card image cap">
                            <div class="card-body">
                                <div class="card-block">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting
                                        text below as a natural lead-in to additional content.
                                        This content is a little bit longer.</p>
                                </div>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>
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
            client: Array,
        },

        components: {
            AppLayout,
            Pagination,
            Link,
        },
    })
</script>
