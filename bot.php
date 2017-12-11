<?php
//al posto di exit; usa return;
if ($msg == "https://github.com/Waucgram/MadelineProto") {
  @scrivendo($chatID); //stato sta scrivendo
  sm($chatID, "😐😐😐", 1); //con 1 il bot risponderà al messaggio
}
