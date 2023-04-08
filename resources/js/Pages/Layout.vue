<template>
    <div class="container">
        <div class="row">
            <div class="col-2">
                <div>
                    <Link href="/fruits/list">
                    一覧
                    </Link>
                </div>
                <div>
                    <Link href="/fruits/add">
                    登録
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