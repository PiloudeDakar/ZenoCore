<?php

namespace Zeno\Others;

use pocketmine\Player;
use Zeno\Form\SimpleForm;

class Cosmetics extends SimpleForm {

    public static function cosmetics(Player $player){{
            $form = new SimpleForm (
                function (Player $pl , $data) {
                    if ($data == null) {
                        return true;
                    } else {
                        switch ($data) {
                            case "capes" :
                                $this->plugin->getServer()->dispatchCommand($pl, $this->plugin->getConfig()->get("command7"));
                                break;
                            case "Tags >> Soon":
                                break;
                        }
                    }
                });
            $form->setTitle("Cosmetics");
            $form->addButton("Soon",0,"textures/ui/realms_red_x.png");
            $player->sendForm($form);
        }
    }

}