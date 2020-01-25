<?php



function renderListing($data) {
    $html = '';
    $html .= '<table class="table"><thead><tr>';
    $tmp = '';
    foreach ($data as $row) {
        foreach ($row as $key => $value) {
            $html .= '<td>' . $key . '</td>';
            $tmp .= '<td>' . $value . '</td>';
        }
        break;
    }

    $html .= ' </tr></thead><tbody><tr>' . $tmp . '</tr>';
    foreach ($data as $row) {
        $html .= '<tr>';
        foreach ($row as $value) {
            $html .= '<td>' . $value . '</td>';
        }
        $html .= '</tr>';
    }


    $html .= '</tbody></table>';
    return $html;
}
