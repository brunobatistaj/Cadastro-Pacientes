<?php
$filePath = 'patients.json';
$fileDecode = [];

$patientData = $_POST;
$existPatient = false;

if(file_exists($filePath)){
    $fileContent = file_get_contents($filePath);
    $fileDecode = json_decode($fileContent, true);
}

foreach ($fileDecode as $patient) {
    if($patientData["email"] == $patient["email"]){
        $existPatient = true;
    }
}

if($existPatient){
    $response = [
        "error"=> true,
        "message"=> "Paciente já cadastrado",
    ];
}else{
    $paciente = [
        "id"=> uniqid(),
        "name"=> $patientData["name"],
        "phone"=> $patientData["phone"],
        "email"=> $patientData["email"],
        "notes"=> $patientData["notes"]
    ];
    $fileDecode[]=$paciente;

    file_put_contents($filePath, json_encode($fileDecode));

    $response = [
        "message"=> "Paciente cadastrado com sucesso",
        "patient"=> $paciente
        ];
}
echo json_encode($response);
?>
