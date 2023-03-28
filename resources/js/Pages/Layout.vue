<template>
    <div class="container">
        <div class="row">
            <div class="col-2">
                <div>
                    <Link href="/hello">
                    hello
                    </Link>
                </div>
                <div>
                    <Link href="/table">
                    table
                    </Link>
                </div>
                <div>
                    <Link href="/fruits/list">
                    Fruits
                    </Link>
                </div>
                <div>
                    <Link href="/fruits/add">
                    Fruits add
                    </Link>
                </div>
            </div>
            <div class="col-10">
                <slot />
            </div>
        </div>
    </div>
    
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3'
export default {
  components: {
    Link
  },
}
</script>