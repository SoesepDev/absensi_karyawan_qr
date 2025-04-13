<?php
// Koneksi DB
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'db_absensi_karyawan';

$mysqli = new mysqli($host, $user, $pass, $db);
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Ambil request dari DataTables
$draw = $_POST['draw'];
$start = $_POST['start'];
$length = $_POST['length'];
$search = $_POST['search']['value'];

// Query total records
$totalQuery = "SELECT COUNT(*) as total FROM m_lokasi";
$totalResult = $mysqli->query($totalQuery)->fetch_assoc();
$totalRecords = $totalResult['total'];

// Query dengan filter jika ada pencarian
$where = "";
if (!empty($search)) {
    $where = "WHERE nama LIKE '%$search%'";
}

// Total setelah filter
$filteredQuery = "SELECT COUNT(*) as total FROM m_lokasi $where";
$filteredResult = $mysqli->query($filteredQuery)->fetch_assoc();
$totalFiltered = $filteredResult['total'];

// Data utama
$dataQuery = "SELECT * FROM m_lokasi $where ORDER BY id DESC LIMIT $start, $length";
$dataResult = $mysqli->query($dataQuery);

$data = [];
$no = $start + 1;

while ($row = $dataResult->fetch_assoc()) {
    $data[] = [
        'no' => $no++,
        'nama' => $row['nama'],
    ];
}

// Output ke JSON
$response = [
    "draw" => intval($draw),
    "recordsTotal" => $totalRecords,
    "recordsFiltered" => $totalFiltered,
    "data" => $data
];

header('Content-Type: application/json');
echo json_encode($response);