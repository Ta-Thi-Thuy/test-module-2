<h2> DANH SANH MAT HANG</h2>
<a href="?page=add" class="btn btn-red">Thêm mới</a>

<table class="table">
    <thead>
    <tr>
        <th>#</th>
        <th>Ten hang</th>
        <th>Loai hang</th>
        <th>gia</th>
        <th>so luong</th>
        <th>ngay</th>
        <th>mo ta</th>
        <th></th>
        <th></th>


    </tr>

    </thead>

    <tbody>
    <?php  foreach ($items as $key => $item):  ?>
        <tr>
            <td><?php echo ++$key ?></td>
            <td><?php echo $item['itemsname'] ?></td>
            <td><?php echo $item['itemsspecies']?></td>
            <td><?php echo $item['price']?></td>
            <td><?php echo $item['amount']?></td>
            <td><?php echo $item['date']?></td>
            <td><?php echo $item['describe']?></td>

            <td>
                <a href="?page=delete&id=<?php echo $item['id'] ?>"

                   onclick="return confirm('Bạn có chắc chắn muốn xóa không?')" class="btn btn-danger">Delete</a>
            </td>
            <td>
                <a href="?page=edit&id=<?php echo $item['id']?>" class="btn btn-warning">Edit</a>
            </td>

        </tr>
    <?php endforeach; ?>
    </tbody>

</table>
