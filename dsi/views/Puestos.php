<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover" id="tablaPuestos">
        <thead>
            <tr>
                <th>#</th>
                <th>Puesto</th>
                <th>Fecha</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            
        </tbody>
    </table>
</div>
<script>
    $(document).ready(function() {
        $('#tablaPuestos').DataTable({
            responsive: true,
            retrieve: true,
            "order": [[ 1, 'asc' ]],
            // pasamos a prosesar la informacion a php
            "processing": true,
            "serverSide": true,
            'serverMethod': 'post',
            "ajax": "methods/Puestos/Lista.php"
        });
    });
</script>