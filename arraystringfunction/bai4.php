<title>Nhập và tính trên dãy số</title>
<body>
    <?php
        $input = $output = "";
        $arr = explode(",",$input);
        if (isset($_POST['submit']))
        {
            var_dump($arr);
            if (isset($_POST['input']))
            {
                $input = $_POST['input'];
                $output = array_sum($arr);
            }
        }
    ?>
    <style>
        span
        {
            color: red;
        }
        table
        {
            width: 500px;
        }
    </style>
    <form action="" method="post">
        <table>
        <tr style="background-color: cyan;"><td align="center" colspan="2"><h2>Nhập và tính trên dãy số</h2></td></tr>
        <tr>
            <td>Nhập dãy số: </td>
            <td><input type="text" name="input" value="<?php echo $input ?>"><span>  (*)</span></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Tổng dãy số" name="submit"></td>
        </tr>
        <tr>
            <td>Tổng dãy số: </td>
            <td><input type="text" name="output" value="<?php echo $output ?>" disabled></td>
        </tr>
        <tr><td colspan="2" align="center"><span>(*)  </span>Các số được nhập các nhau bằng dấu ","</td></tr>
        </table>
    </form>
</body>