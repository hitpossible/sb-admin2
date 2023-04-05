
<div class="card">
    <div class="card-title p-3">
        <h3>
            DataTable with Controller
        </h3>
    </div>
    <div class="card-body">
        <table class="table" id="tblProduct">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($table as $key => $value) {
                ?>
                <tr>
                    <td><?php echo $value["id"]; ?></td>
                    <td><?php echo $value["name"]; ?></td>
                    <td><?php echo $value["price"]; ?></td>
                </tr>
                <?php
                    }
                ?>

                <?php foreach ($table as $key => $value) {
                    // echo '<tr>
                    //         <td>'. $value->id .'</td>
                    //         <td>'. $value->name .'</td>
                    //         <td>'. $value->price .'</td>
                    //       </tr>';
                }?>
               
            </tbody>
        </table>
    </div>
</div>


<div class="card">
    <div class="card-title p-3">
        <h3>
            DataTable with AJAX 1
        </h3>
    </div>
    <div class="card-body">
        <table class="table" id="tblProduct2">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
               
               
            </tbody>
        </table>
    </div>
</div>


<div class="card">
    <div class="card-title p-3">
        <h3>
            DataTable with AJAX 2 <button type="button" class="btn btn-success" id="refreshButton">Refresh</button>
        </h3>
    </div>
    <div class="card-body">
        <table class="table" id="tblProduct3">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
               
               
            </tbody>
        </table>
    </div>
</div>