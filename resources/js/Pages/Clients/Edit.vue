<template>
    <app-layout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <section id="basic-form-layouts">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="content-header">Edit Client's Information</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="px-3">
                                <form class="form">
                                    <div class="form-body">
                                        <h4 class="form-section">
                                            <i class="icon-user"></i> Personal Details</h4>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <jet-label for="name" value="Name" />
                                                    <jet-input id="name" type="text" v-model="form.name" class="form-control" autofocus />
                                                    <small class="text-danger" v-if="errors.name">{{ errors.name }}</small>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <jet-label for="phone" value="Phone" />
                                                    <jet-input id="phone" type="text" v-model="form.phone" class="form-control" autofocus />
                                                    <small class="text-danger" v-if="errors.phone">{{ errors.phone }}</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <jet-label for="email" value="Email" />
                                                    <jet-input id="email" type="email" v-model="form.email" class="form-control" autofocus />
                                                    <small class="text-danger" v-if="errors.phone">{{ errors.email }}</small>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <jet-label for="address" value="Address" />
                                                    <jet-input id="address" type="text" v-model="form.address" class="form-control" autofocus />
                                                    <small class="text-danger" v-if="errors.address">{{ errors.address }}</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-actions">
                                        <button type="button" class="btn btn-danger mr-1">
                                            <i class="icon-trash"></i> Cancel
                                        </button>
                                        <button @click.prevent="submit" type="submit" class="btn btn-success" :disabled="form.processing">
                                            <i class="icon-note"></i> Save
                                        </button>
                                    </div>
                                </form>
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
    import JetAuthenticationCard from '@/Jetstream/AuthenticationCard'
    import JetAuthenticationCardLogo from '@/Jetstream/AuthenticationCardLogo'
    import JetButton from '@/Jetstream/Button'
    import JetInput from '@/Jetstream/Input'
    import JetCheckbox from '@/Jetstream/Checkbox'
    import JetLabel from '@/Jetstream/Label'
    import JetValidationErrors from '@/Jetstream/ValidationErrors'
    import {
        Link
    } from '@inertiajs/inertia-vue3';

    export default defineComponent({
        props: {
            client: Object,
            errors: Object,
        },

        components: {
            JetAuthenticationCard,
            JetAuthenticationCardLogo,
            JetButton,
            JetInput,
            JetCheckbox,
            JetLabel,
            JetValidationErrors,
            AppLayout,
            Pagination,
            Link,
        },

        data() {
            return {
                form: this.$inertia.form({
                    name: '',
                    phone: '',
                    email: '',
                    address: '',
                }),
            }
        },

        methods: {
            submit() {
                this.form.put(this.client.update_url, this.form, {
                    onFinish: () => this.form.reset('password'),
                })
            }
        },

        created() {
            this.form.name = this.client.name
            this.form.phone = this.client.phone
            this.form.email = this.client.email
            this.form.address = this.client.address
        }

    })

</script>
