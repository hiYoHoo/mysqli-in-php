<?php

// 数据库查询，返回布尔值或者结果集
function query($mysqli, $sql) {
    return $mysqli->query($sql);
}

// 处理结果集
function fetchRes($res, $info) {
    if ($res && $res->num_rows>0) {
        $rows = $res->fetch_all(MYSQLI_ASSOC);
        echo showTable($rows, $info);
        $res->free();
    } else {
        echo '查询错误或没有记录';
    }
}

// 以table形式显示数据
function showTable($rows, $info) {
    if (!count($rows))
        return 'Empty set<br>';
    $thead = $tbody = '';
    $caption = '<caption>'.$info.'</caption>';
    foreach (array_keys($rows[0]) as $value) {
        $thead .= '<th>'.$value.'</th>';
    }
    $thead = '<thead><tr>'.$thead.'</tr></thead>';
    foreach ($rows as $row) {
        $tr = '';
        foreach ($row as $value) {
            $tr .= '<td>'.$value.'</td>';
        }
        $tbody .= '<tr>'.$tr.'</tr>';
    }
    $tbody = '<tbody align=center>'.$tbody.'</tbody>';
    return '<table border=1 style="border-collapse:collapse">'.$caption.$thead.$tbody.'</table>';
}
