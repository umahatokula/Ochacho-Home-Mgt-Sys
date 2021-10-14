<template>
    <section id="card-deck">
        <div class="row">
            <div class="col-12 mt-3 mb-1">
                <h2 class="content-header">Payment History</h2>
                <p class="content-sub-header">A list of all a client's payments</p>
            </div>

        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">

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
                                    <tr v-for="transaction in client.transactions" :key="transaction.id">
                                        <th scope="row" class="text-center">2</th>
                                        <td class="text-right">{{ transaction.amount }}</td>
                                        <td class="text-center"><span class="badge badge-success">cr</span></td>
                                        <td class="text-center">07 Jul, 2021</td>
                                        <td class="text-center">
                                            <Link @click.prevent="downloadReciept(client.slug)" class="default p-0" data-original-title=""
                                                title="">
                                            <i class="fa fa-download font-medium-3 mr-2"></i>
                                            </Link>
                                            <Link :href="client.show_url" class="default p-0" data-original-title="" title="">
                                            <i class="fa fa-print font-medium-3 mr-2"></i>
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

        methods: {

            downloadReciept: function(slug) {
            axios
                .get(`/clients/download/reciept/${slug}`, {
                    responseType: "arraybuffer"
                })
                .then(res => {

                    var file = new Blob([res.data], { type: "application/pdf" });
                    var url = URL.createObjectURL(file);

                    const link = document.createElement("a");
                    link.href = url;
                    link.setAttribute("download", "monthly_report.pdf"); //or any other extension
                    document.body.appendChild(link);
                    link.click();
                    link.parentNode.removeChild(link);
                })
                .catch(e => {
                    console.log(e);
                });
            },
        }
    })

</script>