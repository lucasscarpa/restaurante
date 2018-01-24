
<div id="mesas" class="row">

    <template v-for="mesa in mesas">
        <div class="col-lg-2 col-md-2">
            <a href="#">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h1 class="text-center">@{{ mesa.numero }}</h1>
                    </div>
                </div>
            </a>
        </div>
    </template>

</div>
