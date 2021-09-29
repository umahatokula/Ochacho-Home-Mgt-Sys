<template>
    
    <div class="sidebar-content">
        <div class="nav-container">
            <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">

                <li class=" nav-item">
                    <Link :href="route('dashboard')">
                        <i class="icon-home"></i><span data-i18n="" class="menu-title">Dashboard</span>
                    </Link>
                </li>

                <li class=" nav-item">
                    <Link :href="route('clients.index')">
                        <i class="icon-home"></i><span data-i18n="" class="menu-title">Clients</span>
                    </Link>
                </li>

                <li class="has-sub nav-item">
                    <a href="#"><i class="icon-users"></i><span data-i18n="" class="menu-title">Clients</span><span class="tag badge badge-pill badge-danger mt-1">2</span></a>
                    <ul class="menu-content">
                        <li class="active">
                            <Link :href="route('clients.index')" class="menu-item">
                                All Clients
                            </Link>
                        </li>
                        <li>
                            <a href="dashboard-analytics.html" class="menu-item">Analytics</a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>

</template>

<script>
    import { defineComponent } from 'vue'
    import { Link } from '@inertiajs/inertia-vue3';

    export default defineComponent({

        components: {
            Link,
        },

        data() {
            return {

            }
        }

    })
</script>