<div class="xs">
    <q-form action="/webida" method="get">
        <q-input dark oninvalid="this.setCustomValidity('خالی خالی؟')" hide-bottom-space id="search" v-model="searchBox"
            name="s" type="search" color="white" dense outlined placeholder="جستجو در بلاگ" required>
            <template v-slot:prepend>
                <q-icon v-if="searchBox === ''" name="o_search" color="white"></q-icon>
                <q-icon v-else name="clear" class="cursor-pointer" @click="searchBox = ''" /></q-icon>
            </template>
        </q-input>
    </q-form>
</div>

<div class="sm">
    <q-form action="/webida" method="get">
        <q-input class="text-body1" dark oninvalid="this.setCustomValidity('خالی خالی؟')" hide-bottom-space id="search" v-model="searchBox"
            name="s" type="search" color="white" dense outlined placeholder="جستجو در بلاگ" required>
            <template v-slot:prepend>
                <q-icon v-if="searchBox === ''" name="o_search" color="white"></q-icon>
                <q-icon v-else name="clear" class="cursor-pointer" @click="searchBox = ''" /></q-icon>
            </template>
        </q-input>
    </q-form>
</div>

<div class="md">
    <q-form action="/webida" method="get">
        <q-input class="text-body1" dark oninvalid="this.setCustomValidity('خالی خالی؟')" hide-bottom-space id="search" v-model="searchBox"
            name="s" type="search" color="white" dense outlined placeholder="جستجو در بلاگ" required>
            <template v-slot:prepend>
                <q-icon v-if="searchBox === ''" name="o_search" color="white"></q-icon>
                <q-icon v-else name="clear" class="cursor-pointer" @click="searchBox = ''" /></q-icon>
            </template>
        </q-input>
    </q-form>
</div>
