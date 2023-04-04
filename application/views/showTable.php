show DataTables

<?php

    echo '<pre>';
    print_r($table);

?>

<div class="card">
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
