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
    $txt = <<<HTML
    <html>
    <body style="background-color: #2a2d39; font-family: 'Nunito', sans-serif; display: flex; flex-direction: column; align-items: center; justify-content: center;">
        <table style="width: 95%; margin: auto;">
            <tr>
                <td style="text-align: center;">
                <img src="https://francescoarzilli3g.altervista.org/FazPanini/icon.png" alt="" style="width: 150px; height: 150px; margin-top: 10px; cursor: pointer;">
                <p style="width: 200px; background-color: #f78361; padding: 10px; margin-top: 10px; border-radius: 10px; color: white; margin: auto;">
                    Grazie per aver prenotato un tavolo a nome $mailData[nome] per $mailData[npersone] persone, alle $mailData[ora] del $mailData[data]
                </p>
                <img src="https://api.qrserver.com/v1/create-qr-code/?size=700x700&data=name: $mailData[nome], email: $mailData[email], nperson: $mailData[npersone], position: $mailData[position], date: $mailData[data], hour: $mailData[ora]" alt="" style="width: 200px; height: 200px; margin-top: 10px; border: 2px solid #f78361; padding: 10px; background-color: white; border-radius: 10px;">
                </td>
            </tr>
        </table>
    </body>
    </html>
    HTML;

    $mailHead = implode("\r\n", [
        "MIME-Version: 1.0",
        "Content-type: text/html; charset=utf-8"
    ]);

    echo mail($mailData["email"], $subject, $txt, $mailHead) ? "grazie per aver prenotato da faz, riceverai a breve una mail di conferma, in caso di problemi o domande non avere paura di contattarci!" : "errore nel invio della mail";

    echo <<<JS
            <script>
                setTimeout(() => {
                    window.location = "index.html";
                }, 5000);
            </script>
        JS;
}
