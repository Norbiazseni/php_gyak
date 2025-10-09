<?php

    namespace App\Services;

    use App\Models\BusinessCard;
    use PDO;

    class CardManager
    {
       private PDO $pdo;

       public function __construct(PDO $pdo){
              $this->pdo = $pdo;
       }

       public function addCard(BusinessCard $card): void
       {
            $stmt = $this-> pdo->prepare("INSERT INTO business_cards (name, email, phone, company) VALUES (?,?,?,?)");
            $stmt -> execute([$card->name, $card->getEmail(), $card->getPhone(), $card->company]);

            echo "Névjegy sikeresen hozzáadva!";
       }

       public function listCards(): void
       {
            $stmt = $this->pdo->query("SELECT * FROM business_cards");
            $cards = $stmt->fetchAll(PDO::FETCH_ASSOC);

            echo "--- Névjegyek listája (".count($cards).") ---\n";

            foreach ($cards as $cardData)
            {
                $card = new BusinessCard($cardData['id'], $cardData['name'], $cardData['email'], $cardData['phone'], $cardData['company']);
                echo "ID: {$cardData['id']}". $card->displayCard(). "\n";
            }

            echo "-------------------------\n";
       }

       public function editCard(int $id, array $data): void
       {
          if (empty($data))
          {
               echo "Figyelmeztetés: Nincs adat a frissítéshez!";
          }

          $setClause = [];
          $params = [];

          foreach ($data as $key => $value) {
              $setClause[] = "$key = ?";
              $params[] = $value;
          }

          $params[] = $id;

          $sql = "UPDATE business_cards SET " . implode(", ", $setClause) . " WHERE id = ?";

          $stmt = $this->pdo->prepare($sql);

          $succeess = $stmt->execute($params);

          if ($succeess) {
              echo "Névjegy sikeresen frissítve!";
          } else {
              echo "Hiba: Névjegy frissítése sikertelen vagy nincs változás!";
          }

       }
    }
?>