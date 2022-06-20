<footer class="bg-light text-center p-3">
    <small class="text-muted">Copyright 2022 © Ministry of Fisheries &amp; Marine Services</small>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script> 
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js" ></script> 
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js" ></script>
<!--==================DATATABLE Scripts=================-->
<script>
$(document).ready(function () {
    $('#portcalls').DataTable();
});
</script>
<script>
$(document).ready(function () {
    $('#vessels').DataTable();
});
</script>
<script>
$(document).ready(function () {
    $('#views').DataTable();
});
</script>
<!--==================DATATABLE Scripts=================-->
<script>
var myModal = document.getElementById('exampleModal')
var myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', function () {
  myInput.focus()
})
</script>
<!--====================CHARTJS===================-->
<script>
  const myChart = new Chart(
    document.getElementById('myChart'),
    config
  );
</script>


<!-- Option 1: Bootstrap Bundle with Popper 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>-->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="libraries/bs5/js/bootstrap.min.js"></script>

  </body>
</html>