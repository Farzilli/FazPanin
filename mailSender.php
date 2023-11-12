<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mailData = [
        "nome" => $_POST["nome"],
        "email" => $_POST["email"],
        "npersone" => $_POST["npersone"],
        "position" => $_POST["position"],
        "data" => $_POST["data"],
        "ora" => $_POST["ora"],
    ];

    $subject = "Prenotazione Faz";
    $txt = "Grazie per aver prenotato un tavolo a nome $mailData[nome] per $mailData[npersone] persone, alle $mailData[ora] del $mailData[data]";

    echo mail($mailData["email"], $subject, $txt) ? "grazie per aver prenotato da faz, riceverai a breve una mail di conferma, in caso di problemi o domande non avere paura di contattarci!" : "errore nel invio della mail";

    echo <<<JS
            <script>
                setTimeout(() => {
                    window.location = "index.html";
                }, 5000);
            </script>
        JS;
}
