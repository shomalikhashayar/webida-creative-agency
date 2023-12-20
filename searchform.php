<div v-if="$q.screen.xs">
    <q-form action="/webida" method="get">
        <q-input dark oninvalid="this.setCustomValidity('خالی خالی؟')" hide-bottom-space id="search" v-model="searchBox"
            name="s" type="search" color="white" dense outlined placeholder="جستجو در بلاگ" required>
            <template v-slot:prepend>
                <q-icon v-if="searchBox === ''" name="o_search" color="white"></q-icon>
                <q-icon v-else name="clear" class="cursor-pointer" @click="searchBox = ''"></q-icon>
            </template>
        </q-input>
    </q-form>
</div>

<div v-if="$q.screen.sm">
    <q-form action="/webida" method="get">
        <q-input class="text-body1" dark oninvalid="this.setCustomValidity('خالی خالی؟')" hide-bottom-space id="search"
            v-model="searchBox" name="s" type="search" color="white" dense outlined placeholder="جستجو در بلاگ"
            required>
            <template v-slot:prepend>
                <q-icon v-if="searchBox === ''" name="o_search" color="white"></q-icon>
                <q-icon v-else name="clear" class="cursor-pointer" @click="searchBox = ''"></q-icon>
            </template>
        </q-input>
    </q-form>
</div>

<div v-if="$q.screen.md">
<q-form action="/webida" method="get">
        <q-input style="width:250px;" v-model="searchBox" name="s" type="search" clearable clear-icon="close"
            color="primary" dense outlined placeholder="جستجو در بلاگ">
            <template #prepend>
                <q-icon color="primary" name="o_search"></q-icon>
            </template>
        </q-input>
    </q-form>
</div>

<div v-if="$q.screen.lg">
    <q-form action="/webida" method="get">
        <q-input style="width:250px;" v-model="searchBox" name="s" type="search" clearable clear-icon="close"
            color="primary" dense outlined placeholder="جستجو در بلاگ">
            <template #prepend>
                <q-icon color="primary" name="o_search"></q-icon>
            </template>
        </q-input>
    </q-form>
</div>

<div v-if="$q.screen.gt.lg">
    <q-form action="/webida" method="get">
        <q-input style="width:250px;" v-model="searchBox" name="s" type="search" clearable clear-icon="close"
            color="primary" dense outlined placeholder="جستجو در بلاگ">
            <template #prepend>
                <q-icon color="primary" name="o_search"></q-icon>
            </template>
        </q-input>
    </q-form>
</div>