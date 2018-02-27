<form action="" method="post">
    <input name="A1" type="text" value="<?php echo $_POST['A1']; ?>">
    <input name="A2" type="text" value="<?php echo $_POST['A2']; ?>">
    <input name="A3" type="text" value="<?php echo $_POST['A3']; ?>">
    <input name="A4" type="text" value="<?php echo $_POST['A4']; ?>">
    <input name="A5" type="text" value="<?php echo $_POST['A5']; ?>">
    <input name="A6" type="text" value="<?php echo $_POST['A6']; ?>">
    <input name="A7" type="text" value="<?php echo $_POST['A7']; ?>">
    <input name="A8" type="text" value="<?php echo $_POST['A8']; ?>">
    <input name="Submit" type="submit" value="Submit">
</form>

<?php

if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $inputs = [
            'team1' => [
                $_POST['A1'],
                $_POST['A2'],
                $_POST['A3'],
                $_POST['A4'],
                $_POST['A5'],
                $_POST['A6'],
                $_POST['A7'],
                $_POST['A8'],
            ],
            'team2' => [
                $_POST['B1'],
                $_POST['B2'],
                $_POST['B3'],
                $_POST['B4'],
                $_POST['B5'],
                $_POST['B6'],
                $_POST['B7'],
                $_POST['B8'],
            ]
        ];
        if (16 != count(array_merge(array_unique($inputs['team1']), array_unique($inputs['team2'])))) {
            echo '<div style="background:red"><p style="color:white;">Duplicate entry</p></div>';
        } 
        session_start();
        $_SESSION['inputs'] = $inputs;
        header("Location: results.phtml");
}